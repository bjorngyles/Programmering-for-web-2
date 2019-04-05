<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Students</title>
    </head>
    <body>

      <!--Based on https://www.zimplicit.se/en/knowledge/convert-csv-file-html-table-php -->
      <?php
      $row = 1;
      if (($handle = fopen("./DB/students.csv", "r")) !== FALSE) {
        echo '<table border="1">';
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);
          if ($row == 1) {
            echo '<thead><tr>';
          }else{
            echo '<tr>';
          }
          for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if(empty($data[$c])) {
              $value = "&nbsp;";
            }else{
              $value = $data[$c];
            }
            if ($row == 1) {
              echo '<th>'.$value.'</th>';
            }else{
              echo '<td>'.$value.'</td>';
            }
          }
          if ($row == 1) {
            echo '</tr></thead><tbody>';
          }else{
            echo '</tr>';
          }
            $row++;
        }
        echo '</tbody></table>';
        fclose($handle);
      }
    ?>

  </body>
</html>
