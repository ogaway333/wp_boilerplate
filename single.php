<!-- ヘッダー -->
<?php get_header(); ?>

		<!-- メニュー -->
		<?php get_template_part('content', 'menu'); ?>
		<div id="main">

			<!-- blog_list -->
				<section id="blog" class="site-width">
					<h1 class="title">BLOG</h1>
					<div id="content" class="article">
					<?php if(have_posts()) : //wordpressループ ?>
					<?php while(have_posts()): the_post(); //繰り返し処理開始 ?>
						<article class="article-item">
							<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<h3 style="font-size:80%;">　<?php the_author_nickname(); ?> <?php the_time("Y月m月j日"); ?>　<?php single_cat_title("カテゴリー： "); ?></h3>
							<p class="article-body">
								<?php the_content(); ?>
							</p>
						</article>
						<?php endwhile; //繰り返し処理終了 ?>

						<!-- Commentns -->
						<?php comments_template(); ?>
						<?php else: //ここから記事が見つからなかった場合 ?>
							<h2 class="title">記事が見つかりませんでした。</h2>
							<p>検索で見つかるかもしれません。</p><br />
							<?php get_search_form(); ?>

						<?php endif; //wordpress　ループ終了 ?>
					</div>

					
					<!-- サイドバー -->
					<?php get_sidebar(); ?>
						
				</section>
		</div>
<!-- フッター -->
<?php get_footer(); ?>
