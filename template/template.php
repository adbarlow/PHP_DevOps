<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
    <style type="text/css">
        .wrap { max-width: 720px; margin: 50px auto; padding: 30px 40px; text-align: center; box-shadow: 0 4px 25px -4px #9da5ab; background-color: yellowgreen; }
        article { text-align: left; padding: 40px; line-height: 150%; color: azure; font-family: "MS-Font-Segoe", "Helvetica Neue", Helvetica, Arial, sans-serif;}
    </style>
</head>
<body style="background-color:antiquewhite;">
<div class="wrap" >

    <header style="color:azure; font-family: "MS-Font-Segoe", "Helvetica Neue", Helvetica, Arial, sans-serif;">
        <h1><?php siteName(); ?></h1>
        <nav class="menu">
            <?php navMenu(); ?>
        </nav>
    </header>

    <article>
        <h3><?php pageTitle(); ?></h3>
        <?php pageContent(); ?>
    </article>

   <!-- <footer><small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?>.<br><?php siteVersion(); ?></small></footer> -->

</div>
</body>
</html>
