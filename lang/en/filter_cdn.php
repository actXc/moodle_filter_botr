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
 * Strings for component 'filter_cdn', language 'en'
 *
 * @package   filter_cdn
 * @copyright 2012 Guido Hornig, actxcellence.de
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['filtername'] = 'cdn plugin';

$string['cdn_user'] = 'User name';
$string['cdn_user_desc'] = 'Your user name for the bitsontherun.com dashboard.';
$string['cdn_user_def'] = '(your@email.com, isn\'t it?) ';
$string['cdn_pw'] = 'Password';
$string['cdn_pw_desc'] = 'Your password for the bitsontherun.com dashboard';
$string['cdn_numofvideo'] = 'Number of videos';
$string['cdn_numofvideo_desc'] = 'Number of videos in the list';
$string['cdn_timeout'] = 'Timeout for signed links';
$string['cdn_timeout_desc'] = 'The duration in minutes for which a <a href="http://www.longtailvideo.com/support/bits-on-the-run/15986/secure-your-videos-with-signing" target="_blank">signed player</a> will be valid. Set this to 0 (the default) if you don\'t use signing.';
$string['cdn_dnsmask'] = 'Content DNS mask';
$string['cdn_dnsmask_desc'] = 'The <a href="http://www.longtailvideo.com/support/bits-on-the-run/21627/dns-mask-our-content-servers"target="_blank">DNS mask</a> of the BOTR content server.';
$string['cdn_defaultplayer'] = 'Default player';
$string['cdn_defaultplayer_desc'] = 'The <a href="http://dashboard.bitsontherun.com/players/">player</a> to use for embedding the videos. If you want to override the default player for a given video, simply append a dash and the corresponding player key to video key in the quicktag. For example:
<code>[cdn MdkflPz7-35rdi1pO]</code>';
$string['cdn_heading'] = 'Content Delivery Network - Filter';
$string['cdn_information'] = 'Specify your bits on the run credentials and parameters.';
$string['cdn_loggedin'] = 'Insert videos by adding tags like:
<code>[cdn MdkflPz7-35rdi1pO]</code> to your pages. <br>Specify your \'bits on the run\' credentials and parameter or log out.';
$string['cdn_loggedout'] = 'Log in to specify your bits on the run credentials and parameter.';
$string['cdn_secret'] = 'API Secret';
$string['cdn_secret_desc'] = 'Register at bitsontherun.com and get the <a href="http://dashboard.bitsontherun.com/settings/properties/api-keys/" source="_blank"> API Secret here.</a>';