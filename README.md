### The below code gets the posts and outputs the title and the excerpt.
- It is a while loop
- `the_post()` function is the iteration such as `$i = 0;`
- `the_excerpt()` and `the_title()` used for 
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
- It is a necessary theme file for POSTS
- Used for showing POSTS and removing hyperlink from title
- Allows for templating of single post page
- If `single.php` does not exist, `index.php` is used as a fallback

```
<h2><?php the_title();?></h2>
```
- Anchor tag removed
- `the_content()` function also can go in single.php to display the post content

## page.php

- It is a necessary theme file for PAGES (home/about/contact)
- Used for showing PAGES and NOT POSTS

## `header.php` and `footer.php`

- These two files are included in other files with the following functions:

```
get_header();
get_footer();
```

- Inside the header.php we include the opening HTML boilerplate
- A difference is that the stylesheet is loaded by using a function as below:

```
<head>
    <?php wp_head();?>
</head>
```
## functions.php

- Backend file that holds the links to CSS and JS files
- Uses the `wp_head()` and `wp_footer()` inside of hader.php and footer.php
- header.php file has `wp_head()` beacause it loads CSS
- footer.php file has `wp_footer()` right before the closing body tag to load JS

- functions.php Uses the `add_action()` function which takes at least 2 arguments:
1. Tells WP the type of instruction i.e. loading a file such as:
- `wp_enqueue_scripts` which is a HOOK
2. Takes the name of a function (any name works)

- The second argument is the name of a previously declared function

```
<?php 
    function load_my_css() {
    wp_enqueue_style('style_css', get_stylesheet_uri());
}

    add_action('wp_enqueue_scripts', 'load_my_css');
?>
```

- The user made `load_my_css()` function loads as many js or css files as you need
- For CSS we use `wp_enqueue_style()` which takes two arguments
1. Make up a "nickname" for the stylesheet
2. The location that points to the file
-- If we are just using the main css stylesheet we use `get_stylesheet()`

- `add_action()` is what calls the `load_my_css` function
- If I was using a js file then you would enqueue js instead of style



