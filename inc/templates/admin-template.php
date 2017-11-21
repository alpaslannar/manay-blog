<div class="container">
<h1>General Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('manayfashion-settings-group'); ?>
    <?php do_settings_sections('manayfashion_options'); ?>
    <?php submit_button(); ?>
</form>
</div>