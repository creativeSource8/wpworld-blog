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
<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-4">
                <h1 class="title title-blog-n">搜索：<?php the_search_query(); ?></h1>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-8">
                <ul class="breadcrumb">
                    <?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>         
                </ul>
            </div>
            <!-- /Breadcrumbs -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<main class="main-container">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-md-9">

                <!-- Project -->
                <div class="row">

                    <?php
                    if(have_posts()) : ?>

                    <div class="seart-result">
                        <center>
                            <h2>搜索结果：<?php the_search_query(); ?></h2>
                        </center>
                    </div>

                    <?php
                    while(have_posts()) : the_post(); ?>
                            
                        <div class="col-md-4 col-sm-6 fadeIn wow box-foreach1" data-wow-duration="1.3s">
                            <a href="<?php the_permalink(); ?>" class="project-item">
                                <div class="gallery-image">
                                    <?php the_post_thumbnail('product-thumbnails-search'); ?>
                                </div>
                                <div class="info info-chain">
                                    <div class="h4 title"><?php the_title(); ?></div>
                                    <p class="description"><?php the_time('Y年n月j日, G:i:s'); ?></p>
                                    <div class="social">
                                        <i class="fa fa-fw fa-eye"></i> 浏览：<?php get_post_views($post -> ID); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                                 


                    <?php endwhile; ?>

                    <!-- Pagination -->
                    <div class="col-md-12">
                        <center>
                        <ul class="pagination">
                            <li>
                                <?php echo paginate_links(); ?>
                            </li>
                        </ul>
                        </center>
                    </div>
                    <!-- /Pagination -->

                    <?php else : ?>

                        <div class="text-center page-404 box-404">

                            <h1 class="bounceIn wow" data-wow-duration="1.5s">OH, NO !</h1>
                            <h2><strong>没有找到</strong>你想要找的东西 :-(</h2>
                            <h3>请重新搜索<strong>相关的</strong>关键词 !</h3>

                        </div>

                    <?php endif; ?>

                </div>
                <!-- /Project -->

            </div>
            <!-- /Blog Content -->

            <?php get_template_part('sidebar'); ?>

        </div>
    </div>
</main>
<!-- /Main -->

<?php get_footer(); ?>