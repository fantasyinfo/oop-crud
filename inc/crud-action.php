<?php

// include functions file here
require 'functions.php';
$msg = '';

// fetch all data
$allData = $conn->getAllDataAtOnce('user');
$allData = json_decode($allData, true);
//$conn->prx($allData);




// get single data
// $data = ['user_id' => 3];
// $singleRecord = $conn->getSingleData('user', $data);
// $singleRecord = json_decode($singleRecord, true);
// if ($singleRecord['status'] == 200) {
//     $msg = $singleRecord['msg'];
//     $data = $singleReocord['data'];
// } else if ($singleRecord['status'] == 404) {
//     $msg = $singleRecord['msg'];
// }






// insert Data
/*
 * 
 * $data = [
    'user_name' => 'Pappu',
    'user_email' => 'pappu@gmail.com',
    'STATUS' => 1
];

//$insertData =  $conn->insertData('user',$data);
//$insertStatus = json_decode($insertData,true);

if($insertStatus['status'] == 200)
{
    $msg = $insertStatus['msg'];
}else if ($insertStatus['status'] == 404)
{
    $msg = $insertStatus['msg'];
}
  */


// delete Data

// $arr = ['user_id' => 1];
// $deleteData = $conn->deleteData('user', $arr);
// $conn->prx($msg);
// if($deleteData['status'] == 200)
// {
//     $msg = $deleteData['msg'];
// }else if ($deleteData['status'] == 404)
// {
//     $msg = $deleteData['msg'];
// }


// udate data
// $sql = "update user set user_name = 'Gaurav', user_email = 'gs@gmail.com' where user_id = 2";
// $updateData = $conn->updateData($sql);
// $updateData = json_decode($updateData, true);
// if ($updateData['status'] == 200) {
//     $msg = $updateData['msg'];
// } else {
//     $msg = $updateData['msg'];
// }