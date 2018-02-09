
<?php

class Controller_pages {

function checkShortenerURL(){
//Get URL content
$CheckShort = $_SERVER['REQUEST_URI'];
//Get all characters as string after the last slash (/)
//$CheckShort = explode('/', $CheckShort, 4)[3];
$CheckShort = substr($CheckShort, strrpos($CheckShort, '/') + 1);
//Get the last 6 characters from the string
	if(strlen($CheckShort) > 6){
	  $CheckShort = substr($CheckShort, -6);
	}else{
	  $CheckShort = $CheckShort;
	}

	return $CheckShort;

}
//Function to Navigate to Home page 
public function HomePage(){
    include_once("view/home.php");
}

//Function to Redirect to user define URL
public function set_New_pages($shortener){
//Remove the Question mark (?) and  assign .php to the name before Redirecting to the use URL link 
 //$page = strtok($page, '?');

 include_once("view/short.php");      
 }


}

?>
