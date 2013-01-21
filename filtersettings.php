<?php
// This file is part of Moodle-botr-Filter
//
// Moodle-botr-Filter is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle-botr-Filter is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle-botr-Filter.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings page for component 'filter_botr'
 *
 * @package   filter_botr
 * @copyright 2012 Guido Hornig, actxcellence.de
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

//just a headline
$settings->add(new admin_setting_heading (
	"heading_botr",	
	get_string('botr_heading','filter_botr'), 
	get_string('botr_information','filter_botr')
	)
);

// botr key
$settings->add(new admin_setting_configtext(
	"botr_key",
	get_string ('botr_key','filter_botr'),
	get_string ('botr_key_desc','filter_botr'),
	'',
	PARAM_RAW,
	40
	)
);

// botr secret
$settings->add(new admin_setting_configtext(
        "botr_secret",
        get_string ('botr_secret','filter_botr'),
        get_string ('botr_secret_desc','filter_botr'),
        '',
        PARAM_RAW,
        40
    )
);

//botr_timeout 
$settings->add(new admin_setting_configtext(
	'botr_timeout',
	get_string ('botr_timeout','filter_botr'),
	get_string ('botr_timeout_desc','filter_botr'),
	'10',
	PARAM_INT
	)
);
	
//botr_dnsmask 
$settings->add(new admin_setting_configtext(
	'botr_dnsmask',
	get_string ('botr_dnsmask','filter_botr'),
	get_string ('botr_dnsmask_desc','filter_botr'),
	"content.bitsontherun.com",
    PARAM_RAW,
	'70'
	)
);

//botr_defaultplayer für diesen Kunden
$settings->add(new admin_setting_configtext(
	'botr_defaultplayer',
	get_string ('botr_defaultplayer','filter_botr'),
	get_string ('botr_defaultplayer_desc','filter_botr'),
	"59qau88L",
	PARAM_RAW,
	'8'
	)
);
	
}



	
