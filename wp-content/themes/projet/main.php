<!-- Post -->
						
               <div id="main">
	
						<!-- One -->
							<section id="one" class="tiles">
							<?php if (have_posts() ) :
								while (have_posts()) :the_post();
							?>
								<article>
									<span class="image">
										<?php if ( has_post_thumbnail() &&  is_single() ) { ?>
								<a href="<?php the_permalink(); ?>">
				                <?php the_post_thumbnail(); ?>
			                    </a>
								<?php }else{
									the_post_thumbnail('large');
								} ?>
									</span>
									<header class="major">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
									</header>
									<?php if(!is_single()) {?>
                                 <p><?php the_excerpt();?>
								</p>
								<p>
								<?php } else {
									the_content(); } ?>
								</p>
								</article>
								<?php endwhile; endif ?>
							</section>
							
							</div>

						<!-- Post -->