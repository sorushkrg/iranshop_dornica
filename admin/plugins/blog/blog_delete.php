<?php require_once('../../checklogin.php'); 
// Load the tNG classes
require_once('../../includes/tng/tNG.inc.php');
//start check access
// Make a transaction dispatcher instance
$id= _ktx($_GET['id']);

$tNGs = new tNG_dispatcher("");

// Make unified connection variable
$conn_cn = new KT_connection($cn, $database_cn);

	//remove this line if you want to edit the code by hand 
function Trigger_FileDelete(&$tNG) {
  $deleteObj = new tNG_FileDelete($tNG);
  $deleteObj->setFolder("../../../attachment/ /blogPage/");
  $deleteObj->setDbFieldName("image");
  return $deleteObj->Execute();
}
//end Trigger_FileDelete trigger
	
// Make an instance of the transaction object
$del_Blg = new tNG_delete($conn_cn);
$tNGs->addTransaction($del_Blg);
// Register triggers
$del_Blg->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "GET", "id");
$del_Blg->registerTrigger("END", "Trigger_Default_Redirect", 99, "blog_list.php?delete=1");
$del_Blg->registerTrigger("AFTER", "Trigger_FileDelete", 98);
// Add columns
$del_Blg->setTable("blog_page");
$del_Blg->setPrimaryKey("id", "NUMERIC_TYPE", "VALUE", $id);


// Execute all the registered transactions
$tNGs->executeTransactions();
//end check access
