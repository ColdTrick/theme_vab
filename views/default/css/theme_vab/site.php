<?php ?>

.elgg-list .elgg-menu-entity {
	display: none;
}

.elgg-form-groups-search .elgg-input-search,
.elgg-form-groups-find .elgg-input-search {
	width: 130px;
	margin-right: 10px;
}

.groups-profile {
	display: none;
}

#groups-tools > li {
	width: 100%;
	margin:0;
	min-height: 0;
}

#profile-details {
	padding: 0 15px;
}
	
#profile-details > h2 {
	display: none;
}

.theme-vab-site-link {
	display: inline-block;
	width: 600px;
	height: 50px;
	margin-left: 160px;
}

#profile_manager_register_left {
	width: 100%;
}

#profile_manager_register_right {
	width: inherit;
}

/* tidypics full view fix */
.elgg-photo {
	width: 100%;
}

/* search box adjustments */
form.elgg-search-header {
	bottom: 15px;
}

form.elgg-search-header input.search-input[type="text"],
form.elgg-search-header {
	border-color: #<?php echo THEME_COLOR_5; ?>;
}

form.elgg-search-header input[type="text"] {
	color: #999;
	background-color: white;
	width: 130px;
}

form.elgg-search-header input[type="text"]:focus,
form.elgg-search-header input[type="text"]:active {
	color: #<?php echo THEME_COLOR_2; ?>;
}

.elgg-search-header .search-advanced-type-selection > li > a {
	background-color: #<?php echo THEME_COLOR_5; ?>;
	color: #<?php echo THEME_COLOR_2; ?>;
}

.elgg-search-header .search-advanced-type-selection-dropdown {
	border-color: #<?php echo THEME_COLOR_5; ?>;
}

.elgg-search-header .search-advanced-type-selection-dropdown a:hover {
	background-color: #<?php echo THEME_COLOR_5; ?>;
	color: #<?php echo THEME_COLOR_2; ?>;
}

.search-heading-category, 
.elgg-form-search-advanced-search {
	display: none;
}

.elgg-state-active .theme-vab-groups-collapse {
	display: none;
}

.elgg-state-active .theme-vab-groups-expand {
	display: inline;
}

.theme-vab-groups-expand {
	display: none;
}

.theme-vab-owner-block-group {
	text-align: right;
}

.theme-vab-owner-block-group .elgg-image {
	float: none;
	margin: 0;
}

.theme-vab-owner-block-group .elgg-subtext {
	display: none;
}

.theme-vab-owner-block-group img {
	border: 1px solid #<?php echo THEME_COLOR_2; ?>;
	padding: 2px;
}

.theme-vab-owner-block-group h3 a{
	text-decoration: none;
}

.elgg-menu-item-access {
	
}

#group_tools_status_open,
#group_tools_status_closed {
	display: none;
}

.group-tools-list-ordered > .elgg-item {
	width: 50%;
	float: left;
}

.elgg-main > .group-tools-list-ordered > li > .theme-vab-listing-group {
	float: none;
	width: auto;
}