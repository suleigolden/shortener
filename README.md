	##URL shortener app

	##Make SURE you Redirect all URL to index.php page in order to get the shortener six character ID from the URL, and also prevent it from requested URL was not found (404 error).
	##To Redirect all URL to index.php, Copy and paste the bellow code in not pad and save it with .htaccess inside the root directory.
 
 	RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-l
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
	

	#Installing / Deployment
	You need to have XAMPP with PHP 7.0 or Higher if you want to deploy it in your local host 
	
	#Database Name and table structure
	Databese Name: urlshort
	Table:
	CREATE TABLE `urls` (
	  `URL_ID` int(11) NOT NULL,
	  `Original_Url` varchar(255) NOT NULL,
	  `Short_Url` varchar(20) NOT NULL,
	  `Clcik` int(11) NOT NULL,
	  `DateRegistered` datetime NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	NOTE:you can change the database and table name to what ever you want.
	
	#Configuration Details
	The URL Sortener app was develop using a simple customize MVC framework developed with PHP.
	Apart from the images, javascript and css folder, the MVC contains three 
	main folders (Controller, model and view) and a index.php file that send the navigation 
	request. The controller folder contain two files. The first file handle the Navigation 
	between the Home page and the shortener page that are inside the view folder. 
	While the other file handle the interaction between the user and the server (database). 
	It takes a request from the user and send it to a file inside the model folder to handle 
	the request and send the result back to the user. The model folder has two files also, 
	the first file is the database connection file while the other file process user request. 
	
	
	#Live/Online Testing
	Visit  https://www.sportket.com/short

	#How it's works
	1. Copy and past or type your URL in the provided space
	2. Click on green button short
	3. Wait for few seconds for Ajax to send your request and process your request.
	4. Click on copy to copy your shortener or highlight and copy your shortener
	NOTE: You will see the link (original web link) that you shorte automatically embedded bellow the result.

	#Question
    1.if the app becomes famous and you have 10,000 people trying to 
	  shorten urls every minute, what would the bottlenecks be?
    2.how would you work around these bottlenecks?
    3.how does the performance characteristics change when you have 500 million new links per month?

	Answer:
	I use BlazeMeter to get the result of bottlenecks if 10,000 people try to shorten urls every minute from the attached screen short.
	To answer all the question in general; First, I will  estimate the amount of users that are likely going to visit the web app and Shorte every day.  Then, I will use BlazeMeter to run a load test that includes the expected usage patterns and workflows of the web application (URL Shortener). 
	The next step I will take is to simulate anywhere from one hundred users to over one million concurrent users, to verify that the application does not contain any bottlenecks. Then I will use Log entries to aggregate the system log, and find the bottlenecks, and free them to eliminate the risk of having them uploaded to production, if impediments are naked.  In addition, I will monitor and optimize the log, so if something does go wrong, the correct log will be recorded to support a quick analysis and fix while running the test. BlazeMeter  is an online web application that allow you to do performance testing.

	Another solution is , I will suggest to have multiple servers that can handle the load independently and also have more than one database with replication.  For example, the response time will come down to minimum or average if different servers are assisting multiple users at the same time and both try to short URL. And the response time will be more faster if a user try to short already short URL.
	The performance characteristics change to max when you have 500 million new links per month if I fail to monitor the Log entries to aggregate the system log, and find the bottlenecks, and free them to eliminate the risk of having them uploaded to production. But it will be average or minimum if log entries is manage properly.

