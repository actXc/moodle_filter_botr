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
 * Install function for component 'filter_cdn'
 *
 * @package   filter_cdn
 * @copyright 2012 Guido Hornig, actxcellence.de
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_filter_cdn_install() {
    global $CFG;

    filter_set_global_state('filter/cdn', TEXTFILTER_ON);
}
