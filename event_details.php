<?php 
  include 'simple_html_dom.php';
  $html = file_get_html('http://localhost/kiitfest18/events/electrifyn.php');

// Find all links 
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';
?>