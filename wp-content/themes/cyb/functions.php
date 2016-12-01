<?php
    
    function blankslate_load_scripts() {
        wp_enqueue_script( 'jquery' );
    }
        
    add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
    
    function blankslate_enqueue_comment_reply_script() {
        if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
    }
    
    add_filter( 'the_title', 'blankslate_title' );
    
    function blankslate_title( $title ) {
        if ( $title == '' ) {
            return '&rarr;';
        } else {
            return $title;
        }
    }
    
    add_filter( 'wp_title', 'blankslate_filter_wp_title' );
    
    function blankslate_filter_wp_title( $title ) {
        return $title . esc_attr( get_bloginfo( 'name' ) );
    }
    
    add_action( 'widgets_init', 'blankslate_widgets_init' );
    
    function blankslate_widgets_init() {
        register_sidebar( array (
            'name' => __( 'Sidebar Widget Area', 'blankslate' ),
            'id' => 'primary-widget-area',
            'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
            'after_widget' => "</li>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
    }
    
    function blankslate_custom_pings( $comment ) {
        $GLOBALS['comment'] = $comment;
        ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
        <?php 
    }
    
    add_filter( 'get_comments_number', 'blankslate_comments_number' );
    
    function blankslate_comments_number( $count ) {
        if ( !is_admin() ) {
            global $id;
            $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
            return count( $comments_by_type['comment'] );
        } else {
            return $count;
        }
    }
    
    
    add_theme_support( 'post-thumbnails' ); 
    
    // Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">  (read more)</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');