<?php
//creating an object of Controller_pages Class
$set_Page = new Controller_pages();
//Get and Shortener URL ID
$CheckShort  = $set_Page -> checkShortenerURL();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body class="body_image">
	<div class="container">
	<div style="margin-left:10%; width: 100%;">
	<script>
		RedirectShortURLTouserLink("<?php echo $CheckShort; ?>");
	</script>
	<p id="RedirectMessage" style="color: #FFF;">Redirecting to <?php echo $_SERVER['REQUEST_URI']; ?>.........</p>
		<div id="errorMessage" style="display: none; background-color: #FFF;">
		  <h1 class="headtitle" style="color: #000;">Suleiman URL Shortener</h1>

		 <p>404: Page not found: this page (
		 <span style="font-weight: bold;"><?php echo $_SERVER['REQUEST_URI']; ?></span>)  does not exist.
			<br>
			Make sure you include all the text and the last six characters correctly from the shorten URL that you copied.
		</p>
		<a href="../url">Back / Create Another Shorte URL</a>
	</div>
	</div>
		       
	</div>
</body>

</html>
