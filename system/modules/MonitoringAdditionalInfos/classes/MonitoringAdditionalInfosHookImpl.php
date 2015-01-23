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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Monitoring;

/**
 * Class MonitoringAdditionalInfosHookImpl
 *
 * Implementation of hooks.
 * @copyright  Cliff Parnitzky 2014
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class MonitoringAdditionalInfosHookImpl extends \Backend
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Modify the header ... add the timeline
	 * @param  $arrHeaderFields  the headerfields given from list->sorting
	 * @param  DataContainer $dc a DataContainer Object
	 * @return Array The manipulated headerfields
	 */
	public function addAdditionalInfosToHeader($arrHeaderFields, \DataContainer $dc)
	{
	    $GLOBALS['TL_CSS'][] = 'system/modules/MonitoringAdditionalInfos/assets/styles.css';

	    $monitoringEntryId = (int) $dc->id;

	   $objMonitoringEntry = \MonitoringModel::findByPK($monitoringEntryId);

	    if ($objMonitoringEntry !== null)
	    {
	        $arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_actuality'][0]] = "";
	        $arrHeaderFields = $this->getPreparedFieldData($objMonitoringEntry->additional_info_actuality, $arrHeaderFields, $GLOBALS['TL_LANG']['tl_monitoring']['additional_info_actuality'][0]);

	        $arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contact'][0]] = "";
	        $arrHeaderFields = $this->getPreparedFieldData($objMonitoringEntry->additional_info_contact, $arrHeaderFields, $GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contact'][0]);

	        $arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contao'][0]] = "";
	        $arrHeaderFields = $this->getPreparedFieldData($objMonitoringEntry->additional_info_contao, $arrHeaderFields, $GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contao'][0]);

	        $arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_maintenance'][0]] = "";
	        $arrHeaderFields = $this->getPreparedFieldData($objMonitoringEntry->additional_info_maintenance, $arrHeaderFields, $GLOBALS['TL_LANG']['tl_monitoring']['additional_info_maintenance'][0]);

	        $arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_system'][0]] = "";
	        $arrHeaderFields = $this->getPreparedFieldData($objMonitoringEntry->additional_info_system, $arrHeaderFields, $GLOBALS['TL_LANG']['tl_monitoring']['additional_info_system'][0]);
	    }
	    else
	    {
	        unset($arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_actuality'][0]]);
	        unset($arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contact'][0]]);
	        unset($arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_contao'][0]]);
	        unset($arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_maintenance'][0]]);
	        unset($arrHeaderFields[$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_system'][0]]);
	    }

		return $arrHeaderFields;
	}

	/**
	 * Retruns the prepared data of a field.
	 *
	 * @param string $strFieldData
	 * @return string The prepared data.
	 */
	private function getPreparedFieldData($strFieldData, $arrHeaderFields, $strSectionKey)
	{
	    $arrRows = deserialize($strFieldData);

	    if (empty($arrRows))
	    {
	        // Remove a section that has no data
	        unset($arrHeaderFields[$strSectionKey]);
	        return $arrHeaderFields;
	    }

	    $arrRows = array_reverse($arrRows);

	    $blnRemoveSection = true;
	    foreach ($arrRows as $row)
	    {
	        if (!empty($row['field']))
	        {
	           // Insert the element after the section
	           $arrHeaderFields = $this->arrayInsertAfterKey($arrHeaderFields, $strSectionKey, '<div class="tl_inner_label">' . $row['field'] . '</div>', array_key_exists('blnValue', $row) ? ($row['blnValue'] ? '<img src="system/modules/MonitoringAdditionalInfos/assets/yes_small.png" alt="' . $GLOBALS['TL_LANG']['MonitoringAdditionalInfos']['yes'] . '" title="' . $GLOBALS['TL_LANG']['MonitoringAdditionalInfos']['yes'] . '" />' : '<img src="system/modules/MonitoringAdditionalInfos/assets/no_small.png" alt="' . $GLOBALS['TL_LANG']['MonitoringAdditionalInfos']['no'] . '" title="' . $GLOBALS['TL_LANG']['MonitoringAdditionalInfos']['no'] . '" />') : $row['strValue']);
	           $blnRemoveSection = false;
	        }
	    }
	    if ($blnRemoveSection)
	    {
	        // Remove a section that has no data
	        unset($arrHeaderFields[$strSectionKey]);
	    }
	    return $arrHeaderFields;
	}

	/**
	 * Insert an assoc key/value pair after the given key in the given array.
	 *
	 * @param array $array The array to insert the new key/value pair.
	 * @param string $afterKey The key of the array element to insert the new key/value pair after.
	 * @param string $key The key of the key/value pair to be inserted.
	 * @param string $value The value of the key/value pair to be inserted.
	 * @return array The new array with the inserted key/value pair.
	 */
	private function arrayInsertAfterKey($array, $afterKey, $key, $value)
	{
	    $pos   = array_search($afterKey, array_keys($array)) + 1;

	    return array_merge
	    (
	        array_slice($array, 0, $pos, true),
            array($key => $value),
            array_slice($array, $pos, NULL, true)
	    );
	}

}

?>