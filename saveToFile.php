```php
<?php

function saveToFile($scrapedData) {
    $fileName = "scrapedData.txt";

    // Open the file for writing
    $file = fopen($fileName, "w");

    // Check if file opened successfully
    if (!$file) {
        echo "Unable to open file!";
        return;
    }

    // Write the scraped data to the file
    fwrite($file, $scrapedData);

    // Close the file
    fclose($file);
}

?>
```