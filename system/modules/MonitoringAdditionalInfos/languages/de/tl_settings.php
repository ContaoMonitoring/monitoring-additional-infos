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
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFields']         = array('Zusätzliche Infofelder', 'Legen sie zusätzliche Infofelder für die Monitoringeinträge fest.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFieldsCategory'] = array('Kategorie', 'Die Kategorie in der das Feld erscheinen soll.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFieldsName']     = array('Feldname', 'Der name des Feldes.');

/**
 * Options
 */
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFieldsCategoryOptions'][AdditionalInfoField::CATEGORY_ACTUALITY]   = array('Aktualität', 'Felder in dieser Kategorie werden als <u>Checkboxen</u> angezeigt. Sie werden verwendet um zu definieren ob etwas aktuell oder veraltet ist.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFieldsCategoryOptions'][AdditionalInfoField::CATEGORY_CONTACT]     = array('Kontakt Informationen', 'Felder in dieser Kategorie werden als <u>Textfelder</u> angezeigt. Sie werden für Daten zur Kontaktaufname verwendet.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFieldsCategoryOptions'][AdditionalInfoField::CATEGORY_CONTAO]      = array('Contao Konfiguration', 'Felder in dieser Kategorie werden als <u>Textfelder</u> angezeigt. Sie werden für Konfigurationsdaten für Contao verwendet.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFieldsCategoryOptions'][AdditionalInfoField::CATEGORY_MAINTENANCE] = array('Wartungskonfiguration', 'Felder in dieser Kategorie werden als <u>Checkboxen</u> angezeigt. Sie werden verwendet um Daten zur Wartungskonfiguration zu erfassen.');
$GLOBALS['TL_LANG']['tl_settings']['monitoringAdditionalInfoFieldsCategoryOptions'][AdditionalInfoField::CATEGORY_SYSTEM]      = array('Systemkonfiguration', 'Felder in dieser Kategorie werden als <u>Textfelder</u> angezeigt. Sie werden verwendet um Daten zum Web System zu erfassen.');

?>