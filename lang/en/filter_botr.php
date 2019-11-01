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
 * Strings for component 'filter_botr', language 'en'
 *
 * @package   filter_botr
 * @copyright 2012 Guido Hornig, actxcellence.de
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['filtername'] = 'Bits on the Run filter ';

$string['botr_user'] = 'User name';
$string['botr_user_desc'] = 'Your user name for the bitsontherun.com dashboard.';
$string['botr_user_def'] = '(your@email.com, isn\'t it?) ';
$string['botr_pw'] = 'Password';
$string['botr_pw_desc'] = 'Your password for the bitsontherun.com dashboard';
$string['botr_numofvideo'] = 'Number of videos';
$string['botr_numofvideo_desc'] = 'Number of videos in the list';
$string['botr_timeout'] = 'Timeout for signed links';
$string['botr_timeout_desc'] = 'The duration in minutes for which a <a href="http://www.longtailvideo.com/support/bits-on-the-run/15986/secure-your-videos-with-signing" target="_blank">signed player</a> will be valid. Set this to 0 (the default) if you don\'t use signing.';
$string['botr_dnsmask'] = 'Content DNS mask';
$string['botr_dnsmask_desc'] = 'The <a href="http://www.longtailvideo.com/support/bits-on-the-run/21627/dns-mask-our-content-servers"target="_blank">DNS mask</a> of the BOTR content server.';
$string['botr_defaultplayer'] = 'Default player';
$string['botr_defaultplayer_desc'] = 'The <a href="http://dashboard.bitsontherun.com/players/">player</a> to use for embedding the videos. If you want to override the default player for a given video, simply append a dash and the corresponding player key to video key in the quicktag. For example:
<code>[botr MdkflPz7-35rdi1pO]</code>';
$string['botr_heading'] = 'Content Delivery Network - Filter';
$string['botr_information'] = 'Specify your bits on the run credentials and parameters.';
$string['botr_loggedin'] = 'Insert videos by adding tags like:
<code>[botr MdkflPz7-35rdi1pO]</code> to your pages. <br>Specify your \'bits on the run\' credentials and parameter or log out.';
$string['botr_loggedout'] = 'Log in to specify your bits on the run credentials and parameter.';
$string['botr_secret'] = 'API Secret';
$string['botr_key'] = 'API Key';
$string['botr_secret_desc'] = 'Register at bitsontherun.com and get the <a href="http://dashboard.bitsontherun.com/settings/properties/api-keys/" source="_blank"> API Secret here.</a>';
$string['botr_key_desc'] = 'Register at bitsontherun.com and get the <a href="http://dashboard.bitsontherun.com/settings/properties/api-keys/" source="_blank"> API Key here.</a>';