<?php

	function theme_vab_setup_menu($hook, $entity_type, $returnvalue, $params){
		global $THEME_VAB_HIDE_SITE_MENU;
		
		$menu_items = array();
		
		if (empty($THEME_VAB_HIDE_SITE_MENU)) {
			$menu_items[] = ElggMenuItem::factory(array("name" => "groups",  "href" => "groups/all", "text" => elgg_echo("theme_vab:menu:groups")));
		
			$menu_items[] = ElggMenuItem::factory(array("name" => "werkgroep",  "href" => "werkgroep", "text" => elgg_echo("theme_vab:menu:werkgroep")));
			$menu_items[] = ElggMenuItem::factory(array("name" => "activity",  "href" => "activity?type=object", "text" => elgg_echo("theme_vab:menu:activity")));
			$menu_items[] =	ElggMenuItem::factory(array("name" => "nieuws",  "href" => "search?q=nieuws&search_type=tags", "text" => elgg_echo("theme_vab:menu:nieuws")));
			$menu_items[] =	ElggMenuItem::factory(array("name" => "best_practice",  "href" => "best_practice/all", "text" => elgg_echo("best_practices:menu:site")));
		
			if(elgg_is_admin_logged_in()){
				$menu_items[] =	ElggMenuItem::factory(array("name" => "admin",  "href" => "admin", "text" => elgg_echo("admin")));
			}
			if(!elgg_is_logged_in()){
				$menu_items[] =	ElggMenuItem::factory(array("name" => "login",  "href" => "login", "text" => elgg_echo("login")));
			}
		} else {
			$menu_items[] = ElggMenuItem::factory(array("name" => "home",  "href" => elgg_get_site_url(), "text" => elgg_echo("theme_vab:menu:home")));
			
		}
	
		return $menu_items;
	}
	
	function theme_vab_prepare_owner_block_menu($hook, $entity_type, $returnvalue, $params) {
	
		if (isset($returnvalue["default"]) && ($page_owner = elgg_get_page_owner_entity()) && elgg_instanceof($page_owner, "group")) {
			// prepend a link to the group profile
			$group_profile = ElggMenuItem::factory(array(
				"name" => "group_profile",
				"text" => elgg_echo("groups:description"),
				"href" => $page_owner->getURL()
			));
			if (current_page_url() == $page_owner->getURL()) {
				$group_profile->setSelected();
			}
			array_unshift($returnvalue["default"], $group_profile);
				
			// append a link to the group members
			$members = ElggMenuItem::factory(array(
				"name" => "members",
				"text" => elgg_echo("groups:members"),
				"href" => "groups/members/" . $page_owner->getGUID()
			));
			if (current_page_url() == elgg_normalize_url("groups/members/" . $page_owner->getGUID())) {
				$members->setSelected();
			}
			$returnvalue["default"][] = $members;
		}
	
	
		return $returnvalue;
	}
	
	function theme_vab_route_best_practices_hook($hook, $entity_type, $returnvalue, $params) {
		global $THEME_VAB_HIDE_SITE_MENU;
		$result = $returnvalue;
		
		if (!empty($returnvalue) && is_array($returnvalue)) {
			$page = elgg_extract("segments", $returnvalue);
			
			switch ($page[0]) {
				case "view":
					$result = false;
					
					if (isset($page[1])) {
						set_input("guid", (int) $page[1]);
					}
					
					include(dirname(dirname(__FILE__)) . "/pages/best_practices/view.php");
					break;
				case "all":
				case "owner":
				case "group":
				case "friends":
					$THEME_VAB_HIDE_SITE_MENU = true;
					break;
			}
		}
		
		return $result;
	}