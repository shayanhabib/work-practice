<?php //custom settings page.. 
function theme_settings_page(){
	?>
	    <div class="wrap">
		    <h1>Theme Settings</h1>
		    <?php 
		    if( isset($_POST) && !empty($_POST) ){
		    	update_option( 'logo', $_POST['logo'] ); 
		    	update_option( 'phone_number', $_POST['phone_number'] ); 
		    	update_option( 'address', $_POST['address'] ); 
		    	update_option( 'fax_number', $_POST['fax_number'] ); 
		    	update_option( 'facebook_url', $_POST['facebook_url'] ); 
		    	update_option( 'twitter_url', $_POST['twitter_url'] ); 
		    	update_option( 'linkedin_url', $_POST['linkedin_url'] ); 
		    	update_option( 'pinterest_url', $_POST['pinterest_url'] );
		    }
		    ?>
		    <form method="post" action="admin.php?page=theme-settings" enctype="multipart/form-data">
		        <?php
		            settings_fields("section");
		            settings_fields("section-contact");
		            settings_fields("section-social");
		            do_settings_sections("theme-options");      
		            submit_button(); 
		        ?>          
		    </form>
		</div>
	<?php
}

function add_theme_menu_item() {
	add_menu_page("Theme Settings", "Theme Settings", "manage_options", "theme-settings", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function display_logo(){
	?>
    	<input type="file" name="logo" />
    	<img src="<?php echo get_option('logo'); ?>" alt="" />
    <?php
}

function handle_logo_upload() {

	if(!empty($_FILES["logo"]["tmp_name"])) {
		$urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	  
	return $option;
}

function display_phone(){
	?>
    	<input type="text" name="phone_number" id="phone_number" value="<?php echo get_option('phone_number'); ?>" />
    <?php
}

function display_address(){
	?>
    	<input type="text" name="address" id="address" value="<?php echo get_option('address'); ?>" />
    <?php
}

function display_fax(){
	?>
    	<input type="text" name="fax_number" id="fax_number" value="<?php echo get_option('fax_number'); ?>" />
    <?php
}

function display_facebook(){
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_twitter(){
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_linkedin(){
	?>
    	<input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
    <?php
}

function display_pinterest(){
	?>
    	<input type="text" name="pinterest_url" id="pinterest_url" value="<?php echo get_option('pinterest_url'); ?>" />
    <?php
}

function display_theme_panel_fields(){
	add_settings_section("section", "General Settings", null, "theme-options");
	
	add_settings_field("logo", "Logo", "display_logo", "theme-options", "section");

	add_settings_section("section-contact", "Contact Information", null, "theme-options");
	
	add_settings_field("phone_number", "Phone number", "display_phone", "theme-options", "section-contact");
    add_settings_field("address", "Address", "display_address", "theme-options", "section-contact");
    add_settings_field("fax_number", "Fax number", "display_fax", "theme-options", "section-contact");

    add_settings_section("section-social", "Social Links", null, "theme-options");

    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook", "theme-options", "section-social");
    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter", "theme-options", "section-social");
    add_settings_field("linkedin_url", "LinkedIn Profile Url", "display_linkedin", "theme-options", "section-social");
    add_settings_field("pinterest_url", "Pinterest Profile Url", "display_pinterest", "theme-options", "section-social");

    register_setting("section", "logo", "handle_logo_upload");

    register_setting("section-contact", "phone_number");
    register_setting("section-contact", "address");
    register_setting("section-contact", "fax_number");

    register_setting("section-social", "facebook_url");
    register_setting("section-social", "twitter_url");
    register_setting("section-social", "linkedin_url");
    register_setting("section-social", "pinterest_url");
}

add_action("admin_init", "display_theme_panel_fields");