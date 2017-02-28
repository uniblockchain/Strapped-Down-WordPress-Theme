<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?><?php bloginfo('description'); ?></title>

        <!-- favicon and branding icons -->
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
        <body <?php body_class(); ?>>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-fw fa-2x" aria-hidden="true"></i>
                      </button>
                      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <?php wp_nav_menu(array(
                                'menu'              => 'top_nav',
                                'theme_location'    => 'top_nav',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'text-uppercase',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker()
                                )
                        ); ?>
                    </div>
                </div>
            </nav>
            