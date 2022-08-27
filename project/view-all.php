<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/util/db.php';

$client = new MongoDB\Client(_DB_HOST);

$collection = $client->ieducation->courseContents;

// Set the courseID to get data
$course_id = "course-id";

// $cursor = $collection->find(array(), array('projection' => array('_id' => false)));

$datasets = $collection->count(['_id' => $course_id]);

if (@$datasets == 1){

$cursor = $collection->find(['_id' => $course_id]);



$data = iterator_to_array($cursor);

// var_dump($data[0]->contents[0]->content);

$_id = $data[0]->_id;
$update_ts = $data[0]->update_ts;
$tags = $data[0]->tags;
$contents = $data[0]->contents;

echo '<h4>' . $_id . '</h4>';
echo '<h4>' . $update_ts . '</h4>';

foreach ($tags as $key=>$value) {
    echo $value . '<br>';
}

/*
// Pure PHP
foreach ($contents as $key=>$value) {
    echo $value->title . '<br>';

    foreach ($value->content as $content) {
        echo $content . '<br>';
    }

}
*/

echo "<hr>";


echo "<dl>";
foreach ($contents as $key=>$value) {
    echo '<dt>'. $value->title . '</dt>';
  
  foreach ($value->content as $content) {
    echo '<dd>'. $content .'</dd>';
}

}
echo "</dl>";


}else{
    echo "Some Internal Error Occurs";
}
?>