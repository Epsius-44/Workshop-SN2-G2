<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header">

    <div class="logo-Fake-News-Academy">
        <a href="<?php echo get_site_url() ?>"><img id="logo"
                         width="500"
                         height="150"
                         src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>"
                         alt="Fake News Academy"></a>
    </div>
    <?php wp_nav_menu([
        'theme_location' => 'navbar',
        'container' => 'nav',
        'container_class' => 'navbar'
    ]); ?>
</header>