<?php 
include($_SERVER['DOCUMENT_ROOT']."/core_config.php");
$id = $_GET["id"];


if($_GET["key"] != $Key){
    ReturnHome();
}
else{
    if($id == ""){
        ReturnHome();
    }
    else{
         UploadDevicesStatus($connect, $id, CustomDate());
    }
}
?>