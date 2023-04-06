<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
	
	
    <div class="wrapper">
		
        <?php get_sidebar(); ?>
        <?php get_header('other'); ?>

        <main class="main">



        </main>
        <!-- /.main -->

        <?php get_footer('other'); ?>


        <div class="footer__bottom">
            © <?php echo date('Y') . ' ' . get_bloginfo('name');?>
        </div>

    </div>
    <!-- /.wrapper -->

    <?php wp_footer(); ?>
    <!-- /.foot -->

</body>

</html>