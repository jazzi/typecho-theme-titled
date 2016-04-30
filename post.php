<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="article" itemscope itemtype="http://schema.org/BlogPosting">
    <h1 class="post-title" itemprop="name headline">
        <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
    </h1>
    <p class="post-meta metas">
        <time datetime="<?php $this->date('Y-m-d'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>
    </p>
    <div class="post-content" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
</article>

<?php // $this->need('comments.php'); ?>
<ul class="pagination">
    <li class="prev"><?php $this->thePrev('&laquo;  %s',''); ?></li>
    <li class="next"><?php $this->theNext('%s &raquo;',''); ?></li>
</ul>

<?php // $this->need('disqus.php'); ?>

<?php $this->need('comments.php'); ?>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
