<?php
/**
 * Plugin Name: Idea Pro Plugin
 * Description: Try to create some plugin for learning purpose
 *  Author: Laxmi Barpete
 */
    function idea_pro_function(){
        $infomation = 'This is my First Plugin';
        return $infomation;
    }

    add_shortcode('example1', 'idea_pro_function');

    function custom_admin_menu_option(){
        add_menu_page('Header & Footer Site Scripts', 'Site Scripts', 'manage_options', 'ideapro-admin-menu', 'add_script_pages', '', 200);
    }

    function add_script_pages(){
        if( array_key_exists('update_scripts', $_POST) ){
            update_option('idea_pro_header_script', $_POST['header_script']);
            update_option('idea_pro_footer_script', $_POST['footer_script']);
            ?>
            <div id="setting-error-settings-updated" class="updated_settings_error notice is-dismissible"> <strong>Setting have been saved</strong></div>
            <?php
        }
        $header_script = get_option('idea_pro_header_script', none);
        $footer_script = get_option('idea_pro_footer_script', none);
        ?>

        <div class="warp">
            <h1>Update Scripts</h1>
            <form method="post" action="">
                <label>Header Script</label>
                <textarea name="header_script" class="large-text"><?php print $header_script ?></textarea>
                <label>Footer Script</label>
                <textarea name="footer_script" class="large-text"><?php print $footer_script ?></textarea>
                <input type="submit" name="update_scripts" class="button button-primary"/>
            </form>

        </div>
        <?php
    }
    add_action('admin_menu', 'custom_admin_menu_option');
?>