<?php
namespace Cafe\Controls;

use Elementor\Base_Data_Control;

/**
 * CleverIcon
 *
 * @author CleverSoft <hello.cleversoft@gmail.com>
 * @package CAFE\Controls
 */
final class CleverIcon extends Base_Data_Control
{
    /**
     * Type
     *
     * @string
     */
    const TYPE = 'clevericon';

    /**
     * Get clevericon one area control type.
     *
     * Retrieve the control type, in this case `clevericon`.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Control type.
     */
    public function get_type()
    {
        return self::TYPE;
    }

    /**
     * Enqueue clever font one area control scripts and styles.
     *
     * Used to register and enqueue custom scripts and styles used by the clever font one
     * area control.
     *
     * @since 1.0.0
     * @access public
     */
    public function enqueue()
    {
        wp_register_style('cleverfont', CAFE_URI . 'assets/vendor/cleverfont/style.css', [], '7834y238');
        wp_register_script('cafe-control', CAFE_URI . 'assets/js/control.min.js', ['jquery'], '2.2', true);
        // Styles
        wp_enqueue_style('cleverfont');
        wp_enqueue_script('cafe-control');
    }

    /**
     * Get icons control default settings.
     *
     * Retrieve the default settings of the icons control. Used to return the default
     * settings while initializing the icons control.
     *
     * @since 1.0.0
     * @access protected
     *
     * @return array Control default settings.
     */
    protected function get_default_settings()
    {
        return [
            'options' => ["cs-font clever-icon-360-1" => " clever-icon-360-1", "cs-font clever-icon-360-2" => " clever-icon-360-2", "cs-font clever-icon-analytics-laptop" => " clever-icon-analytics-laptop", "cs-font clever-icon-arrow-1" => " clever-icon-arrow-1", "cs-font clever-icon-arrow-bold" => " clever-icon-arrow-bold", "cs-font clever-icon-arrow-down" => " clever-icon-arrow-down", "cs-font clever-icon-arrow-left" => " clever-icon-arrow-left", "cs-font clever-icon-arrow-left-1" => " clever-icon-arrow-left-1", "cs-font clever-icon-arrow-left-2" => " clever-icon-arrow-left-2", "cs-font clever-icon-arrow-left-3" => " clever-icon-arrow-left-3", "cs-font clever-icon-arrow-left-4" => " clever-icon-arrow-left-4", "cs-font clever-icon-arrow-left-5" => " clever-icon-arrow-left-5", "cs-font clever-icon-arrow-light" => " clever-icon-arrow-light", "cs-font clever-icon-arrow-regular" => " clever-icon-arrow-regular", "cs-font clever-icon-arrow-right" => " clever-icon-arrow-right", "cs-font clever-icon-arrow-right-1" => " clever-icon-arrow-right-1", "cs-font clever-icon-arrow-right-2" => " clever-icon-arrow-right-2", "cs-font clever-icon-arrow-right-3" => " clever-icon-arrow-right-3", "cs-font clever-icon-arrow-right-4" => " clever-icon-arrow-right-4", "cs-font clever-icon-arrow-right-5" => " clever-icon-arrow-right-5", "cs-font clever-icon-arrow-up" => " clever-icon-arrow-up", "cs-font clever-icon-attachment" => " clever-icon-attachment", "cs-font clever-icon-award-1" => " clever-icon-award-1", "cs-font clever-icon-baby-toy-1" => " clever-icon-baby-toy-1", "cs-font clever-icon-baby-toy-2" => " clever-icon-baby-toy-2", "cs-font clever-icon-ball" => " clever-icon-ball", "cs-font clever-icon-banner" => " clever-icon-banner", "cs-font clever-icon-battery" => " clever-icon-battery", "cs-font clever-icon-blog" => " clever-icon-blog", "cs-font clever-icon-briefcase" => " clever-icon-briefcase", "cs-font clever-icon-building" => " clever-icon-building", "cs-font clever-icon-button" => " clever-icon-button", "cs-font clever-icon-car" => " clever-icon-car", "cs-font clever-icon-caret-down" => " clever-icon-caret-down", "cs-font clever-icon-caret-left" => " clever-icon-caret-left", "cs-font clever-icon-caret-right" => " clever-icon-caret-right", "cs-font clever-icon-caret-square-dow" => " clever-icon-caret-square-dow", "cs-font clever-icon-caret-square-left" => " clever-icon-caret-square-left", "cs-font clever-icon-caret-square-right" => " clever-icon-caret-square-right", "cs-font clever-icon-caret-square-up" => " clever-icon-caret-square-up", "cs-font clever-icon-caret-up" => " clever-icon-caret-up", "cs-font clever-icon-carousel" => " clever-icon-carousel", "cs-font clever-icon-cart-1" => " clever-icon-cart-1", "cs-font clever-icon-cart-10" => " clever-icon-cart-10", "cs-font clever-icon-cart-11" => " clever-icon-cart-11", "cs-font clever-icon-cart-12" => " clever-icon-cart-12", "cs-font clever-icon-cart-13" => " clever-icon-cart-13", "cs-font clever-icon-cart-14" => " clever-icon-cart-14", "cs-font clever-icon-cart-15" => " clever-icon-cart-15", "cs-font clever-icon-cart-16" => " clever-icon-cart-16", "cs-font clever-icon-cart-17" => " clever-icon-cart-17", "cs-font clever-icon-cart-18" => " clever-icon-cart-18", "cs-font clever-icon-cart-19" => " clever-icon-cart-19", "cs-font clever-icon-cart-2" => " clever-icon-cart-2", "cs-font clever-icon-cart-3" => " clever-icon-cart-3", "cs-font clever-icon-cart-4" => " clever-icon-cart-4", "cs-font clever-icon-cart-5" => " clever-icon-cart-5", "cs-font clever-icon-cart-6" => " clever-icon-cart-6", "cs-font clever-icon-cart-7" => " clever-icon-cart-7", "cs-font clever-icon-cart-8" => " clever-icon-cart-8", "cs-font clever-icon-cart-9" => " clever-icon-cart-9", "cs-font clever-icon-chart" => " clever-icon-chart", "cs-font clever-icon-check" => " clever-icon-check", "cs-font clever-icon-check-box" => " clever-icon-check-box", "cs-font clever-icon-check-circle" => " clever-icon-check-circle", "cs-font clever-icon-check-circle-o" => " clever-icon-check-circle-o", "cs-font clever-icon-check-square" => " clever-icon-check-square", "cs-font clever-icon-check-square-o" => " clever-icon-check-square-o", "cs-font clever-icon-circle" => " clever-icon-circle", "cs-font clever-icon-circle-o" => " clever-icon-circle-o", "cs-font clever-icon-click" => " clever-icon-click", "cs-font clever-icon-clock-1" => " clever-icon-clock-1", "cs-font clever-icon-clock-2" => " clever-icon-clock-2", "cs-font clever-icon-clock-3" => " clever-icon-clock-3", "cs-font clever-icon-clock-4" => " clever-icon-clock-4", "cs-font clever-icon-close" => " clever-icon-close", "cs-font clever-icon-close-1" => " clever-icon-close-1", "cs-font clever-icon-code-design" => " clever-icon-code-design", "cs-font clever-icon-column" => " clever-icon-column", "cs-font clever-icon-comment-1" => " clever-icon-comment-1", "cs-font clever-icon-comment-2" => " clever-icon-comment-2", "cs-font clever-icon-comment-3" => " clever-icon-comment-3", "cs-font clever-icon-comment-4" => " clever-icon-comment-4", "cs-font clever-icon-compare-1" => " clever-icon-compare-1", "cs-font clever-icon-compare-2" => " clever-icon-compare-2", "cs-font clever-icon-compare-3" => " clever-icon-compare-3", "cs-font clever-icon-compare-4" => " clever-icon-compare-4", "cs-font clever-icon-compare-5" => " clever-icon-compare-5", "cs-font clever-icon-compare-6" => " clever-icon-compare-6", "cs-font clever-icon-compare-7" => " clever-icon-compare-7", "cs-font clever-icon-competitive-chart" => " clever-icon-competitive-chart", "cs-font clever-icon-computer-monitor-and-cellphone" => " clever-icon-computer-monitor-and-cellphone", "cs-font clever-icon-consulting-message" => " clever-icon-consulting-message", "cs-font clever-icon-contract" => " clever-icon-contract", "cs-font clever-icon-cookie" => " clever-icon-cookie", "cs-font clever-icon-cpu-1" => " clever-icon-cpu-1", "cs-font clever-icon-cpu-2" => " clever-icon-cpu-2", "cs-font clever-icon-creative-process" => " clever-icon-creative-process", "cs-font clever-icon-customer-reviews" => " clever-icon-customer-reviews", "cs-font clever-icon-data-visualization" => " clever-icon-data-visualization", "cs-font clever-icon-desktop" => " clever-icon-desktop", "cs-font clever-icon-document" => " clever-icon-document", "cs-font clever-icon-down" => " clever-icon-down", "cs-font clever-icon-download-1" => " clever-icon-download-1", "cs-font clever-icon-download-2" => " clever-icon-download-2", "cs-font clever-icon-dress-woman" => " clever-icon-dress-woman", "cs-font clever-icon-dribbble" => " clever-icon-dribbble", "cs-font clever-icon-drill-tool" => " clever-icon-drill-tool", "cs-font clever-icon-editor" => " clever-icon-editor", "cs-font clever-icon-electric-1" => " clever-icon-electric-1", "cs-font clever-icon-electric-2" => " clever-icon-electric-2", "cs-font clever-icon-expand" => " clever-icon-expand", "cs-font clever-icon-eye-1" => " clever-icon-eye-1", "cs-font clever-icon-eye-2" => " clever-icon-eye-2", "cs-font clever-icon-eye-3" => " clever-icon-eye-3", "cs-font clever-icon-eye-4" => " clever-icon-eye-4", "cs-font clever-icon-eye-5" => " clever-icon-eye-5", "cs-font clever-icon-face-1" => " clever-icon-face-1", "cs-font clever-icon-facebook" => " clever-icon-facebook", "cs-font clever-icon-faucet" => " clever-icon-faucet", "cs-font clever-icon-feeding-bottle" => " clever-icon-feeding-bottle", "cs-font clever-icon-file-sharing" => " clever-icon-file-sharing", "cs-font clever-icon-filter-1" => " clever-icon-filter-1", "cs-font clever-icon-filter-2" => " clever-icon-filter-2", "cs-font clever-icon-filter-3" => " clever-icon-filter-3", "cs-font clever-icon-finger-touch-screen" => " clever-icon-finger-touch-screen", "cs-font clever-icon-fire" => " clever-icon-fire", "cs-font clever-icon-flickr" => " clever-icon-flickr", "cs-font clever-icon-flower" => " clever-icon-flower", "cs-font clever-icon-foursquare" => " clever-icon-foursquare", "cs-font clever-icon-fruit" => " clever-icon-fruit", "cs-font clever-icon-furniture-1" => " clever-icon-furniture-1", "cs-font clever-icon-furniture-2" => " clever-icon-furniture-2", "cs-font clever-icon-github" => " clever-icon-github", "cs-font clever-icon-googleplus" => " clever-icon-googleplus", "cs-font clever-icon-grid" => " clever-icon-grid", "cs-font clever-icon-grid-1" => " clever-icon-grid-1", "cs-font clever-icon-grid-2" => " clever-icon-grid-2", "cs-font clever-icon-grid-3" => " clever-icon-grid-3", "cs-font clever-icon-grid-4" => " clever-icon-grid-4", "cs-font clever-icon-grid-5" => " clever-icon-grid-5", "cs-font clever-icon-grid-6" => " clever-icon-grid-6", "cs-font clever-icon-hand" => " clever-icon-hand", "cs-font clever-icon-hand-down" => " clever-icon-hand-down", "cs-font clever-icon-hand-up" => " clever-icon-hand-up", "cs-font clever-icon-handshake" => " clever-icon-handshake", "cs-font clever-icon-heading" => " clever-icon-heading", "cs-font clever-icon-heart-1" => " clever-icon-heart-1", "cs-font clever-icon-heart-2" => " clever-icon-heart-2", "cs-font clever-icon-heart-3" => " clever-icon-heart-3", "cs-font clever-icon-heart-4" => " clever-icon-heart-4", "cs-font clever-icon-heart-5" => " clever-icon-heart-5", "cs-font clever-icon-heart-6" => " clever-icon-heart-6", "cs-font clever-icon-help" => " clever-icon-help", "cs-font clever-icon-horizontal-tablet-with-pencil" => " clever-icon-horizontal-tablet-with-pencil", "cs-font clever-icon-horse" => " clever-icon-horse", "cs-font clever-icon-house" => " clever-icon-house", "cs-font clever-icon-house-1" => " clever-icon-house-1", "cs-font clever-icon-icon-box" => " clever-icon-icon-box", "cs-font clever-icon-illustration-tool" => " clever-icon-illustration-tool", "cs-font clever-icon-image-box" => " clever-icon-image-box", "cs-font clever-icon-instagram" => " clever-icon-instagram", "cs-font clever-icon-iron" => " clever-icon-iron", "cs-font clever-icon-keyboard-and-hands" => " clever-icon-keyboard-and-hands", "cs-font clever-icon-landscape-image" => " clever-icon-landscape-image", "cs-font clever-icon-laptop" => " clever-icon-laptop", "cs-font clever-icon-law" => " clever-icon-law", "cs-font clever-icon-law-1" => " clever-icon-law-1", "cs-font clever-icon-layer" => " clever-icon-layer", "cs-font clever-icon-layout" => " clever-icon-layout", "cs-font clever-icon-layout-1" => " clever-icon-layout-1", "cs-font clever-icon-layout-squares" => " clever-icon-layout-squares", "cs-font clever-icon-light" => " clever-icon-light", "cs-font clever-icon-lights" => " clever-icon-lights", "cs-font clever-icon-linkedin" => " clever-icon-linkedin", "cs-font clever-icon-lipstick" => " clever-icon-lipstick", "cs-font clever-icon-list" => " clever-icon-list", "cs-font clever-icon-list-1" => " clever-icon-list-1", "cs-font clever-icon-list-2" => " clever-icon-list-2", "cs-font clever-icon-lock" => " clever-icon-lock", "cs-font clever-icon-mail-1" => " clever-icon-mail-1", "cs-font clever-icon-mail-2" => " clever-icon-mail-2", "cs-font clever-icon-mail-3" => " clever-icon-mail-3", "cs-font clever-icon-mail-4" => " clever-icon-mail-4", "cs-font clever-icon-mail-5" => " clever-icon-mail-5", "cs-font clever-icon-mail-6" => " clever-icon-mail-6", "cs-font clever-icon-map-1" => " clever-icon-map-1", "cs-font clever-icon-map-2" => " clever-icon-map-2", "cs-font clever-icon-map-3" => " clever-icon-map-3", "cs-font clever-icon-map-4" => " clever-icon-map-4", "cs-font clever-icon-map-5" => " clever-icon-map-5", "cs-font clever-icon-menu-1" => " clever-icon-menu-1", "cs-font clever-icon-menu-2" => " clever-icon-menu-2", "cs-font clever-icon-menu-3" => " clever-icon-menu-3", "cs-font clever-icon-menu-4" => " clever-icon-menu-4", "cs-font clever-icon-menu-5" => " clever-icon-menu-5", "cs-font clever-icon-menu-6" => " clever-icon-menu-6", "cs-font clever-icon-messenger-filled" => " clever-icon-messenger-filled", "cs-font clever-icon-messenger-linear" => " clever-icon-messenger-linear", "cs-font clever-icon-microwave" => " clever-icon-microwave", "cs-font clever-icon-minus" => " clever-icon-minus", "cs-font clever-icon-mobile-app-developing" => " clever-icon-mobile-app-developing", "cs-font clever-icon-news-grid" => " clever-icon-news-grid", "cs-font clever-icon-news-list" => " clever-icon-news-list", "cs-font clever-icon-next" => " clever-icon-next", "cs-font clever-icon-online-purchase" => " clever-icon-online-purchase", "cs-font clever-icon-online-shopping" => " clever-icon-online-shopping", "cs-font clever-icon-online-video" => " clever-icon-online-video", "cs-font clever-icon-padlock-key" => " clever-icon-padlock-key", "cs-font clever-icon-paint-roller" => " clever-icon-paint-roller", "cs-font clever-icon-pause" => " clever-icon-pause", "cs-font clever-icon-pause-1" => " clever-icon-pause-1", "cs-font clever-icon-pc-monitor" => " clever-icon-pc-monitor", "cs-font clever-icon-perfume" => " clever-icon-perfume", "cs-font clever-icon-phone-1" => " clever-icon-phone-1", "cs-font clever-icon-phone-2" => " clever-icon-phone-2", "cs-font clever-icon-phone-3" => " clever-icon-phone-3", "cs-font clever-icon-phone-4" => " clever-icon-phone-4", "cs-font clever-icon-phone-5" => " clever-icon-phone-5", "cs-font clever-icon-phone-6" => " clever-icon-phone-6", "cs-font clever-icon-picture" => " clever-icon-picture", "cs-font clever-icon-pin" => " clever-icon-pin", "cs-font clever-icon-pines" => " clever-icon-pines", "cs-font clever-icon-pinterest" => " clever-icon-pinterest", "cs-font clever-icon-place-localizer" => " clever-icon-place-localizer", "cs-font clever-icon-plane-1" => " clever-icon-plane-1", "cs-font clever-icon-plane-2" => " clever-icon-plane-2", "cs-font clever-icon-plane-3" => " clever-icon-plane-3", "cs-font clever-icon-plant" => " clever-icon-plant", "cs-font clever-icon-play-1" => " clever-icon-play-1", "cs-font clever-icon-play-2" => " clever-icon-play-2", "cs-font clever-icon-play-3" => " clever-icon-play-3", "cs-font clever-icon-play-4" => " clever-icon-play-4", "cs-font clever-icon-plus" => " clever-icon-plus", "cs-font clever-icon-prev" => " clever-icon-prev", "cs-font clever-icon-quote-1" => " clever-icon-quote-1", "cs-font clever-icon-quote-2" => " clever-icon-quote-2", "cs-font clever-icon-quote-3" => " clever-icon-quote-3", "cs-font clever-icon-recent-blog" => " clever-icon-recent-blog", "cs-font clever-icon-refresh-1" => " clever-icon-refresh-1", "cs-font clever-icon-refresh-2" => " clever-icon-refresh-2", "cs-font clever-icon-refresh-3" => " clever-icon-refresh-3", "cs-font clever-icon-refresh-4" => " clever-icon-refresh-4", "cs-font clever-icon-refresh-5" => " clever-icon-refresh-5", "cs-font clever-icon-rss" => " clever-icon-rss", "cs-font clever-icon-ruler" => " clever-icon-ruler", "cs-font clever-icon-search-1" => " clever-icon-search-1", "cs-font clever-icon-search-2" => " clever-icon-search-2", "cs-font clever-icon-search-3" => " clever-icon-search-3", "cs-font clever-icon-search-4" => " clever-icon-search-4", "cs-font clever-icon-search-5" => " clever-icon-search-5", "cs-font clever-icon-search-6" => " clever-icon-search-6", "cs-font clever-icon-search-results" => " clever-icon-search-results", "cs-font clever-icon-search-tool" => " clever-icon-search-tool", "cs-font clever-icon-setting" => " clever-icon-setting", "cs-font clever-icon-settings-tools" => " clever-icon-settings-tools", "cs-font clever-icon-share-1" => " clever-icon-share-1", "cs-font clever-icon-share-2" => " clever-icon-share-2", "cs-font clever-icon-sharing-symbol" => " clever-icon-sharing-symbol", "cs-font clever-icon-shirt" => " clever-icon-shirt", "cs-font clever-icon-shoe-man-2" => " clever-icon-shoe-man-2", "cs-font clever-icon-shoes-woman-1" => " clever-icon-shoes-woman-1", "cs-font clever-icon-shoes-woman-2" => " clever-icon-shoes-woman-2", "cs-font clever-icon-site-map" => " clever-icon-site-map", "cs-font clever-icon-skype" => " clever-icon-skype", "cs-font clever-icon-slider" => " clever-icon-slider", "cs-font clever-icon-slider-1" => " clever-icon-slider-1", "cs-font clever-icon-slider-2" => " clever-icon-slider-2", "cs-font clever-icon-slider-3" => " clever-icon-slider-3", "cs-font clever-icon-small-diamond" => " clever-icon-small-diamond", "cs-font clever-icon-smartphone" => " clever-icon-smartphone", "cs-font clever-icon-smartphone-2" => " clever-icon-smartphone-2", "cs-font clever-icon-sprout" => " clever-icon-sprout", "cs-font clever-icon-sprout-1" => " clever-icon-sprout-1", "cs-font clever-icon-square" => " clever-icon-square", "cs-font clever-icon-square-o" => " clever-icon-square-o", "cs-font clever-icon-star" => " clever-icon-star", "cs-font clever-icon-star-o" => " clever-icon-star-o", "cs-font clever-icon-support" => " clever-icon-support", "cs-font clever-icon-tab" => " clever-icon-tab", "cs-font clever-icon-tablet-1" => " clever-icon-tablet-1", "cs-font clever-icon-tablet-2" => " clever-icon-tablet-2", "cs-font clever-icon-team" => " clever-icon-team", "cs-font clever-icon-thin-expand-arrows" => " clever-icon-thin-expand-arrows", "cs-font clever-icon-three-dots" => " clever-icon-three-dots", "cs-font clever-icon-three-dots-o" => " clever-icon-three-dots-o", "cs-font clever-icon-tivi" => " clever-icon-tivi", "cs-font clever-icon-trees" => " clever-icon-trees", "cs-font clever-icon-truck" => " clever-icon-truck", "cs-font clever-icon-tumblr" => " clever-icon-tumblr", "cs-font clever-icon-twitter" => " clever-icon-twitter", "cs-font clever-icon-undo-1" => " clever-icon-undo-1", "cs-font clever-icon-up" => " clever-icon-up", "cs-font clever-icon-upload-1" => " clever-icon-upload-1", "cs-font clever-icon-upload-2" => " clever-icon-upload-2", "cs-font clever-icon-user" => " clever-icon-user", "cs-font clever-icon-user-1" => " clever-icon-user-1", "cs-font clever-icon-user-2" => " clever-icon-user-2", "cs-font clever-icon-user-3" => " clever-icon-user-3", "cs-font clever-icon-user-4" => " clever-icon-user-4", "cs-font clever-icon-user-5" => " clever-icon-user-5", "cs-font clever-icon-user-6" => " clever-icon-user-6", "cs-font clever-icon-vector1" => " clever-icon-vector1", "cs-font clever-icon-vimeo" => " clever-icon-vimeo", "cs-font clever-icon-volume-off" => " clever-icon-volume-off", "cs-font clever-icon-volume-on" => " clever-icon-volume-on", "cs-font clever-icon-wallet" => " clever-icon-wallet", "cs-font clever-icon-wallet-1" => " clever-icon-wallet-1", "cs-font clever-icon-wardrobe" => " clever-icon-wardrobe", "cs-font clever-icon-washing-machine" => " clever-icon-washing-machine", "cs-font clever-icon-watch-1" => " clever-icon-watch-1", "cs-font clever-icon-watch-2" => " clever-icon-watch-2", "cs-font clever-icon-web-home" => " clever-icon-web-home", "cs-font clever-icon-web-link" => " clever-icon-web-link", "cs-font clever-icon-web-links" => " clever-icon-web-links", "cs-font clever-icon-website-protection" => " clever-icon-website-protection", "cs-font clever-icon-whatsapp-filled" => " clever-icon-whatsapp-filled", "cs-font clever-icon-whatsapp-linear" => " clever-icon-whatsapp-linear", "cs-font clever-icon-wishlist1" => " clever-icon-wishlist1", "cs-font clever-icon-xing" => " clever-icon-xing", "cs-font clever-icon-youtube-1" => " clever-icon-youtube-1", "cs-font clever-icon-youtube-2" => " clever-icon-youtube-2", "cs-font clever-icon-zoom-in" => " clever-icon-zoom-in", "cs-font clever-icon-zoom-out" => " clever-icon-zoom-out"]
        ];
    }

    /**
     * Render icons control output in the editor.
     *
     * Used to generate the control HTML in the editor using Underscore JS
     * template. The variables for the class are available using `data` JS
     * object.
     *
     * @since 1.0.0
     * @access public
     */
    public function content_template()
    {
        $control_uid = $this->get_control_uid();
        ?>
        <div class="elementor-control-field">
            <label for="<?php echo esc_attr($control_uid); ?>" class="elementor-control-title">{{{ data.label }}}</label>
            <div class="elementor-control-input-wrapper">
                <select id="<?php echo esc_attr($control_uid); ?>" class="elementor-control-icon" data-setting="{{ data.name }}"
                    data-placeholder="<?php echo esc_html__('Select Icon', 'cafe-lite'); ?>">
                    <option value=""><?php echo esc_html__('Select Icon', 'cafe-lite'); ?></option>
                    <# _.each( data.options, function( option_title, option_value ) { #>
                        <option value="{{ option_value }}">{{{ option_title }}}</option>
                        <# } ); #>
                </select>
            </div>
        </div>
        <# if ( data.description ) { #>
            <div class="elementor-control-field-description">{{ data.description }}</div>
            <# } #>
                <?php
    }
}
