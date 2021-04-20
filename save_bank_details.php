<?php
//add or include library to file
include 'PHPCRUDLib/PHPCRUDLib.php';
use PHPGrammers\PHPCRUDLib as PHPCRUDLib;
//define table name
$table = 'bank_details';
//create library object and pass the table name to it
$PHPCRUDLib = new PHPCRUDLib($table);

 $bankName = $_POST['bank_name'] ;
 $branch = $_POST['branch'];
 $accountName = $_POST['account_name'];
 $accountNumber = $_POST['number'];

 //saving new record into table
$PHPCRUDLib->bank_name =$bankName;
$PHPCRUDLib->bank_branch =$branch;
$PHPCRUDLib->account_name =$accountName;
$PHPCRUDLib->account_number =$accountNumber;
$PHPCRUDLib->created_at =date('Y-m-d H:i:s');

if($PHPCRUDLib->save()){
  echo "bank details saved";
}
