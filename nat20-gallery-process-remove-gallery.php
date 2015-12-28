<?php

$target = $_POST["galleryName"];
$target = "./images/" . $target;



if (is_dir($target)) {
     $objects = scandir($target);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($target."/".$object) == "dir") rrmdir($target."/".$object); else unlink($target."/".$object);
       }
     }
     reset($objects);
     rmdir($target);
   }