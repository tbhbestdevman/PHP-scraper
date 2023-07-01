```php
<?php

function scrapeData($firstName, $lastName) {
    // Initialize cURL
    $ch = curl_init();

    // Set the URL
    $url = "https://www.example.com/search?firstName=" . urlencode($firstName) . "&lastName=" . urlencode($lastName);
    curl_setopt($ch, CURLOPT_URL, $url);

    // Set options to return the result instead of outputting it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request and store the result
    $result = curl_exec($ch);

    // Close the cURL resource
    curl_close($ch);

    // Call the function to save the data to a file
    require_once 'saveToFile.php';
    saveToFile($result);
}

?>
```