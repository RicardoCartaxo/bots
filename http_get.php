<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number , filename

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Include http library
include("includes/LIB_http.php");

// Define the target and referrer web pages: 
$target ="http://www.schrenk.com/publications.php";
$ref = "http://www.schrenk.com";

// Request the header
$return_array = http_get_withh<?php
/*
########################################################################
W3C® SOFTWARE NOTICE AND LICENSE
http://www.w3.org/Consortium/Legal/2002/copyright-software-20021231
This work (and included software, documentation such as READMEs, or other related items) is being 
provided by the copyright holders under the following license. By obtaining, using and/or copying 
this work, you (the licensee) agree that you have read, understood, and will comply with the following 
terms and conditions.

Permission to copy, modify, and distribute this software and its documentation, with or without modification, 
for any purpose and without fee or royalty is hereby granted, provided that you include the following on 
ALL copies of the software and documentation or portions thereof, including modifications:

    1.The full text of this NOTICE in a location viewable to users of the redistributed or derivative work.

    2.Any pre-existing intellectual property disclaimers, notices, or terms and conditions. If none exist, 
    the W3C Software Short Notice should be included (hypertext is preferred, text is permitted) within the 
    body of any redistributed or derivative code.

    3.Notice of any changes or modifications to the files, including the date changes were made. (We recommend 
    you provide URIs to the location from which the code is derived.)

THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR ANY PARTICULAR 
PURPOSE OR THAT THE USE OF THE SOFTWARE OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS, COPYRIGHTS, 
TRADEMARKS OR OTHER RIGHTS.

COPYRIGHT HOLDERS WILL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF 
ANY USE OF THE SOFTWARE OR DOCUMENTATION.

The name and trademarks of copyright holders may NOT be used in advertising or publicity pertaining to the 
software without specific, written prior permission. Title to copyright in this software and any associated 
documentation will at all times remain with copyright holders.

Copyright 2007, Michael Schrenk

THIS SCRIPT IS FOR DEMONSTRATION PURPOSES ONLY! 
    It is not suitable for any use other than demonstrating 
    the concepts presented in Webbots, Spiders and Screen Scrapers. 
########################################################################
*/?>



<?php
# Include libraries
include("LIB_parse.php");
include("LIB_http.php");

# Download a web page
$web_page = http_get($target="http://www.nostarch.com", $referer="");

# Parse the title of the web page, inclusive of the title tags
$title_incl = return_between($web_page['FILE'], "<title>", "</title>", INCL);

# Parse the title of the web page, exclusive of the title tags
$title_excl = return_between($web_page['FILE'], "<title>", "</title>", EXCL);

# Display the parsed text
echo "title_incl = ".$title_incl;
echo "\n";
echo "title_excl = ".$title_excl;
?>eader($target, $ref);

// Display the header: 
echo "FILE CONTENTS \n";
var_dump($return_array['FILE']);
echo "ERRORS\n";
var_dump($return_array['ERROR']);

echo "STATUS \n";
var_dump($return_array['STATUS']);


?>

</body>
</html>