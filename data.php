<?php

if (isset($_POST['submit']))
	{

		 $handle = fopen($_FILES['fileToUpload']['name'], "r");
     if ($handle) {
       $headers = fgetcsv($handle, 1000, ",");
       foreach ($headers as $key => $value) {
         echo $value;
       }
       echo "<br>";
       while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
     {
        echo $data[7];
       }

   fclose($handle);
     }
      } else {
    die("Unable to open file");
}

?>
