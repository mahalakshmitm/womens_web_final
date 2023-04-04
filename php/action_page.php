<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
      $message = $_POST['message']; 
      $file = 'messages.txt'; 
      $handle = fopen($file, 'a'); 
      fwrite($handle, $message . PHP_EOL); 
      fclose($handle); 
  }
  ?>