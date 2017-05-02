<html>
<head>
<title> THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM - SITEMAP MODULE BY JEFF CHILDERS</title>
<meta name="description" content="THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM WILL HELP YOU BUILD QUALITY LOCAL LANDING PAGES FOR LOCAL AREAS. ">
<meta name="author" content="https://www.facebook.com/ccggyyyg7y76rr">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script src="js/jquery.min.js" type="text/javascript"></script>
<style type="text/css">
body { min-width:100%;
color:yellow;
background-color: #000000;


}



#created_urls {
color:yellow;


}


</style>
</head>    
<body>
<img src="images/seo_dominator.jpg" alt="Logo" style="width:100%;height:31em;">
<br> <br>


<h3>URLS WILL BE SAVED IN  &nbsp;urllist.txt&nbsp;&nbsp; htaccess File Created!  &nbsp;&nbsp; Now Open sitemap.html &nbsp;&nbsp;Next!</h3>
<?php

// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS

//Settings
error_reporting(E_ALL);
ini_set('max_execution_time', 259200);
set_time_limit(0);
ob_implicit_flush(true);

//START

//MAKE THE URL LIST
{
ob_start();
$file_handle = fopen("database.csv", "r")or die("Unable to open file!");
while (!feof($file_handle) ) {
$line_of_text = fgetcsv($file_handle);
$state = $line_of_text[0];
$state = str_replace(" ","_",$state);
$state_abbreviation = $line_of_text[1];
$state_abbreviation = str_replace(" ","_",$state_abbreviation);
$city = $line_of_text[2];
$city = str_replace(" ","_",$city);
$zip_code = $line_of_text[3];
$zip_code = str_replace(" ","_",$zip_code);
$url_format = $_POST['urlformat'];
$url_format = str_replace("[state]","$state",$url_format);
$url_format = str_replace("[state_abbreviation]","$state_abbreviation",$url_format);
$url_format = str_replace("[city]","$city",$url_format);
$url_format = str_replace("[zip_code]","$zip_code",$url_format);
$formatted_urls = ($url_format);
$url_data_list = "urllist.txt";
file_put_contents($url_data_list,$formatted_urls .PHP_EOL, FILE_APPEND);
echo ('<div id="created_urls">' . $formatted_urls.  '</div>' );
ob_flush();
flush();
}
ob_end_clean();
}
//REMOVE EMPTY LINES AND DUPLICATES
{
ob_start();
$url_data_list = "urllist.txt";
$sitemap_links = file($url_data_list);
$uniquearray = array_unique($sitemap_links);
$implodefile = implode(PHP_EOL,$uniquearray);
$pregreplace = preg_replace('/^\h*\v+/m','', $implodefile);
$remove_empty_lines = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/","\r\n",$pregreplace);
file_put_contents($url_data_list, $remove_empty_lines);
ob_flush();
flush();
ob_end_clean();
}


//MAKE THE HTACCESS FILE
{
ob_start();
$url_for_htaccess_file = $_POST['urlformat'];                                     

//  STRIPPING OUT THE ROOT DOMAIN FOR HTACCESS FILE
$parts = explode("/",$url_for_htaccess_file);
array_shift($parts);array_shift($parts);array_shift($parts);
$newurl = implode("/",$parts);

//  STRIPPING OUT THE SHORTCODE TAGS FOR HTACCESS FILE
$newurl = str_replace("[state]","([a-z_A-Z]+)",$newurl);
$newurl = str_replace("[state_abbreviation]","([a-z_A-Z]+)",$newurl);
$newurl = str_replace("[city]","([a-z_A-Z]+)",$newurl);
$newurl = str_replace("[zip_code]","([0-9]+)",$newurl);
// THIS SETS THE TEMPLATE FOLDER LOCATION FOR EACH URL SUBMITED 

// THIS IS SO YOU CAN USE MULTIPLE TEMPLATES  

// THE WAY THIS IS SETUP, EACH TEMPLATE MUST HAVE ITS OWN FOLDER                                      	
$template_folder_full_path = $_POST['template_folder_name'];
$htaccess_data = ("


rewriteCond %{REQUEST_FILENAME} !-f
rewriteCond %{REQUEST_FILENAME} !-d
rewriterule ^$newurl?$ $template_folder_full_path?state=$1&city=$2&zipcode=$3 [L]");
$url_format_for_htaccess = "htaccess.txt";
$htaccess_data = str_replace(' ?state=$1&city=$2&zipcode=$3 [L]', '?state=$1&city=$2&zipcode=$3 [L]', $htaccess_data);
$htaccess_data = str_replace('  ?state=$1&city=$2&zipcode=$3 [L]', '?state=$1&city=$2&zipcode=$3 [L]', $htaccess_data);
file_put_contents($url_format_for_htaccess,$htaccess_data .PHP_EOL, FILE_APPEND);
ob_flush();
flush();
}

ob_end_clean();









// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS

//END
?>

</body>
</html>






