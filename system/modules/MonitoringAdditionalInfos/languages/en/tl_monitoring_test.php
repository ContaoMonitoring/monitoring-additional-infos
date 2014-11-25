<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2014
 * @author     Cliff Parnitzky
 * @package    Monitoring
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['date']            = array('Date', 'The date of the execution out this test.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['type']            = array('Type', 'The type of the test.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['status']          = array('Status', 'The status of the test.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['repetitions']     = array('Repetitions', 'Number of repetitions of this test.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['response_string'] = array('Response string', 'The response string the server has sent for the request.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['comment']         = array('Comment', 'Enter a comment for this test.');

/**
 * Legenden
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['result_legend']  = 'Test result';
$GLOBALS['TL_LANG']['tl_monitoring_test']['comment_legend'] = 'Comment';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['statusTypes'][Monitoring::STATUS_OKAY]       = array('Okay', 'The Webserver is available and the test string could be checked successfully.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['statusTypes'][Monitoring::STATUS_INCOMPLETE] = array('Incomplete', 'The webserver is available but the test string could not be checked successfully.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['statusTypes'][Monitoring::STATUS_ERROR]      = array('Error', 'The webserver is not available.');

$GLOBALS['TL_LANG']['tl_monitoring_test']['types'][Monitoring::CHECK_TYPE_MANUAL]    = array('Manual', 'The test has been executed manually.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['types'][Monitoring::CHECK_TYPE_AUTOMATIC] = array('Automatic', 'The test has been executed automatically.');

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['edit']   = array('Edit monitoring test', 'Edit the monitoring test with ID %s.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['delete'] = array('Delete monitoring test', 'Delete the monitoring test with ID %s.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['show']   = array('Show monitoring test', 'Show infos of monitoring test with ID %s.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['check']  = array('Check server', 'Tests the availability of the server.');

?>