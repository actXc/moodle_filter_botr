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

$string['filtername'] = 'BitsOnTheRun URL-Filter';

$string['botr_user'] = 'Benutzername';
$string['botr_user_desc'] = 'Benutzername für das bitsontherun.com Dashboard.';
$string['botr_user_def'] = '(your@email.de, oder so?) ';
$string['botr_pw'] = 'Password';
$string['botr_pw_desc'] = 'Das Passwort für das  bitsontherun.com Dashboard';
$string['botr_numofvideo'] = 'Videoanzahl';
$string['botr_numofvideo_desc'] = 'Anzahl der Videos, die in der Liste angezeigt werden';
$string['botr_timeout'] = 'Gültigkeitsdauer für signierte Links';
$string['botr_timeout_desc'] = 'Zeit in Minuten, die ein Video <a href="http://www.longtailvideo.com/support/bits-on-the-run/15986/secure-your-videos-with-signing" target="_blank">mit signiertenm Player</a> gültig sein soll. 0 (Null) für unsignierte Videos (Voreinstellung).';
$string['botr_dnsmask'] = 'DNS Maske';
$string['botr_dnsmask_desc'] = 'Die <a href="http://www.longtailvideo.com/support/bits-on-the-run/21627/dns-mask-our-content-servers"target="_blank">DNS Maske</a> aus der Definition im BOTR  Benutzerkonto.';
$string['botr_defaultplayer'] = 'Standard Player';
$string['botr_defaultplayer_desc'] = 'Der <a href="http://dashboard.bitsontherun.com/players/">Player</a>, der verwendet wird, wenn kein Player angegeben ist. Beispiel:
<code>[botr MdkflPz7-35rdi1pO]</code>';
$string['botr_heading'] = 'Content Delivery Network - Filter';
$string['botr_information'] = 'Dieses Filter erzeugt aus Tags wie:<code>[botr MdkflPz7-35rdi1pO]</code> signierte Links. <br> Bitte alle \'Bits On The Run\' Vorgaben eintragen.';
$string['botr_loggedin'] = 'Insert videos by adding tags like:
<code>[botr MdkflPz7-35rdi1pO]</code> to your pages. <br>Specify your \'bits on the run\' credentials and parameter or log out.';
$string['botr_loggedout'] = 'Log in to specify your bits on the run credentials and parameter.';
$string['botr_secret'] = 'API Secret';
$string['botr_key'] = 'API Key';
$string['botr_secret_desc'] = 'Bei bitsontherun.com registrieren <a href="http://dashboard.bitsontherun.com/settings/properties/api-keys/" source="_blank"> API Secret holen.</a>';
$string['botr_key_desc'] = 'Bei bitsontherun.com registrieren <a href="http://dashboard.bitsontherun.com/settings/properties/api-keys/" source="_blank"> API Key holen.</a>';