<?php
/*
 * ADOBE SYSTEMS INCORPORATED
 * Copyright 2007 Adobe Systems Incorporated
 * All Rights Reserved
 * 
 * NOTICE:  Adobe permits you to use, modify, and distribute this file in accordance with the 
 * terms of the Adobe license agreement accompanying it. If you have received this file from a 
 * source other than Adobe, then your use, modification, or distribution of it requires the prior 
 * written permission of Adobe.
 */

/*
	Copyright (c) InterAKT Online 2000-2006. All rights reserved.
*/
/**
 * This class is the "update" implementation of the tNG_fields class.
 * @access public
 */
class tNG_update extends tNG_fields {

	/**
	 * Constructor. Sets the connection, the database name and other default values.
	 * Also sets the transaction type.
	 * @param object KT_Connection &$connection the connection object
	 * @access public
	 */
	function tNG_update(&$connection) {
		parent::tNG_fields($connection);
		$this->transactionType = '_update';
		$this->exportRecordset = true;
		$this->registerTrigger("BEFORE", "Trigger_Default_saveData", -1);
	}
	
	/**
	 * Overwrites tNG method in order to register some triggers specific to Update Users Transaction
	 * @access protected
	 */
	function doTransaction() {
		$table = $this->getTable();
		if (isset($GLOBALS['tNG_login_config']['table']) && $GLOBALS['tNG_login_config']['table'] == $table ) {
			// BEFORE triggers
			if (isset($this->columns[$GLOBALS['tNG_login_config']['password_field']])) { 
				if ($GLOBALS['tNG_login_config']['password_encrypt'] == "true") {
					$this->registerTrigger("BEFORE", "Trigger_UpdatePassword_EncryptPassword", 200);
				}
				$this->registerTrigger("BEFORE", "Trigger_UpdatePassword_RemovePassword", 210);
				
				$this->registerTrigger("AFTER", "Trigger_UpdatePassword_AddPassword", -100);
				
				if ($GLOBALS['tNG_login_config']['password_encrypt'] == "true") {
					$this->registerTrigger("AFTER", "Trigger_UpdatePassword_RestorePassword", -90);
				}
				
				$this->registerTrigger("ERROR", "Trigger_UpdatePassword_AddPassword", -100);
				$this->registerTrigger("ERROR", "Trigger_UpdatePassword_RemoveOldPassword", -90);
			}
			$this->registerTrigger("AFTER", "Trigger_Update_RefreshSession", 200);
		}
		parent::doTransaction();
	}	
	/**
	 * Prepares the update SQL query to be executed
	 * @access protected
	 */
	function prepareSQL() {
		new tNG_log('tNG_update', 'prepareSQL', 'begin');
		parent::prepareSQL();
		// check if we have a valid primaryKey
		if ($this->primaryKey == '') {
			return new tNG_error('UPD_NO_PK_SET', array(), array());
		}

		// check the primary key value
		if (!isset($this->primaryKeyColumn['value'])) {
			return new tNG_error('UPD_NO_PK_SET', array(), array());
		}

		// begin the SQL generator
		$sql = 'UPDATE ' . $this->table . ' SET ';
		$KT_sp = false;

		foreach($this->columns as $colName=>$colDetails) {
			$colType = $this->columns[$colName]['type'];
			$colTetype = $this->columns[$colName]['tetype'];
			$colValue = $this->columns[$colName]['value'];
			$colMethod = $this->columns[$colName]['method'];
			
			$colValue=str_replace("ي","ی",$colValue);
			$colValue=str_replace('ك','ک',$colValue);
			
			$sep = ($KT_sp) ? ', ' : ''; // set the separator ',' (first time will be none)
			if ($colType == 'FILE_TYPE' || $colMethod == 'CURRVAL') {
				$sql .= $sep . KT_escapeFieldName($colName) . '=' . KT_escapeFieldName($colName);
			} else {
				// if we handle a hidden field, we should not use it in the update SQL.
				// add the column to the SQL string
				$sql .= $sep . KT_escapeFieldName($colName) . '=' . KT_escapeForSql(KT_escapeAttributedb($colValue,$colTetype), $colType);
			}
			$KT_sp = true;
			// $tmfinallist[]=KT_escapeFieldName($colName)." : ".KT_escapeAttributedb($colValue,$colTetype);
			$tmfinallist[]= KT_escapeFieldName($colName) . ' : ' . trim(KT_escapeForSql($colValue, $colType),"'");

		}

		if (!$KT_sp) {
			// no column was actually added
			return new tNG_error('UPD_NO_FIELDS', array(), array());
		}

		// add the where clause
		$sql .= ' WHERE ' . KT_escapeFieldName($this->primaryKey) . ' = ';
		$sql .= KT_escapeForSql(KT_escapeAttributedb($this->primaryKeyColumn['value']), $this->primaryKeyColumn['type']);

		$this->setSQL($sql);
		@session_start();
			 	 
		// Get client's IP address
		if (isset($_SERVER['HTTP_CLIENT_IP']) && array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
			$ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
			$ips = array_map('trim', $ips);
			$ip = $ips[0];
		} else 
			$ip = $_SERVER['REMOTE_ADDR'];

		$ip = (is_null($ip)) ? '' : $ip;
		
		$logtype=2; 
 		$loguser =$_SESSION['auser_id'];
		$logdate = jdate("YmdHis");
		$logid = $this->primaryKeyColumn['value'];
		$logtext= implode(" , ",$tmfinallist) ;
		$logip = $ip;
		$logtable=$this->table;
		$logtitle=$_SESSION['cur_pagename'];
		insert_triger($logtype, $loguser, $logdate, $logip, $logtable, $logtitle, $logid, $logtext);
		new tNG_log('tNG_update', 'prepareSQL', 'end');
		return null;
	}
	
	/**
	 * Get the local recordset associated to this transaction
	 * @return object resource Recordset resource
	 * @access public
	 */
	function getLocalRecordset() {
		new tNG_log('tNG_update', 'getLocalRecordset');
		$sql = '';
		$tmpArr = $this->columns;
		$tmpArr[$this->primaryKey]['type'] = $this->primaryKeyColumn['type'];
		$tmpArr[$this->primaryKey]['method'] = $this->primaryKeyColumn['method'];
		$tmpArr[$this->primaryKey]['reference'] = $this->primaryKeyColumn['reference'];
		foreach($tmpArr as $colName=>$colDetails) {
			if ($sql != '') {
				$sql .=',';
			}
			$sql.=KT_escapeFieldName($colName);
		}
		$sql .= ', ' . KT_escapeFieldName($this->primaryKey) . ' as ' . KT_escapeFieldName($this->pkName);
		$sql = 'SELECT '.$sql.' FROM '.$this->table;
		$sql = $sql . ' WHERE ' . KT_escapeFieldName($this->primaryKey) . ' =';
		$pkValue = KT_getRealValue($this->primaryKeyColumn['method'], $this->primaryKeyColumn['reference']);
		$sql = $sql . KT_escapeForSql($pkValue, $this->primaryKeyColumn['type']);
		if (isset($this->connection->servermodel)) {
			$rs = $this->connection->MySQL_Execute($sql);
		} else {
			$rs = $this->connection->Execute($sql);
		}
		if (!$rs) {
			new tNG_log('KT_ERROR');
			$this->setError(new tNG_error('UPD_RS', array(), array($this->connection->ErrorMsg(), $sql)));
			echo $this->dispatcher->getErrorMsg();
			exit;
		}
		return $rs;
	}
}
?>