<ul class="bar bar-center">
<?php while (have_posts()) : the_post(); ?>
<li>
<h2><?php the_title() ?> </h2>
</li>
<?php endwhile ?>
</ul>


<?php while (have_posts()) : the_post(); ?>

<h2><?php the_title() ?> </h2>

<div><?php the_excerpt() ?></div>

<a class="a" href="<?php the_permalink?>"> Read More </a>

<?php endwhile ?>