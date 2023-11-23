<?php
// Include the Simple HTML DOM Parser library
require 'simple_html_dom.php';

// Initialize cURL
$curl = curl_init();

// Set the URL to fetch
$url = 'https://www.1win-01.com/';

// Set cURL options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

// Execute the cURL request
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    $error = curl_error($curl);
    echo "cURL Error: " . $error;
} else {
    // Create a DOM object
    $html = new simple_html_dom();
    
    // Load the HTML response
    $html->load($response);
    
    // Modify the URLs of the images to use absolute URLs
    foreach ($html->find('img') as $image) {
        $src = $image->src;
        $image->src = makeAbsoluteURL($src, $url);
    }
    
    // Display the modified HTML content
    echo $html;
}

// Close cURL
curl_close($curl);

// Function to make a URL absolute based on a base URL
function makeAbsoluteURL($url, $baseUrl) {
    $parsedUrl = parse_url($url);

    if (isset($parsedUrl['host'])) {
        // The URL is already absolute
        return $url;
    } else {
        // The URL is relative, make it absolute
        $baseUrlParts = parse_url($baseUrl);
        $absoluteUrl = $baseUrlParts['scheme'] . '://' . $baseUrlParts['host'];

        if (isset($baseUrlParts['port'])) {
            $absoluteUrl .= ':' . $baseUrlParts['port'];
        }

        if (isset($baseUrlParts['path'])) {
            $absoluteUrl .= $baseUrlParts['path'];
        }

        if (isset($parsedUrl['path'])) {
            $absoluteUrl .= $parsedUrl['path'];
        }

        if (isset($parsedUrl['query'])) {
            $absoluteUrl .= '?' . $parsedUrl['query'];
        }

        if (isset($parsedUrl['fragment'])) {
            $absoluteUrl .= '#' . $parsedUrl['fragment'];
        }

        return $absoluteUrl;
    }
}
?>