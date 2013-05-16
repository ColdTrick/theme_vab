<?php

	$entity = elgg_extract("entity", $vars);
	
	if ($entity->tags) {
		$title = elgg_echo("tags");
		
		$tags = elgg_view("output/tags", array("value" => $entity->tags));
		
		echo elgg_view_module("aside", $title, $tags);
	}