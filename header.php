<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php wp_head();?>
</head>
<body>


<header>
    <h2><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo('name')?></a></h2>
    <h3><?php echo get_bloginfo( 'description' ); ?></h3>
    <nav class="menu">
        <a href="<?php echo home_url()?>">HOME</a>
        <a href="/forum">FORUM</a>
        <a href="/qna">QnA</a>
    </nav>
</header>
<section class="content">