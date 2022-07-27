##The below code gets the posts and outputs the title and the excerpt.
- It is a while loop
- the_post() function is the iteration such as `$i = 0;`
- `the_excerpt()` and `the_title()` is echoing out the content
- Can also use `the_content()`

```
<?php

while (have_posts()){
    the_post();?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
<?php }

?>
```

## Permalink (clickable posts title linked content)
```
<h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
```
## single.php
- It is a necessary theme file
- Allows for single posts to be shown without a hyperlinked title
- Allows for templating of single post page
- If `single.php` does not exist, `index.php` is used as a fallback

```
<h2><?php the_title();?></h2>
```
- Anchor tag removed
