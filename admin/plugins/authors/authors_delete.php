<?php require_once('../../checklogin.php'); 
// Load the tNG classes
require_once('../../includes/tng/tNG.inc.php');
//start check access
// Make a transaction dispatcher instance
$id= _ktx($_GET['id']);

$tNGs = new tNG_dispatcher("");

// Make unified connection variable
$conn_cn = new KT_connection($cn, $database_cn);

// Make an instance of the transaction object
$del_Auth = new tNG_delete($conn_cn);
$tNGs->addTransaction($del_Auth);
// Register triggers
$del_Auth->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "GET", "id");
$del_Auth->registerTrigger("END", "Trigger_Default_Redirect", 99, "authors_list.php?delete=1");
// Add columns
$del_Auth->setTable("authors_blog");
$del_Auth->setPrimaryKey("id", "NUMERIC_TYPE", "VALUE", $id);


// Execute all the registered transactions
$tNGs->executeTransactions();
//end check access
