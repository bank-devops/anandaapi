<?
$company = array("company_id"=>"1",
                  "company_name"=>"company1",
                  "company_icon"=>"https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png",
                  "company_stepsummary"=>"100000",
                  "company_person"=>"200",
                  "company_rank"=>"1."
                 );
$event = array("campaign_id"=>"1",
               "display_name"=>"activity1",
               "startdate"=>"2018-11-1 00:00:00",
               "finishdate"=>"2018-11-30 23:59:59",
               "banner"=>"https://golangdevbank.herokuapp.com/img_chania.jpg",
               "ranking"=>array($company ,$company ,$company ,$company ,$company )
              );
$respone = array(
                  "status"=>200,
                  "message"=>"Success",
                  "data"=> array($event ,$event ,$event  )
                );
echo json_encode($respone);


?>
