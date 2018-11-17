<?php
$activity = array("id"=>"1",
                  "name"=>"activity1",
                  "startdate"=>"2018-11-1 00:00:00",
                  "finishdate"=>"2018-11-30 23:59:59",
                  "banner"=>"https://en.wikipedia.org/wiki/IMAGE#/media/File:IMAGE_(Explorer_78).jpg"
                 );
echo json_encode(array($activity,$activity,$activity,$activity,$activity));
?>
