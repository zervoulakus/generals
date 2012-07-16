<?php if (isset($_SESSION['nickname'])): ?>
	<p id='nickname'>Nickname <?php echo $_SESSION['nickname']; ?> is now validating... <a href="/validate_submit.php?action=revoke">Revoke Validation</a></p>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' /></script>
	<script src="http://server.socket.local:8081/socket.io/socket.io.js"></script>
	<script type='text/javascript'>
		$(document).ready(function(){
			var socket = io.connect('http://server.socket.local:8081/lobby');
			var client_id;
			socket.on('connect',function(){				
				socket.emit('register_wordpress',{nickname:"<?php echo $_SESSION['nickname']; ?>"}, function(data){										
					if(data.status == 'failed'){
						window.location.href = "/validate_submit.php?action=revoke&errorid=" + data.err_id;
					}else{
						//$("p[id=nickname]").html("<?php echo $_SESSION['nickname']; ?> - <a href='/validate_submit.php?action=logout'>Disconnect</a>");						
						$("p[id=nickname]").html("<?php echo $_SESSION['nickname']; ?> - <a href='#'>Disconnect</a>");						
						$(".lobby-container").css({display:"block"});
						$("#chat-box").append("<li class='system-alert'>"+data.return_msg+"</li>");
					}
				});
				
				socket.on('update nickname list',function(data){										
					var obj = JSON.parse(data);
					console.log(data);
					$("#nickname-box").html("");
					for(var i in obj){			
						switch(obj[i].game_status){
							case 1:
								$("#nickname-box").append("<li id='"+i+"'>"+i+"</li>");
								break;
							case 2:
								if(i == "<?php echo $_SESSION['nickname']; ?>"){
									$("#nickname-box").append("<li id='"+i+"'>"+i+"<a class='cancel-game' id='cancel-game' href='#'>Cancel</a></li>");
								}else{
									$("#nickname-box").append("<li id='"+i+"'>"+i+"<a class='join-game' id='join-game' href='#'>Join</a></li>");
								}
								break;
							default:
								break;
						}
						
					}
				});
				
				socket.on('lobby message recieve',function(data){
					$("#chat-box").append("<li class='chat-alert'>"+data+"</li>");
					var vardiv = document.getElementById("chat-container");
					vardiv.scrollTop = vardiv.scrollHeight;
				});
				socket.on('disconnect nickname',function(){
					window.location.href = '/validate_submit.php?action=logout';
				});
				socket.on('initialize game',function(){
					start_game_queue_count_down();
				});
				/*
				socket.on('update game list',function(data){
					var obj = JSON.parse(data);
					
					switch(obj.game_status){
						case "game created":							
							$("#nickname-box li[id="+obj.nickname+"]").html(obj.nickname + "<a class='join-game' href='#'>Join</a>");							
							break;
						default:
							break;
					}
				});
				*/
			});	
			
			//=========================================== jquery's here
			
			$("#submit-comment").click(function(){
				message_commit($("#input-comment").val());
			});
			$("#input-comment").keypress(function(event){
				if(event.which == 13){
					message_commit($(this).val());
				}
			});	
			$("#create-game").click(function(){
				socket.emit('create game',function(data){
					var obj = JSON.parse(data);					
					$("#chat-box").append("<li class='system-alert'>"+obj.msg+"</li>");
					var vardiv = document.getElementById("chat-container");
					vardiv.scrollTop = vardiv.scrollHeight;	
				});
			});
			$("a[id=cancel-game]").live("click",function(){
				socket.emit('cancel game',function(data){
					var obj = JSON.parse(data);					
					$("#chat-box").append("<li class='system-alert'>"+obj.msg+"</li>");
					var vardiv = document.getElementById("chat-container");
					vardiv.scrollTop = vardiv.scrollHeight;	
				});
				return false;
			});
			$("a[id=join-game]").live("click",function(){				
				var gameid = $(this).parent('li').attr('id');
				socket.emit('join game',gameid,function(data){
					console.log(data);
				});
				return false;
			});
			$("p[id=nickname]").find('a').live('click',function(){
				console.log('disconnect');
				socket.emit('disconnect nickname',function(){});
				return false;
			});
			
			//========================================== functions
			var timer,counter = 0;
			function start_game_queue_count_down(){
				clearTimeout(timer)				
				if(counter == 5){					
					//window.location.href = '/game-room/';
				}else{
					$('#chat-box').append(
						"<li class='system-alert'>Game will start in " + (5-counter) + "</li>"
					);	
					counter +=1;
					timer = setTimeout(start_game_queue_count_down,1000);
				}
			}
			function message_commit(msg){
				socket.emit('message commit',msg,function(data){
					if(data.status == 'success'){
						$("#input-comment").val("");
					}
				});
			}
		});
	</script>
	<div class='lobby-container'>
		<table>
			<tr>
				<td style="vertical-align:top;">
					<!-- chat here -->
					<div id="chat-container" class="chat-container">
						<ul id="chat-box" class="chat-box">
						
						</ul>
					</div>
				</td>				
				<td>
					<!-- userlist here -->
					<div id="nickname-container" class="nickname-container">
						<ul id="nickname-box" class="nickname-box"></ul>
						
					</div>
				</td>
			</tr>
			<tr>
				<td style="vertical-align:top;">
					<input type='text' id='input-comment' class='input-comment' />
				</td>
				<td>					
					<input type='button' id='create-game' class='create-game' value='Create Game' />
					<input type='button' id='submit-comment' class='submit-comment' value='Send'/>
				</td>
			</tr>
		</table>
	</div>
<?php else: ?>
	<?php
		if(isset($_GET['err_id'])){
			switch($_GET['err_id']){
				case 1:
					echo "<p class='failed'>Nickname already in use</p>";	
					break;
				default:
					break;
			}
		}
	?>
	<div class='form_entry'>
		<form method="POST" action="/validate_submit.php?action=reguser">
		<input type='text' name='nickname' id='nickname' />
		<input type='submit' id='check_nickname' value='Validate Nickname' />
		</form>
	</div>
	
<?php endif; ?>
	
<style>
	.failed{
		background:#DF8CA1;
		padding:10px;
		border:1px solid red;
		font-size:12px;
		font-weight:bold;
		color:red;
	}
	.form_entry{
		width:100% auto;		
		min-height:50px;
	}
	.lobby-container{
		display:none;
		margin-bottom:20px;
		
	}
	.chat-container{
		height:200px;
		width:600px;
		background:#c2c2c2;
		
		padding: 10px; 
		overflow-y: scroll;
		overflow-x: hidden;
		
		margin-bottom:10px;		
	}
	.input-comment{		
		width:612px;
		padding:5px;
		height:30px;
	}
	.submit-comment, .create-game{
		
		position:relative;
		float:right;
		padding:5px;
		width:110px;
		height:40px;
		margin:0px;
		font-size:1em;
	}
	.nickname-container{
		height:200px;
		width:200px;
		background:#c2c2c2;
		
		padding: 10px; 
		overflow-y: scroll;
		overflow-x: hidden;
		
		margin-bottom:10px;
		margin-left:10px;
		
	}
	.system-alert{
		color:red !important;
		padding:0;
		margin:0;		
	}
	ul.chat-box, ul.nickname-box{
		margin:0;		
	}
	.chat-box li{
		list-style-type:none;
		padding:0;
		margin:0;		
		color:#333;
		line-height:120%;
	}
	.nickname-box li{
		list-style-type:none;
		padding:3px;
		margin:2px;		
		color:#333;
		line-height:120%;
		background:#f4f4f4;
	}
	.nickname-box li:hover{
		background:#0f0f0f;
		color:#fff;
	}
	.chat-alert{
		color:#333;
	}
	.join-game, .cancel-game{
		position:relative;
		float:right;		
	}
</style>