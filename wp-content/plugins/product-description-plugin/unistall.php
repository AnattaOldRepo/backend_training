<?php
/**
 * Trigger this file on plugin unistall
 */

//if ( !defined('WP_UNINSTALL_PLUGIN' ) ) {
//    die;
//}

//Clear DataBase Stored date

//$books = get_posts( array( 'post_type'=>'product_description', 'numberposts'=>-1 ) );
//
//foreach ( $books as $book ){
//    wp_delete_post( $book->ID, true );
//}

global $wpdb;

$wpdb->query("DELETE FROM  wp_posts WHERE post_type = 'product_description' " );
$wpdb->query("DELETE FROM  wp_postmeta WHERE post_id NOT IN (SELECT ID FROM  wp_posts)" );
$wpdb->query("DELETE FROM  wp_term_relationships WHERE object_id NOT IN (SELECT ID FROM  wp_posts)" );
