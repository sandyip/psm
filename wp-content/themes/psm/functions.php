<?php 
function psm_styles(){
	wp_register_style('custom_css' , get_template_directory_uri() . '/style.css');
	wp_enqueue_style('custom_css');

	wp_register_style('bootstrapcdn' ,  'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	wp_enqueue_style('bootstrapcdn');

	wp_register_style('style' , get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('style');


	wp_register_style('OwlCarousel' , 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	wp_enqueue_style('OwlCarousel');

	wp_register_style('cloudflare' , 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css');
	wp_enqueue_style('cloudflare');

	wp_register_style('fontawesome' , 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
	wp_enqueue_style('fontawesome');
}
add_action("wp_enqueue_scripts", "psm_styles");

function psm_scripts(){
	wp_register_script('jsjquery', 'https://code.jquery.com/jquery-3.4.1.min.js',array(),1,1,1);
	wp_enqueue_script('jsjquery');

	wp_register_script('jspopper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),1,1,1);
	wp_enqueue_script('jspopper');

	wp_register_script('jsbootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),1,1,1);
	wp_enqueue_script('jsbootstrap');

	wp_register_script('jsOwlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js',array(),1,1,1);
	wp_enqueue_script('jsOwlCarousel2');

	wp_register_script('jsmain', get_template_directory_uri(). '/assets/js/main.js',array(),1,1,1);
	wp_enqueue_script('jsmain');

}
add_action("wp_enqueue_scripts", "psm_scripts");

//theme suport=================================================================
function add_setup_theme(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','add_setup_theme');



// projects CPT ==============================================================
/*
* Creating a function to create our CPT
*/
 
function project_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'psm' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'psm' ),
        'menu_name'           => __( 'Projects', 'psm' ),
        'parent_item_colon'   => __( 'Parent Project', 'psm' ),
        'all_items'           => __( 'All Projects', 'psm' ),
        'view_item'           => __( 'View Project', 'psm' ),
        'add_new_item'        => __( 'Add New Project', 'psm' ),
        'add_new'             => __( 'Add New', 'psm' ),
        'edit_item'           => __( 'Edit Project', 'psm' ),
        'update_item'         => __( 'Update Project', 'psm' ),
        'search_items'        => __( 'Search Project', 'psm' ),
        'not_found'           => __( 'Not Found', 'psm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'psm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'projects', 'psm' ),
        'description'         => __( 'Project news and reviews', 'psm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'thumbnail', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'projects', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'project_post_type', 0 );

//Brands CPT=====================================================================

/*
* Creating a function to create our CPT
*/
 
function brand_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Brands', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Brand', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Brands', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Brand', 'twentytwenty' ),
        'all_items'           => __( 'All Brands', 'twentytwenty' ),
        'view_item'           => __( 'View Brand', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Brand', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Brand', 'twentytwenty' ),
        'update_item'         => __( 'Update Brand', 'twentytwenty' ),
        'search_items'        => __( 'Search Brand', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'brands', 'twentytwenty' ),
        'description'         => __( 'Brand news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title',  'thumbnail'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'brands', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'brand_post_type', 0 );

function psm_customize_register($wp_customize){
    //Footer Logo

    // $wp_customize-> add_section('psm_images_section', [
    //     'title' => __('Footer Section', 'psm'),
    //     'priority' => 50,
    //     'panel' =>  'psm'
    // ]);

    // //image
    // $wp_customize -> add_setting('psm_img_handle',[
    //     'transport' => 'refresh',
    //     'height' => 320
    // ]);
    // $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'psm_img_handle_input', array(
    //     'label' => __('Logo Image', 'psm'),
    //     'section' => 'psm_images_section',
    //     'settings' => 'psm_img_handle',
        
    // )));



    $wp_customize-> add_section('psm_footer_section', [
        'title' => __('Footer Section', 'psm'),
        'priority' => 30,
    ]);

    //image
    $wp_customize -> add_setting('psm_img_handle',[
        'transport' => 'refresh',
        'height' => 320
    ]);
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'psm_img_handle_input', array(
        'label' => __('Logo Image', 'psm'),
        'section' => 'psm_footer_section',
        'settings' => 'psm_img_handle',
        
    )));

    
    //contact details
    $wp_customize -> add_setting('psm_contact_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'psm_contact_handle_input', array(
        'label' => __('Contact Number', 'psm'),
        'section' => 'psm_footer_section',
        'settings' => 'psm_contact_handle',
        'description' => __('please enter your contact details'),
        
    )));


    //Email Address
     $wp_customize -> add_setting('psm_email_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'psm_email_handle_input', array(
        'label' => __('Email Address', 'psm'),
        'section' => 'psm_footer_section',
        'settings' => 'psm_email_handle',
        'type'    => 'email',
        'description' => __('please enter your email details'),
        
    )));

    //website link
     $wp_customize -> add_setting('psm_web_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'psm_web_handle_input', array(
        'label' => __('Website Address', 'psm'),
        'section' => 'psm_footer_section',
        'settings' => 'psm_web_handle',
        'description' => __('please enter your web details'),
        
    )));

    //Address
    $wp_customize -> add_setting('psm_address_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'psm_address_handle_input', array(
        'label' => __('Address', 'psm'),
        'section' => 'psm_footer_section',
        'settings' => 'psm_address_handle',
        'type'     => 'textarea',
        'description' => __('please enter your address details'),
        
    )));

    //copyright
    $wp_customize -> add_setting('psm_copyright_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'psm_copyright_handle_input', array(
        'label' => __('Copyright', 'psm'),
        'section' => 'psm_footer_section',
        'settings' => 'psm_copyright_handle',
        'type'     => 'text',
        'description' => __('please enter your copyright'),
        
    )));

}
add_action('customize_register', 'psm_customize_register');

function register_menu(){
    register_nav_menus(
        array(
            'primary-menu' => 'Main Menu',
            'footer-menu'  => 'Footer Menu'
        )
    );
}
add_action("init","register_menu");

// function _namespace_menu_item_class( $classes, $item ) {       
//     $classes[] = "nav-item dropdown"; 
//     $classes[] = "nav-item";
//     $classes[] = "dropdown-item";
//     return $classes;
// } 
// add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );

// function _namespace_modify_menuclass($ulclass) {
//     return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
//     return preg_replace('/<a /', '<a class="nav-link dropdown-toggle""', $ulclass);
//     return preg_replace('/<a /', '<a class="dropdown-item"', $ulclass);
//     return preg_replace('/<a /', '<ul class="dropdown-menu"', $ulclass);
// }

// add_filter('wp_nav_menu', '_namespace_modify_menuclass');