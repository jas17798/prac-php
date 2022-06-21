<?php

header("Content-Length: " . filesize ('pdf/Design_Patterns.pdf' ) ); 
header("Content-type: application/pdf"); 
header("Content-disposition: inline;     
filename=".basename('pdf/Design_Patterns.pdf'));
header('Expires: 1');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
$filepath = readfile('pdf/Design_Patterns.pdf');




/*********** */
    // The location of the PDF file
    // on the server
    // $filename = "pdf/Design_Patterns.pdf";
    
    // Header content type
    // header("Content-type: application/pdf");
    
    // header("Content-Length: " . filesize($filename));
    
    // Send the file to the browser.
    readfile($filename);

    /********************************/
// // Store the file name into variable
// $file = 'pdf/Design_Patterns.pdf';
// $filename = 'pdf/Design_Patterns.pdf';
  
// // Header content type
// header('Content-type: application/pdf');
  
// header('Content-Disposition: inline; filename="' . $filename . '"');
  
// header('Content-Transfer-Encoding: binary');
  
// header('Accept-Ranges: bytes');
  
// // Read the file
// @readfile($file);
  
?>

