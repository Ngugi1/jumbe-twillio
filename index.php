
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jumbe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
      textarea {
        margin:16px 0px;
      }
      button{
        text-align: center;
      }
      input{
        margin: 4px;
        width: 30%;
      }
      label{
        color: black;
        font-weight: bold;
      }
      span{
        color: red;
      }
      a{
        text-decoration: none;
      }
  </style>
</head>
<body>
<div class="container">
  <div class="jumbotron">
  <div>
      <h1 style="text-align: center;">Jumbe App</13>
      <p style="text-align: center;">This is a trial version of twilio messaging service, in order to receive a message to your phone numner you <strong>MUST</strong> verify your mobile number with  twilio through account creation.
      </p>
    </div>
    <h2 style="text-align: center;">Send SMS Using Twilio</h2>
    <p style="text-align: center;">create <a href="https://www.twilio.com/try-twilio">twilio account</a> in order to receive messages. For testing ,within next 5 days as from Tuesday 22 March 2016, use <span>TO : +254713195124 FROM: +15674244317</span></span></p> 

    <form role="form" action="sendsms.php">
    <label>To</label><br/>
    <input type="text" name="to" class="form-control" placeholder="registered/verified twilio number" /><br/>

    <label>From</label><br/>

        <input type="text" id="btn" name="from" class="form-control" placeholder="twilio number to send the sms" /><br>
    <label>Message</label><br/>
        <textarea type="text" name="message" class="form-control" placeholder="enter message to be sent"></textarea><br>
        <input type="submit" style="margin:0px ;float: right;" name="submit" class="btn btn-primary"/><br>
    </form>
      
    
  </div>
  <div class="row">
    
    
  </div>
</div>

</body>
</html>
