<?php
/*
 1. We include functions.php so that the webpage knows to generate 
    content from that file
 2. we are calling the make_page function
 3. 4 parameters
 4. the page name is "Sample Page"
 5. 'sidemenu.html', 'page1.html', 'relatedlinks.html'
 6. 'page1.html'
*/
include('functions.php');	

make_page('Sample Page 2', 'sidemenu.html', 'page2.html', 'relatedlinks.html');

?>