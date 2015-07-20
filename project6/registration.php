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
    <div class="notice">Student Project #6 - C.D.</div>
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
            <div class="col-md-2"></div>
            
            <div class="col-md-8">

                <form class="form-horizontal" action="registration.php" method="post">
                  <fieldset>
                    <legend>Please Register</legend>

                    <div class="form-group">
                      <label for="inputFName" class="col-lg-2 control-label">First Name</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="inputFName" name="inputFName" placeholder="First Name">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputLName" class="col-lg-2 control-label">Last Name</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="inputLName" name="inputLName" placeholder="Last Name">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="inputEmail" name="inputEmail"placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary" id="registerSubmit" name="registerSubmit">Submit</button>
                      </div>
                    </div>

                  </fieldset>
                </form>

                <?php 
                    // starting the session


                    if (isset($_POST['registerSubmit'])) { 
                        $_SESSION['FName'] = $_POST['inputFName'];
                        $_SESSION['LName'] = $_POST['inputLName'];
                        $_SESSION['Email'] = $_POST['inputEmail'];
                        $_SESSION['Password'] = $_POST['inputPassword'];

                        if ($_SESSION['dell'] == null || $_SESSION['surface'] == null || $_SESSION['asus'] == null){
                            header("Location: products.php"); /* Redirect browser */
                            exit();
                        } else {
                            header("Location: preview.php"); /* Redirect browser */
                            exit();
                        }
                    }

                ?>
            </div>

            <div class="col-md-2"></div>
        </div>
    </div>

</body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>

    </script>
</body>
</html>
