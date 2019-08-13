<?php
/* CARREGAMENTO DE SCRIPTS E STYLE
----------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'carrega_css_scripts' );
function carrega_css_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), '', '1.0', 'all' ); 

    // wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'', true );
    // wp_enqueue_script( 'bootstrap' );

    // wp_register_script( 'googleapi', 'https://maps.googleapis.com/maps/api/js?key=KEYCODE', '','3.0', true );
    // wp_enqueue_script( 'googleapi' );

    // wp_register_script( 'googlefonts', 'https://fonts.googleapis.com/css?family=Overpass:300,400,600,700,800', '','', false );
    // wp_enqueue_script( 'googlefonts' );

    // wp_register_script( 'matchheight', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'),'', true );
    // wp_enqueue_script( 'matchheight' );

    // wp_register_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.js', array('jquery'),'', true );
    // wp_enqueue_script( 'maskedinput' );

    wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'),'', true );
    wp_enqueue_script( 'scripts' ); 
    
}

/* LOGO DO LOGIN PERSONALIZADO
----------------------------------------------- */
function page_login_logo(){
    echo "<style>body.login #login h1 a { background: url('".get_stylesheet_directory_uri()."/img/default/logo.png') 0 0;  width:135px; height:75px; display: block; padding: 0; margin:0;} #login h1 { margin:0 auto; display:table;}</style>\n";
}
add_action("login_head", "page_login_logo");

/* LOGO DO PAINEL PERSONALIZADO
----------------------------------------------- */
add_action('admin_head', 'my_custom_logo');
function my_custom_logo() {
echo '<style>
#wp-admin-bar-wp-logo .ab-icon {background: url('.get_bloginfo('template_directory').'img/favicon.png) no-repeat center top !important; }</style>';
}

/* LINK DO LOGO DO LOGIN PARA PÁGINA INICIAL
----------------------------------------------- */
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/* TITULOS DO LOGO NO LINK
----------------------------------------------- */
function my_login_logo_url_title() {
    return 'Título do site';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* SAUDAÇÃO PERSONALIZADA
----------------------------------------------- */
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Olá', 'Bem vindo', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );

/* AVISO DE ERROS NA TELA DE LOGIN
----------------------------------------------- */
function failed_login() {
 return 'Informações de login incorretas.';
}
add_filter('login_errors', 'failed_login');

/* REMOVE VERSÃO
----------------------------------------------- */
remove_action('wp_head','wp_generator');

/* REMOVE BARRA DO ADMIN
----------------------------------------------- */
add_filter( 'show_admin_bar', '__return_false' );

/* REMOVE ITENS DESNECESSARIOS
----------------------------------------------- */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
     //Right Now - Comments, Posts, Pages at a glance
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    //Recent Comments
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    //Incoming Links
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    //Plugins - Popular, New and Recently updated WordPress Plugins
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    //Wordpress Development Blog Feed
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    //Other WordPress News Feed
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    //Quick Press Form
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    //Recent Drafts List
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
}

/* REMOVE ITENS DO HEAD
----------------------------------------------- */
remove_action('wp_head', 'rel_canonical'); //remove links canonicos
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Removes the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Removes links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link'); // Removes the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link'); // Removes the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link'); // Removes the index link
remove_action( 'wp_head', 'parent_post_rel_link'); // Removes the prev link
remove_action( 'wp_head', 'start_post_rel_link'); // Removes the start link
remove_action( 'wp_head', 'adjacent_posts_rel_link'); // Removes the relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator'); // Removes the WordPress version i.e. 

/* REMOVE WP EMOJI
--------------------------------------------------- */
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );    
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/* REMOVE TINYMCE EMOJI
--------------------------------------------------- */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/* REMOVE SCRIPTS E CSS CONTACT FORM NÃO UTILIZADOS
--------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );
function ac_remove_cf7_scripts() {
    if ( !is_page('contato')) {
        wp_deregister_style( 'contact-form-7' );
        wp_deregister_script( 'contact-form-7' );
    }
}

/* Remove comment-reply.min.js from footer
----------------------------------------------- */
function comments_clean_header_hook(){
 wp_deregister_script( 'comment-reply' );
 }
add_action('init','comments_clean_header_hook');

/* REMOVE QUERY STRING
----------------------------------------------- */
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) ) {
        $src = esc_url( remove_query_arg( 'ver', $src ) );
    }
    return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);

function _remove_script_version( $src ){ 
    $parts = explode( 'ver=', $src ); 
    return $parts[0];
} 
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 ); 
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

/* REMOVE DADOS TRANSITÓRIOS
----------------------------------------------- */
function delete_all_transients() {
    global $wpdb;
    $sql = 'DELETE FROM ' . $wpdb->options . ' WHERE option_name LIKE "_transient_%"';
    $wpdb->query($sql);
}
add_action( 'init', 'delete_all_transients' );

/* MENUS
----------------------------------------------- */

// Register Custom Navigation Walker
require_once get_template_directory() . 'inc/class-wp-bootstrap-navwalker.php';

add_action( 'after_setup_theme', 'tema_setup' );

function tema_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    if ( function_exists( 'register_nav_menus' ) ) {
        register_nav_menus(
            array(
                'menu-principal' => 'Menu Principal',
            )
        );
    }
    /* THUMBS
    ----------------------------------------------- */
    add_image_size( 'img-painel', 1920, 940, true ); // painel
    add_image_size( 'img-institucional', 1280, 800, true ); // institucional
}

/* ADICIONA QUALQUER ATRIBUTO AO LINK DO MENU
----------------------------------------------- */
function add_menu_atts( $atts, $item, $args ) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );

/* SUPORTE SVG
----------------------------------------------- */
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/* LIMITAÇÃO DO RESUMO DOS POSTS
----------------------------------------------- */
/* function tamanho_resumo($length) {
    return 15; // Altere este número pelo número de palavras do resumo
}
add_filter('excerpt_length', 'tamanho_resumo');*/

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

/* EXIBIR CAMPO RESUMO EM PÁGINAS
----------------------------------------------- */
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

/* UTILIZA IMG DESTAQUE COMO BG
----------------------------------------------- */
function thumbnail_bg($tamanho = 'thumbnail') {
    global $post;
    $get_post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $tamanho, false, '');
    echo 'style="background-image: url(' . $get_post_thumbnail[0] . ' )"';
}

/* WIDGETS
----------------------------------------------- */

/* ATIVA SHORTCODES EM WIDGETS
----------------------------------------------- 
add_filter('widget_text', 'do_shortcode');*/

register_sidebar( array(
    'id'          => 'endereco',
    'name'        => __( 'Endereço' ),
    'before_widget' => '',
    'after_widget'  => '',
));

/* GOOGLE MAPS ACF
----------------------------------------------- */
function my_acf_init() {   
    acf_update_setting('google_api_key', 'KEYCODE');
}
add_action('acf/init', 'my_acf_init');
?>

<?php 
/* GOOGLE ANALYTICS
----------------------------------------------- 
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXXXXX-X', 'auto');
    ga('send', 'pageview');
    </script>
<?php } ?>