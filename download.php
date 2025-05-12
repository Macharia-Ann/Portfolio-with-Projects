<?php
// path to my CV file
$file = 'Downloads/Ann_cv'; 

if (file_exists($file)) {
    // Set headers to enable download process to happen
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    echo "File not found!";
}
?>