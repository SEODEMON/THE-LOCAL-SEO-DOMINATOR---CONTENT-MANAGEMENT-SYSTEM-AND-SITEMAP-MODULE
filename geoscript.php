<?php
// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM

// BY PHP NINJA JEFF CHILDERS

// VERSION 1


//      THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 
// ###################################################     // ###################################################
// ###################################################    // ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################    // ###################################################
//      THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 


//   SETTINGS
// #############
// XXXXXXXXXXXXX
// #############

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('max_execution_time', 259200);
set_time_limit(0);
ob_implicit_flush(true);

//   START
// ##########
// XXXXXXXXXX
// ##########
 
 ob_start();


// SCRIPT NOW ENGAUGED 


// TURBO PHP = ON = FORCE_PHP_FAST_RATE_TURBO_ENGAUGED


//  GET TEMPLATE DATA = GET LOGIC = PASS HTACCESS VARABLES
// ####################
// XXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXX
// ####################

$template_data = file_get_contents("template.html");
$state = $_GET['state']; 
$city = $_GET['city']; 
$zipcode = $_GET['zipcode']; 



// END GET TEMPLATE DATA



// EXAMPLE SPINTAX: {Boy|Girl|Dog|Cat|Cow|Man|Lizard|Bug|Car|Hacker|Turtle}  




// ALSO, SPIN AND RANDOMIZE HTML, SPIN AND RANDOMIZE SENTENCES, SPIN AND RANDOMIZE IMAGES, SPIN AND RANDOMIZE VIDEOS, SPIN AND RANDOMIZE TEXT, SPIN AND RANDOMIZE JAVASCRIPT CODE etc....



// IN ORDER FOR THIS TO WORK ALL SPINTAX CONTENT MUST BE BETWEEN THESE TWO TAGS:  <spin>   </spin>

//   SPINTAX CODE
// ###############
// XXXXXXXXXXXXXXX
// ###############

function spin($str){
$tmp = explode("<spin>",$str);
$pos = strpos($str, '<spin>');
if ($pos !== false) {
for($i=0;$i<count($tmp);$i++){
$pos = strpos($tmp[$i], '</spin>');
if ($pos !== false) {
unset($temp);
$temp = explode("</spin>",$tmp[$i]);
$temp[0] = spinin($temp[0]);
$tmp[$i] = implode($temp);
}
}
return implode('',$tmp);
}else{
return $str;
}
}
function spinin($s){
preg_match('#\{(.+?)\}#is',$s,$m);
if(empty($m)) return $s;
$t = $m[1];
if(strpos($t,'{')!==false){
$t = substr($t, strrpos($t,'{') + 1);
}
$parts = explode("|", $t);
$s = preg_replace("+\{".preg_quote($t)."\}+is", $parts[array_rand($parts)], $s, 1);
return spinin($s);
}
//  MUST USE THESE TWO TAGS FOR SPINTAX SCRIPT ABOVE TO WORK <spin> SPINTAX CONTENT {HERE|PLACED HERE|RIGHT HERE|PUT HERE}  </spin>
  

// END SPINTAX CODE





//   MATCH UP COLUMN DATA
// #######################
// XXXXXXXXXXXXXXXXXXXXXXX
// #######################

$data_file = fopen("database.csv", "r")or die("Unable to open file!");
while (!feof($data_file) ) {
$line_of_text = fgetcsv($data_file);
if( $zipcode==$line_of_text[3])
$longitude=$line_of_text[4];
if( $zipcode==$line_of_text[3])
$latitude=$line_of_text[5];
if( $zipcode==$line_of_text[3])
$Metalongitude=$line_of_text[4];
if( $zipcode==$line_of_text[3])
$Metalatitude=$line_of_text[5];
if( $zipcode==$line_of_text[3])
$stateabrr=$line_of_text[1];

}
    
//   END MATCH UP COLUMN DATA



// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS



//      STRING REPLACE BASIC ACTIONS AND SHORTCODES--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 
// ###################################################     // ###################################################
// ###################################################    // ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################    // ###################################################
//      STRING REPLACE BASIC ACTIONS AND SHORTCODES--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 



   //STATE VARABLE
// ###################################################

//    STATE VARABLE-------->>>        [state]

$state_data = str_replace("_"," ",$state);
$template_data = str_replace("[state]",$state_data,$template_data);


// END STATE VARABLE-------->>>       [state]


   //STATE CSS VARABLE
// ###################################################



//   STATE CSS VARABLE-------->>>           [state_css]

$template_data = str_replace("[state_css]",'<div id="state" class="state">' . $state_data . '</div>',$template_data);


//   END STATE CSS VARABLE-------->>>      [state_css]


// STATE ABBREVIATION VARABLE
// ####################################

// STATE ABBREVIATION VARABLE-------->>>   [state_abv.]

$template_data = str_replace("[state_abv.]",$stateabrr,$template_data);


// END STATE ABBREVIATION VARABLE-------->>>   [state_abv.]


// STATE CSS ABBREVIATION VARABLE
// ####################################

// STATE CSS ABBREVIATION VARABLE-------->>>      [state_abv_css]

$template_data = str_replace("[state_abv_css]",'<div id="state_abv" class="state_abv">' .$stateabrr. '</div>',$template_data);


// END STATE CSS ABBREVIATION VARABLE-------->>>   [state_abv_css]



   //CITY VARABLE
// ###################################################
//     CITY VARABLE-------->>>    [city]

$city_data = str_replace("_"," ",$city);
$template_data = str_replace("[city]",$city_data,$template_data);


//   END CITY VARABLE-------->>>  [city]



   //CITY CSS VARABLE
// ###################################################

//     CITY CSS VARABLE-------->>>     [city_css]

$template_data = str_replace("[city_css]",'<div id="city" class="city">' . $city_data . '</div>',$template_data);


//    END CITY  CSS VARABLE-------->>>   [city_css]



// ZIPCODE VARABLE
// ####################################

//  ZIPCODE VARABLE-------->>>       [zipcode]

$template_data = str_replace("[zipcode]",$zipcode,$template_data);


//   END ZIPCODE VARABLE-------->>>  [zipcode]

 
// ZIPCODE CSS VARABLE
// ####################################

// ZIPCODE CSS VARABLE-------->>>    [zipcode_css]

$template_data = str_replace("[zipcode_css]",'<div id="zipcode" class="zipcode">' . $zipcode . '</div>',$template_data);


// END ZIPCODE VARABLE-------->>>   [zipcode_css]


// POSTAL CODE VARABLE
// ####################################

// POSTAL CODE VARABLE-------->>>       [postal_code]

$template_data = str_replace("[postal_code]",$zipcode,$template_data); 


// END POSTAL CODE VARABLE-------->>>   [postal_code]



// POSTAL CODE CSS VARABLE
// ####################################

// POSTAL CODE CSS VARABLE-------->>>       [postal_code_css]

$template_data = str_replace("[postal_code_css]",'<div id="postal_code" class="postal_code">'. $zipcode . '</div>',$template_data); 


// END POSTAL CODE CSS VARABLE-------->>>   [postal_code_css]



// LONGITUDE VARABLE
// ####################################

//LONGITUDE VARABLE-------->>> [longitude]

$template_data = str_replace("[longitude]",$longitude,$template_data);


//END LONGITUDE VARABLE-------->>> [longitude]



// LONGITUDE CSS VARABLE
// ####################################

//LONGITUDE CSS VARABLE-------->>>     [longitude]

$template_data = str_replace("[longitude_css]",'<div id="longitude" class="longitude">'.$longitude. '</div>',$template_data);


//END LONGITUDE CSS VARABLE-------->>>  [longitude]



// LATITUDE VARABLE
// ####################################

// LATITUDE VARABLE-------->>>     [latitude]

$template_data = str_replace("[latitude]",$latitude,$template_data);

// LATITUDE VARABLE-------->>>     [latitude]




// LATITUDE CSS VARABLE
// ####################################

// LATITUDE CSS VARABLE-------->>>         [latitude_css]

$template_data = str_replace("[latitude_css]",'<div id="latitude" class="latitude">'.$latitude. '</div>',$template_data);


// END LATITUDE CSS VARABLE-------->>>     [latitude_css]




// METALONGITUDE VARABLE
// ####################################

//METALONGITUDE VARABLE-------->>>     [Metalongitude]

$Metalongitudearray = array("&#176;"," "," N", " W", " S", " E","N","W","S","E");
$Metalongitude = str_replace($Metalongitudearray,"",$Metalongitude);
$template_data = str_replace("[Metalongitude]",$Metalongitude,$template_data);


//END METALONGITUDE VARABLE-------->>> [Metalongitude]


// METALONGITUDE CSS VARABLE
// ####################################

//METALONGITUDE CSS VARABLE-------->>>     [Metalongitude_css]

$Metalongitudearray = array("&#176;"," "," N", " W", " S", " E","N","W","S","E");
$Metalongitude = str_replace($Metalongitudearray,"",$Metalongitude);
$template_data = str_replace("[Metalongitude_css]", '<div id="Metalongitude" class="Metalongitude">' . $Metalongitude.  '</div>',$template_data);


//END METALONGITUDE CSS VARABLE------->>>  [Metalongitude_css]


// METALATITUDE VARABLE
// ####################################

// METALATITUDE VARABLE-------->>>     [Metalatitude]

$Metalatitudearray = array("&#176;"," ", " N", " W", " S", " E","N","W","S","E");
$Metalatitude = str_replace($Metalatitudearray,"",$Metalatitude);
$template_data = str_replace("[Metalatitude]", $Metalatitude,$template_data);


// END METALATITUDE VARABLE-------->>>     [Metalatitude]


// METALATITUDE CSS VARABLE
// ####################################

// METALATITUDE CSS VARABLE-------->>>        [Metalatitude_css]

$Metalatitudearray = array("&#176;"," ", " N", " W", " S", " E","N","W","S","E");
$Metalatitude = str_replace($Metalatitudearray,"",$Metalatitude);
$template_data = str_replace("[Metalatitude_css]", '<div id="Metalatitude" class="Metalatitude">' .$Metalatitude. '</div>',$template_data);

// END METALATITUDE CSS VARABLE-------->>>     [Metalatitude_css]



   //STATELINK  VARABLE
// ###################################################

//   STATELINK  VARABLE----------------->>>        [statelink]
{
$state_link = str_replace(" ","_",$state);
$template_data = str_replace("[statelink]",$state_link,$template_data);

//  END STATELINK  VARABLE----------------->>>        [statelink]




   //STATELINK CSS VARABLE
// ###################################################

//   STATELINK CSS VARABLE----------------->>>        [statelink_css]

$state_link = str_replace(" ","_",$state);
$template_data = str_replace("[statelink_css]",'<div id="state_link" class="state_link">'. $state_link .'</div>',$template_data);

//  END STATELINK CSS VARABLE----------------->>>        [statelink_css]




   //CITYLINK  VARABLE
// ###################################################

//   CITYLINK  VARABLE----------------->>>        [citylink]

$city_link = str_replace(" ","_",$city);
$template_data = str_replace("[citylink]",$city_link,$template_data);

//   END CITYLINK  VARABLE----------------->>>        [citylink]



   //CITYLINK CSS VARABLE
// ###################################################

//   CITYLINK CSS VARABLE----------------->>>        [citylink_css]

$city_link = str_replace(" ","_",$city);
$template_data = str_replace("[citylink_css]",'<div id="city_link" class="city_link">'. $city_link .'</div>',$template_data);
}
//   END CITYLINK CSS VARABLE----------------->>>        [citylink_css]

// ###################################################




// END------->>>STRING REPLACE BASIC ACTIONS AND SHORTCODES--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 
// ###################################################     // ###################################################
// ###################################################    // ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    // XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################    // ###################################################
//  END------->>>STRING REPLACE BASIC ACTIONS AND SHORTCODES--------->>>[SCRIPT BY JEFF CHILDERS ------>>>[ORIGINAL CODE] 


 // THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS


 //------------------------------------------------------------------------------------------------------------------------------------------

//   EXPANDED OPTIONS AREA (WILL ADD MORE WHEN I CAN)------------>>>>>>>>>       ADDED MODULES:
// ###################################################
// ###################################################---------->>>>>>>>>>       CURRENT TIME AND DATE MODULE

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX------------>>>>>>>        NEWS FEED MODULE

// ###################################################---------->>>>>>>>>        GOOGLE MAPS MODULE NO API NEEDED



 //------------------------------------------------------------------------------------------------------------------------------------------


//  print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>> [Current_Time_and_Date]




//#####   #############      #############                        print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>> [Current_Time_and_Date]
// ###################################################
// ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################           print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>>   [Current_Time_and_Date]


date_default_timezone_set("America/New_York");
$present_time_and_date = date("F j, Y, g:i a"); 

// print(CURRENT DATE AND TIME MODULE)
// ###################################################

// print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>>         [Current_Time_and_Date]

$template_data = str_replace("[Current_Time_and_Date]",$present_time_and_date,$template_data);

// END print(CURRENT DATE AND TIME MODULE)----------->>>>>>>>>>>>>     [Current_Time_and_Date]

// print(CURRENT DATE AND TIME MODULE) WITH CSS VALUES
// ###################################################

// print(CURRENT DATE AND TIME MODULE) WITH CSS VALUES----------->>>>>>>>>>>>>       [Current_Time_and_Date_css]

$template_data = str_replace("[Current_Time_and_Date_css]",'<div id="current_time_and_date" class="current_time_and_date">' . $present_time_and_date . '</div>',$template_data);
   

// END print(CURRENT DATE AND TIME MODULE) WITH CSS VALUES----------->>>>>>>>>>>>>   [Current_Time_and_Date_css]




//   END  print(CURRENT DATE AND TIME MODULE)



//  RELATED NEWS FEED MODULE
//#####   #############      #############                         RELATED NEWS FEED MODULE----------->>>>>>  [News_Feed]
// ###################################################
// ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################            RELATED NEWS FEED MODULE----------->>>>>>  [News_Feed]




//   (gfeedfetcher)   VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm   FOR MORE DETAILS---->>                VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm
                                                                                         	
                                                                                        
//   MUST HAVE THIS CODE POSTED IN THE <head>   </head>   SECTION FOR THIS TO WORK    DOWNLOAD:  gfeedfetcher.js ---->>            VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm




//   REMOVE THE  // SYMBOL BELOW --->> COPY AND PASTE THE CODE BELOW IN YOUR HTML HEAD SECTION AND DOWNLOAD  gfeedfetcher.js---->>  VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm                                                     	
                                                                      


//   REMOVE THE  // SYMBOL BELOW --->> COPY AND PASTE THE CODE BELOW IN YOUR HTML HEAD SECTION AND DOWNLOAD  gfeedfetcher.js  FOR MORE INFORMATION ---->>   VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm

     
//<!-- NEWS Feed JavaScript Code For HTML <head> </head> Section -->    
     
          
             //<!-- NEWS Feed Start Code -->
             
             
             //copy and past code START
            
             
            //<script type="text/javascript" src="http://www.google.com/jsapi">   </script>     
            
            //<script type="text/javascript" src="js/gfeedfetcher.js">
              
              ///***********************************************
              //* gAjax RSS Feeds Displayer- (c) Dynamic Drive (www.dynamicdrive.com)
              //* This notice MUST stay intact for legal use
              //* Visit http://www.dynamicdrive.com/ for full source code
              //***********
               
            //</script> 
            
            
            //END copy code
            
            //<!-- NEWS Feed End Code -->
  
  
  
// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS    



//  USE ANY NEWS FEED URLS OR ADD ADDITIONAL FEEDS  gfeedfetcher

$news_feed_data=(' <script type="text/javascript">
var socialfeed=new gfeedfetcher("newsfeed", "newsfeedclass", "_new")
socialfeed.addFeed("Google", "http://news.google.com/news?hl=en&gl=us&q=[KEYWORD]&um=1&ie=UTF-8&output=rss") //Specify "label" plus URL to RSS feed
          socialfeed.addFeed("Google", "http://news.google.com/news?hl=en&gl=us&q=[city]+[state]&um=1&ie=UTF-8&output=rss") //Specify "label" plus URL to RSS feed
          socialfeed.displayoptions("label datetime snippet") //show the specified additional fields
          socialfeed.setentrycontainer("div") //Display each entry as a DIV
          socialfeed.filterfeed(4, "label") //Show 6 entries, sort by label
          socialfeed.init() //Always call this last
        </script> ');

// SEE INSTRUCTION FOR CSS MAPPING   OR    VISIT:      http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm



// NEWS FEED
// ###################################################

// NEWS FEED---------------------->>>>>>      [News_Feed]

$template_data = str_replace("[News_Feed]",$news_feed_data,$template_data);

// END NEWS FEED---------------------->>>>>>  [News_Feed]



// NEWS FEED WITH CSS VALUES
// ###################################################

// NEWS FEED WITH CSS VALUES---------------------->>>>>>          [News_Feed_css]


$template_data = str_replace("[News_Feed_css]",'<div id="News_Feed" class="News_Feed">' . $news_feed_data . '</div>',$template_data);


// END NEWS FEED WITH CSS VALUES---------------------->>>>>>      [News_Feed_css]


//FOR MORE INFORMATION ABOUT THE (gfeedfetcher) NEWS FEED MODULE  VISIT:  http://dynamicdrive.com/dynamicindex18/gajaxrssdisplayer.htm


//   END RELATED NEWS FEED MODULE

// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS



//       GOOGLE MAPS MODULE NO API NEEDED
//#####   #############      #############                           GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]
// ###################################################
// ###################################################
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// ###################################################
//                                                                   GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]


//YOU MUST ADJUST THE MAP PARAMETERS HERE
$map_data =('
<iframe width="225" height="485" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"src="https://maps.google.com/maps?q=Chesapeake+VA&amp;ie=UTF8&amp;&amp;output=embed"></iframe><br />
');


//  GOOGLE MAPS MODULE NO API NEEDED TAGS
// ###################################################

//  GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]

$template_data = str_replace("[Map]",$map_data,$template_data);

// END GOOGLE MAPS MODULE NO API NEEDED ----------->>>>>>  [Map]


//  GOOGLE MAPS MODULE NO API NEEDED WITH CSS VALUES ----------->>>>>>   [Map_css]

$template_data = str_replace("[Map_css]",'<div id="Map" class="Map">' . $map_data . '</div>',$template_data);

//END GOOGLE MAPS MODULE NO API NEEDED WITH CSS VALUES ----------->>>>>>  [Map_css]


// ###################################################

//  END GOOGLE MAPS MODULE


// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS

// ###################################################---------->>>>>>>>>        CURRENT TIME AND DATE MODULE

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX------------>>>>>>>        NEWS FEED MODULE

// ###################################################---------->>>>>>>>>        GOOGLE MAPS MODULE NO API NEEDED



// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS

// END OFEXPANDED OPTIONS AREA                  // END OFEXPANDED OPTIONS AREA                // END OFEXPANDED OPTIONS AREA  
//****************************                  //****************************               //****************************
//****************************                  //****************************               //****************************
//****************************                  //****************************               //****************************
//****************************                  //****************************               //****************************

// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS


echo (spin($template_data)); 
  
ob_flush();
flush();
ob_end_clean();

// THE LOCAL SEO DOMINATOR - CONTENT MANAGEMENT SYSTEM AND SITEMAP MODULE
// BY PHP NINJA JEFF CHILDERS
?>


