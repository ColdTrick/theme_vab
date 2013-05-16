<?php

	$entity = elgg_extract("entity", $vars);
	
	if ($entity->icontime){
		$icon = elgg_view_entity_icon($entity, "medium", array("href" => false));
		
		echo elgg_view_module("aside", "", $icon);
	}