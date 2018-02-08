<?php
include_once("controller/set_call_pages.php");

//creating an object of Controller_pages Class
$set_Page = new Controller_pages();

//Get the new page to view and send it to set_New_pages method if the shortener URL ID exist in the database else view the home page. 
if(isset($_GET['new_page_to_view_Url'])){
  $Newpage = $_GET['new_page_to_view_Url'];
  $set_Page->set_New_pages($Newpage);
}else{ 
  $set_Page->HomePage();
}

?>
