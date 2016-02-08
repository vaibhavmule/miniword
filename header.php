<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>miniword : yet another minimal theme for free</title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="favicon.ico" /> 
    <?php wp_head(); ?>
</head>

<body>
    <header>
    	<a href="<?php echo site_url(); ?>">
    		<h1><?php bloginfo('name'); ?></h1>
    	</a>
        <aside><?php bloginfo('description'); ?></aside>
    </header>
    <hr>