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
 * Filter for cdn tags from actXcellence  cdn.actxc.de
 * need help? ask help@actxc.de !
 * just paste the preview link into the text file.
 * it will recalculate the time for expiring and the signature key. 
 * example: 
 * http://cdn.actxc.de/previews/f00b3lAw-YwSJg8N6?exp=1355928017&sig=5b40b2a48d1e29e5d4f2377c389a77a1
 * 
 * @package   filter_cdn
 * @copyright 2012 Guido Hornig, actxcellence.de
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 
defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/filelib.php');

class filter_cdn extends moodle_text_filter {

    function filter($text, array $options = array()) {
        global $CFG;
//		$text .= "<br> cdn filter aktiv";
        if (!is_string($text) or empty($text)) {
            // non string data can not be filtered anyway
            return $text;
        }
        if (stripos($text, '[cdn ' ) === false) {
            // performance shortcut - all regexes below contain cdn.actxc tag,
            // if not present nothing can match
           return $text;
			//return $text."<br> cdn filter shortcut, no [cdn -Tag";
        }

        $newtext = $text; // we need to return the original value if regex fails!

		$search = '#(\[cdn ([0-9a-z]{8})(?:[-_])?([0-9a-z]{8})?\])#is';
        $newtext = preg_replace_callback($search, 'botr_create_js_embed', $newtext);
		//echo "<pre>";print_r($newtext);echo "</pre>";
        if (empty($newtext) or $newtext === $text) {
            // error or not filtered
            unset($newtext);
           // return $text."<br>cdn Filter failed";
           return $text;
        }

 //       return $newtext."<br>cdn Filter successful";
        return $newtext;
    }
}

// Create the JS embed code for the BotR player
// $arguments is an array:
/*
	Array
	(
		[0] => [cdn rdLv6JvZ-yIjjc1dh]
		[1] => [cdn rdLv6JvZ-yIjjc1dh]
		[2] => rdLv6JvZ
		[3] => yIjjc1dh
	)
*/
function botr_create_js_embed($arguments) {
        global $CFG;
//echo '<pre>'; print_r($arguments);echo '</pre>';
//echo '<pre>'; print_r($CFG);echo '</pre>';
  $video_hash = $arguments[2];
  $player_hash = $arguments[3] ;
  $player_hash = $arguments[3] ? $arguments[3] : $CFG->cdn_defaultplayer;

  $content_mask = $CFG->cdn_dnsmask ;
  $timeout = $CFG->cdn_timeout; /*( noch testen was bei langen videos passiert )*/
  $path = "players/$video_hash-$player_hash.js";
  if($timeout < 1) {
    $url = "http://"."$content_mask/$path";
  } else {
    $api_secret = $CFG->cdn_secret; //private hash of actXc, do not touch!!
    $expires = time() + 60 * $timeout;
    $signature = md5("$path:$expires:$api_secret");
    $url = "http://"."$content_mask/$path?exp=$expires&sig=$signature";
//	echo "<pre>".$url."</pre><br>";
  }
  return "<script type='text/javascript' src='$url'></script>";
}


?>