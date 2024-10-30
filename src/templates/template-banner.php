<?php
/**
 * View template for Clever Banner widget
 *
 * @package CAFE\Templates
 * @copyright 2018 CleverSoft. All rights reserved.
 */

use Elementor\Utils;

$css_class = 'cafe-banner ';
$effect = '';
if ($settings['overlay_banner'] == 'true') {
    $effect = $settings['effect'];
    $css_class .= $settings['effect'] . ' cafe-overlay-content ';
} else {
    $effect = $settings['normal_effect'];
    $css_class .= $settings['normal_effect'];
}
$bg_style = '';
if ($settings['auto_size'] != 'true') {
    if ($settings['image']['url'] != '') {
        $bg_style = 'style=background-image:url(\'' . esc_url($settings['image']['url']) . '\')';
    }
    $css_class .= 'custom-size ';
}
$css_class .= $settings['css_class'];
$open_link = '';
$close_link = '';
if ($settings['link']['url'] != '') {
    $open_link = '<a href="' . esc_url($settings['link']['url']) . '"';
    $open_link .= $settings['link']['is_external'] == 'on' ? ' target="_blank"' : '';
    $open_link .= $settings['link']['nofollow'] == 'on' ? ' rel="nofollow"' : '';
    $open_link .= '>';
    $close_link = '</a>';
}
$icon_left = '';
$icon_right = '';
$allow_html = array(
    'a' => array(
        'class' => array(),
        'href' => array(),
        'rel' => array(),
        'target' => array(),
    ),
    'i' => array(
        'class' => array(),
    )
)
?>
<div class="<?php echo esc_attr($css_class) ?>">
    <?php
    echo wp_kses($open_link, $allow_html);
    ?>
    <div class="cafe-wrap-image" <?php echo esc_attr($bg_style) ?>>
        <?php if ($settings['auto_size'] == 'true') { ?>
            <img src="<?php echo esc_url($settings['image']['url']) ?>"
                 alt="<?php echo esc_attr($settings['title']) ?>"/>
        <?php }
        if ($settings['button_label'] != '' && $effect == 'style-2' && $settings['overlay_banner'] != 'true') {
            if ($settings['button_icon'] != '') {
                if ($settings['button_icon_pos'] == 'before') {
                    $icon_left = '<i class="' . $settings['button_icon'] . '"></i>';
                } else {
                    $icon_right = '<i class="' . $settings['button_icon'] . '"></i>';
                }
            }
            printf('<span %s>%s %s %s</span>', wp_kses_post($this->get_render_attribute_string('button_label')), wp_kses($icon_left, $allow_html), esc_html($settings['button_label']), wp_kses($icon_right, $allow_html));
        }
        ?>
    </div>
    <div class="cafe-wrap-content">
        <?php
        if ($settings['effect'] == 'overlay-box') {
            ?>
            <div class="cafe-overlay-box">
                <?php
                printf('<%s %s>%s</%s>', esc_attr(Utils::validate_html_tag($settings['title_tag'])), wp_kses_post($this->get_render_attribute_string('title')), esc_html($settings['title']), esc_attr(Utils::validate_html_tag($settings['title_tag'])));
                ?>
                <span class="icon-plus"></span>
            </div>
            <?php
        }
        printf('<%s %s>%s</%s>', esc_attr(Utils::validate_html_tag($settings['title_tag'])), wp_kses_post($this->get_render_attribute_string('title')), esc_html($settings['title']), esc_attr(Utils::validate_html_tag($settings['title_tag'])));
        ?>
        <div class="cafe-wrap-extend-content">
            <?php
            if ($settings['des']) {
                printf('<div %s>%s</div>', wp_kses_post($this->get_render_attribute_string('des')), wp_kses_post($settings['des']));
            }
            if ($settings['button_label'] != '' && $effect != 'style-2') {
                if ($settings['button_icon'] != '') {
                    if ($settings['button_icon_pos'] == 'before') {
                        $icon_left = '<i class="' . $settings['button_icon'] . '"></i>';
                    } else {
                        $icon_right = '<i class="' . $settings['button_icon'] . '"></i>';
                    }
                }
                printf('<span %s>%s %s %s</span>', wp_kses_post($this->get_render_attribute_string('button_label')), wp_kses($icon_left, $allow_html), esc_html($settings['button_label']), wp_kses($icon_right, $allow_html));
            }
            ?>
        </div>
    </div>
    <?php
    echo wp_kses($close_link, $allow_html);
    ?>
</div>
