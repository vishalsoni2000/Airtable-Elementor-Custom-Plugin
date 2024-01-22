<?php /* Template Name: Elementor */



$my_postid = 78289; // Replace with your actual Post ID

$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$htmlContent = str_replace(']]>', ']]&gt;', $content);
print_r($htmlContent);
// Create a DOMDocument object and load the HTML content
$dom = new DOMDocument();
$dom->loadHTML($htmlContent);

// Create a DOMXPath object to query the document
$xpath = new DOMXPath($dom);

// Initialize an empty array to store the data
$wordpressArray = array();

// Query for all h2 elements (titles) and their following sibling p elements (content)
$titles = $xpath->query('//h2');
foreach ($titles as $key => $titleElement) {
    $item = array();
    $item['title'] = $titleElement->textContent;

    // Find the corresponding p element (content)
    $contentElement = $titleElement->nextSibling;
    while ($contentElement && $contentElement->nodeName !== 'p') {
        $contentElement = $contentElement->nextSibling;
    }

    if ($contentElement && $contentElement->nodeName === 'p') {
        $item['content'] = $contentElement->textContent;
    }

    // Add the item to the WordPress array
    $wordpressArray[] = $item;

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblEAtMHlW4vEte9S',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
      "fields": {
        "Weight": 1,
        "Partner": [
          "recFANXj6fpopvcLb"
        ],
        "Article": [
          "recrHnaoEuYfpvsMh"
        ],
        "Rank": 1
      },
      "typecast": true
    }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer patg7hol1fCTfspFC.706e21397f4fac530504f420cf3b4302ea9997dc8e7038f4429f909031da7f56',
        'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=HnB7TQoQGtQY1y37zM5QEV0ieVQrcy7mw8pjYE0nOaFL5T3pgU34gIiVf04FaAUAUw9bILbZAqq59/4ngzINA27IApVg0VrGuzVGNR67WgNfoU4xt51l8vnOZ1s4; AWSALBCORS=HnB7TQoQGtQY1y37zM5QEV0ieVQrcy7mw8pjYE0nOaFL5T3pgU34gIiVf04FaAUAUw9bILbZAqq59/4ngzINA27IApVg0VrGuzVGNR67WgNfoU4xt51l8vnOZ1s4'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

}


