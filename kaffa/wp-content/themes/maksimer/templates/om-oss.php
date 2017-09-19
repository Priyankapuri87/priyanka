<?php
/*
 * Template name: om-oss template
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

	<section class="main-content-wrap full-width">

		<article id="post-id-<?php the_id(); ?>" <?php post_class( 'clearfix' ); ?>>

			<?php the_content(); ?>
			<div class="container-fluid">
				<?php the_content(); ?>
				<div class="wrapper">
					<div class="row ">
						<h3 class="changecolour">En overskrift på blogginnlegg</h3>
						<div class="col-md-8 pull-right">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/omoss.jpg">
						</div>
						<div class="row">
							<div class="col-md-8 pull-right content">
						<p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse erat eros, auctor nec finibus efficitur, molestie a ligula. Mauris a magna eu felis imperdiet rhoncus. Pellentesque dui mauris, efficitur non tristique at, tempus ornare lectus. Donec ligula lectus, maximus nec dictum vel, finibus id arcu. In nec ullamcorper tortor. Quisque efficitur nunc non magna ullamcorper, vitae tempus nisi malesuada. Suspendisse commodo volutpat libero eget luctus. Sed eu massa quis velit tempus ultricies eu et neque. Donec quam mi, tristique sed augue eu, commodo tincidunt nisl. Phasellus sed hendrerit nisl, sed faucibus sapien. Aenean sed ex lacus. Nulla in nunc eu mi ultricies ullamcorper id nec libero. Vivamus at enim ornare, semper neque sed, scelerisque sapien. Proin tincidunt euismod arcu, vitae aliquet velit tristique sit amet.
                        </p>
                                <p>
                            Vivamus dictum diam pellentesque metus egestas, sagittis tempus erat dignissim. Suspendisse ut pretium tortor. Nam enim odio, sagittis vel accumsan nec, malesuada et dui. Phasellus risus mauris, cursus sit amet pharetra ut, auctor quis ex. Pellentesque mollis eros id nulla fringilla faucibus. Aliquam id porta ante. Vestibulum pulvinar eros nec suscipit pretium. Curabitur imperdiet, arcu eu hendrerit consectetur, risus nibh fringilla tellus, in tempus massa ligula consectetur justo. Curabitur fermentum lacus quis est ultrices ornare.
                                </p>
                                <p>
                            Aliquam vel ex nulla. Sed vel fermentum leo, sed cursus orci. Maecenas porttitor tortor at rutrum vulputate. Morbi aliquet erat sed sem laoreet rhoncus. Aliquam pharetra pharetra risus at tempor. Morbi euismod dolor vel efficitur sollicitudin. Aenean dignissim sem non ornare tempus. In id urna et ligula maximus consectetur ut ut neque. Cras sit amet interdum felis, id ornare neque.
                                </p>
                                <p>
                            Sed euismod justo vitae lacinia porta. Cras vehicula sapien pellentesque nisl condimentum rhoncus. Quisque malesuada risus neque, eget bibendum ex ornare sed. Aenean sed felis velit. Maecenas in fringilla nisi. In a placerat dui. Sed et est ipsum. Morbi molestie cursus nibh, vel consectetur ipsum rutrum sit amet. Quisque accumsan dui in arcu varius malesuada.
						</p>
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

				</div>
			</div>
		</article>

	</section> <?php // .main-content-wrap ?>

