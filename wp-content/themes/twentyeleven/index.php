<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
		<style>
			.content-container p{text-align:justify;}
		</style>
		<div id="primary">
			<div id="content" role="main">
				<div class='content-container'>
					<dl>
						<dt>Game of the Generals</dt>
						<dd><p>The Game of the Generals, also called GG as it is most fondly called, or simply The Generals, is an educational wargame invented in the Philippines by Sofronio H. Pasola, Jr. in 1970. It can be played within twenty to thirty minutes. It is designed for two players, each controlling an army, and a neutral arbiter or an adjutant. It needs the use of logic. The game simulates armies at war trying to outflank and outmaneuver each other. As in actual warfare, the game allows only one side's plan to succeed. Certain strategies and tactics, however, allow both sides the chance of securing a better idea of the other's plan as the game progresses. Players can also speak with others during matches, hoping to make a false impression on where the flag is.<p></dd>
						<dt>History</dt>
						<dd><p>This game was invented by Sofronio H. Pasola, Jr. with the inspiration of Ronnie Pasola (his son). The Pasolas first tried the Game of the Generals on a chessboard. Even then, the pieces had no particular arrangement. There were no spies in the experimental game; but after Ronnie Pasola remembered the James Bond movies and Mata Hari, he added the spies. [1] Making the pieces hidden was the idea of the Pasolas after remembering card games. The Game of the Generals' public introduction was on February 28, 1973. [2]
						</p></dd>
						<dt>The Pieces</dt>
						<dd>
							<p>
							The player's set of pieces or soldiers with the corresponding ranks and functions consist of the following 21 pieces. A higher ranking piece will eliminate any lower ranking piece, with the exception of the spy, which eliminates all pieces except the private. The pieces are bent at an angle in order to hide the piece's rank or insignia from the opponent.
							In plastic sets, the colours commonly used in the pieces are black and white. There are also sets composed of wooden boards and steel pieces. Those pieces have insignias that are either coloured red or blue. In metal sets, the color of the board is commonly brown and the pieces are aluminum colored. The pieces are still bent.
							Apart from the flag (the Philippine flag) and the spy (a pair of prying eyes), the insignias used in the game are those used in the Philippine Army.
							</p>
							<table class = "pieces-desc">
								<thead>
									<tr>
										<td></td><td>Pieces</td><td></td><td>Function</td>
									<tr>
								</thead>
								<tbody>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/gen5.png" /></td><td>Five Star General</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/gen4.png" /></td><td>Four Star General</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/gen3.png" /></td><td>Three Star General</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/gen2.png" /></td><td>Two Star General</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/gen1.png" /></td><td>One Star General</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/colonel.png" /></td><td>Colonel</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/lieutenant colonel.png" /></td><td>Lt. Colonel</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/major.png" /></td><td>Major</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/captain.png" /></td><td>Captain</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/first lieutenant.png" /></td><td>First Lieutenant</td><td>1</td><td>Eliminates any lower ranking officer, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/second lieutenant.png" /></td><td>Second Lieutenant</td><td>1</td><td>Eliminates the sergeant, the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/sergeant.png" /></td><td>Sergeant</td><td>1</td><td>Eliminates the private, and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/private.png" /></td><td>Private</td><td>6</td><td>Eliminates spy and the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/spy.png" /></td><td>Spy</td><td>2</td><td>Eliminates all officers from the rank of Sergeant up to 5-Star General & the flag.</td></tr>
									<tr><td><img src="<?php bloginfo('template_directory'); ?>/images/pieces/flag.png" /></td><td>Flag</td><td>1</td><td>Eliminates the opposing flag as long as it takes the aggressive action against the enemy flag.</td></tr>
								</tbody>
							</table>
							<p>NOTE:If both soldiers are of equal rank, both are eliminated.</p>
						</dd>
						<dt>Challenging</dt>
						<dd>
							<p>
								A challenge is signaled by placing one's piece on top of the opposing piece occupying one of the squares. The arbiter then examines the ranks of the opposing pieces and removes the lower-ranked piece off the board and returns it to the owner regardless of who initiated the challenge. The arbiter must take care not to reveal the ranks of the pieces to the opposition. The game can also be played without an arbiter. In this case, when a challenge is made, both players must state the ranks of their pieces before removing the lower-ranked piece. Therefore, the presence of the arbiter, though not compulsory, is especially important to ensure secrecy until the game is over. It should be noted, however, that official games are conducted with an arbiter.
							<p>
						</dd>
						<dt>Determining Who Wins the Challenge</dt>
						<dd>
							<p>
								Regardless of who initiated the challenge, their ranks determine which one is to be removed.
				Any one of the player's pieces can capture the opposing flag. This includes the player's own flag.
				Any piece eliminates the private except the spy and the flag.
				Officers eliminate other officers that are ranked below it (e.g. a four-star general eliminates a lieutenant-colonel).
				A spy eliminates all officers (including the five-star general). Only the private can eliminate the spy.
				If both pieces are of the same rank, both are removed from the board.
				If a flag reaches the opposite end of the board, the opponent has one turn left although it is not announced. After the turn, the player reveals the flag. If the flag was not challenged, the player wins the game. If it was challenged, the player loses.
							</p>
						</dd>
					<dl>	
					
				</div>
							
			<?php if(false):  ?>
			<?php if ( have_posts() ) : ?>
				is in here	
				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">< ?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>