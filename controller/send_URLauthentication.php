<?php 
//including the URLauthentication.php file in order to get access to the User_URL_Link class
include_once("../model/URLauthentication.php");
$userRequest = new User_URL_Link();

if(isset($_POST['SendlinkUrl'])){
 $userRequest ->  short_URL($connection);
}else if(isset($_POST['redirectUserOriginalURL'])){
 $userRequest ->  redirectTo_OriginalURL($connection);
}else{
  //echo "string";
}

?>