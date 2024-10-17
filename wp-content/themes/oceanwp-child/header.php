
<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>
 
	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">


			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<!-- <header>
       <nav>
        <div class="Main-container"> 
          <div class="item1"> <a href="http://planty.local/"> <img class="Logo" src="<?php bloginfo('stylesheet_directory')?>/images/Logo.png" alt="Image Title"/> </a></div>
          <div class="item2 font-family "> <a class="hover" href="http://planty.local/nous-rencontrer/">Nous rencontrer</a></div>
          <div class="item3 font-family "> <a class="hover" href="http://planty.local/admin/">admin</a></div>
          <div class="item4 button-commander font-family  "> <a class="hover button-commander" href="http://planty.local/commander/">Commander</a></div>
        </div>
       </nav>
    </header> -->

	<header>
    <nav>
        <div class="container-header">
            <div class="container-logo">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/Logo.png" alt="Image Title" />
                </a>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-planty', // Nom de l'emplacement du menu
                'container' => false,            // Pas de conteneur supplémentaire
                'menu_class' => 'menu-nav',          // Classe principale du menu
                'items_wrap' => '<ul class="menu-nav">%3$s</ul>',// Envelopper les éléments du menu
                'link_before' => '<span class="">', // Avant chaque lien
                'link_after' => '</span>', // Après chaque lien
            ));
            ?>
        </div>
    </nav>
</header>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>
