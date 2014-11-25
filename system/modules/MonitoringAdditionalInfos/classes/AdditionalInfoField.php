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
 * Class AdditionalInfoField
 *
 * Define some functions for the additional info fields
 * @copyright  Cliff Parnitzky 2014
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class AdditionalInfoField extends \Backend
{
	const CATEGORY_ACTUALITY   = 'actuality';
	const CATEGORY_CONTACT     = 'contact';
	const CATEGORY_CONTAO      = 'contao';
	const CATEGORY_MAINTENANCE = 'maintenance';
	const CATEGORY_SYSTEM      = 'system';
	
	/**
	 * Get the columns for the additional info area 'actuality'
	 * @return array
	 */
	public function getAdditionalInfoFieldsForActuality (\MultiColumnWizard $mcw)
	{
		return $this->getAdditionalInfoFields($mcw, self::CATEGORY_ACTUALITY);
	}
	
	/**
	 * Get the fields for the additional info area 'actuality'
	 * @return array
	 */
	public function getCateroryFieldsForActuality (\MultiColumnWizard $mcw)
	{
		return $this->getCateroryFields($mcw, self::CATEGORY_ACTUALITY);
	}
	
	/**
	 * Get the columns for the additional info area 'contact'
	 * @return array
	 */
	public function getAdditionalInfoFieldsForContact (\MultiColumnWizard $mcw)
	{
		return $this->getAdditionalInfoFields($mcw, self::CATEGORY_CONTACT);
	}
	
	/**
	 * Get the fields for the additional info area 'contact'
	 * @return array
	 */
	public function getCateroryFieldsForContact (\MultiColumnWizard $mcw)
	{
		return $this->getCateroryFields($mcw, self::CATEGORY_CONTACT);
	}
	
	/**
	 * Get the columns for the additional info area 'contao'
	 * @return array
	 */
	public function getAdditionalInfoFieldsForContao (\MultiColumnWizard $mcw)
	{
		return $this->getAdditionalInfoFields($mcw, self::CATEGORY_CONTAO);
	}
	
	/**
	 * Get the fields for the additional info area 'contao'
	 * @return array
	 */
	public function getCateroryFieldsForContao (\MultiColumnWizard $mcw)
	{
		return $this->getCateroryFields($mcw, self::CATEGORY_CONTAO);
	}
	
	/**
	 * Get the columns for the additional info area 'maintenance'
	 * @return array
	 */
	public function getAdditionalInfoFieldsForMaintenance (\MultiColumnWizard $mcw)
	{
		return $this->getAdditionalInfoFields($mcw, self::CATEGORY_MAINTENANCE);
	}
	
	/**
	 * Get the fields for the additional info area 'maintenance'
	 * @return array
	 */
	public function getCateroryFieldsForMaintenance (\MultiColumnWizard $mcw)
	{
		return $this->getCateroryFields($mcw, self::CATEGORY_MAINTENANCE);
	}
	
	/**
	 * Get the columns for the additional info area 'system'
	 * @return array
	 */
	public function getAdditionalInfoFieldsForSystem (\MultiColumnWizard $mcw)
	{
		return $this->getAdditionalInfoFields($mcw, self::CATEGORY_SYSTEM);
	}
	
	/**
	 * Get the fields for the additional info area 'system'
	 * @return array
	 */
	public function getCateroryFieldsForSystem (\MultiColumnWizard $mcw)
	{
		return $this->getCateroryFields($mcw, self::CATEGORY_SYSTEM);
	}
	
	/**
	 * Get the columns for the league table
	 * @return array
	 */
	public function getAdditionalInfoFields (\MultiColumnWizard $mcw, $strCategory)
	{
		$arrColumns = array();
		$arrColumns['field'] = array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_field'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options_callback' => array('AdditionalInfoField', "getCateroryFieldsFor" . ucfirst($strCategory)),
			'eval'             => array('style'=>'width: 250px;', 'includeBlankOption'=>true,)
		);
		
		if ($strCategory == self::CATEGORY_ACTUALITY || $strCategory == self::CATEGORY_MAINTENANCE)
		{
			$arrColumns['actual'] = array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_actual'],
				'exclude'          => true,
				'inputType'        => 'checkbox',
				'eval'             => array()
			);
		}
		else
		{
			$arrColumns['value'] = array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_monitoring']['additional_info_value'],
				'exclude'          => true,
				'inputType'        => 'text'
			);
		}
		
		return $arrColumns;
	}
	
	/**
	 * Get the fields for the given category.
	 * @return array
	 */
	public function getCateroryFields(\MultiColumnWizard $mcw, $strCategory)
	{
		$fields = array();
		
		$configuredFields = deserialize($GLOBALS['TL_CONFIG']['monitoringAdditionalInfoFields']);
		
		foreach ($configuredFields as $field)
		{
			if ($field['category'] == $strCategory)
			{
				$fields[] = $field['name'];
			}
		}
		
		return $fields;
	}
}
?>
