<?php if(have_posts()) : //wordpressループ ?>
<?php while(have_posts()): the_post(); //繰り返し処理開始 ?>
    <article class="article-item">
        <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h3 style="font-size:80%;">　<?php the_author_meta('nickname'); ?> <?php the_time("Y月m月j日"); ?>　<?php single_cat_title("カテゴリー： "); ?></h3>
        <p class="article-body">
        <?php the_content(); ?>
        </p>
    </article>
<?php endwhile; //繰り返し処理終了?>
<?php endif; //wordpress　ループ終了 ?>