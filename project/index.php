<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/util/db.php';

$client = new MongoDB\Client(_DB_HOST);

$collection = $client->ieducation->courseContents;

$cursor = $collection->find(['_id' => 'course-id']);


/*
echo ("<pre>");
foreach ($cursor as $document) {

    echo json_encode($document['update_ts'], true);
    echo json_encode($document['tags'], true);
    echo json_encode($document['contents'], true);
}
echo ("</pre>");
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            padding: 2rem;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/prettytag.css">
</head>

<body>

    <ul class="cloud-tags">
        <?php 
            foreach ($cursor as $document) {
            echo ('<li> <a href="#tag_link"> '. json_decode(json_encode($document["update_ts"], true))) .' </a> </li>';
        }
        ?>
        <li> <a href="#tag_link"> Tag name </a> </li>
        <li> <a href="#tag_link"> Tag name two </a> </li>
        <li> <a href="#tag_link"> jQueryScript.net</a> </li>
        <li> <a href="#tag_link"> Codehim.com </a> </li>
  </ul>


    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Item #1
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    test 1
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Item #2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    test 2
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.prettytag.js"></script>

    <script>
        $(document).ready(function(){
            $(".cloud-tags").prettyTag();
        });
    </script>
</body>

</html>