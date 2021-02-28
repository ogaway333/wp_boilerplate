<?php
/*
Template Name: INFO 〜インフォメーション〜
*/
?>
<!DOCTYPE html>
<html lang="ja">
<!-- ヘッダー -->
<?php get_header(); ?>

		<!-- メニュー -->
		<?php get_template_part('content', 'menu'); ?>

		<div id="main">

			<!-- blog_list -->
			<section id="map">
				<h1 class="title"><?php echo get_the_title(); ?></h1>
				<div id="content">
					<?php echo get_post_meta($post->ID, 'map', true); ?>
			</section>
			<section id="shop_info" class="site-width">
				<?php if(have_posts()) : //wordpressループ
				while(have_posts()): the_post(); //繰り返し処理開始 ?>
					<div id="post-<?php the_ID();?>" <?php post_class(); ?>>
						<?php the_content(); ?>
					</div>
					<?php endwhile; //繰り返し処理終了
					else: //ここから記事が見つからなかった場合 ?>
						<div id="post">
							<h2>記事はありません</h2>
							<p>お探しの記事は見つかりませんでした。</p>
						</div>
				<?php endif; //wordpress　ループ終了 ?>
			</section>


		</div>
<!-- フッター -->
<?php get_footer(); ?>
