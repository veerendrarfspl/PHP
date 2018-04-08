<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
  <link href="MDB/css/bootstrap.min.css" rel="stylesheet">
  <link href="MDB/css/mdb.min.css" rel="stylesheet">
  <link href="MDB/css/style.css" rel="stylesheet">




</head>
<style>
  li.menuLink {
    float: left !important;
    margin: 8px 50px 11px -24px;
    text-decoration: none;
    list-style-type: none;

  } Welco me

.affix {
    top:50px;
    position: fixed;
    width: 100%;
  background-color:white;
  z-index:777;
}

.center_div{
    margin: 0 auto;
    margin-left:20%;
    margin-top:5%;
    float: center;
    width:70% /* value of your choice which suits your alignment */
}
.center{margin:0px auto;}

</style>   

<body>
<div class="container center_div">

<!-- Card -->
<div class="card" style="background-image: url(f44.jpeg);background-color:2f4f4f; border: 1px solid black;" >
    
    <!-- Card body -->
     
    <div class="card-body">


        <!-- Material form register -->
        <form action="requ.php" methos="GET">
            <p class="h4 text-center py-4">Sign up</p>

            <!-- Material input text -->
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="materialFormCardNameEx" class="form-control">
                <label for="materialFormCardNameEx" class="font-weight-light">Your name</label>
            </div>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="materialFormCardEmailEx" class="form-control">
                <label for="materialFormCardEmailEx" class="font-weight-light">Your email</label>
            </div>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                <input type="email" id="materialFormCardConfirmEx" class="form-control">
                <label for="materialFormCardConfirmEx" class="font-weight-light">Confirm your email</label>
            </div>

            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="materialFormCardPasswordEx" class="form-control">
                <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
            </div>

            <div class="text-center py-4 mt-3">
                <button class="btn btn-cyan" type="submit">Register</button>
            </div>
        </form>
        <!-- Material form register -->

    </div>
    <!-- Card body -->
 </div>

<!-- Card -->
 </div>              
</body>
  </html>                    