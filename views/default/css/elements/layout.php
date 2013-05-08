<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 968px;
	background: url(<?php echo THEME_GRAPHICS; ?>page-bg.png) no-repeat top center;
	margin-top: 29px;
	padding-top: 29px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 960px;
	margin: 0 auto;
	height: 100px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 960px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 960px;
	margin: 0 auto;
	padding: 5px 0;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
	width: 960px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	width: 652px;
	min-height: 550px;
	
	float: right;
	position: relative;
}

.elgg-layout > .elgg-main {
	float: right;
	min-height: 590px;
	width: 402px;
	background: url(<?php echo THEME_GRAPHICS; ?>body-bg.png) repeat-y top right;
	
}

.elgg-layout-one-sidebar {
	
}
.elgg-layout-two-sidebar {

}
.elgg-layout-error {
	
}
.elgg-sidebar {
	padding: 0px 10px;
	position: absolute;
	width: 210px;
	top: 18px;
}

.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px 0 10px 20px;
}

.elgg-layout > .elgg-main > .elgg-inner > h2,
.elgg-main > .elgg-head {
	margin: 0 0px 10px -20px;
	padding: 2px 10px 2px 20px;
	background: #<?php echo THEME_COLOR_1; ?>;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}