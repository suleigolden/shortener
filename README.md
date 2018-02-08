##URL shortener app

##Make SURE you Redirect all URL to index.php page in order to get the shortener six character ID from the URL, and also prevent it from requested URL was not found (404 error).
##To Redirect all URL to index.php, Copy and paste the bellow code in not pad and save it with .htaccess inside the root directory.
 
 	RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-l
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]