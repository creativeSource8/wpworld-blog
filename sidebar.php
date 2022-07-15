<div class="col-md-3">

    <!-- Widget: Search -->
    <div class="widget">
        
        <h4 class="title">搜索</h4>
        <div class="search">
            <form class="form-inline" method="get" action="<?php bloginfo('url'); ?>">
                <div class="form-group">
                    <input type="text" value="" name="s" id="s" placeholder="  搜索的关键字" class="form-control form-control-n">
                </div>
                <div class="form-group">
                    <button class="btn btn-n btn-theme" type="submit"><i class="fa fa-fw fa-search"></i></button>
                </div>
            </form>
        </div>

    </div>
    <!-- /Widget: Search -->

    <!-- Widget: Categories -->
    <div class="widget">

        <h4 class="title">总分类</h4>
        <ul class="sidebar-menu">
            
            <li>
            	<?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0'); ?>
			</li>

        </ul>

    </div>
    <!-- /Widget: Categories -->

    <!-- Widget: Latest Posts -->
    <!-- <div class="widget">

        <h4 class="title">最新内容</h4>
        <ul class="sidebar-menu">
            <li>	
            	<li><?php wp_get_archives('type=postbypost&limit=10'); ?></li>
			</li>
        </ul>

    </div> -->
    <!-- /Widget: Latest Posts -->

</div>