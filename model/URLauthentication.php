<?php
//Including Database Connection
include_once("db_connection.php");

class User_URL_Link {

//Short URL Function
public function short_URL($connection){
    $url = $_POST['SendlinkUrl'];
    
if($this -> checkValidURL($url) == "true"){
    $this ->  insertShort($url,$this -> getShorten($connection),$connection);
   }else{
        //echo "No";
   }
}

//Check if the URL is a valid URL
public function checkValidURL($url){
    if(substr($url, 0, 7) != "http://"){
        $url = "http://".$url;
    }else{
        $url = $url;
    }
    // Validate URL Link
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        return "true";
    } else {
        return "false";
  }
}

//Insert Short into database
public function insertShort($url,$short,$connection){
    //Check if we already have this URL in the database
$sql = mysqli_query($connection,"SELECT * FROM urls WHERE Original_Url= '$url' ");
  $check_Url = mysqli_num_rows($sql);
  if($check_Url > 0){
    //echo back the shortener if the URL exist in the database
    echo $this -> RetrieveShortener($url,$connection);
  }else{
    //Insert shorttener into database
     mysqli_query($connection,"INSERT INTO urls VALUES ('','$url','$short','0',Now()) ");
     echo $this ->RetrieveShortener($connection);
  }
}
//Get the new unique generated short ID
public function getShorten($connection){
    $countShort = 0;
    do{
       $short = $this -> generateShortID($connection);
       if($short == "true"){
        $countShort = 0;
       }else{
        $countShort +=1;
        $short = $short;
       }
    }while($countShort < 1);
    return $short;
}
//Generating 6 random digit short unique characters
public function generateShortID($connection){
    $short = substr(str_shuffle(str_repeat("1234567890ABCDEFGHJKLMNPRSTUVWXYZabcdefghijklmnopqrstuvwxyz", 6)), 0, 6);
    //Check if ShortID exist in the database 
    $sql = mysqli_query($connection,"SELECT * FROM urls WHERE Short_Url= '$short' ");
  $check_short = mysqli_num_rows($sql);
  if($check_short > 0){
    return "true";
  }else{
    return $short;
  }
 }
//Retrieve user Shortener
public function RetrieveShortener($url,$connection){
    $query = mysqli_query($connection,"SELECT * FROM urls WHERE Original_Url='$url' ");
    while($rows = mysqli_fetch_assoc($query)){
      $shortID = $rows['URL_ID'];
      $OriginalUrl = $rows['Original_Url'];
      $shorten = $rows['Short_Url'];
      $Clicks = $rows['Clcik'];
      $date = $rows['DateRegistered'];
    }
$u_Shorten = '<div style="width:44%; background-color: #FFF; padding: 19px;">
<input type="text" readonly="true" id="ShortURLlink"  style="color: #337ab7; font-size:22px; text-decoration: none; background-color: #CCC; padding:4px; border:0px;" value="sportket.com/short/'.$shorten.'">
<button onClick="copyShortURL();" title="Copy short URL">Copy text</button>
</div>
';
echo $u_Shorten;
}




}


?>