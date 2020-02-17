<?php /** Header @package poulton */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>poulton Master Theme</title>

<link rel="stylesheet" href="https://use.typekit.net/pmw6aty.css"><!--TYPEKIT INJECT-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

<header>
    <nav id="nav">
        <div class="container cols-12-12 pt1 pb1 border border__bottom border__dotted border__thin align-vert-c">
            <div class="col">
                <div class="menu-trigger">
                    <div class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    Menu
                </div>
            </div>
            <div class="col">
                <?php get_template_part('inc/img/logo', 'logo');?>
            </div>
        </div>
    </nav>
    <div class="on-page-nav">
        <div class="container">
            <div class="col">
                <div class="menu">
                    <button type="button" name="button" id="prevSection">PREVIOUS!</button>
                    <ul id="myMenu">
                        <?php if( have_rows('introducing') ):
                            while ( have_rows('introducing') ) : the_row();
                        ?>
                    	   <li><a href="#introducing">Introducing the PT1</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('size_&_mass') ):
                            while ( have_rows('size_&_mass') ) : the_row();
                        ?>
                    	   <li><a href="#size">Size &amp; Mass</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('rugged') ):
                            while ( have_rows('rugged') ) : the_row();
                        ?>
                    	   <li><a href="#rugged">Rugged</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('fireproof') ):
                            while ( have_rows('fireproof') ) : the_row();
                        ?>
                            <li><a href="#fireproof">Fire Proof</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('metal_metal') ):
                            while ( have_rows('metal_metal') ) : the_row();
                        ?>
                            <li><a href="#metal">Metal to Metal Seal</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('welding') ):
                            while ( have_rows('welding') ) : the_row();
                        ?>
                            <li><a href="#welding">No Welding Required</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('pressure') ):
                            while ( have_rows('pressure') ) : the_row();
                        ?>
                            <li><a href="#welding">Pressure Test</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('integrity') ):
                            while ( have_rows('integrity') ) : the_row();
                        ?>
                            <li><a href="#integrity">Pipe Integrity</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('cost') ):
                            while ( have_rows('cost') ) : the_row();
                        ?>
                            <li><a href="#cost">Cost &amp; Value</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('type') ):
                            while ( have_rows('type') ) : the_row();
                        ?>
                            <li><a href="#type">Type Approval</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('patented') ):
                            while ( have_rows('patented') ) : the_row();
                        ?>
                            <li><a href="#patented">Patented</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('installation') ):
                            while ( have_rows('installation') ) : the_row();
                        ?>
                            <li><a href="#installation">Installation</a></li>
                        <?php endwhile; endif;?>

                        <?php if( have_rows('safer') ):
                            while ( have_rows('safer') ) : the_row();
                        ?>
                    	   <li><a href="#safer">Better</a></li>
                        <?php endwhile; endif;?>
                    </ul>
                    <button type="button" name="button" id="nextSection">NEXT!</button>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="offscreen-nav">
    <?php
    wp_nav_menu(array(
        'theme_location'  => 'main-menu',
        'container_class' => 'mainMenu'
    ));
    ?>
</div>


		<main><!--closes in footer.php-->
