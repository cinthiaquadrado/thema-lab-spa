<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/normalize.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/footer.css' ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container-lab">
        <?php
        the_custom_logo();
        ?>
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'menu-navegacao',
                    'menu_id' => 'menu-principal'
                )
            );
            ?>
        </nav>
    </div>
</header>