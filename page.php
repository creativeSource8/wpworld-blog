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
                <h1 class="title title-blog-n"><?php the_title(); ?></h1>
                <?php bloginfo('name'); ?>  <?php the_time('Y年n月j日, G:i:s'); ?> 发布
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-8">
                <ul class="breadcrumb">
                    <?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
                    <i class="fa fa-fw fa-eye"></i> 浏览：<?php get_post_views($post -> ID); ?>    
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

            <!-- Post Content -->
            <div class="content-top-10">
            	             
	            <?php 
				if(have_posts()):
				    while(have_posts()): the_post(); 

				        the_content();

				    endwhile;
				else:
				    // something can say this is nothing
				endif;
				?>

            </div>
            <!-- /Post Content -->

        </div>

    </div>
</main>
<!-- /Main -->

<?php get_footer(); ?>