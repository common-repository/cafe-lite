<?php
/**
 * View template for Clever Button widget
 *
 * @package CAFE\Templates
 * @copyright 2018 CleverSoft. All rights reserved.
 */

$open_link = '';
$close_link = '';
$url = '#';
$target = '';
$follow = '';
if ($settings['link']['url'] != '') {
    $url = esc_url($settings['link']['url']);
    $target = $settings['link']['is_external'] == 'on' ? 'target="_blank"' : '';
    $follow = $settings['link']['nofollow'] == 'on' ? 'rel="nofollow"' : '';
}
$allow_html = array(
    'i' => array(
        'class' => array(),
    )
);
$icon_left = '';
$icon_right = '';
if ($settings['button_label'] != '' || $settings['button_icon'] != '') {
    if ($settings['button_icon'] != '') {
        if ($settings['button_icon_pos'] == 'before') {
            $icon_left = '<i class="' . $settings['button_icon'] . '"></i>';
        } else {
            $icon_right = '<i class="' . $settings['button_icon'] . '"></i>';
        }
    }
    printf('<a href="%s" %s %s %s>%s %s %s</a>', esc_url($url), wp_kses_post($target), wp_kses_post($follow), wp_kses_post($this->get_render_attribute_string('button_label')), wp_kses($icon_left, $allow_html), esc_html($settings['button_label']), wp_kses($icon_right, $allow_html));
}
