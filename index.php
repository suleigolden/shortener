<?php
//Including set_call_pages.php file in order to get access to the Controller_pages class and it's methods
include_once("controller/set_call_pages.php");

//creating an object of Controller_pages Class
$set_Page = new Controller_pages();

//Get and check the Shortener URL if is empty or not.
$CheckShort  = $set_Page -> checkShortenerURL();

if(!empty($CheckShort)){
  $set_Page->set_New_pages($CheckShort);

}else{
  $set_Page->HomePage();
}

?>
