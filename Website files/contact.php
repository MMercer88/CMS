<?php
	session_start();
	
	if(isset($_GET['logout']))
        				{
        					session_unset();
        					session_destroy();
        				}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mike Mercer" >
    <link rel="icon" href="../../favicon.ico">

    <title>Honor Box Chiropractric</title>


    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="cover.css" rel="stylesheet">

   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Honor Box Chiropractric</h3>
              <ul class="nav masthead-nav">
               <li><a href="index.html">Home</a></li>
                <li><a href="newpatient.html">New Patient</a></li>
                <li><a href="signin.php">Sign in</a></li>
                <li class= "active"><a href="contact.html">Contact</a></li>
                <li><a href="logout.php?logout=1">Logout</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Honor Box Chiropractic</h1>
            <p class="lead">
                            1245 Kuala Street, Suite 105</p>
                            <p>Pearl City, Hawaii 96782</p>
            <p class="lead">
                            Call:   (808) 841-2929</p>
                            <p>Email: doc@honorboxchiropractic.com
                              
            </p>

          </div>

          <div class="mastfoot">
            <div class="inner">
           
            </div>
          </div>

        </div>

      </div>

    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
