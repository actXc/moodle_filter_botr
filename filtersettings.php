<?php
// This file is part of Moodle-cdn-Filter
//
// Moodle-cdn-Filter is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle-cdn-Filter is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle-cdn-Filter.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings page for component 'filter_cdn'
 *
 * @package   filter_cdn
 * @copyright 2012 Guido Hornig, actxcellence.de
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

//just a headline
$settings->add(new admin_setting_heading (
	"heading_cdn",	
	get_string('cdn_heading','filter_cdn'), 
	get_string('cdn_information','filter_cdn')
	)
);

// cdn secret
$settings->add(new admin_setting_configtext(
	"cdn_secret",
	get_string ('cdn_secret','filter_cdn'),
	get_string ('cdn_secret_desc','filter_cdn'),
	'',
	PARAM_RAW,
	40
	)
);

//cdn_timeout 
$settings->add(new admin_setting_configtext(
	'cdn_timeout',
	get_string ('cdn_timeout','filter_cdn'),
	get_string ('cdn_timeout_desc','filter_cdn'),
	'0',
	PARAM_INT
	)
);
	
//cdn_dnsmask 
$settings->add(new admin_setting_configtext(
	'cdn_dnsmask',
	get_string ('cdn_dnsmask','filter_cdn'),
	get_string ('cdn_dnsmask_desc','filter_cdn'),
	"content.bitsontherun.com",
    PARAM_RAW,
	'70'
	)
);

//cdn_defaultplayer für diesen Kunden
$settings->add(new admin_setting_configtext(
	'cdn_defaultplayer',
	get_string ('cdn_defaultplayer','filter_cdn'),
	get_string ('cdn_defaultplayer_desc','filter_cdn'),
	"59qau88L",
	PARAM_RAW,
	'8'
	)
);
	
}



	