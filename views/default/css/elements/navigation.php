<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
	clear: both;
}
.elgg-pagination li {
	display: inline;
	margin: 0 6px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	padding: 2px 6px;
	color: #<?php echo THEME_COLOR_2;?>;
	border: 1px solid #<?php echo THEME_COLOR_2;?>;
	font-size: 12px;
}
.elgg-pagination a:hover {
	background: #<?php echo THEME_COLOR_3;?>;
	color: white;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCCCCC;
	border-color: #CCCCCC;
}
.elgg-pagination .elgg-state-selected span {
	color: white;
	background: #<?php echo THEME_COLOR_3;?>;
	border-color: #<?php echo THEME_COLOR_2;?>;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 1px solid #cccccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 1px solid #ccc;
	border-bottom: 0;
	background: #<?php echo THEME_COLOR_5;?>;
	margin: 0 0 0 2px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
	
}

.elgg-tabs > li:hover {
	background: #<?php echo THEME_COLOR_1;?>;
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 2px 2px 0;
	text-align: center;
	height: 21px;
	color: #<?php echo THEME_COLOR_2; ?>;
}
.elgg-tabs a:hover {
	background: #<?php echo THEME_COLOR_1;?>;
	color: #<?php echo THEME_COLOR_2; ?>;
}
.elgg-tabs .elgg-state-selected {
	background: #<?php echo THEME_COLOR_1; ?>;
	top: 1px;
	position: relative;
}
.elgg-tabs .elgg-state-selected a {
	position: relative;
	background: <?php echo THEME_COLOR_1; ?>;
	color: #<?php echo THEME_COLOR_2; ?>;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
	color: #bababa;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after {
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #999;
}
.elgg-breadcrumbs > li > a:hover {
	color: #0054a7;
	text-decoration: underline;
}

.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: -6px;
	left: 0;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}

.elgg-menu-topbar > li {
	float: left;
}

.elgg-menu-topbar > li > a {
	padding-top: 2px;
	color: #eee;
	margin: 1px 15px 0;
}

.elgg-menu-topbar > li > a:hover {
	color: #4690D6;
	text-decoration: none;
}

.elgg-menu-topbar-alt {
	float: right;
}

.elgg-menu-topbar .elgg-icon {
	vertical-align: middle;
	margin-top: -1px;
}

.elgg-menu-topbar > li > a.elgg-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}

.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	width: 18px;
	height: 18px;
}

/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	z-index: 1;
}

.elgg-menu-site > li > a {
	font-size: 18px;
	padding: 2px 0px 2px 14px;
	color: #<?php echo THEME_COLOR_2;?>;
	min-width: 275px;
	line-height: 1.4em;
	border-left: 28px solid #<?php echo THEME_COLOR_1;?>;
}

.elgg-menu-site > li > a:hover {
	text-decoration: none;
}

.elgg-menu-site-default {
	position: absolute;
	top: 110px;
	left: 0;
}

.elgg-menu-site-default > li {
	padding-bottom: 14px;
	
}

.elgg-menu-site-default > li > a {
	
}

.elgg-menu-site > li > ul {
	display: none;
	background-color: white;
}

.elgg-menu-site > li:hover > ul {
	display: block;
}

.elgg-menu-site-default > .elgg-state-selected > a,
.elgg-menu-site-default > li:hover > a {
	background: #<?php echo THEME_COLOR_1;?>;

	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.elgg-menu-site-more {
	position: relative;
	left: -1px;
	width: 100%;
	min-width: 150px;
	border: 1px solid #999;
	border-top: 0;

	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}

.elgg-menu-site-more > li > a {
	background-color: white;
	color: #555;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.elgg-menu-site-more > li > a:hover {
	background: #4690D6;
	color: white;
}

.elgg-menu-site-more > li:last-child > a,
.elgg-menu-site-more > li:last-child > a:hover {
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.elgg-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
}

/* ***************************************
	TITLE
*************************************** */

.elgg-main .elgg-menu-item-groups-edit,
.elgg-main .elgg-menu-item-groups-invite,
.elgg-main .elgg-menu-item-groups-leave,
.elgg-main .elgg-menu-item-groups-join {
	display: none;
}

.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	margin-bottom: 5px;
	border-bottom: 1px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-menu-filter > li {
	float: left;
	border: 1px solid #ccc;
	border-bottom: 0;
	background: #<?php echo THEME_COLOR_5;?>;
	margin: 0 0 0 2px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.elgg-menu-filter > li:hover {
	background: #<?php echo THEME_COLOR_1;?>;
}
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 2px 2px 0;
	text-align: center;
	height: 21px;
	color: #<?php echo THEME_COLOR_2; ?>;
}
.elgg-menu-filter > li > a:hover {
	background: #<?php echo THEME_COLOR_1;?>;
	color: #<?php echo THEME_COLOR_2; ?>;
}
.elgg-menu-filter > .elgg-state-selected {
	background: #<?php echo THEME_COLOR_1; ?>;
	top: 1px;
}
.elgg-menu-filter > .elgg-state-selected > a {
	position: relative;
	background: <?php echo THEME_COLOR_1; ?>;
	color: #<?php echo THEME_COLOR_2; ?>;
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin-bottom: 15px;
}

.elgg-menu-page a {
	display: block;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	
	background-color: #<?php echo THEME_COLOR_4;?>;
	border: 1px solid #<?php echo THEME_COLOR_4;?>;
	margin: 0 0 3px;
	padding: 2px 4px 2px 8px;
	text-decoration: none;
}

.elgg-menu-page a:hover {
	background-color: #<?php echo THEME_COLOR_1;?>;
}

.elgg-menu-page li.elgg-state-selected > a {
	color: #<?php echo THEME_COLOR_3; ?>;
}

.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	overflow: hidden;

	min-width: 165px;
	max-width: 250px;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: #FFF;
	
	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #ddd;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #ccc;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	SITE FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}

/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 4px;
}

/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 5px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #aaa;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}

/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	display: block;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
	
	background-color: #<?php echo THEME_COLOR_4; ?>;
	border: 1px solid #<?php echo THEME_COLOR_4; ?>;
	
	text-decoration: none;
}

.elgg-menu-owner-block li a:hover {
	background-color: #<?php echo THEME_COLOR_1; ?>;
}

.elgg-menu-owner-block li.elgg-state-selected > a {
	color: #<?php echo THEME_COLOR_3; ?>;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #aaa;
	height: 16px;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
}

/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}

.elgg-menu-widget > .elgg-menu-item-collapse {
	left: 5px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 5px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 25px;
}
