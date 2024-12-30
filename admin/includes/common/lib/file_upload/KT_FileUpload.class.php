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
 *	Provides functionalities for handling file uploads
 *	@access public
 **/
class KT_fileUpload
{

	var $uploadType;


	/**
	 * the file upload information
	 * @var string tNG_dispatcher
	 * @access public
	 */
	var $fileInfo;
	/**
	 * @var boolean 
	 * @access public
	 */
	var $fileExists;
	/**
	 * destination folder for upload
	 * @var string 
	 * @access public
	 */
	var $folder;
	/**
	 * specifies if the file is required for upload or not
	 * @var bollean 
	 * @access public
	 */
	var $isRequired;
	/**
	 * the allowed types for upload
	 * @var array tNG_dispatcher
	 * @access public
	 */
	var $allowedExtensions;
	/**
	 * @var boolean 
	 * @access public
	 */
	var $autoRename;
	/**
	 * minimum allowed size of the uploaded file in KB;
	 * @var integer 
	 * @access public
	 */
	var $minSize;
	/**
	 * maximum allowed size of the uploaded file in KB;
	 * @var integer
	 * @access public
	 */
	var $maxSize;
	/**
	 * Specifies the old file name that is allowed to be overwritten in case that its name is the same as the file to be uploaded (fileName)
	 * @var string 
	 * @access public
	 */
	var $oldFileName;
	/**
	 * the name under which the file was saved after upload
	 * @var string tNG_dispatcher
	 * @access public
	 */
	var $destinationName;
	/**
	 * error message to be displayed as User Error
	 * @var array 
	 * @access public
	 */
	var $errorType =  array();
	/**
	 * error message to be displayed as Developer Error
	 * @var array 
	 * @access public
	 */
	var $develErrorMessage = array();
	/**
	 * Constructor. 
	 * sets initialise some class members;
	 * @access public
	 */
	function KT_fileUpload()
	{
		$this->folder = '';
		$this->isRequired = false;
		$this->allowedExtensions = array();
		$this->autoRename = false;
		$this->minSize = 1;
		$this->maxSize = -1;
		$this->error = 0;
		$this->errorType = array();
		$this->develErrorMessage = array();
	}





	function setUploadType($uploadType)
	{
		$this->uploadType = $uploadType;
	}




	/**
	 * setter. set the fileinfo array
	 * @param string $fileInfo the name of the form field;
	 * @return nothing;
	 * @access public
	 */
	function setFileInfo($fileInfo)
	{
		if (isset($_FILES[$fileInfo])) {
			$this->fileInfo = $_FILES[$fileInfo];
		} else {
			$this->setError('PHP_UPLOAD_NO_UPLOAD', array(), array($fileInfo));
			if (count($_POST) == 0) {
				$this->setError('PHP_UPLOAD_NO_POST', array(), array());
			}
			$file_uploads = @ini_get('file_uploads');
			if (strlen(trim($file_uploads)) == 0) {
				$this->setError('PHP_UPLOAD_UPLOAD_DISABLED', array(), array());
			}
		}
	}


	/**
	 * setter. set the destination folder
	 * @param string $folder the name of the folder;
	 * @return nothing;
	 * @access public
	 */
	function setFolder($folder)
	{


		if ($this->uploadType == "tng") {

			$this->folder = $folder;
			if (strtolower(substr(PHP_OS, 0, 1)) == 'w') {
				$this->folder = str_replace('/', '\\', $this->folder);
			} else {
				$this->folder = str_replace('\\', '/', $this->folder);
			}
		} else if ($this->uploadType == "ftp") {
			$this->folder = $folder;
		}
	}
	/**
	 * setter. 
	 * @param boolean $isRequired the name of the form field;
	 * @return nothing;
	 * @access public
	 */
	function setRequired($isRequired)
	{
		$this->isRequired = $isRequired;
	}
	/**
	 * setter. set the allowed extendions
	 * @param array ;
	 * @return nothing;
	 * @access public
	 */
	function setAllowedExtensions($allowedExtensions = null)
	{
		$this->allowedExtensions = (!empty($allowedExtensions) && !is_null($allowedExtensions)) ?  $allowedExtensions : ["pdf", "jpg", "jpeg", "png", "bmp", "gif", "tif", "doc", "docx", "dwg", "xls", "xlsx", "txt", "ppt", "pptx", "dwg", "dxf", "kmz", "kml", "geojson"];
	}
	/**
	 * setter. 
	 * @param boolean ;
	 * @return nothing;
	 * @access public
	 */
	function setAutoRename($autoRename)
	{
		$this->autoRename = $autoRename;
	}
	/**
	 * setter. 
	 * @param integer the minimum size of the files in KB;
	 * @return nothing;
	 * @access public
	 */
	function setMinSize($minSize)
	{
		$this->minSize = $minSize;
	}
	/**
	 * setter. 
	 * @param integer the maximum size of the file in KB;
	 * @return nothing;
	 * @access public
	 */
	function setMaxSize($maxSize)
	{
		$this->maxSize = $maxSize;
	}

	/**
	 * 	Handle the uploaded file by moving it to a destination file.
	 * The destination file = folder + fileName
	 * @param string fileName 	the name for saving the uploaded file;
	 * @param string 	$oldFileName	the previous file name, or null on insert
	 * @return string file name if succeded or null if not;
	 * @access public
	 */

	function uploadFile($fileName, $oldFileName = "", $uploadType = "tng")
	{
		$this->checkUpload();
		$this->checkExtensions();
		$this->CheckFileName($fileName);
		$this->checkSize();
		if ($this->hasError())
			return;

		$this->checkContent();
		if ($this->hasError())
			return;

		if ($uploadType == "tng")
			$this->checkFolder();

		if ($this->hasError())
			return;

		if ($this->fileExists) {
			$folder = KT_realpath($this->folder);
			$fileName = KT_replaceSpecialChars($fileName, 'filter');
			$destinationName = KT_realpath($folder . $fileName, false);

			if ($uploadType == "tng") {

				if (file_exists($destinationName)) {

					if (strtolower("$fileName") != strtolower($oldFileName)) {

						// if the destination file really exists

						if (!$this->autoRename) {
							$this->setError('UPLOAD_FILE_EXISTS', array(), array($fileName));
							return;
						} else {
							$destinationName = $this->getTempName($destinationName, $uploadType);
						}
					}
				}
			} else if ($uploadType == "ftp") {


				$KSc['FTP']   = new KSc_Ftp;
				$KSc['FTP']->KSf_Connect();
				$ftp_list_files = ftp_nlist($KSc['FTP']->ftp_conn, $this->folder);

				$destinationArr = preg_split("[\\/]", $destinationName);
				$ftp_destinationName = end($destinationArr);

				if (in_array($this->folder . "/" . $ftp_destinationName, $ftp_list_files)) {
					$destinationName = $this->getTempName($this->folder . "/" . $ftp_destinationName, $uploadType);
				}
			}

			if ($oldFileName != '') {

				if ($uploadType == "tng") {
					@unlink($folder . DIRECTORY_SEPARATOR . $oldFileName);
				} else if ($uploadType == "ftp") {

					$KSc['FTP']   = new KSc_Ftp;
					$KSc['FTP']->KSf_Connect();
					$KSc['FTP']->KSf_Dir_Del($this->folder . "/" . $oldFileName);
				}
			}

			if ($uploadType == "tng") {

				if (!@move_uploaded_file($this->fileInfo['tmp_name'], $destinationName)) {

					unlink($this->fileInfo['tmp_name']);
					$this->setError('PHP_UPLOAD_MOVE_TMP_ERROR', array(), array());
					return;
				} else {

					$arr = explode("/", $destinationName);
					$this->destinationName = $destinationName;
					KT_setFilePermissions($this->destinationName);

					return array_pop($arr);
				}
			} else if ($uploadType == "ftp") {

				$destinationArr = explode("/", $destinationName);
				$ftp_destinationName = end($destinationArr);
				$KSc['FTP']   = new KSc_Ftp;
				$KSc['FTP']->KSf_Connect();
				$KSc['FTP']->KSf_Upload($this->folder, $ftp_destinationName, $this->fileInfo['tmp_name']);
				return $ftp_destinationName;
			}
		}
	}

	/**
	 * Gets a temporary file name starting from the given file name.
	 * Ex: filename = 'zone.jpg', and zone_1.jpg alreagy exists, the new file name is zone_2.jpg.
	 * @param string $filename the filename on which to create the new temporary file name.
	 * @return string the temporary file name;
	 * @access public
	 */
	function getTempName($filename, $uploadType = "tng")
	{

		if ($uploadType == "tng") {

			$pos = strrpos($filename, '.');
			if ($pos !== false) {
				$tmpName = substr($filename, 0, $pos);
				$tmpExt = substr($filename, $pos);
			} else {
				$tmpName = $filename;
				$tmpExt = '';
			}
			$i = 1;
			while (file_exists($tmpName . '_' . $i . $tmpExt) && $i < 1000) {
				$i++;
			}
			$retVar = $tmpName . '_' . $i . $tmpExt;
			return $retVar;
		} else if ($uploadType == "ftp") {

			//get list of files in ftp directory

			$KSc['FTP']   = new KSc_Ftp;
			$KSc['FTP']->KSf_Connect();
			$ftp_list_files = ftp_nlist($KSc['FTP']->ftp_conn, $this->folder);

			if (in_array($filename, $ftp_list_files)) {
				$pos = strrpos($filename, '.');
				$tmpName = substr($filename, 0, $pos);
				$tmpExt = substr($filename, $pos);
				$i = 1;
				while (in_array(($tmpName . '_' . $i . $tmpExt), $ftp_list_files) && $i < 1000) {
					$i++;
				}
				$retVar = $tmpName . '_' . $i . $tmpExt;
			} else {

				$retVar = $filename;
			}
			return $retVar;
		}
	}

	/**
	 * Check if the destination folder exists and has write permissions.
	 * If the folder does not exists, try to create it.
	 * If the folder does not have write permissions or if could not create it, set error.
	 * @return nothing;
	 * @access public
	 */
	function checkFolder()
	{
		if ($this->fileExists) {
			$folder = new KT_folder();
			$folder->createFolder($this->folder);
			$right = $folder->checkRights($this->folder, 'write');

			if ($folder->hasError()) {
				$arr = $folder->getError();
				$this->setError('PHP_UPLOAD_FOLDER_ERROR', array($arr[0]), array($arr[1]));
			}
			if ($right !== true) {
				$this->setError('PHP_UPLOAD_CHECK_FOLDER_ERROR', array(), array($this->folder));
			}
		}
	}

	/**
	 * Checks the size of the uploaded file.
	 * The size is checked against the this.minSize and this.maxSize
	 * @return nothing;
	 * @access public
	 */
	function checkSize()
	{
		if ($this->fileExists) {
			if ($this->minSize > 0 && $this->fileInfo['size'] < $this->minSize) {
				$this->setError('UPLOAD_CHECK_SIZE_S', array($this->minSize - 1), array($this->minSize - 1));
				return;
			}
			if ($this->maxSize > 0 && $this->fileInfo['size'] > $this->maxSize * 1024) {
				$this->setError('UPLOAD_CHECK_SIZE_G', array($this->maxSize), array($this->maxSize));
				return;
			}
		}
	}

	/**
	 * Checks the type of the uploaded file.
	 * The name is checked against the this.allowedTypes array.
	 * @return nothing;
	 * @access public
	 */
	function checkExtensions()
	{
		if ($this->fileExists) {
			$path_info = KT_pathinfo($this->fileInfo['name']);
			foreach ($this->allowedExtensions as $key => $extension) {
				if (strtolower($extension) == strtolower($path_info['extension'])) {
					return;
				}
			}
			$this->setError('UPLOAD_EXT_NOT_ALLOWED', array(), array($path_info['extension']));
		}
	}

	/**
	 * Checks the content of the uploaded file.
	 * The content is checked against the this.library MimeDetector
	 * @return nothing;
	 * @access public
	 */
	function checkContent()
	{
		if ($this->fileExists) {

			// if (in_array($this->fileInfo['type'], ['application/octet-stream', 'text/plain', 'image/svg+xml'])) {
			if (in_array($this->fileInfo['type'], ['image/svg+xml'])) {
				$this->setError('PHP_UPLOAD_FILE_CONTENT_INV', [$this->fileInfo['type']], []);
				return;
			}

			$filename = $this->fileInfo['tmp_name'];
			$bool = true;
			$sniffer = MimeSniffer::createFromFilename($filename);
			if ($sniffer) {
				$fileType = explode('/', $this->fileInfo['type']);
				$systemType = explode('/', $sniffer->type);

				if (($systemType[1] != 'octet-stream' && $systemType[0] == $fileType[0] && (strpos($fileType[1], $systemType[1]) !== false || ($fileType[1] == 'bmp' && $systemType[1] == 'x-ms-bmp') || ($fileType[1] == 'csv' && $systemType[1] == 'plain') || ($fileType[1] == 'vnd.google-earth.kmz' && $systemType[1] == 'x-zip'))) || $fileType[1] == 'octet-stream') {
					$type = $sniffer->getType();
					if ($type) {
						$className = get_class($type);
						$bool = $sniffer->matches($className);
						$msgErr = "not matches";
					}
					// elseif (in_array($type->name, ['application/octet-stream', 'text/plain', 'image/svg+xml'])) {
					//     $bool = false;
					//     $msgErr = $type->name;
					// }
				} else {
					$bool = false;
					$msgErr = "system:{$sniffer->type} != file:{$this->fileInfo['type']}";
				}
			}

			if (!$bool) {
				$this->setError('PHP_UPLOAD_FILE_CONTENT_INV', [$msgErr], [$className]);
				return;
			}

			$handle = fopen($filename, 'rb');
			$content = strval(fread($handle, filesize($filename)));
			fclose($handle);

			$dataRes = strtolower($content);
			// $dataRes = htmlspecialchars($content); 

			preg_match('/<xss|<link|src=|include|require|<layer|<bgsound|\'xss\'|<img|fromcharcode|<iframe|<embed|onreadystatechange|@import|#xss|<xss|<xss\:xss>|xss\:|\*xss\*|\.xss|input|<style>|<style|url\(|url=|http-equiv=|onload|content=|bgsound|<form|isindex|<input|<a href|<a url|set\-cookie|cookie|session|userid|formaction|deleteuser|redirect|exec|expression|background|noxss|cmd |<cmd|ha\.ckers|data=|<object|lowsrc|eval|prompt|onclick|onerror|onpropertychange|iframe|worksinchrome|code="|&colon|button|plaintext|onstart|srcdoc|onkeyup|textarea|location|window\.open|data\:|base64|submit|onmouseover|source&colon|onfocus|onmouseEnter|onmouseUp|onscroll|microsoft-com\:|<vmlframe|<animate|marquee|applet|frameset|onpagehide|behavior\:url|x-dom-event-stream|vmlframe|command|function|return|fwrite|file|popen|feof|flush|bgexec|server|print|echo|die;|die |var_daump|<html|<htm|sass|\.bat|\.log|\.py|\.php|\.js|\.html|\.css|&lt;|defer|dataformatas|datasrc|datafld|java|namespace|implementation|always|allowscriptaccess|allow|ha&#46;ckers|&#58|&#46;|classid|&gt;|table|rel=|alert|body|<td |behavior|pression|xxs|video|confirm|document\.|s”%2b”cript|crypto|crosssitespt|¢xss¢|<xss>|perl|&#x000003c|&#x3c|&#60|&#060|onkeydown|onsubmit|onselect|onsearch|onreset|oninvalid|oninput|oncontextmenu|onchange|onblur|onstorage|onresize|onpopstate|onpageshow|onoffline|ononline|attribute|onafterprint|onbeforeprint|onbeforeunload|onhashchange|onmessage|onmousemove|onmouseleave|onmousewheel|onlypossibleinopera|businessinfo|jsfiddle|onmouseover|period|onmouseover|giveanswerhere|action=|ontoggle|onshow|onwaiting|onvolumechange|ontimeupdate|onsuspend|onstalled|stylesheet|clsid|if(|if\:|if\s{|if\s\:|foo\.bar|#x=`y|href|innerhtml|inception|filter\:|onfilterchange|<param|actiontype|source>|xxx\:x|about\:blank|fuzzelement|<\?xml|onend|prefix|\(htc\)|import|endif|class=|<ul |<li |dynsrc|event\-source|payload|\(vml\)|stroke|attributename|onbegin|constructor|modified|&quot;|&apos|hacker|window\.|bonjour|xssed|worksinie|xss\.swf|<var|aquickbrownfoxjumpsovertheLazydog|this\.|js\.js|newline|href=|thesiteyouareon|maliciouscode|procheckup|<\?import|securitycompass|\.htc|blah|vulnerable|<;embed|<;object|<;xml|xss\:|victimsite|\.asp|imgsrc|\]\]<!|;\]\]|__nosuchmethod__|__definegetter__|\[\\\\xc0\]|\[\\\\xbc\]|#\\\\x27|\\\\x3e|\\\\u003c|\\\\x3c|scr\\\\0ipt|no\\\\xss|ja\\\\vasc\\\\ript|@im\\\\port|form><img/', $dataRes, $matches);

			// |&lt;\/|text\/|<\/form><img\/|<\/|<\/a>|<img\/|<\/style>|expr\/\\\*xss\*\/ession/
			if (!empty($matches[0]))
				$this->setError('PHP_UPLOAD_FILE_CONTENT_INV', [$matches[0]], []);
			return;
		}
	}
	/**
	 * check if a filename is valid. invalid chars: .., \, /, :, *, ?, ", <, >, |
	 * @param string $filename the name of the file;
	 * @return nothing;
	 * @access public
	 */
	function checkFileName($fileName)
	{
		if ($this->fileExists) {

			if (!preg_match('/^[A-Za-z0-9\x{600}-\x{6FF}\s_()-]+.\w{2,7}$/u', $fileName)) {
				$this->setError('PHP_UPLOAD_FILENAME_XSS', [], []);
				return;
			}

			$arrInvalid = array('..', '\\', '/', ':', '*', '?', '"', '<', '>', '|');
			if ((string)$fileName == '') {
				$this->setError('PHP_UPLOAD_FILENAME_EMPTY', array(), array());
				return;
			}
			foreach ($arrInvalid as $key => $tmp) {
				if (strpos($fileName, $tmp) !== false) {
					$this->setError('PHP_UPLOAD_FILENAME_INV', array(), array($tmp));
					return;
				}
			}
		}
	}

	/**
	 * Checks if the upload has performed OK and if the file is required.
	 * @return nothing;
	 * @access public
	 */
	function checkUpload()
	{
		if ($this->fileInfo['tmp_name'] == '') {
			$this->fileExists = false;
			if (isset($this->fileInfo['error']) && !is_array($this->fileInfo['error']) && $this->fileInfo['error'] > 0) {
				switch ($this->fileInfo['error']) {
					case 1:
						$this->setError('PHP_UPLOAD_ERR_INI_SIZE', array(), array());
						return;
					case 2:
						$this->setError('PHP_UPLOAD_ERR_FORM_SIZE', array(), array());
						return;
					case 3:
						$this->setError('PHP_UPLOAD_ERR_PARTIAL', array(), array());
						return;
					case 4:
						break;
					case 6:
						$this->setError('PHP_UPLOAD_ERR_NO_TMP_DIR', array(), array());
						return;
					case 7:
						$this->setError('PHP_UPLOAD_ERR_CANT_WRITE', array(), array());
						return;
					default:
						$this->setError('PHP_UPLOAD_ERR_UNKNOWN', array(), array($this->fileInfo['error']));
						return;
				}
			} else {
				$this->setError('PHP_UPLOAD_ERR_TMP_DIR', array(), array());
			}
		} else {
			$this->fileExists = true;
			if (isset($this->fileInfo['size']) && $this->fileInfo['size'] == 0) {
				$this->fileExists = false;
				$this->setError('UPLOAD_CHECK_SIZE_S', array($this->minSize - 1), array($this->minSize - 1));
			}
		}

		if (!is_uploaded_file($this->fileInfo['tmp_name'])) {
			if ($this->isRequired) {
				if ($this->fileInfo['tmp_name'] != '') {
					$this->setError('PHP_UPLOAD_ERR_TMP_FILE', array(), array($this->fileInfo['tmp_name']));
					return;
				} elseif ($this->fileInfo['error'] == 4) {
					$this->setError('PHP_UPLOAD_FILE_REQUIRED', array(), array());
					return;
				}
			}
		}
	}

	/**
	 * 	Makes RollBack if transaction failed.
	 * @return nothing;
	 * @access public
	 */
	function RollBack()
	{
		@unlink($this->destinationName);
	}

	/**
	 * Setter. set error for developper and user.
	 * @var string $errorCode error message code;
	 * @var array $arrArgsUsr  array with optional parameters for sprintf functions;
	 * @var array $arrArgsDev array with optional parameters for sprintf functions.
	 * @return nothing;
	 * @access private
	 */
	function setError($errorCode, $arrArgsUsr, $arrArgsDev)
	{
		$errorCodeDev = $errorCode;
		if (!in_array($errorCodeDev, array('', '%s'))) {
			$errorCodeDev .= '_D';
		}
		if ($errorCode != '') {
			$this->errorType[] = KT_getResource($errorCode, 'FileUpload', $arrArgsUsr);
		} else {
			$this->errorType = array();
		}
		if ($errorCodeDev != '') {
			$this->develErrorMessage[] = KT_getResource($errorCodeDev, 'FileUpload', $arrArgsDev);
		} else {
			$this->develErrorMessage = array();
		}
	}

	/**
	 * check if an error was setted.
	 * @return boolean true if error is set or false if not;
	 * @access public
	 */
	function hasError()
	{
		if (count($this->errorType) > 0 || count($this->develErrorMessage) > 0) {
			return 1;
		}
		return 0;
	}

	/**
	 * Getter. 	return the errors setted.
	 * @return array  array - 0=>error for user, 1=>error for developer;
	 * @access public
	 */
	function getError()
	{
		return array(implode('<br />', $this->errorType), implode('<br />', $this->develErrorMessage));
	}
}
