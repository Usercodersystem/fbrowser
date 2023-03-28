<?php
$query1 = $_GET["url"];
if(isset($query1)){
echo readfile($query1);
}else{
echo "Url Cannot Be Empty Please Enter Url";
}
