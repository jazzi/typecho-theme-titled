<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="article" itemscope itemtype="http://schema.org/BlogPosting">
    <h1 class="post-title" itemprop="name headline">
        <a itemtype="url" href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
    </h1>
    <div class="post-content" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
</article>

<?php // $this->need('disqus.php'); ?>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
