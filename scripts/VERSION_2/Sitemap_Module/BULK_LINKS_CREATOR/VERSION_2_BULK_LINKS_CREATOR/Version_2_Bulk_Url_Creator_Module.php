<html>
<head>
<title>VERSION 2 - BULK LINKS CREATOR BY JEFF CHILDERS</title>
<meta name="description" content="THIS IS TO CREATE BULK URLS FOR VERSION 2 GEOSCRIPT ">
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


<h3>VERSION 2 BULK LINKS CREATOR &nbsp;&nbsp;URLS WILL BE SAVED IN  &nbsp;urllist.txt&nbsp;&nbsp; </h3>
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
$file_handle = fopen("V2bulklinksdatabase.csv", "r")or die("Unable to open file!");
while (!feof($file_handle) ) {
$line_of_text = fgetcsv($file_handle);
$state = $line_of_text[1];
$state = str_replace(" ","_",$state);
$state_abbreviation = $line_of_text[3];
$city = $line_of_text[2];
$city = str_replace(" ","_",$city);
$url_format_data = $_POST['urlformat'];
$url_format = explode('\n', $url_format_data );
foreach ($url_format as $urls ) {
$urls = str_replace("[state]","$state",$urls);
$urls = str_replace("[state_abbreviation]","$state_abbreviation",$urls);
$urls = str_replace("[city]","$city",$urls);
$formatted_urls = ($urls);
$url_data_list = "urllist.txt";
file_put_contents($url_data_list,$formatted_urls .PHP_EOL, FILE_APPEND);
echo ('<div id="created_urls">' . $formatted_urls.  '</div>' );
ob_flush();
flush();
}
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


// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS












// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS

//END
?>

</body>
</html>






