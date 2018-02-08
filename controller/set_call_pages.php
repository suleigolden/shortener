
<?php

class Controller_pages {

//Function to Navigate to Home page 
public function HomePage(){
    include_once("view/home.php");
}

//Function to Redirect to user define URL
public function set_New_pages($page){
	
//Remove the Question mark (?) and  assign .php to the name before Redirecting to the use URL link 
 $page = strtok($page, '?');
 include_once("view/".$page.".php");
        
 }


}

?>
