<?php
	define("THEME_COLOR_1", "FFFFE6"); // (background) yellow
	define("THEME_COLOR_2", "422918"); // font brown
	define("THEME_COLOR_3", "FF5733"); // title red/orange
	define("THEME_COLOR_4", "FFECB1"); // zijbalk donker geel
	define("THEME_COLOR_5", "DBE0B7"); // zacht groen
	
	define("THEME_GRAPHICS", elgg_get_site_url() . "mod/theme_vab/_graphics/");
	
	require_once(dirname(__FILE__) . "/lib/hooks.php");
	
	elgg_register_event_handler('init', 'system', 'theme_vab_init');
	elgg_register_event_handler('pagesetup', 'system', 'theme_vab_pagesetup', 1000);
	
	function theme_vab_init() {
		elgg_extend_view("css/elgg", "css/theme_vab/site");
		elgg_extend_view("js/elgg", "js/theme_vab/site");
		
		elgg_register_page_handler('profile', 'theme_vab_profile_page_handler');
		
		elgg_register_plugin_hook_handler("register", "menu:site", "theme_vab_setup_menu");
		elgg_register_plugin_hook_handler("prepare", "menu:owner_block", "theme_vab_prepare_owner_block_menu");
		elgg_register_plugin_hook_handler("route", "best_practice", "theme_vab_route_best_practices_hook");
	
		// handle index page
		elgg_register_plugin_hook_handler('index', 'system', 'theme_vab_custom_index');
	}
	
	function theme_vab_pagesetup(){
		if (elgg_get_context() == 'groups') {
			elgg_unregister_menu_item("page", "groups:all");
			elgg_unregister_menu_item("page", "groups:owned");
		}
	}
	
	function theme_vab_custom_index($hook_name, $entity_type, $return_value, $parameters){
		forward("groups/all");
	}
	
	/**
	* Profile page handler
	*
	* @param array $page Array of URL segments passed by the page handling mechanism
	* @return bool
	*/
	function theme_vab_profile_page_handler($page) {
	
		if (isset($page[0])) {
			$username = $page[0];
			$user = get_user_by_username($username);
			elgg_set_page_owner_guid($user->guid);
		}
	
		// short circuit if invalid or banned username
		if (!$user || ($user->isBanned() && !elgg_is_admin_logged_in())) {
			register_error(elgg_echo('profile:notfound'));
			forward();
		}
	
		$action = NULL;
		if (isset($page[1])) {
			$action = $page[1];
		}
	
		if ($action == 'edit') {
			// use the core profile edit page
			$base_dir = elgg_get_root_path();
			require "{$base_dir}pages/profile/edit.php";
			return true;
		}
	
		// main profile page
		$content = elgg_view('profile/wrapper');
	
		$body = elgg_view_layout('one_sidebar', array('content' => $content));
		echo elgg_view_page($user->name, $body);
		return true;
	}
	
	