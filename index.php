<?php bloginfo('name'); ?>
<br>
<?php bloginfo('description'); ?>

<h5>here som post:</h5>
<?php
while (have_posts()) {
    the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
    <br>
<?php }
?>