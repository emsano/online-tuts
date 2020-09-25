<?php
function buwoo_demo_import_func() {
  return array(
    // demo 1
    array(
      'import_file_name'           => 'Fashion',
      'categories'                 => array( 'Fashion' ),
      'import_file_url'            => get_template_directory_uri().'/buwoo-demo/buwoo-content.xml',
      'import_widget_file_url'     => get_template_directory_uri().'/buwoo-demo/buwoo-widgets.wie',
      'import_customizer_file_url' => get_template_directory_uri().'/buwoo-demo/buwoo-customizer.dat',
      'import_redux'               => array(
        array(
          'file_url'    => get_template_directory_uri().'/buwoo-demo/buwoo-options.json',
          'option_name' => 'boutique',
        ),
      ),
      'import_preview_image_url'   => get_template_directory_uri().'/buwoo-demo/screenshot.jpg',
      'import_notice'              => __( 'Free version of Buwoo is coming with one demo, if you want access to all the demos click here to buy. <a href="https://krocant.com/" target="_blank" style="background: red;color: #ffffff;text-decoration: none;padding: 10px 20px;line-height: 40px;margin-left: 5px;border-radius: 4px;">Buy Now!</a> <br> <div class="d-sc"><img src="'.get_template_directory_uri().'/assets/images/screenshot-demo.png" alt="Demo Screenshots"></div>', 'boutique' ),
      'preview_url'                => 'https://buwoo.krocant.com/demo1/',
    ),
    
  );
}
add_filter( 'pt-ocdi/import_files', 'buwoo_demo_import_func' );


function buwoo_after_import_setup() {
  // Assign menus to their locations.
  $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

  set_theme_mod( 'nav_menu_locations', array(
      'mega_menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
    )
  );

  // Assign front page and posts page (blog page).
  $front_page_id = get_page_by_title( 'Home' );
  $blog_page_id  = get_page_by_title( 'Blog' );

  update_option( 'show_on_front', 'page' );
  update_option( 'page_on_front', $front_page_id->ID );
  update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'buwoo_after_import_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );