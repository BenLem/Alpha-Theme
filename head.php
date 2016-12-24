<head>
    <title><?php echo page_title('Page non trouvée'); ?> - <?php echo site_name(); ?></title>
    <meta name="description" content="<?php echo site_description(); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2D3039">
    
    <link rel="stylesheet" href="<?php echo theme_url('/css/style.min.css'); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,400i" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(current_url()); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">

    <?php if(customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>

        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>
</head>