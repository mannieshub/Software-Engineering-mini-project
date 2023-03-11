<?php
$dir = "C:/xampp/htdocs/SE_pro-";
$files = scandir($dir);
$map = "<div style=\"background-color: #d8c3a5; padding: 10px; border-radius: 5px;\"><h2 style=\"color: #4d4d4d;\">Website Map</h2>\n";

foreach ($files as $file) {
  if ($file != "." && $file != ".." && (strpos($file, ".html") !== false || strpos($file, ".php") !== false)) {
    // Add a clickable button for each page
    $map .= "<button style=\"background-color: #4d4d4d; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; margin: 5px;\"><a href=\"$file\" target=\"_blank\" style=\"color: #fff; text-decoration: none;\">$file</a></button>\n";
  }
}

$map .= "</div>\n";
echo $map;
?>
