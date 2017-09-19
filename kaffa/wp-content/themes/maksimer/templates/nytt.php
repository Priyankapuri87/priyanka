<?php
/*
 * Template name: nytt template
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


	<section class="main-content-wrap full-width">

		<div id="post-id-<?php the_id(); ?>" <?php post_class( 'clearfix' ); ?>>


		<!--right side-->
<div class="container-fluid">
			<?php the_content(); ?>
			<div class="wrapper">
				<h3 class="h3">Aktuelt</h3>
				<!-- first row start-->
				<div class="row ">
				<div class="col-sm-3 nytt">
				<div class="thumbnail blue">
					<a href="#" target="_blank">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/mig.jpg">
					<div class="caption">
					<h5>Migueol Moreno</h5>
					<h6 class="category">Honduras/Espresso</h6>
					</div><!--captionend1-->
					</a>
				</div><!--thumbnailend1-->
				</div><!--col end-->
					<div class="col-sm-3 nytt">
						<div class="thumbnail green">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/miguel.jpg">
								<div class="caption">
									<h5>Helzar de Zarcero</h5>
									<h6 class="category">Costa Rica/Espresso</h6>
								</div><!--captionend2-->
							</a>
						</div>
					</div><!--thumbnailend2-->
					<div class="col-sm-3 nytt">
						<div class="thumbnail blue">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/santa.jpg">
								<div class="caption">
									<h5>Migueol Moreno</h5>
									<h6 class="category">Honduras/Espresso</h6>

								</div><!--captionend3-->
							</a>
						</div>
					</div><!--thumbnailend3-->
				</div><!--row end 1-->
				                                       <!--2nd row start-->

				<div class="row"><!--2nd row-->
					<div class="col-sm-3 nytt">
						<div class="thumbnail yellow">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/mig.jpg">
								<div class="caption">
									<h5>Santa Ines</h5>
									<h6 class="category">Brasil/Brygg</h6>
								</div>
								<!-- </div><!--captionend4-->
							</a>
						</div><!--thumbnailend4-->
					</div>
						<div class="col-sm-3 nytt">
							<div class="thumbnail yellow">
								<a href="#" target="_blank">
									<img src="<?php echo get_template_directory_uri()?>/assets/images/miguel.jpg">
									<div class="caption">
										<h5>Santa Ines</h5>
										<h6 class="category">Brasil/Brygg</h6>
									</div>

									<!-- </div><!--captionend4-->
								</a>
							</div><!--thumbnailend4-->
						</div>

							<div class="col-sm-3 nytt">
								<div class="thumbnail yellow">
									<a href="#" target="_blank">
										<img src="<?php echo get_template_directory_uri()?>/assets/images/santa.jpg">
										<div class="caption">
											<h5>Santa Ines</h5>
											<h6 class="category">Brasil/Brygg</h6>
										</div>

										<!-- </div><!--captionend4-->
									</a>
								</div><!--thumbnailend4-->
							</div>
							</div><!--2nd row end-->
				<!--3rd row start-->
							<div class="row">

								<div class="col-sm-3 nytt">
									<div class="thumbnail yellow">
										<a href="#" target="_blank">
											<img src="<?php echo get_template_directory_uri()?>/assets/images/mig.jpg">
											<div class="caption">
												<h5>Santa Ines</h5>
												<h6 class="category">Brasil/Brygg</h6>
											</div>
											<!-- </div><!--captionend4-->
										</a>
									</div><!--thumbnailend4-->
								</div><!--row end-->
								<div class="col-sm-3 nytt">
									<div class="thumbnail yellow">
										<a href="#" target="_blank">
											<img src="<?php echo get_template_directory_uri()?>/assets/images/miguel.jpg">
											<div class="caption">
												<h5>Santa Ines</h5>
												<h6 class="category">Brasil/Brygg</h6>
											</div>
											<!-- </div><!--captionend4-->
										</a>
									</div><!--thumbnailend4-->
								</div>
								<div class="col-sm-3 nytt">
									<div class="thumbnail yellow">
										<a href="#" target="_blank">
											<img src="<?php echo get_template_directory_uri()?>/assets/images/santa.jpg">
											<div class="caption">
												<h5>Santa Ines</h5>
												<h6 class="category">Brasil/Brygg</h6>
											</div>
											<!-- </div><!--captionend4-->
										</a>
									</div><!--thumbnailend4-->
								</div>
							</div>

				<!--4th row-->
				<div class="row">

					<div class="col-sm-3 nytt">
						<div class="thumbnail yellow">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/mig.jpg">
								<div class="caption">
									<h5>Santa Ines</h5>
									<h6 class="category">Brasil/Brygg</h6>
								</div>
								<!-- </div><!--captionend4-->
							</a>
						</div><!--thumbnailend4-->
					</div><!--row end-->
					<div class="col-sm-3 nytt">
						<div class="thumbnail yellow">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/miguel.jpg">
								<div class="caption">
									<h5>Santa Ines</h5>
									<h6 class="category">Brasil/Brygg</h6>
								</div>
								<!-- </div><!--captionend4-->
							</a>
						</div><!--thumbnailend4-->
					</div>
					<div class="col-sm-3 nytt">
						<div class="thumbnail yellow">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/santa.jpg">
								<div class="caption">
									<h5>Santa Ines</h5>
									<h6 class="category">Brasil/Brygg</h6>
								</div>
								<!-- </div><!--captionend4-->
							</a>
						</div><!--thumbnailend4-->
					</div>
				</div>
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="kategory">
                            <a href="#"> <span>kategory</span>  </a>
                        </li>
                        <li class="kategory">
                            <a href="#"> <span> kategory</span> </a>
                        </li>
                    </ul>
                </div>
                <!-- /#sidebar-wrapper -->


			</div><!--wrapper end-->

		</div><!--container end right-->
		</div><!--main-->
		</article>

	</section> <?php // .main-content-wrap ?>

<?php get_footer(); ?>