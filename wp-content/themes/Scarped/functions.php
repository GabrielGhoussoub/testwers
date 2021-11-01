<?php  





function enqueue_my_scripts()
{

  foreach (glob(get_template_directory() . '/js/*.js') as $file) {
    wp_enqueue_script($file, get_theme_file_uri('/js/' . basename($file)),NULL, '',true);
    // $slug = basename(get_permalink());
    // echo $slug;
    // if(get_the_ID() == 3) 
    // {
    //   echo "lol";
    //   wp_enqueue_script('privacy-policy-js', get_theme_file_uri('/privacy/privacy-policy.js'), NULL, '', true);
    // }
  }
  foreach (glob(get_template_directory() . '/css/*.css') as $file) {
    wp_enqueue_style($file, get_theme_file_uri('/css/' . basename($file)));
  }

  wp_enqueue_style('main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
