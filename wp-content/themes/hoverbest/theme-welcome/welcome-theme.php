<?php
if (!defined('ABSPATH')) exit;

$theme = wp_get_theme();
$theme_name = $theme->get('Name');
$theme_url  = 'https://themesmachine.com/index.php/product/hoverbest/';
?>

<div class="theme-welcome-wrapper" style="padding: 60px 20px;">
    <style>
    .theme-welcome-inner {
        max-width: 1200px;
        margin: 0 auto;
        background: #FFF;
        border-radius: 24px;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: 60px 40px;
        color: #000;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, sans-serif;
    }

    .theme-welcome-text {
        max-width: 560px;
        flex: 1 1 50%;
    }

    .theme-welcome-text h1 {
        font-size: 2.4rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        background: -webkit-linear-gradient(#E63C3F, #FF04EE);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1em;
    }

    .theme-welcome-text p {
        font-size: 1rem;
        margin-bottom: 16px;
        color: #000;
    }

    .theme-welcome-text ul {
        list-style: disc;
        padding-left: 20px;
        margin-bottom: 20px;
    }

    .theme-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 20px;
    }

    .theme-buttons a {
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 6px;
        color: #fff;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .theme-buttons a::before{
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        z-index: 1;
        transition: left 0.5s ease;
    }

    .theme-buttons a:hover::before {
        left: 100% !important;
    }

    .theme-buttons a:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 12px 30px rgba(230, 60, 63, 0.4) !important;
    }

    .theme-buttons a:active {
        transform: translateY(0) !important;
    }

    .btn-store {
        background: linear-gradient(90deg, #E63C3F, #FF04EE);
    }

    .btn-product {
        background: linear-gradient(90deg, #ff6a6a, #ff00aa);
    }

    .btn-preview {
        background: linear-gradient(90deg, #ff0088, #8800ff);
    }

    .theme-welcome-image {
        flex: 1 1 40%;
        text-align: center;
    }

    .theme-welcome-image img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
    }

    @media(max-width: 768px) {
        .theme-welcome-inner {
            flex-direction: column;
            text-align: center;
            padding: 40px 20px;
        }

        .theme-welcome-text,
        .theme-welcome-image {
            flex: 1 1 100%;
        }

        .theme-buttons {
            justify-content: center;
        }
    }
</style>

    <div class="theme-welcome-inner">
        <div class="theme-welcome-text">
            <h1><?php echo esc_html(sprintf(__('Welcome to %s', 'hoverbest'), $theme_name)); ?></h1>

            <p><?php echo esc_html__('This theme is fully compatible with WordPress Full Site Editing (FSE). You can build your pages using the pre-designed templates and blocks available in the site editor.', 'hoverbest'); ?></p>

            <p>
                <?php
                printf(
                    esc_html__('To use templates and block patterns, go to the Editor.', 'hoverbest'),
                    '<a href="' . esc_url($theme_url) . '" class="button button-primary" target="_blank" rel="noopener">' . esc_html__('Theme Page', 'hoverbest') . '</a>'
                );
                ?>
            </p>

            <ul>
                <li><?php echo esc_html__('Go to Appearance → Editor (Site Editor)', 'hoverbest'); ?></li>
                <li><?php echo esc_html__('Choose a template or create a new one', 'hoverbest'); ?></li>
                <li><?php echo esc_html__('Insert block patterns from "Patterns" or custom blocks from "Blocks"', 'hoverbest'); ?></li>
            </ul>

            <p><?php echo esc_html__('Consider upgrading to the Pro version to unlock premium templates, blocks, animations, and priority support.', 'hoverbest'); ?></p>

            <div class="theme-buttons">
                <a class="btn-store" href="https://themesmachine.com" target="_blank" rel="noopener">
                    <?php echo esc_html__('Visit Theme Store', 'hoverbest'); ?>
                </a>
                <a class="btn-product" href="<?php echo esc_url($theme_url); ?>" target="_blank" rel="noopener">
                    <?php echo esc_html__('View Theme Page', 'hoverbest'); ?>
                </a>
                <a class="btn-preview" href="https://themesmachine.com/index.php/previews-themes/?url=https://themesmachine.com/previews/hoverbest/" target="_blank" rel="noopener">
                    <?php echo esc_html__('Live Preview Pro', 'hoverbest'); ?>
                </a>
            </div>
        </div>

        <div class="theme-welcome-image">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/theme-welcome/theme-bundle.webp'); ?>" alt="<?php esc_attr_e('Theme Bundle Image', 'hoverbest'); ?>">
        </div>
    </div>
</div>


