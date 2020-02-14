<?php

function addImage($db, $image, $path, $lastId) {
  $query = $db->prepare("INSERT INTO image (name, path, product_id) VALUES (?, ?, ?)");
  $result = $query->execute([$image["name"], $path, $lastId]);
  return $result;
}

 ?>
