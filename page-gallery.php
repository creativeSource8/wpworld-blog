<?php
/*
template name:内容分类
*/
?>

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

            <!-- Blog Content -->
            <div class="col-md-9">

                <!-- Project -->
                <div class="row">
                    
                    
                    
                    <div class="projects-list">
                        
                        <?php
                        $current_page = max(1, get_query_var('paged')); //当前第几页

                        //查询参数
                        $args = array_filter(array(
                        // 'orderby' => 'title',
                        // 'order' => 'ASC',
                        'post_type' => 'post',
                        'ignore_sticky_posts' =>  1 ,
                        'posts_per_page' => 18,
                        'paged' => $current_page, //当前页
                        ));

                        //开始查询
                        $query = new WP_Query($args);

                        $total_pages = $query->max_num_pages;  //总共多少页

                        while ($query->have_posts()):
                        $query->the_post();

                        ?>

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

                    </div>

                    <!-- Pagination -->
                    <div class="col-md-12">
                        <center>
                        <ul class="pagination">

                            <li>
                                <!-- 输出分页 -->
                                <?php echo paginate_links( array(
                                    'prev_text'          => __( '上一页', 'YChinaTours' ),
                                    'next_text'          => __( '下一页', 'YChinaTours' ),
                                    'screen_reader_text'  => null,
                                    'total' => $total_pages,  //总页数
                                    'current' => $current_page, //当前页数
                                ) ); ?>
                            </li>

                        </ul>
                        </center>
                    </div>
                    <!-- /Pagination -->


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
