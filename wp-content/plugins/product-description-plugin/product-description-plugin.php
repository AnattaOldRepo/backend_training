<?php
/**
 * Plugin name: Anatta Product Description Plugin
 * Description: This Plugin can be used for Product Description
 * Author: Laxmi Barepete
 *
 */

class ProductDescriptionPlugin{

    function __construct() {
        add_action('init', array( $this, 'custom_post_type'));
    }

    function activate(){
        $this->custom_post_type();
        flush_rewrite_rules();
    }

    function deactivate(){
        flush_rewrite_rules();
    }

    function custom_post_type(){
        register_post_type('product_description', ['public'=> true, 'label'=> 'Product DescriptionS'] );
    }

}

if( class_exists( 'ProductDescriptionPlugin' ) ){
    $productDescriptionPlugin = new ProductDescriptionPlugin();
}

register_activation_hook(__FILE__, array( $productDescriptionPlugin, 'activate' ) );
register_deactivation_hook( __FILE__, array( $productDescriptionPlugin, 'deactivate' ) );
?>