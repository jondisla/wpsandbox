<?php

get_header();?>

<nav></nav>

<?php

while (have_posts()){
    the_post();?>
    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
    <p><?php the_excerpt(); ?></p>
<?php }

get_footer();
?>