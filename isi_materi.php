<?php 
$link = $_GET["link"];
$desk = $_GET["desk"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="assest/semantic.min.css">
    <link rel="stylesheet" href="assest/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/62f37a0509.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="pusher">
      <div class="ui container p-t">
        <div class="ui menu inverted navbar large">
          <div class="left menu" style="font-size: 20px;">
            <a class="item">
              Selamat Belajar HALO
            </a>
            <a href="paket1.php" class="item">
              Beli Paket
            </a>
            <a href="logout.php" class="item">
              Log out
            </a>

          </div>
          <div class="header item fixed right menu">
            <b><a href="materi.php" style="color: white"><h3 style="font-size: 25px">Web Dev Course</h3></a></b>
          </div>

        </div>

        <div id="xample">


        <!-- steps -->
        <div class="ui vertically divided grid">

          <div class="row">

            <div class="four wide column">

              <div class="ui steps">
                <div class="ui stiky">
                  <div class="step">
                    <div class="content">
                      <div class="description" style="margin-left: 5px;">
                        <div class="ui relaxed divided list">
                          <div class="item">
                            <div class="content">
                              <a class="header"><?php echo nl2br($desk) ?></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           </div>
           <!-- endsteps -->
           <div class="twelve wide column">
               <div class="ui segment">
                 <h3 class="ui center floated header">Video Materi</h3>
                 <div class="ui clearing divider"></div>
                 <center>
                 <iframe width="560" height="315" src="<?= $link; ?>" frameborder="0">
               </center>
           </div>

         </div>

       </div>

      </div>

    </div>
    </div>

    <script type="text/javascript">

      $(document).ready(function(){
          $('.ui.sticky')
          .sticky({
            context: '#xample',
            pushing: true
          });
      });

    </script>
    <script src="assest/semantic.min.js"></script>
    <script src="assest/package.js"></script>
  </body>
</html>
