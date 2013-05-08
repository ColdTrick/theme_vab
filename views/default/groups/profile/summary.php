<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();

/*
?>
<div class="groups-profile clearfix elgg-image-block">
	<div class="elgg-image">
		<div class="groups-profile-icon">
			<?php echo elgg_view_entity_icon($group, 'large', array('href' => '')); ?>
		</div>
		<div class="groups-stats">
			<p>
				<b><?php echo elgg_echo("groups:owner"); ?>: </b>
				<?php
					echo elgg_view('output/url', array(
						'text' => $owner->name,
						'value' => $owner->getURL(),
						'is_trusted' => true,
					));
				?>
			</p>
			<p>
			<?php
				echo elgg_echo('groups:members') . ": " . $group->getMembers(0, 0, TRUE);
			?>
			</p>
		</div>
	</div>

	<div class="groups-profile-fields elgg-body">
		<?php
			echo elgg_view('groups/profile/fields', $vars);
		?>
	</div>
</div>
<?php
?>

*/
if ($description = $group->description){
// 	$title = elgg_echo("groups:description");
	
// 	$link_state = "";
// 	$description_state = "";
// 	if (!empty($_COOKIE["group-description-" . $group->getGUID()])) {
// 		$link_state = "elgg-state-active";
// 		$description_state = "hidden";
// 	}
	
// 	$header = "<span class='groups-widget-viewall'>";
// 	$header .= "<a href='#group-description-" . $group->getGUID() . "' rel='toggle' class='" . $link_state . "'>";
// 	$header .= "<span class='theme-vab-groups-collapse'>" . elgg_echo("theme_vab:groups:collapse") . "</span>";
// 	$header .= "<span class='theme-vab-groups-expand'>" . elgg_echo("theme_vab:groups:expand") . "</span>";
// 	$header .= "</a>";
// 	$header .= "</span>";
	
// 	$header .= "<h3>" . $title . "</h3>";
	
// 	$body = "<div id='group-description-" . $group->getGUID() . "' class='" . $description_state . "'>";
// 	$body .= $description;
// 	$body .= "</div>";
	
// 	echo elgg_view_module("info", "", $body, array("header" => $header));
echo $description;
}

