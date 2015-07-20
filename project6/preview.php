<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>School Store</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap_sandstone.css" rel="stylesheet">
    <link href="mine.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="products.php">School Technology Store</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-md-7">

                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Your Order</h3>
                  </div>
                  <div class="panel-body">
                    
                    <? 
                        if($_SESSION['dell'] = null || $_SESSION['surface'] = null || $_SESSION['asus'] = null){
                            header("Location: products.php"); /* Redirect browser */
                            exit();
                        }

                        if ($_SESSION['FName'] == null || $_SESSION['LName'] = null || $_SESSION['Email'] = null || $_SESSION['Password']){
                            header("Location: registration.php"); /* Redirect browser */
                            exit();)
                        }


                        if($_SESSION['dell'] > 0 ){
                            <h4>Dell XPS 13</h4>
                            <div class="imagewrap"> <img src="images/asus.png" id="AsusImage"> </div>
                            <h4>Quantity: <?php echo $_SESSION['dell'] ?> </h4>
                        }
                    ?>

                  </div>
                </div>

            </div>

            <div class="col-md-5">
                <div class="panel panel-success">
                  <div class="panel-heading"> <h3 class="panel-title">Your Order</h3></div>
                  <div class="panel-body">
                    <? 

                        if($_SESSION['dell'] = null || $_SESSION['surface'] = null || $_SESSION['asus'] = null){
                            header("Location: products.php"); /* Redirect browser */
                            exit();
                        }

                        if ($_SESSION['FName'] == null || $_SESSION['LName'] = null || $_SESSION['Email'] = null || $_SESSION['Password']){
                            header("Location: registration.php"); /* Redirect browser */
                            exit();)
                        }

                        <h4>Name</h4>
                        <p><?php echo $_SESSION['Fanme'] ?> <?php echo $_SESSION['LName'] ?></p>

                        <h4>Email</h4>
                        <p><?php echo $_SESSION['Email'] ?></p>
                        
                    ?>

                  </div>
                </div>

            </div>
    </div>
</body>