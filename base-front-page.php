<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <?php get_header( hji_theme_template_base() ); ?>

    <body <?php body_class(); ?>>
	<div id="wrapper">
        <!--[if lt IE 8]>
            <div class="alert alert-warning">
                <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'hji-textdomain'); ?>
            </div>
        <![endif]-->

        <?php do_action( 'hji_themework_before_navbar' ); // deprecated ?>
        <?php do_action( 'hji_theme_before_navbar' ); ?>
        
        <?php get_template_part( 'templates/header-navbar' ); ?>
        
        <?php do_action( 'hji_themework_after_navbar' ); // deprecated ?>
        <?php do_action( 'hji_theme_after_navbar' ); ?>

        <div class="hjitw-slideshow blvd-slideshow"></div>
        
        <section class="container">

            <div class="row">

                <div id="content">
                
                	<div class="quick_search"><?php dynamic_sidebar( 'hjitw-quicksearch'); ?></div>
                	
                	<div class="tagline"><?php dynamic_sidebar( 'hjitw-tagline-widgets'); ?></div>					
			   </div>
			   
            </div>
        
        </section>

        <section id="primary" class="intro_content">
        
        <div class="container">

            <div class="row">

                <div id="content" class="<?php echo hji_theme_main_class(); ?>" role="main">

                    <?php do_action( 'hji_theme_before_content_col'); ?>

                    <?php include hji_theme_template_path(); ?>

                    <?php get_template_part( 'templates/cta-boxes' ); ?>

                    <?php do_action( 'hji_theme_after_content_col'); ?>

                </div>
                
            </div> <!-- /container -->
            
            </div> <!--/row  -->      
        
        </section>
        
          <section class="fancy_content">
        
        <div class="container">

            <div class="row">

                <div id="content" class="<?php echo hji_theme_main_class(); ?>">

               <?php dynamic_sidebar( 'hjitw-fancy-widget'); ?>

                </div>
                
            </div> <!-- /container -->
            
            </div> <!--/row  -->      
        
        </section>

        <?php echo hji_theme_agent_block(); ?>

        <section class="container feature_content">

            <?php if ( is_active_sidebar( 'hjitw-homewidgets' ) ) : ?>

                <div class="hjitw-home-widgets blvd-home-widgets row">
                    <?php dynamic_sidebar( 'hjitw-homewidgets'); ?>
                </div>

            <?php endif; ?>

            <?php if ( is_active_sidebar( 'hjitw-hometabs' ) ) : ?>

                <div id="tabs" class="hjitw-tabwrap blvd-tabwrap">
                    <ul class="nav nav-tabs"></ul>

                    <div class="hjitw-tabs-container blvd-tabs-container tab-content">
                        <?php dynamic_sidebar('hjitw-hometabs'); ?>
                    </div>
                    
                </div>

            <?php endif; ?>

            <div class="hjitw-homebottom blvd-homebottom row">

                <div class="col-md-6 hjitw-column-left blvd-column-left">
                    <?php dynamic_sidebar('hjitw-homebottom-l'); ?>
                </div>

                <div class="col-md-6 hjitw-column-right blvd-column-right">
                    <?php dynamic_sidebar('hjitw-homebottom-r'); ?>
                </div>

            </div>

        </section>
        
 <section class="hood_content">
 
 	<div class="container">

            <div class="row">

                <div id="content" class="<?php echo hji_theme_main_class(); ?>">

                    <?php do_action( 'hji_theme_before_content_col'); ?>

                    <?php include hji_theme_template_path(); ?>
                    
                      <h3 class="valley-title"><?php echo hji_getVariable( 'valley_title' ); ?></h3>

                    <?php echo hji_theme_sager_cta(); // call to action boxes ?>

                    <?php do_action( 'hji_theme_after_content_col'); ?>

                </div>
                
                <?php ( hji_theme_display_sidebar() ? get_sidebar( hji_theme_template_base() ) : '' ) ?>

            </div>
            
 	</div>
        
</section> 


        <?php get_footer( hji_theme_template_base() ); ?>
	</div>
    </body>

</html>