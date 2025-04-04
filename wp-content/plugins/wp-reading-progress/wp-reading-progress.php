<?php
/*
Plugin Name: WP Reading Progress
Plugin URI: https://github.com/joerivanveen/wp-reading-progress
Description: Light weight customizable reading progress bar. Great UX on longreads! Customize under Settings -> WP Reading Progress
Version: 1.5.3
Author: Joeri van Veen
Author URI: https://wp-developer.eu
License: GPLv3
Text Domain: wp-reading-progress
Domain Path: /languages/
*/
defined('ABSPATH') or die();
// This is plugin nr. 6 by Ruige hond. It identifies as: ruigehond006.
const RUIGEHOND006_VERSION = '1.5.3';
// Register hooks for plugin management, functions are at the bottom of this file.
register_activation_hook(__FILE__, 'ruigehond006_install');
register_deactivation_hook(__FILE__, 'ruigehond006_deactivate');
register_uninstall_hook(__FILE__, 'ruigehond006_uninstall');
// Startup the plugin
add_action('init', 'ruigehond006_run');
add_action('wp', 'ruigehond006_localize');
/**
 * the actual plugin on the frontend
 */
function ruigehond006_run()
{
    if (is_admin()) {
        load_plugin_textdomain('wp-reading-progress', null, dirname(plugin_basename(__FILE__)) . '/languages/');
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        wp_enqueue_script('ruigehond006_admin_javascript', plugin_dir_url(__FILE__) . 'admin.min.js', 'wp-color-picker', RUIGEHOND006_VERSION, true);
        add_action('admin_init', 'ruigehond006_settings');
        add_action('admin_menu', 'ruigehond006_menuitem');
        add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'ruigehond006_settingslink'); // settings link on plugins page
        add_action('add_meta_boxes', 'ruigehond006_meta_box_add'); // in the box the user can activate the bar for a single post
        add_action('save_post', 'ruigehond006_meta_box_save');
    } else {
        wp_enqueue_script('ruigehond006_javascript', plugin_dir_url(__FILE__) . 'wp-reading-progress.min.js', false, RUIGEHOND006_VERSION);
    }
}

function ruigehond006_localize()
{
    if (!is_admin()) {
        $post_identifier = null;
        // check if we're using the progress bar here
        $option = get_option('ruigehond006');
        $post_id = get_the_ID();
        if (is_singular()) {
            if ((isset($option['post_types']) && in_array(get_post_type($post_id), $option['post_types']))
                or 'yes' === get_post_meta($post_id, '_ruigehond006_show', true)) {
                if (isset($option['include_comments'])) {
                    $post_identifier = 'body';
                } else {
                    $post_identifier = '.' . implode('.', get_post_class('', $post_id));
                }
            }
        } elseif (isset($option['archives']) && isset($option['post_types']) && in_array(get_post_type(), $option['post_types'])) {
            $post_identifier = 'body';
        }
        if (null !== $post_identifier) {
            wp_localize_script('ruigehond006_javascript', 'ruigehond006_c', array_merge(
                $option, array(
                    'post_identifier' => $post_identifier,
                    'post_id' => $post_id,
                )
            ));
        }
        if (!isset($option['no_css'])) add_action('wp_head', 'ruigehond006_stylesheet');
    }
}

function ruigehond006_stylesheet()
{
    echo '<style>#ruigehond006_wrap{z-index:10001;position:fixed;display:block;left:0;width:100%;margin:0;overflow:visible}#ruigehond006_inner{position:absolute;height:0;width:inherit;background-color:rgba(255,255,255,.2);-webkit-transition:height .4s;transition:height .4s}html[dir=rtl] #ruigehond006_wrap{text-align:right}#ruigehond006_bar{width:0;height:100%;background-color:transparent}</style>';
}

// meta box exposes setting to display reading progress for an individual post
// https://developer.wordpress.org/reference/functions/add_meta_box/
function ruigehond006_meta_box_add($post_type = null)
{
    if (!get_the_ID()) {
        return;
    }
    $option = get_option('ruigehond006');
    if (isset($option['post_types']) and in_array($post_type, $option['post_types'])) {
        return; // you can't set this if the bar is displayed by default on this post type
    }
    add_meta_box( // WP function.
        'ruigehond006', // Unique ID
        'WP Reading Progress', // Box title
        'ruigehond006_meta_box', // Content callback, must be of type callable
        $post_type, // Post type
        'normal',
        'low',
        array('option' => $option)
    );
}

function ruigehond006_meta_box($post, $obj)
{
    //$option = $obj['args']['option']; // not used at this moment
    wp_nonce_field('ruigehond006_save', 'ruigehond006_nonce');
    echo '<input type="checkbox" id="ruigehond006_checkbox" name="ruigehond006_show"';
    if ('yes' === get_post_meta($post->ID, '_ruigehond006_show', true)) echo ' checked="checked"';
    echo '/> <label for="ruigehond006_checkbox">';
    echo __('display reading progress bar', 'wp-reading-progress');
    echo '</label>';
}

function ruigehond006_meta_box_save($post_id)
{
    if (!isset($_POST['ruigehond006_nonce']) || !wp_verify_nonce($_POST['ruigehond006_nonce'], 'ruigehond006_save'))
        return;
    if (!current_user_can('edit_post', $post_id))
        return;
    if (isset($_POST['ruigehond006_show'])) {
        add_post_meta($post_id, '_ruigehond006_show', 'yes', true);
    } else {
        delete_post_meta($post_id, '_ruigehond006_show');
    }
}

/**
 * manage global settings
 */
function ruigehond006_settings()
{
    /**
     * register a new setting, call this function for each setting
     * Arguments: (Array)
     * - group, the same as in settings_fields, for security / nonce etc.
     * - the name of the options
     * - the function that will validate the options, valid options are automatically saved by WP
     */
    register_setting('ruigehond006', 'ruigehond006', 'ruigehond006_settings_validate');
    // register a new section in the page
    add_settings_section(
        'progress_bar_settings', // section id
        __('Set your options', 'wp-reading-progress'), // title
        function () {
            echo '<p>';
            echo __('This plugin displays a reading progress bar on your selected post types.', 'wp-reading-progress');
            echo ' ';
            echo __('When it does not find a single article, it uses the whole page to calculate reading progress.', 'wp-reading-progress');
            echo '<br/>';
            echo __('For post types which are switched off in the settings, you can activate the bar per post in the post-edit screen.', 'wp-reading-progress');
            echo '<br/>';
            echo __('Please use valid input or the bar might not display.', 'wp-reading-progress');
            echo '</p>';
        }, //callback
        'ruigehond006' // page
    );
    if (false === ($option = get_option('ruigehond006'))) {
        ruigehond006_add_defaults();
        $option = get_option('ruigehond006');
    }
    ruigehond006_add_settings_field(
        'bar_attach',
        'text',
        __('Stick the bar to this element', 'wp-reading-progress'), // title
        $option,
        // #translators: two links are inserted that set the value accordingly, 'top' and 'bottom'
        sprintf(__('Use %s or %s, or any VALID selector of a fixed element where the bar can be appended to, e.g. a sticky menu.', 'wp-reading-progress'),
            '<a>top</a>', '<a>bottom</a>') . ' ' . __('Multiple selectors can be separated by commas, the bar will be attached to the first one visible.', 'wp-reading-progress')
    );
    ruigehond006_add_settings_field(
        'stick_relative',
        'checkbox',
        __('How to stick', 'wp-reading-progress'),
        $option,
        __('If the bar is too wide, try relative positioning by checking this box, or attach it to another element.', 'wp-reading-progress')
    );
    ruigehond006_add_settings_field(
        'bar_color',
        'color',
        __('Color of the progress bar', 'wp-reading-progress'), // title
        $option
    );
//    ruigehond006_add_settings_field(
//        'bar_color_dark_mode',
//        'color',
//        __('Color when in dark mode', 'wp-reading-progress'), // title
//        $option,
//        sprintf(__('Depends on a certain class added to the body or html container, including one of the following strings: %s', 'wp-reading-progress'), '*dark-mode*, *night-mode*')
//    );
    ruigehond006_add_settings_field(
        'bar_height',
        'text-short',
        __('Progress bar thickness', 'wp-reading-progress'), // title
        $option,
        sprintf(__('Thickness based on screen height is recommended, e.g. %s. But you can also use pixels, e.g. %s.', 'wp-reading-progress'), '<a>.5vh</a>', '<a>6px</a>')
    );
    ruigehond006_add_settings_field(
        'aria_label',
        'text',
        __('Aria label', 'wp-reading-progress'), // title
        $option,
        __('Explain the purpose of this reading bar to screenreaders', 'wp-reading-progress')
    );
//    ruigehond006_add_settings_field(
//        'ert_speed',
//        'text-short',
//        __('Reading speed', 'wp-reading-progress'), // title
//        $option,
//        __('Average reading speed in words per minute, integers only. Used to estimate reading time. Leave empty for no ERT. Usual is something between 200 and 300.', 'wp-reading-progress')
//    );
    ruigehond006_add_settings_field(
        'mark_it_zero',
        'checkbox',
        __('Make bar start at 0%', 'wp-reading-progress'),
        $option,
        __('Yes please', 'wp-reading-progress')
    );
    ruigehond006_add_settings_field(
        'include_comments',
        'checkbox',
        __('On single post page', 'wp-reading-progress'),
        $option,
        __('use whole page to calculate reading progress', 'wp-reading-progress')
    );
    add_settings_field(
        'ruigehond006_post_types',
        // #TRANSLATORS: this is followed by a list of the available post_types
        __('Show reading progress on', 'wp-reading-progress'),
        function ($args) {
            $post_types = [];
            if (isset($args['option']['post_types'])) {
                $post_types = $args['option']['post_types'];
            }
            foreach (get_post_types(array('public' => true)) as $post_type) {
                echo "<label><input type=\"checkbox\" name=\"ruigehond006[post_types][]\" value=\"$post_type\"";
                if (in_array($post_type, $post_types)) {
                    echo ' checked="checked"';
                }
                echo "/>$post_type</label><br/>";
            }
            echo '<div class="ruigehond006 explanation"><em>';
            echo __('For unchecked post types you can enable the reading progress bar per post on the post edit page.', 'wp-reading-progress');
            echo '</em></div>';
        },
        'ruigehond006',
        'progress_bar_settings',
        ['option' => $option] // args
    );
    ruigehond006_add_settings_field(
        'archives',
        'checkbox',
        __('And on their archives', 'wp-reading-progress'),
        $option
    );
    ruigehond006_add_settings_field(
        'no_css',
        'checkbox',
        'No css',
        $option,
        __('necessary css for the reading bar is included elsewhere', 'wp-reading-progress')
    );
}

function ruigehond006_add_settings_field($name, $type, $title, $option, $explanation = null)
{
    add_settings_field(
        'ruigehond006_' . $name,
        $title,
        function ($args) {
            switch ($args['type']) {
                case 'checkbox':
                    echo '<label><input type="checkbox" name="ruigehond006[';
                    echo $args['name'];
                    echo ']"';
                    if (isset($args['value']) and $args['value']) {
                        echo ' checked="checked"';
                    }
                    echo '/> ';
                    echo $args['explanation'];
                    echo '</label>';

                    return;
                case 'color':
                    echo '<input type="text" class="ruigehond006_colorpicker" name="ruigehond006[';
                    echo $args['name'];
                    echo ']" value="';
                    echo $args['value'];
                    echo '"/>';
                    break;
                default: // regular input
                    $value = isset($args['value']) ? $args['value'] : '';
                    echo '<input type="text" name="ruigehond006[';
                    echo $args['name'];
                    echo ']" value="';
                    echo htmlentities($value);
                    if ('text-short' !== $args['type']) echo '" class="regular-text';
                    echo '"/>';
            }
            if (isset($args['explanation'])) {
                echo '<div class="ruigehond006 explanation"><em>';
                echo $args['explanation'];
                echo '</em></div>';
            }
        },
        'ruigehond006',
        'progress_bar_settings',
        array(
            'name' => $name,
            'type' => $type,
            'value' => isset($option[$name]) ? $option[$name] : null,
            'explanation' => $explanation,
        ) // args
    );
}

function ruigehond006_settingspage()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    echo '<div class="wrap"><h1>';
    echo esc_html(get_admin_page_title());
    echo '</h1><form action="options.php" method="post">';
    // output security fields for the registered setting
    settings_fields('ruigehond006');
    // output setting sections and their fields
    do_settings_sections('ruigehond006');
    // output save settings button
    submit_button(__('Save Settings', 'wp-reading-progress'));
    echo '</form></div>';
}

function ruigehond006_settingslink($links)
{
    $url = get_admin_url();
    $txt = __('Settings', 'wp-reading-progress');
    $settings_link = "<a href=\"{$url}options-general.php?page=wp-reading-progress\">$txt</a>";
    array_unshift($links, $settings_link);

    return $links;
}

function ruigehond006_menuitem()
{
    add_options_page(
        'WP Reading Progress',
        'WP Reading Progress',
        'manage_options',
        'wp-reading-progress',
        'ruigehond006_settingspage'
    );
}

/**
 * plugin management functions
 */
function ruigehond006_add_defaults()
{
    add_option('ruigehond006', array(
        'bar_attach' => 'top',
        'bar_color' => '#f1592a',
        'bar_height' => '.5vh',
        'post_types' => array('post'),
    ), null, true);
}

function ruigehond006_install()
{
    if (!get_option('ruigehond006')) { // insert default settings:
        ruigehond006_add_defaults();
    }
}

function ruigehond006_deactivate()
{
    // nothing to do really
}

function ruigehond006_uninstall()
{
    // remove settings
    delete_option('ruigehond006');
    delete_option('ruigehond006_upgraded_1.2.4');
    // remove the post_meta entries
    delete_post_meta_by_key('_ruigehond006_show');
}