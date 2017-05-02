<html>
  <head>
    <title>HTML Sitemap</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">body,td,th,p { font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12px; color: Lime; }  a:link { color: Yellow; text-decoration: none; }  a:visited { color: Red; text-decoration: none; } a:hover { text-decoration: underline; } a:active { color: Yellow; text-decoration: none; }   .tbstyle { border:  13px solid Gray; } 
.tborder {
-moz-background-clip:border;
-moz-background-inline-policy:continuous;
-moz-background-origin:padding;
background:#FFFFFF none repeat scroll 0 0;
border:1px solid #7B94C3;
color:#000000;
}

.alt1, .alt1Active {
-moz-background-clip:border;
-moz-background-inline-policy:continuous;
-moz-background-origin:padding;
background:#F5F5FF none repeat scroll 0 0;
color:#000000;
}

.smallfont {
-x-system-font:none;
font-family:verdana,geneva,lucida,'lucida grande',arial,helvetica,sans-serif;
font-size:11px;
font-size-adjust:none;
font-stretch:normal;
font-style:normal;
font-variant:normal;
font-weight:normal;
line-height:normal;
}

.menu_control {
-moz-background-clip:border;
-moz-background-inline-policy:continuous;
-moz-background-origin:padding;
-x-system-font:none;
background:#738FBF none repeat scroll 0 0;
color:#FFFFFF;
font-family:tahoma,verdana,geneva,lucida,'lucida grande',arial,helvetica,sans-serif;
font-size:11px;
font-size-adjust:none;
font-stretch:normal;
font-style:normal;
font-variant:normal;
font-weight:bold;
line-height:normal;
padding:3px 6px;
white-space:nowrap;
}
</style>
  </head>
  <body bgcolor="Black">
    <center>
      <h3>HTML Sitemap</h3>
      <p>Last Modified: 
<?php
      
$present_time_and_date = date("F j, Y, g:i a");
echo $present_time_and_date;
      
?>
</p>
    </center>
    <center>
      <table bgcolor="Gray" class="tbstyle" cellpadding="8" cellspacing="6">
        <tr>
          <td colspan="1" bgcolor="#737373">
            <b>Top / </b>
          </td>
        </tr>
<?php
$list_of_urls = "urllist.txt";
$get_url_list = file($list_of_urls);
foreach ($get_url_list as $urls ) {
echo ("<tr><td>$urls</td></tr>");
 }
    
?>    
    
 </table>
</center>
<br />
<table border="0" align="center" cellpadding="3" cellspacing="1" class="tborder">
</table>
    <center>
      <small>Page is created with GEO LOCAL PRO By Jeff Childers </small>
      <small>
        <a href="http://www.sitemapwriter.com/?lang=en" />
      </small>
      <br />
      <small>Copyright &copy; 2017</small>
</center>
  </body>
</html>
