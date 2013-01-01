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

$string['cdn_user'] = 'Benutzername';
$string['cdn_user_desc'] = 'Benutzername für das bitsontherun.com Dashboard.';
$string['cdn_user_def'] = '(your@email.de, oder so?) ';
$string['cdn_pw'] = 'Password';
$string['cdn_pw_desc'] = 'Das Passwort für das  bitsontherun.com Dashboard';
$string['cdn_numofvideo'] = 'Videoanzahl';
$string['cdn_numofvideo_desc'] = 'Anzahl der Videos, die in der Liste angezeigt werden';
$string['cdn_timeout'] = 'Gültigkeitsdauer für signierte Links';
$string['cdn_timeout_desc'] = 'Zeit in Minuten, die ein Video <a href="http://www.longtailvideo.com/support/bits-on-the-run/15986/secure-your-videos-with-signing" target="_blank">mit signiertenm Player</a> gültig sein soll. 0 (Null) für unsignierte Videos (Voreinstellung).';
$string['cdn_dnsmask'] = 'DNS Maske';
$string['cdn_dnsmask_desc'] = 'Die <a href="http://www.longtailvideo.com/support/bits-on-the-run/21627/dns-mask-our-content-servers"target="_blank">DNS Maske</a> aus der Definition im BOTR  Benutzerkonto.';
$string['cdn_defaultplayer'] = 'Standard Player';
$string['cdn_defaultplayer_desc'] = 'Der <a href="http://dashboard.bitsontherun.com/players/">Player</a>, der verwendet wird, wenn kein Player angegeben ist. Beispiel:
<code>[cdn MdkflPz7-35rdi1pO]</code>';
$string['cdn_heading'] = 'Content Delivery Network - Filter';
$string['cdn_information'] = 'Specify your bits on the run credentials and parameters.';
$string['cdn_loggedin'] = 'Insert videos by adding tags like:
<code>[cdn MdkflPz7-35rdi1pO]</code> to your pages. <br>Specify your \'bits on the run\' credentials and parameter or log out.';
$string['cdn_loggedout'] = 'Log in to specify your bits on the run credentials and parameter.';
$string['cdn_secret'] = 'API Secret';
$string['cdn_secret_desc'] = 'Alle registrierten Nutzer von bei bitsontherun.com können <a href="http://dashboard.bitsontherun.com/settings/properties/api-keys/" source="_blank">das API Secret hier nachschauen.</a>';