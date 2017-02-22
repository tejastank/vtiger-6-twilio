<?php
/* +********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ****************************************************************************** */
require_once 'vtlib/Vtiger/Link.php';
class Twilio {

	var $LBL_TWILIO='Twilio';

	// Cache to speed up describe information store
	protected static $moduleDescribeCache = array();


	function vtlib_handler($moduleName, $eventType) {

		require_once('include/utils/utils.php');
		global $adb;
		

			if($eventType == 'module.postinstall') {
				// Mark the module as Standard module
				// Mark the module as Standard module
                                // will need to add settings tab later
				//$this->updateSettings();
				$adb->pquery('UPDATE vtiger_tab SET customized=1 WHERE name=?', array($this->LBL_TWILIO));
                                $tabid=getTabid('Contacts');
                                Vtiger_Link::addLink($tabid, 'DETAILVIEWBASIC', 'Twilio SMS', 'index.php?module=Twilio&action=Sms&mode=display&return_module=Contacts&return_action=DetailView&return_id=$RECORD$&parent_id=$RECORD$');
                                Vtiger_Link::addLink($tabid, 'DETAILVIEWBASIC', 'Twilio Call', 'index.php?module=Twilio&action=Call&mode=display&return_module=Contacts&return_action=DetailView&return_id=$RECORD$&parent_id=$RECORD$');
                        } else if($eventType == 'module.disabled') {
			// TODO Handle actions when this module is disabled.
				global $log,$adb;
				$adb->pquery('UPDATE vtiger_settings_field SET active= 1  WHERE  name= ?',array($this->LBL_TWILIO));
			} else if($eventType == 'module.enabled') {
			// TODO Handle actions when this module is enabled.
				global $log,$adb;
				$adb->pquery('UPDATE vtiger_settings_field SET active= 0  WHERE  name= ?',array($this->LBL_TWILIO));
			} else if($eventType == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
			} else if($eventType == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
			} else if($eventType == 'module.postupdate') {
			// TODO Handle actions after this module is updated.
				//$this->updateSettings();
			}
        }

	function updateSettings(){
			global $adb;

			$fieldid = $adb->getUniqueID('vtiger_settings_field');
			$blockid = getSettingsBlockId('LBL_OTHER_SETTINGS');
			$seq_res = $adb->pquery("SELECT max(sequence) AS max_seq FROM vtiger_settings_field WHERE blockid = ?", array($blockid));
			if ($adb->num_rows($seq_res) > 0) {
				$cur_seq = $adb->query_result($seq_res, 0, 'max_seq');
				if ($cur_seq != null)	$seq = $cur_seq + 1;
			}

			$result=$adb->pquery('SELECT 1 FROM vtiger_settings_field WHERE name=?',array($this->LBL_TWILIO));
			if(!$adb->num_rows($result)){
				$adb->pquery('INSERT INTO vtiger_settings_field(fieldid, blockid, name, iconpath, description, linkto, sequence)
					VALUES (?,?,?,?,?,?,?)', array($fieldid, $blockid, $this->LBL_TWILIO , 'modules/Twilio/img/Twilio.png', 'Twilio integration', 'index.php?module=Twilio&action=index&parenttab=Settings', $seq));

			}			
		}

}

?>
