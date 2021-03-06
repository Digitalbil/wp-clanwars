<div class="wrap wp-clanwars-onboarding-page setup-team">

    <h1><?php _e( 'Get started with WP-Clanwars', WP_CLANWARS_TEXTDOMAIN ); ?></h1>
    <h2><?php _e( 'Setup your team', WP_CLANWARS_TEXTDOMAIN ); ?></h2>

    <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">

        <input type="hidden" name="action" value="wp-clanwars-setupteam" />

        <?php wp_nonce_field('wp-clanwars-setupteam'); ?>

        <p><?php _e( 'Hey there! Just a couple of things to complete your installation.', WP_CLANWARS_TEXTDOMAIN ); ?></p>

        <p><?php _e( 'What is the name of your team?', WP_CLANWARS_TEXTDOMAIN ); ?></p>
        <p>
            <input type="text" class="regular-text" name="title" required="true" placeholder="<?php _e("Type in your team's name", WP_CLANWARS_TEXTDOMAIN); ?>" />
        </p>

        <p><?php _e( 'Where is it from?', WP_CLANWARS_TEXTDOMAIN ); ?></p>
        <p>
            <?php $html_country_select_helper('name=country&class=select2'); ?>
        </p>

        <p class="submit">
            <input type="submit" class="button button-primary" value="<?php echo esc_attr($page_submit); ?>" />
        </p>

    </form>

</div><!-- .wrap -->