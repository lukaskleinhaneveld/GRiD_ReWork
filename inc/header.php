<!DOCTYPE html>
<html lang="en">
  <head>

  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GRiD IMO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <?php
                    if(!empty( $_SESSION["username"])){


                    echo "<ul class='nav navbar-nav'>
                      <li><a href='#''>Add news<span class='sr-only'>(current)</span></a></li>
                     <li><a href='#''>Add project</a></li>

                    </ul>";
                       echo "<p style='float:right; margin:0;'>ingelogd als: ".$_SESSION['username']."</p> <br><a style='float:right' href='logout.php'>logout</a>";
         }
                    ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->

      </nav>
  </body>
</html>
