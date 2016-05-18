<?php
/**
 * 無標題文檔的修改版 Theme for Typecho
 * 
 * @package 有標題文檔
 * @author 茶行特力
 * @version 2016.05.18
 * @link http://chaxing-teli.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<?php while($this->next()): ?>
    <article class="article" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <p class="post-meta metas">
            <time datetime="<?php $this->date('Y-m-d'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>
        </p>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content('- 阅读剩余部分 -'); ?>
        </div>
    </article>
<?php endwhile; ?>

<ul class="pagination">
<?php $this->pageNav('&laquo; Previous', 'Next &raquo;'); ?>
</ul>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
