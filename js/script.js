function _(elD) {
  return document.getElementById(elD);
}
function ShortURL() {
  var hr = new XMLHttpRequest();
  var url = "controller/send_URLauthentication.php";
  var link = _("userURL").value;
  var linkUrl = "SendlinkUrl="+link;
  hr.open("POST", url, true);
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  hr.onreadystatechange = function() {
    if (hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
      _("url_status").innerHTML = "<label style='color:#F00; background-color:#FFF; '>"+return_data+"</label>";
    }
  }
 if(link==null || link=="" || link==" "){
 _("url_status").innerHTML = "<label style='color:#F00; background-color:#FFF; padding:4px;'>Type in URL.</label>";
  }else{
    hr.send(linkUrl);
  _("url_status").innerHTML =
    "<label style='color:#5cb85c; margin-top:- 29px;'>Shorting URL.........</label>";
  }
}
function copyShortURL(){
  var Url = _("ShortURLlink");
  Url.select();
  document.execCommand("Copy");
}
function RedirectShortURLTouserLink(short) {
  var hr = new XMLHttpRequest();
  var url = "controller/send_URLauthentication.php";
  var linkUrl = "redirectUserOriginalURL="+short;
  hr.open("POST", url, true);
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  hr.onreadystatechange = function() {
    if (hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
      if(return_data =="shortNotFound"){
        _("errorMessage").style.display ="block";
        _("RedirectMessage").style.display ="none";
      }else{
         window.location = "https://havecv.com/blog";
      }
    }
  }
 hr.send(linkUrl);
}