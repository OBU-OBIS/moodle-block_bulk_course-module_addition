<?php

// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Bulk course-module addition block
 *
 * @package    block_module_add
 * @author     Peter Andrew
 * @copyright  2020, Oxford Brookes University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$string['pluginname'] = 'Course-Module Add';
$string['addmodule'] = 'Add module to course(s)';

$plugin->component = 'block_module_add'; // Full name of the plugin (used for diagnostics): plugintype_pluginname
$plugin->version  = 2020082400;   // The (date) version of this module + 2 extra digital for daily versions
$plugin->requires = 2012120300;   // Requires this Moodle version - at least 2.0
$plugin->cron     = 0;
$plugin->release = 'v1.1.0';
$plugin->maturity = MATURITY_STABLE;
