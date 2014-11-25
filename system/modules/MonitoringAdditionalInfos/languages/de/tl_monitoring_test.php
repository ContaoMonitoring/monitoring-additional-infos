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
 * @package    MonitoringAdditionalInfos
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['date']            = array('Datum', 'Der Zeitpunkt der Durchführung dieses Tests.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['type']            = array('Typ', 'Die Typ des Tests.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['status']          = array('Status', 'Der Status des Tests.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['repetitions']     = array('Wiederholungen', 'Anzahl der Wiederholungen dieses Tests.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['response_string'] = array('Antwortstring', 'Der Antwortstring, den der Server auf die Anfrage gesendet hat.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['comment']         = array('Kommentar', 'Geben Sie ein Kommentar zu diesem Test ein.');

/**
 * Legenden
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['result_legend']  = 'Testergebnis';
$GLOBALS['TL_LANG']['tl_monitoring_test']['comment_legend'] = 'Kommentar';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['statusTypes'][Monitoring::STATUS_OKAY]       = array('Okay', 'Der Webserver ist erreichbar und der Teststring wurde erfolgreich geprüft.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['statusTypes'][Monitoring::STATUS_INCOMPLETE] = array('Unvollständig', 'Der Webserver ist erreichbar aber der Teststring konnte nicht erfolgreich geprüft werden.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['statusTypes'][Monitoring::STATUS_ERROR]      = array('Fehler', 'Der Webserver ist nicht erreichbar.');

$GLOBALS['TL_LANG']['tl_monitoring_test']['types'][Monitoring::CHECK_TYPE_MANUAL]    = array('Manuell', 'Der Test wurde manuell durchgeführt.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['types'][Monitoring::CHECK_TYPE_AUTOMATIC] = array('Automatisch', 'Der Test wurde automatisch durchgeführt.');

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['edit']   = array('Monitoring Test bearbeiten', 'Monitoring Test mit der ID %s bearbeiten.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['delete'] = array('Monitoring Test löschen', 'Monitoring Test mit der ID %s löschen.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['show']   = array('Monitoring Test anzeigen', 'Monitoring Test mit der ID %s anzeigen.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['check']  = array('Server testen', 'Prüft die Erreichbarkeit des Servers.');

?>