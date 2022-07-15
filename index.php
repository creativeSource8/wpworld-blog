<?php get_header(); ?>

<!-- Header -->
<header id="home" class="header">

<!-- Navigation -->
<nav id="navigation" class="navbar affix">

	<div class="container">

		<div class="row">
			<div class="col-md-12">
			
				<?php get_template_part('title'); ?>

				<?php get_template_part('menu'); ?>

			</div>
		</div>

	</div>
</nav>
<!-- /Navigation -->

</header>
<!-- /Header -->
<!-- Slider -->
<div class="slider owl-carousel owl-theme">

	<!-- Slide -->
	<div class="item mask" style="background: url(<?php bloginfo('template_directory'); ?>/images/home.jpg) no-repeat center top / cover;" data-stellar-background-ratio="0.4">

		<div class="container height-100p">
			<div class="row height-100p">

				<div class="col-sm-6 col-md-6 height-100p bounceInLeft wow" data-wow-duration="1.3s" data-wow-delay="0.3s" data-stellar-ratio="0.7">
					<div class="vertical-middle">
						<h1 class="text-white">Laravel<span class="text-theme">入门和开发CMS</span></h1>
						<div class="text-white h4">
							
						</div>
						<a href="https://creative.chat" target="_blank" class="smooth-scroll btn btn-theme">了解更多</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-md-offset-2 height-100p bounceInRight wow" data-wow-duration="1.3s" data-stellar-ratio="0.8">
					<div class="vertical-middle">
						<img src="http://creative.chat/images/image2.png" class="img-responsive" alt="<?php bloginfo('name'); ?>">
					</div>
				</div>

			</div>
		</div>

	</div>
	<!-- /Slide -->

	<!-- Slide -->
	<div class="item mask" style="background: url(<?php bloginfo('template_directory'); ?>/images/home-02.jpg) no-repeat center top / cover;" data-stellar-background-ratio="0.4">

		<div class="container height-100p">
			<div class="row height-100p">

				<div class="col-sm-6 col-md-6 height-100p bounceInLeft wow" data-wow-duration="1.3s" data-wow-delay="0.3s" data-stellar-ratio="0.7">
					<div class="vertical-middle">
						<h1 class="text-white">Laravel<span class="text-theme">入门和开发CMS</span></h1>
						<div class="text-white h4">
							
						</div>
						<a href="https://creative.chat" target="_blank" class="smooth-scroll btn btn-theme">了解更多</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-md-offset-2 height-100p bounceInRight wow" data-wow-duration="1.3s" data-stellar-ratio="0.8">
					<div class="vertical-middle">
						<img src="http://creative.chat/images/image2.png" class="img-responsive" alt="<?php bloginfo('name'); ?>">
					</div>
				</div>

			</div>
		</div>

	</div>
	<!-- /Slide -->

</div>
<!-- /Slider -->

<!-- Main -->
<main class="main-container">

<!-- Section: Projects -->
<section id="projects" class="section-small bg-light-gray">
	<div class="container">

		<!-- Section Header -->
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<header>
					<h2 class="section-title title-center"><span class="text-theme">最新</span> 发布</h2>
					<p class="section-subtitle"></p>
				</header>
			</div>

			<div class="col-md-6 col-sm-12">
				<!-- Widget: Search -->
                <div class="widget search-index">
                    
                    <div class="search">
                        <form class="form-inline" method="get" action="<?php bloginfo('url'); ?>/">
                            <div class="form-group">
                                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s search-index1" placeholder="  搜索的关键字" class="form-control form-control-n">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-n btn-theme" type="submit"><i class="fa fa-fw fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /Widget: Search -->
			</div>

		</div>
		<!-- /Section Header -->

		<!-- Section Content -->
		<div class="row mt post-box-index">

			<?php
			$cats = new WP_Query('post_type=post&cat=&posts_per_page=12');
			if ($cats->have_posts()) :
			    while ($cats->have_posts()) : $cats->the_post();?>
			
			<div class="col-md-4 col-sm-6 fadeIn wow box-foreach1" data-wow-duration="1.3s">
				<a href="<?php the_permalink(); ?>" class="project-item">
					<div class="gallery-image">
						<?php the_post_thumbnail('product-thumbnails'); ?>
					</div>
					<div class="info info-index">
						<div class="h4 title"><?php the_title(); ?></div>
						<p class="description"><?php the_time('Y年n月j日, G:i:s'); ?></p>
						<!-- <div class="social">
							<p class="description">阅读：10</p>
						</div> -->
						<div class="social">
                            <i class="fa fa-fw fa-eye"></i> 浏览：<?php get_post_views($post -> ID); ?>
                        </div>
					</div>
				</a>
			</div>

			<?php endwhile; ?>
			
			<?php 
			else :
				echo '<p>No content found</p>';
			endif; ?>

		</div>

		<div class="col-md-12">
			<center>
			<a href="<?php echo get_option('home'); ?>/分类/" class="smooth-scroll btn btn-theme right-n">查看更多</a>
			</center>
		</div>
		<!-- /Section content -->

	</div>
</section>
<!-- /Section: Projects -->

</main>
<!-- /Main -->

<?php get_footer(); ?>