<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="card text-center">
  <div class="card-header">
 <h1>Get a Quotes </h1>
  </div>
  <div class="card-body">
    <h2 class="card-title">Subject: Regarding Queries</h2>
   

<p class="card-text" style="color:green"

>Name: {{$Username_data}}</p>
<p class="card-text" style="color:green">Email: {{$email_data}}</p>
<p class="card-text" style="color:green">Phone Number: {{$PhoneNum_data}}</p>
<p class="card-text" style="color:green">Company Name: {{$CName_data}}</p>
<p class="card-text" style="color:green">Subject: {{$Subject_data}}</p>
<p class="card-text" style="color:green">
Clients message to us: {{$msgs_data}}</p>
<p class="card-text" style="color:green">Options: {{$radio_data}}</p>
  
  </div>
  <div class="card-footer text-muted">
    Thanks for contact
  </div>
</div>
</body>
</html>