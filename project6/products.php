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
            <li><a href="registration.php">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <form action="products.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary" id="dell">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#DellPanel">
                            <h4 class="panel-title">
                                <div class="imagewrap">
                                    <img src="images/dell.png" id="DellImage">
                                    <button type="button" class="btn btn-danger btn-sm delete-button" id="DellButton" onclick=""><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                </div>
                                <a class="accordion-toggle">Dell XPS 13</a>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon" id="basic-addon1">Quantity</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="dellquantity" name="dellquantity">
                                </div>
                            </h4>
                        </div>
                        <div id="DellPanel" class="panel-collapse collapse">
                            <div class="panel-body" data-toggle="collapse" data-parent="#accordion" data-target="#DellPanel">
                                <p><strong>$1,169.10</strong></p>
                                <p>
                                    <ul>
                                        <li>13.3-inch QHD+ infinity touchscreen
                                        <li>Intel Core i5-5200U
                                        <li>8GB memory/256GB SSD
                                        <li>15 hours battery life
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary" id="surface">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#SurfacePanel">
                            <h4 class="panel-title">
                                <div class="imagewrap">
                                    <img src="images/surface.png" id="SurfaceImage">
                                    <button type="button" class="btn btn-danger btn-sm delete-button" id="SurfaceButton"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                </div>
                                <a class="accordion-toggle" >Microsoft Surface Pro 3</a>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon" id="basic-addon1">Quantity</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="surfacequantity" name="surfacequantity">
                                </div>
                            </h4>
                        </div>
                        <div id="SurfacePanel" class="panel-collapse collapse">
                            <div class="panel-body" data-toggle="collapse" data-parent="#accordion" href="#SurfacePanel">
                                <p><strong>$1,169.10</strong></p>
                                <p>
                                    <ul>
                                        <li>256GB</li>
                                        <li>Intel Core i5 - 1.9GHz</li>
                                        <li>8GB RAM</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary" id="asus">
                        <div class="panel-heading"  data-toggle="collapse" data-parent="#accordion" href="#AsusPanel">
                            <h4 class="panel-title">
                                <div class="imagewrap">
                                    <img src="images/asus.png" id="AsusImage">
                                    <button type="button" class="btn btn-danger btn-sm delete-button" id="AsusButton"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                </div>
                                <a class="accordion-toggle">ASUS Zenbook UX305FA-USM1</a>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon" id="basic-addon1">Quantity</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="asusquantity" name="asusquantity">
                                </div>
                            </h4>
                        </div>
                        <div id="AsusPanel" class="panel-collapse collapse">
                            <div class="panel-body"  data-toggle="collapse" data-parent="#accordion" href="#AsusPanel">
                                <p><strong>$629.10</strong></p>
                                <p>
                                    <ul>
                                        <li>13.3-inch Full HD display</li>
                                        <li>Intel Core M-5Y10</li>
                                        <li>8GB memory/256GB SSD</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--END Accordion-->
            </div>

            <div class="col-md-6">
                <div class="panel panel-warning">
                    <div class="panel-heading" href="#DeletedPanel">
                        <h4 class="panel-title">
                            <a>Deleted Items</a>
                        </h4>
                    </div>
                    <div id="DeletedPanel" class="panel-collapse " >
                        <div class="panel-body deleted-body" id="deletedBody">
                            <p id="dell-d"></p>
                            <p id="surface-d"></p>
                            <p id="asus-d"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--end row-->

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-info btn-lg" id="orderSubmit" >Submit</button>
            </div>
        </div>
        </form>

        <?php 

            // if (isset($_POST))
            // {
            //   print_r($_POST);
            // }


            if (isset($_POST['orderSubmit'])) {

                $_SESSION['dell'] = $_POST['dellquantity'];
                $_SESSION['surface'] = $_POST['surfacequantity'];
                $_SESSION['asus'] = $_POST['asusquantity'];

                if ( $_SESSION['FName' || $_SESSION['LName']] == null){
                    header("Location: registration.php"); /* Redirect browser */
                    exit();
                } else {
                    header("Location: preview.php"); /* Redirect browser */
                    exit();
                }

            }
        ?>


    </div><!--END CONTAINER-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
        $(function() {
            $("#accordion").collapse();

            $("#accordion").sortable({
                    axis: "y",
                    handle: "h4",
                    stop: function( event, ui ) {
                      // IE doesn't register the blur when sorting
                      // so trigger focusout handlers to remove .ui-state-focus
                      ui.item.children( "h4" ).triggerHandler( "focusout" );
             
                      // Refresh accordion to handle new order
                      $( this ).accordion( "refresh" );
                    }
            });

            $(".panel-title").hover(
               function(){ $(this).addClass("panel-title_hover") },
               function(){ $(this).removeClass("panel-title_hover") });

            $(document).ready(function(){
                $("#DellButton").click(function(){
                    $("#dell").hide("slow");
                    { document.getElementById("dell-d").innerHTML="<img src='images/dell.png' id='deleted-dell-image'/>"};
                    $("#dell-d").show(250);
                });

                $("#SurfaceButton").click(function(){
                    $("#surface").hide("slow");
                    { document.getElementById("surface-d").innerHTML="<img src='images/surface.png' id='deleted-surface-image'/>"};
                    $("#surface-d").show(250);
                });

                $("#AsusButton").click(function(){
                    $("#asus").hide("slow");
                    { document.getElementById("asus-d").innerHTML="<img src='images/asus.png' id='deleted-asus-image'/>"};
                    $("#asus-d").show(250);

                });

            });

            $(document).ready(function(){
                $("#dell-d").click(function(){
                    $("#dell").show(1000);
                    $("#dell-d").hide("slow");
                });

                $("#surface-d").click(function(){
                    $("#surface").show(1000);
                    $("#surface-d").hide("slow");
                });

                $("#asus-d").click(function(){
                    $("#asus").show(1000);
                    $("#asus-d").hide("slow");
                });

            });

        });
    </script>
</body>
</html>