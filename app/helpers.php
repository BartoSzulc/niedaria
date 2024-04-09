<?php

/**
 * Theme helpers.
 */

function removeSpaces($text) {
    return str_replace(' ', '', $text);
}
function acf_link($link, $class = '', $default = 'Learn More', $echo = true)
{
    if (empty($link) && !is_array($link)) {
        return false;
    }

    $link_title = !empty($link['title']) ? $link['title'] : $default;

    $output = "<a ";
    $output .= !empty($class) ? "class='{$class}'" : null;
    $output .= "href='{$link['url']}'";
    $output .= !empty($link['target']) ? "target='_blank'" : null;
    $output .= ">{$link_title}</a>";

    if ($echo) {
        echo $output; // Use: acf_link($link, $class, $default, $echo);
    } else {
        return $output; // Use: $output = acf_link($link, $class, $default, $echo);
    }
}

function admin_log($log, $name = '_')
{
    $date = new \DateTime();
    $date->setTimezone(new \DateTimeZone('Europe/Warsaw'));
    $log_date = $date->format('Y-m-d H:i:s');

    if (is_array($log)) {
        $log = http_build_query($log, '', ', ');
    }

    $log_msg =  $log_date . ' : ' . $log;
    $folder = dirname(__FILE__) . "/../../../logs/";

    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

    $log_file_data = $folder . '/log' . $name . date('d-M-Y') . '_' . date('h') . '.log';
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
    // Use: admin_log($log, $name);
}

function placehold_img($size = '150x150', $format = 'png', $text_color = '#fff', $bg_color = '#6d6d6d', $text = false)
{
    $url = 'https://via.placeholder.com/' . $size . '.' . $format . '/' . $bg_color . '/' . $text_color ;
    if ($text) {
        $text = str_replace(' ', '+', $text);
        $url .= '?text=' . $text;
    }
    return $url; // Use: $url = placehold_img($size, $format, $text_color, $bg_color, $text);
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}   
add_filter('upload_mimes', 'cc_mime_types');

function get_privacy_policy_details() {
    $details = array(
        'title' => '',
        'url'   => '',
    );

    $policy_page_id = (int) get_option( 'wp_page_for_privacy_policy' );

    if ( $policy_page_id && get_post_status( $policy_page_id ) === 'publish' ) {
        $details['title'] = get_the_title( $policy_page_id );
        $details['url']   = get_permalink( $policy_page_id );
    }

    return $details;
}

// $privacy_policy = get_privacy_policy_details();

// if ( !empty($privacy_policy['title']) && !empty($privacy_policy['url']) ) {
//     echo 'Privacy Policy: <a href="' . esc_url( $privacy_policy['url'] ) . '">' . esc_html( $privacy_policy['title'] ) . '</a>';
// }

