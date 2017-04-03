<?php
/*
Template Name: Front
*/
get_header(); ?>


<div class=projects-container>
  <header class="scroll-anchor">
    <ul>
      <li class="head-top">
        <div class="title-top">
          <img class="logo" src="wp-content/themes/themeportfolio/assets/images/logo.png" alt="Logo" />
          <h1><?php bloginfo( 'name' ); ?></h1>
          <h4><?php bloginfo( 'description' ); ?></h4>
          <a href="#" class="button contact">Contact</a>
          <a href="#loop-start" class="button">Mes travaux</a>
        </div> <!-- .layer-->
            <video autoplay loop class muted="fillWidth">
              <source src="wp-content/themes/themeportfolio/assets/images/boat.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
      </li> <!-- head-top -->
    </ul>
  </header> <!-- scroll-achor -->
	<div id="loop-start" class="scroll-anchor">
		<?php do_action("MyPostAction") ?>
	</div>
</div> <!-- .projects-container -->


<?php get_footer();
