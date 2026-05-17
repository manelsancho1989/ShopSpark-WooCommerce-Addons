<?php
defined('ABSPATH') || exit;

do_action('woocommerce_before_customer_login_form');
?>

<div class="shopspark-auth container">

    <div class="shopspark-auth__wrapper">

        <!-- LOGIN -->
        <div class="shopspark-auth__login">

            <h2><?php esc_html_e('Login', 'shopspark'); ?></h2>

            <form method="post" class="woocommerce-form woocommerce-form-login login">

                <p class="field">
                    <input id="username" type="text" name="username" autocomplete="username" required placeholder=" " />
                    <label
                        for="username"
                        title="<?php esc_attr_e('Username or email', 'shopspark'); ?>"
                        data-title="<?php esc_attr_e('Username or email', 'shopspark'); ?>">
                    </label>
                </p>

                <p class="field">
                    <input id="password" type="password" name="password" autocomplete="current-password" required placeholder=" " />
                    <label
                        for="password"
                        title="<?php esc_attr_e('Password', 'shopspark'); ?>"
                        data-title="<?php esc_attr_e('Password', 'shopspark'); ?>">
                    </label>
                </p>

                <?php do_action('woocommerce_login_form'); ?>

                <button type="submit" name="login" class="button">
                    <?php esc_html_e('Login', 'shopspark'); ?>
                </button>
                <p><?php esc_html_e('No Account Yet', 'shopspark'); ?>&nbsp;<span><?php esc_html_e('Create Account', 'shopspark'); ?></span></p>
                <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
            </form>

        </div>

        <!-- REGISTER -->
        <div class="shopspark-auth__register">

            <h2><?php esc_html_e('Register', 'shopspark'); ?></h2>

            <form method="post" class="woocommerce-form woocommerce-form-register register">

                <p>
                <p class="field">
                    <input id="username" type="text" name="username" autocomplete="username" required placeholder=" " />

                    <label
                        for="username"
                        title="<?php esc_attr_e('Username or email', 'shopspark'); ?>"
                        data-title="<?php esc_attr_e('Username or email', 'shopspark'); ?>">
                    </label>
                </p>
                </p>

                <p>
                <p class="field">
                    <input id="password" type="password" name="password" autocomplete="current-password" required placeholder=" " />

                    <label
                        for="password"
                        title="<?php esc_attr_e('Password', 'shopspark'); ?>"
                        data-title="<?php esc_attr_e('Password', 'shopspark'); ?>">
                    </label>
                </p>
                </p>

                <?php do_action('woocommerce_register_form'); ?>

                <button type="submit" name="register" class="button">
                    <?php esc_html_e('Register', 'shopspark'); ?>
                </button>

                <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>

            </form>

        </div>

    </div>

</div>

<?php do_action('woocommerce_after_customer_login_form'); ?>