page-title-gen
==============

PHP script to automatically generate *.php page titles in browser tab.


Usage
---------

To use, just include the following at the top of the PHP file containing the main content of the page (this can be set inside the `<body>` tag, and it doesn't matter whether it precedes or follows the `include('header.php');` clause).                       
                         
                                            
For example:                                                      
                                                                     
	<?php include('page_title_gen.php'); ?>                        
	<title> Name Of Blog | <?php echo $pageName; ?> </title>       
	<?php include('header.php'); ?>           