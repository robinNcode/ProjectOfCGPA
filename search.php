<?php

$p = $_POST;

$file_name = $p['file_name'];

$search = $p['search'];

if (isset($search) && isset($file_name)) {

    $myfile = fopen($file_name, "r") or die("Unable to open file!");

    echo fread($myfile, filesize($file_name));

    fclose($myfile);
} else {
    echo "Wrong ID!!!";
}

echo "<br><br><br>";
echo "<a href=\"index.html\">
				<input type=\"submit\" Value=\"TRY AGAIN\" style=\"font-size: 30px; border-radius: 10px; background-color:aqua;\"/>
			</a>";
