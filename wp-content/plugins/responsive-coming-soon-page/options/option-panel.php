<?php
	$page = add_menu_page(RCSM_PLUGIN_NAME, __('Responsive Coming Soon Page', RCSM_TEXT_DOMAIN), 'manage_options','rcsm-weblizar', 'rcsm_option_panal_function', 'dashicons-backup', 65); 
function rcsm_truncateString($str, $chars, $to_space, $replacement="...") {
	return($str . $replacement);
}
function rcsm_limit_words($string, $word_limit, $replacement){
function rcsm_style_sheet_function() {  // for custom css 

function show_rcsm_mode_link($wp_admin_bar) {
		$wp_admin_bar->add_node($args);
}
function rcsm_show_admin_notices() {
		</style>
}
/**
}
/**
	<header>
	<div class="container-fluid support">
					<!-- Option Data saving  -->
	<?php
}
// Restore all defaults
//maintenance enable function 'template redirect' 
		if (isset($_GET['rcsm_live_preview'])) {
			if($_GET['rcsm_live_preview']=="yes") {
	} elseif($wl_rcsm_options['layout_status']=='service_unavailable_switch') {		
		$user_values_as = $wl_rcsm_options['user_value'];				
		if (is_array($user_values_as)) {
					//Compare condition to get ture value of home or front page of site ( First get site has home page or front page )
					//Get page and post id if selected from backend and compare condition to redirect or not on message page template
				}
		}
	} elseif($current_status=='service_unavailable_switch') {
		if(!is_home() || is_home()) {
		}
		$user_values_as = $wl_rcsm_options['user_value'];									
				//if user is log-in then we check role.
					// if user role not 'administrator' redirect him to a defined URL page
					//Get page and post id if selected from backend and compare condition to redirect or not on message page template