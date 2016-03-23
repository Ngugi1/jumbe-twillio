 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>

 <body> 
  <div class="jumbotron">
    <h1 style="text-align: center;color: teal;"> <?php 
          
try {
  if(isset($_REQUEST["submit"]))
  {
          $to =$_REQUEST["to"];
          $from =$_REQUEST["from"];
          $message = $_REQUEST["message"];
          $completed ="";
           //Get the twilio API 
           require_once ("Services/Twilio.php");
           
           //Get the twilio user credentials 
           $accountSID = "AC64bce9bb9eb2d63b09ab2ec961d0286d";
           $authToken = "fca509d4a25d7eb1191a9469cd0bfc7c";           
           
           //Initialize new Twilio API 
           $connection = new Services_Twilio($accountSID,$authToken);
          $success = $connection->account->sms_messages->create(
                  
                $from,  // number we are sending From 
                $to,      // number we are sending To
                $message  // the sms body
              );
            $completed = 'Message was sent successfully';
            echo $completed;
    }
  
} catch (Exception $e) 
{
  echo "Sorry , something went wrong!Try again later";
  
}
?>
  </h1>
  </div>         
 </body>
 </html>         