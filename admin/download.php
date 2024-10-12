<?php
if (isset($_GET['file'])) {
    $filename = basename($_GET['file']);
    $filepath = "../file_pdf/".$filename;

    // Check if the file exists
    if (file_exists($filepath)) {
        // Set headers to force download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-Length: ' . filesize($filepath));
        
        // Read the file and output its contents
        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}
?>
