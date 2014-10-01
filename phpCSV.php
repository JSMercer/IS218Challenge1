<?php
$first_row = TRUE;
ini_set('auto_detect_line_endings',TRUE)
if (($handle = fopen("test.csv","r")) !== FALSE) {
   while (($row = fgetcsv($handle, 1000, ",")) !==FALSE) {
     if($first_row == TRUE) {
        $column_heading = $row;
        print_r($column_heading);
        $first_row = FALSE;      
     } else  { 

      $record = array_combine($column_headings, $row);
      $records[] = $record;

      }

   }

   fclose($handle);

}

  foreach($record as $record) {
    foreach($record as $key => $value) {
      echo $key . ': ' . $value "</br> \n";
    }
    echo '<hr>';
  }

?>



//make a class called record handling and make a method 
//make own object oriented program of this 