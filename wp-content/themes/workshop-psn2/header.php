<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
    const siteURL = "<?php echo get_site_url() ?>";
</script>
<?php wp_body_open(); ?>

<header id="header">

    <div class="logo-Fake-News-Academy">
        <a href="index.php"><img id="logo"
                         width="500"
                         height="150"
                         src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>"
                         alt="Fake News Academy"></a>
    </div>

    <nav class="navbar">

        <ul>
            <li>
                <a href="#">
                    <span class="text-hidden">Conseils</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="text-hidden">Articles</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="text-hidden">Décodeur</span>
                </a>
            </li>

        </ul>

    </nav>

</header>