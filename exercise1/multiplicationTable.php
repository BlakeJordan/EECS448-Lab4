<?php
   error_reporting(E_ALL);
   ini_set("display_errors", 1);

   echo "<table>";
   for ($rows = 0; $rows < 101; $rows++) {
       echo "<tr> \n";
       for ($cols = 0; $cols < 101; $cols++) {
           if ($rows == 0 && $cols == 0) {
               echo "<td></td>\n";
           }
           else if ($rows == 0 && $cols != 0) {
               echo "<td>$cols</td>\n";
           }
           else if ($rows != 0 && $cols == 0) {
               echo "<td>$rows</td>\n";
           }
           else if ($rows != 0 && $cols != 0) {
               $mult = $rows * $cols;
               echo "<td>$mult</td>\n";
           }
       }
   }
?>
