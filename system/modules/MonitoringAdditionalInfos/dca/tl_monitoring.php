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
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_monitoring']['palettes']['default'] .= ";{additional_info_legend},additional_info_actuality,additional_info_contact,additional_info_contao,additional_info_maintenance,additional_info_system";

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_monitoring']['fields']['additional_info_actuality'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_actuality'],
	'exclude'                 => true,
	'inputType'               => 'multiColumnWizard',
	'eval'                    => array('columnsCallback'=>array('AdditionalInfoField', 'getAdditionalInfoFieldsForActuality')),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_monitoring']['fields']['additional_info_contact'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contact'],
	'exclude'                 => true,
	'inputType'               => 'multiColumnWizard',
	'eval'                    => array('columnsCallback'=>array('AdditionalInfoField', 'getAdditionalInfoFieldsForContact')),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_monitoring']['fields']['additional_info_contao'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contao'],
	'exclude'                 => true,
	'inputType'               => 'multiColumnWizard',
	'eval'                    => array('columnsCallback'=>array('AdditionalInfoField', 'getAdditionalInfoFieldsForContao')),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_monitoring']['fields']['additional_info_maintenance'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_maintenance'],
	'exclude'                 => true,
	'inputType'               => 'multiColumnWizard',
	'eval'                    => array('columnsCallback'=>array('AdditionalInfoField', 'getAdditionalInfoFieldsForMaintenance')),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_monitoring']['fields']['additional_info_system'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_system'],
	'exclude'                 => true,
	'inputType'               => 'multiColumnWizard',
	'eval'                    => array('columnsCallback'=>array('AdditionalInfoField', 'getAdditionalInfoFieldsForSystem')),
	'sql'                     => "blob NULL"
);

?>