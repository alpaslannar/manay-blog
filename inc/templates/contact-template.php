<div class="contact">
<h1>Contact Page Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('manayfashion-contact-group'); ?>
    <?php do_settings_sections('manayfashion_options_contact_page'); ?>
    <?php submit_button(); ?>
</form>
</div>