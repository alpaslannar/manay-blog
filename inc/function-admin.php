<?php
/*
@package manayfashion
*/
function manayfashion_add_admin_page() {
    add_menu_page('Manayfashion Menu Options', 'Mny Options', 'administrator', 'manayfashion_options', 'manayfashion_theme_create_page', get_template_directory_uri() . '/img/admin-options.png', 32);
    
    add_submenu_page('manayfashion_options', 'Manayfashion Menu Options', 'General', 'administrator', 'manayfashion_options', 'manayfashion_theme_create_page');
    
    add_submenu_page('manayfashion_options', 'Manayfashion Contact Page Options', 'Contact', 'administrator', 'manayfashion_options_contact_page', 'manayfashion_theme_contact_page');
    
    add_action('admin_init', 'manayfashion_custom_settings');
}
add_action('admin_menu', 'manayfashion_add_admin_page');

function manayfashion_custom_settings() {
    // General Settings Page
    register_setting('manayfashion-settings-group', 'facebook_url');
    register_setting('manayfashion-settings-group', 'twitter_url');
    register_setting('manayfashion-settings-group', 'gplus_url');
    register_setting('manayfashion-settings-group', 'tumbler_url');
    register_setting('manayfashion-settings-group', 'youtube_url');
    register_setting('manayfashion-settings-group', 'pinterest_url');
    register_setting('manayfashion-settings-group', 'mnyfashion_homead');
    register_setting('manayfashion-settings-group', 'mnyfashion_cText');
    register_setting('manayfashion-settings-group', 'first_category_name');
    register_setting('manayfashion-settings-group', 'second_category_name');
    register_setting('manayfashion-settings-group', 'third_category_name');
    
    add_settings_section('manayfashion-general-options', 'Header Options', 'manayfashion_general_options', 'manayfashion_options');
    // For Facebook
    add_settings_field('header-facebook', 'Facebook URL', 'mnyfashion_fb', 'manayfashion_options', 'manayfashion-general-options');
    // For Twitter
    add_settings_field('header-twitter', 'Twitter URL', 'mnyfashion_tw', 'manayfashion_options', 'manayfashion-general-options');
    // For GPlus
    add_settings_field('header-gplus', 'Google+ URL', 'mnyfashion_gp', 'manayfashion_options', 'manayfashion-general-options');
    // For Tumbler
    add_settings_field('header-tumbler', 'Tumblr URL', 'mnyfashion_tb', 'manayfashion_options', 'manayfashion-general-options');
    // For Youtube
    add_settings_field('header-youtube', 'Youtube URL', 'mnyfashion_yt', 'manayfashion_options', 'manayfashion-general-options');
    // For Pinterest
    add_settings_field('header-pinterest', 'Pinterest URL', 'mnyfashion_pin', 'manayfashion_options', 'manayfashion-general-options');
    
    add_settings_section('manayfashion-ad-options', 'Homepage Ad', 'manayfashion_ad_options', 'manayfashion_options');
    // For Homepage Ad
    add_settings_field('homepage-ad', 'Paste Your Ad Code', 'mnyfashion_homead', 'manayfashion_options', 'manayfashion-ad-options');
    // For Homepage Category
    add_settings_section('manayfashion-category-options', 'Homepage Category Section', 'manayfashion_category_options', 'manayfashion_options');
    add_settings_field('first-category-name', 'First Category Name', 'first_category_name', 'manayfashion_options', 'manayfashion-category-options');
    add_settings_field('second-category-name', 'Second Category Name', 'second_category_name', 'manayfashion_options', 'manayfashion-category-options');
    add_settings_field('third-category-name', 'Third Category Name', 'third_category_name', 'manayfashion_options', 'manayfashion-category-options');
    // For Footer
    add_settings_section('manayfashion-footer-options', 'Footer Options', 'manayfashion_footer_options', 'manayfashion_options');
    add_settings_field('footer-copy-text', 'Copyright Text', 'mnyfashion_cText', 'manayfashion_options', 'manayfashion-footer-options');   
    // Contact Page
    register_setting('manayfashion-contact-group', 'contact_textaream');
    register_setting('manayfashion-contact-group', 'contact_email_box');
    register_setting('manayfashion-contact-group', 'contact_face_name');
    register_setting('manayfashion-contact-group', 'contact_face_url');
    register_setting('manayfashion-contact-group', 'contact_tw_name');
    register_setting('manayfashion-contact-group', 'contact_tw_url');
    register_setting('manayfashion-contact-group', 'contact_gplus_name');
    register_setting('manayfashion-contact-group', 'contact_gplus_url');
    add_settings_section('manayfashion-contact-options', 'Contact Page Social Accounts', 'manayfashion_contact_page',  'manayfashion_options_contact_page');
    add_settings_field('contact-text-field-url', 'Your Message', 'contact_text_url', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    add_settings_field('contact-email-field', 'Email Address', 'contact_email_address', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    add_settings_field('contact-facebook-field', 'Facebook Name', 'contact_facebook_name', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    add_settings_field('contact-facebook-field-url', 'Facebook URL', 'contact_facebook_url', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    add_settings_field('contact-twitter-field', 'Twitter Name', 'contact_twitter_name', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    add_settings_field('contact-twitter-field-url', 'Twitter URL', 'contact_twitter_url', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    add_settings_field('contact-gplus-field', 'Google+ Name', 'contact_gplus_name', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    add_settings_field('contact-gplus-field-url', 'Google+ URL', 'contact_gplus_url', 'manayfashion_options_contact_page', 'manayfashion-contact-options');
    
}
/* ============================= CONTACT ========================= */
function manayfashion_contact_page() {
    echo 'You can edit your socail media accounts on contact page.';
}
function contact_text_url() {
    $contactMessage = esc_attr(get_option('contact_textaream'));
    echo '<textarea style="width:600px;" name="contact_textaream" rows="6" placeholder="Your Message On Your Contact Page">'.$contactMessage.'</textarea>';
}
function contact_email_address() {
    $contactEmail = esc_attr(get_option('contact_email_box'));
    echo '<input style="width:300px;" type="text" name="contact_email_box" value="'.$contactEmail.'" placeholder="example@mysite.com"/>';
}
function contact_facebook_name () {
    $contactFacename = esc_attr(get_option('contact_face_name'));
    echo '<input style="width:300px;" type="text" name="contact_face_name" value="'.$contactFacename.'" placeholder="Facebook Page Name"/>';
}
function contact_facebook_url() {
    $contactFaceurl = esc_attr(get_option('contact_face_url'));
    echo '<input style="width:300px;" type="url" name="contact_face_url" value="'.$contactFaceurl.'" placeholder="Facebook Page URL"/>';
}
function contact_twitter_name () {
    $contactTwname = esc_attr(get_option('contact_tw_name'));
    echo '<input style="width:300px;" type="text" name="contact_tw_name" value="'.$contactTwname.'" placeholder="Twitter Page Name"/>';
}
function contact_twitter_url() {
    $contactTwurl = esc_attr(get_option('contact_tw_url'));
    echo '<input style="width:300px;" type="url" name="contact_tw_url" value="'.$contactTwurl.'" placeholder="Twitter Page URL"/>';
}
function contact_gplus_name () {
    $contactGname = esc_attr(get_option('contact_gplus_name'));
    echo '<input style="width:300px;" type="text" name="contact_gplus_name" value="'.$contactGname.'" placeholder="Google+ Page Name"/>';
}
function contact_gplus_url() {
    $contactGurl = esc_attr(get_option('contact_gplus_url'));
    echo '<input style="width:300px;" type="url" name="contact_gplus_url" value="'.$contactGurl.'" placeholder="Google+ Page URL"/>';
}
/* ============================== GENERAL =========================*/
function mnyfashion_fb() {
    $facebook = esc_attr(get_option('facebook_url'));
    echo '<input type="url" name="facebook_url" value="'.$facebook.'" placeholder="Your Facebook URL"/>';
}
function mnyfashion_tw() {
    $twitter = esc_attr(get_option('twitter_url'));
    echo '<input type="url" name="twitter_url" value="'.$twitter.'" placeholder="Your Twitter URL"/>';
}
function mnyfashion_gp() {
    $gplus = esc_attr(get_option('gplus_url'));
    echo '<input type="url" name="gplus_url" value="'.$gplus.'" placeholder="Your Google+ URL"/>';
}
function mnyfashion_tb() {
    $tumblr = esc_attr(get_option('tumbler_url'));
    echo '<input type="url" name="tumbler_url" value="'.$tumblr.'" placeholder="Your Tumblr URL"/>';
}
function mnyfashion_yt() {
    $youtube = esc_attr(get_option('youtube_url'));
    echo '<input type="url" name="youtube_url" value="'.$youtube.'" placeholder="Your Youtube URL"/>';
}
function mnyfashion_pin() {
    $pinterest = esc_attr(get_option('pinterest_url'));
    echo '<input type="url" name="pinterest_url" value="'.$pinterest.'" placeholder="Your Pinterest URL"/>';
}
function manayfashion_ad_options() {
    $ads = 'You can put your ads.';
    echo $ads;
}
function mnyfashion_homead() {
    $homead = esc_attr(get_option('mnyfashion_homead'));
    echo '<textarea name="mnyfashion_homead" rows="3" placeholder="Paste Your Ad Code Here">'.$homead.'</textarea>';
}
function manayfashion_category_options() {
    $generalCat = 'You can customize your category on homepage';
    echo $generalCat;
}
function first_category_name() {
    $selected = esc_attr(get_option('first_category_name'));
    $cats = get_categories(array('hide_empty'=> 0));
     echo '<select name="first_category_name">';
    foreach($cats as $ids=>$cat){
       
           if($selected == $cat->slug ) {
               echo  '<option value="'.$cat->slug.'" selected>'.$cat->name.'</option>';
           } else {
               echo  '<option value="'.$cat->slug.'">'.$cat->name.'</option>'; 
           }
    }
    echo "</select>";
}
function second_category_name() {
    $selected = esc_attr(get_option('second_category_name'));
    $cats = get_categories(array('hide_empty'=> 0));
     echo '<select name="second_category_name">';
    foreach($cats as $ids=>$cat){
           if($selected == $cat->slug ) {
               echo  '<option value="'.$cat->slug.'" selected>'.$cat->name.'</option>';
           } else {
               echo  '<option value="'.$cat->slug.'">'.$cat->name.'</option>'; 
           }
    }
    echo "</select>";   
}
function third_category_name() {
    $selected = esc_attr(get_option('third_category_name'));
    $cats = get_categories(array('hide_empty'=> 0));
     echo '<select name="third_category_name">';
    foreach($cats as $ids=>$cat){
           if($selected == $cat->slug ) {
               echo  '<option value="'.$cat->slug.'" selected>'.$cat->name.'</option>';
           } else {
               echo  '<option value="'.$cat->slug.'">'.$cat->name.'</option>'; 
           }    
    }
    echo "</select>";  
}
function manayfashion_footer_options() {
    $footerText = 'You can customize your pages footer.';
    echo $footerText;
}
function mnyfashion_cText() {
    $copyText = esc_attr(get_option('mnyfashion_cText'));
    echo '<textarea name="mnyfashion_cText" rows="3" placeholder="Paste Your Footer Text">'.$copyText.'</textarea>';
}
/* Contact Page */
function manayfashion_theme_contact_page() {
    require_once(get_template_directory() . '/inc/templates/contact-template.php');
}
/* Home page */
function manayfashion_theme_create_page() {
    require_once(get_template_directory() . '/inc/templates/admin-template.php');
}
function manayfashion_general_options() {
    $socialdesc = 'You can customize the Breaking News text and Your social media accounts.';
    echo $socialdesc;
}