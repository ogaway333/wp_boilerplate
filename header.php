<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset=" <?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- wordpress管理画面などから設定した情報が反映される -->
        <?php wp_head(); ?>
	</head>

	<body>