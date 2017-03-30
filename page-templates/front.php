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
          <h1><?php bloginfo( 'name' ); ?></h1>
          <h4><?php bloginfo( 'description' ); ?></h4>
        </div> <!-- .layer-->
            <video autoplay loop class="fillWidth">
              <source src="video/Fish-Tank.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
      </li> <!-- head-top -->
    </ul>
  </header> <!-- scroll-achor -->
	<div class="scroll-anchor">
		<?php do_action("MyPostAction") ?>
	</div>
</div> <!-- .projects-container -->


<?php get_footer();
