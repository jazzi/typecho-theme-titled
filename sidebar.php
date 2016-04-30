
<?php $this->need('about.php'); ?>
<section class="blog">
<div class="body">
    <section class="widget posts">
		<h3 class="widget-title"><?php _e('文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}" title="{title}">{title}</a></li>'); ?>
        </ul>
    </section>

    <div class="categories">
    <section class="widget ">
		<h3 class="widget-title"><?php _e(‘产品’); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</section>
    
    //注释掉下面的搜索代码
    /* <h3>搜索</h3>
    <form method="get" action="https://www.google.com/cse" class="search">  
        <div> 
            <p>
                <input type="hidden" name="cx" value="003109753558623109791:ls-iai7p8h0" /> 
                <input type="hidden" name="ie" value="UTF-8" /> 
                <input type="text" placeholder="请输入关键词" name="q" class="text" size="20" /> 
            </p>
            <p>
                <input type="submit" class="submit" value="搜索" /> 
            </p>
        </div> 
    </form> */
    </div> 

    <section class="widget pages">
		<h3 class="widget-title"><?php _e('项目'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Page_List')
                ->parse('<li><a href="{permalink}" title="{title}">{title}</a></li>'); ?>
        </ul>
    </section>
</div>
</section>
