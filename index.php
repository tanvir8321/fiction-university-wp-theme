<?php get_header(); ?>
<?php bloginfo('name'); ?>
<br>
<?php bloginfo('description'); ?>

<h5>here some post:</h5>
<?php
$i = 1;
if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <?php echo $i; ?>
            .<?php the_title(); ?>

        </a>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <?php $i++; ?>
    <?php endwhile; endif; ?>

    <?php get_footer(); ?>