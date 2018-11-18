<?php
header('Content-Type: application/json');
$activity = array("campaign_id"=>"1",
                  "display_name"=>"activity1",
                  "startdate"=>"2018-11-1 00:00:00",
                  "finishdate"=>"2018-11-30 23:59:59",
                  "banner"=>"https://golangdevbank.herokuapp.com//banner-ananda.png"
                 );
$respone = array(
                  "status"=>200,
                  "message"=>"Success",
                  "data"=> array($activity,$activity,$activity,$activity,$activity)
                );
echo json_encode($respone);
?>
