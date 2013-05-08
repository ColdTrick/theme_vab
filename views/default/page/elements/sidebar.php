<?php
/**
 * Elgg sidebar contents
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */

// echo elgg_view_menu('extras', array(
// 	'sort_by' => 'priority',
// 	'class' => 'elgg-menu-hz',
// ));

$current_page_url = current_page_url();

if(stristr($current_page_url, "/groups/all")){
	$sidebar_key = "theme_vab:menu:speerpunten:all:sidebar";
	$sidebar_text = elgg_echo($sidebar_key);
	if($sidebar_text != $sidebar_key){
		echo elgg_view_module("aside", "", $sidebar_text);
	}
} elseif(stristr($current_page_url, "/groups/member")){
	$sidebar_key = "theme_vab:menu:speerpunten:mine:sidebar";
	$sidebar_text = elgg_echo($sidebar_key);
	if($sidebar_text != $sidebar_key){
		echo elgg_view_module("aside", "", $sidebar_text);
	}
} elseif(stristr($current_page_url, "/werkgroep") && elgg_in_context("static")){
	$groups = array();
	if($group = get_entity(11962952)){
		// werkgroep intern
		$groups[] = $group;
	}
	if($group = get_entity(17221812)){
		// meedenken en meedoen
		$groups[] = $group;
	}
	
	if(!empty($groups)){
		echo elgg_view_module("aside", "", elgg_view_entity_list($groups, array("full_view" => false)));
	}
}

echo elgg_view('page/elements/owner_block', $vars);

echo elgg_view_menu('page', array('sort_by' => 'name'));

if((stristr($current_page_url, "/groups/all") || stristr($current_page_url, "/groups/member"))){
	unset($vars['sidebar']);
}
// optional 'sidebar' parameter
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

if(elgg_in_context("group_profile")){
	echo elgg_view_menu("title");
}

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
if (isset($vars['area2'])) {
	echo $vars['area2'];
}

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
if (isset($vars['area3'])) {
	echo $vars['area3'];
}

if(!elgg_is_logged_in()){
// 	echo elgg_view('core/account/login_box');
}

if(stristr($current_page_url, "/groups/all") ||  stristr($current_page_url, "/blog/all")){
	?>
	<style type="text/css">
		
		<?php 
			if(!elgg_is_logged_in()){
			?>
			.elgg-menu-page-default,
			<?php 	
			}
		?>
		.elgg-layout .elgg-breadcrumbs,
		.elgg-layout .elgg-menu-filter,
		.elgg-layout > .elgg-main > .elgg-head > h2 {
			display: none;
			
		}
		
		.elgg-layout > .elgg-main > .elgg-head {
			background: none;
		}
	</style>
	<?php 
}
