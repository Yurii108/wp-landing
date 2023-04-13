<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP-Lending</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__content">
            <div class="header__image img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="photo-bg">
            </div>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#" class="nav__link">What We Do</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Our Work</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">SEO Insights</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">About Us</a></li>
                </ul>
            </nav>
            <a href="#" class="header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"
                    class="header__logo-image">
            </a>
            <h1 class="header__title">Workforce Survey</h1>
            <h2 class="header__subtitle">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</h2>
            <div class="header__subtract">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/subtract.png" alt="subtract">
            </div>
            <button class="header__button">Start Now</button>
        </div>
    </header>