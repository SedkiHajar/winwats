<?php include 'sendemail.php';  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>WINWATS</title>
    <link rel="stylesheet" href="css/styles.css" />
     
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.min.css">
    <!-- google fony-->
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- nav<-->
    <nav class="navbar navbar-expand-lg   " >
    <ul class="navbar-nav  ">
      <li class="nav-item active">
        <a class="nav-link" href="#" >ACCUEIL <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  dropdown  ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUITS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <ul class="list-group list-group-horizontal-sm">
          <a style="text-decoration: none;"class="list-group-item" href="#"><h5>SMART HOME</h5><img src="images/activite1.png"></a>
          <a style="text-decoration: none;"class="list-group-item" href="#"><h5>SAFETY SYSTEM</h5><img src="images/activite1.png"></a>
          <a style="text-decoration: none;"class="list-group-item" href="#"><h5>GREEN ENERGY</h5><img src="images/activite1.png"></a>
        </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SHOWROOM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >FORMATION</a>
      </li>
      
    </ul>
    <ul class="navbar-nav mx-auto ">
  <a class="navbar-brand" href="#" >
    <img src="images/logo.png" width="40" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    WINWATS
  </a>
  </ul>
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item ">
        <a class="btn-nav   nav-link" href="#contact">NOUS CONTACTER</a>
      </li>
      <!--<li class="nav-item">
        <a class="btn-nav   nav-link" href="#">login</a>
      </li>-->
    </ul>
  </div>
</nav>
    <!-- and nav -->
    <div
      id="carouselExampleControls"
      class="carousel slide carousel-fade"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active slide-one" >
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1 style="color: white;"class="animated fadeInLeft delay-1s">Smarthome</h1>
                <p style="color: white;" class="animated lightSpeedIn delay-2s">
                  Nous mettons à profit notre expertise et notre créativité pour vous aider à réaliser les maisons et les bâtiments intelligents de vos rêves.
                </p>
                
                  <button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-3s">Catalogue</button>
               
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/sic-1.png" class="pic-one animated zoomIn delay-1s " />
                  <!--<img src="images/sic-2.png" class="pic-two animated fadeInLeft delay-4s" />
                  <img src="images/sic-3.png" class="pic-three animated fadeInUp delay-3s" />
                  <img src="images/pic-4.png" class="pic-four animated fadeInDown delay-3s" />
                  <img src="images/pic-5.png" class="pic-five animated fadeInRight delay-4s" />
                  <img src="images/pic-6.png" class="pic-six animated jackInTheBox delay-5s" />-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item slide-two">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h1 style="color: white;" class="animated fadeInLeft delay-1s">Safety System</h1>
                    <p style="color: white;" class="animated lightSpeedIn delay-2s">
                      Nos Objectifs sont le Confort et la sécurité Total de vous et Vos Logements.
                    </p>
                    <button type="button" class="animated jackInTheBox delay-3s">Catalogue</button>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/sic-1.png" class="img-one animated zoomIn delay-1s " />
                      <!--<img src="images/img-2.png" class="img-two animated fadeInLeft delay-4s" />
                      <img src="images/img-3.png" class="img-three animated zoomIn delay-3s" />
                      <img src="images/img-4.png" class="img-four animated fadeInDown delay-3s" />
                      <img src="images/img-5.png" class="img-five animated fadeInRight delay-4s" />-->
    
                    </div>
                  </div>
                </div>
          </div>
        </div>
        <div class="carousel-item slide-three">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h1 style="color: white;" class="animated fadeInLeft delay-1s">Green energy</h1>
                    <p style="color: white;" class="animated lightSpeedIn delay-2s">
                      Notre équipe possède une solide expérience dans la pose de panneaux solaires.
                    </p>
                    <button type="button" class="animated jackInTheBox delay-3s">Catalogue</button>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/sic-1.png" class="img-one animated zoomIn delay-1s" />
                      <!--<img src="images/img-2.png" class="img-two animated fadeInLeft delay-4s" />
                      <img src="images/img-3.png" class="img-three animated zoomIn delay-3s" />
                      <img src="images/img-4.png" class="img-four animated fadeInDown delay-3s" />
                      <img src="images/img-5.png" class="img-five animated fadeInRight delay-4s" />-->
    
                    </div>
                  </div>
                </div>
        </div>
      </div>

      
      <a
        class="carousel-control-prev"
        href="#carouselExampleControls"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleControls"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <script>
        $('.carousel').carousel ({
            interval: 7000
        })
    </script>

    <!--Service Section==========-->
      <section id="services" class="services py-5 text-center">
          <div class="container">
              <div class="row">
                <h3 style="color: #1C90C9;" class="text-center">La société WINWATS se distingue au Maroc par une offre globale de solutions clés en main dans les domaines de domotique, contrôle d’accès, système incendie et anti-intrusion.</h3>
                  <!--Single Service-->

                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                      <span class="service-icon">
                         <a href="#"><i class="fas fa-medal"></i>  </a>                         
                      </span>
                      <div class="grow">
                   <a href="#" class="font-weight-bold text-uppercase"><h5>CONFORT</h5></a>
                   </div>
                      <p class="text-left ">Au travail, dans votre fauteuil, pendant un
                         voyage…, contrôlez quand vos appareils
                         électroniques, systèmes d’éclairage ou
                        systèmes de chauffage depuis votre
                         ordinateur, tablette ou Smartphone,
                            n’importe ou et n’importe quand.<br>
                          Un système domotique contribue a
                          un confort de vie plus élevé</p>
                  </div>
                  <!--end of Service=-->
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
      
                       <a href="#"><i class="fas fa-battery-full"></i> </a>                        
                    </span>
                   <div class="grow">
                   <a href="#" class="font-weight-bold text-uppercase"><h5>ECONOMIE D'ENERGIE</h5></a>
                   </div>
                 <p class=" text-left">Les solutions de domotique permettent une meilleure gestion de l'énergie, d'où des économies d'énergie importantes. Vous pouvez notamment diminuer la consommation électrique liée :<br>
                 • Au chauffage et à la climatisation;<br>
                 • A l'éclairage;<br>
                 • Au fonctionnement des appareils électriques (ordinateur, télévision, électroménager, routeur internet...).<br>
                  En réduisant la consommation énergétique, vous diminuez le recours aux énergies fossiles traditionnelles et les émissions de gaz à effet de serre qui résultent de leur exploitation.</p>
                </div>
                <!--end of Service=-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <a href="#"><i class="fas fa-lock"></i>  </a>                          
                    </span>
           <div class="grow">
                   <a href="#" class="font-weight-bold text-uppercase"><h5>SÉCURITÉ</h5></a>
                   </div>
           <p class="text-left">Pour les contrôles d’accès, seules les personnes habilitées à accéder à une zone pourront y parvenir.<br> La traçabilité et l’analyse statistique font partie intégrante de la réflexion sécuritaire d’un site.</p>
                </div>
                <!--end of Service=-->
              </div>
          </div>
      </section>
      <!---End of Service Section=======-->
        <!--Contact us Section-->
       <!--Contact US-->
       
    <section id="contact" class="contact py-5">
      <div class="container">
        <h1 class="brand"><span>NOUS</span> Contacter</h1>
        <div class="wrapper animated bounceInLeft">
            <div class="company-info">
                <h3>Nos informations</h3>
                <ul>
                    <li><i class="fa fa-road "></i><br> 46, Bd Zerktouni 2ème étage App6 - Casablanca<br>
                                                 Showroom: 66 Hay Fath 3 rue n:4 Ain Chock Casablanca</li>
                    <br><li><i class="fa fa-phone"></i><br> (+212)(552-4744) </li>
                    <br><li><i class="fa fa-envelope"></i><br> info@winwats.com</li>
                </ul>
            </div>

          <!--alert message start-->
          
          <!--alert message end-->






            <div class="contacter">
                <!--<h3>Email Me</h3>-->
                <h4 class="sent-notification"><?php echo $alert;?></h4>
                <form action="#contact"  id="myform" role="form" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="nom">Nom</label>
                        <input required=""  type="text" name="nom">
                    </p>
                    <!--<p>
                        <label for="adresse">Adresse</label>
                        <input  required=""  type="text" name="adresse" id="adresse">
                    </p>
                    <p>
                        <label for="code">Code postal</label>
                        <input  required="" type="text" name="code" id="code">
                    </p>
                    <p>
                        <label for="ville">Ville</label>
                        <input  required=""  type="text" name="ville" id="ville">
                    </p>-->
                    <p>
                        <label for="email">E-mail</label>
                        <input  required=""  type="email" name="email" id="email">
                    </p>
                    <!--<p>
                        <label for="tel">Téléphone</label>
                        <input required="" type="tel" name="tel" id="tel">
                    </p>-->
                    <!--<p>
                        <label for="societe">Société</label>
                        <input required=""  type="text" name="societe" id="societe">
                    </p>-->
                    <!--<p>
                        <label for="suis">Je suis</label>
                        <select  type="select" name="suis" id="suis">
                           <option >Installateur</option>
                           <option >Client</option>
                           <option >Architect</option>
                        </select>
                    </p>-->
                    <p class="full">
                        <label for="msg">Message</label>
                        <textarea required="" class="form-control" name="msg" id="msg" cols="30" rows="5"></textarea>
                    </p>
                    <p class="full">
                        <button name="submit" class="send-btn" type="submit" >Envoyer</button>
                    </p>
                </form>

            </div>
        </div>
    </div>
  </section>
  <!--End of Contact Section-->
       <!--Footer-->
    <footer class="footer mt-5">
      
      <div class="container">
          <div class="row mb-3">
              <div class="col-lg-8 offset-lg-2 text-center">
                  
                  <div class="sns justify-content-center">
                    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    
                    </div>
             </div>
          </div>
          <div class="copyright text-center py-3 border-top text-light">
            <p>&copy; Copy Right Winwats</p>
              
          </div>
      </div>

  </footer>
  
  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
  </script>
  <!--<script type="text/javascript">
    function sendEmail(){
      var nom=$("#nom");
      var email=$("#email");
      var societe=$("#societe");
      var msg=$("#msg");

      if(isNotEmpty(nom)&&isNotEmpty(email)&&isNotEmpty(societe)&&isNotEmpty(msg)){
        $.ajax({
          url:'sendEmail.php',
          method: 'POST',
          dataType: 'json',
          data:{
            name:nom.val(),
            email:email.val(),
            societe:societe.val(),
            msg:msg.val()
          }, success: function(response){
            $('#myform')[0].reset();
            $('#sent-notification').text("message sent successfully.");

          }
        });
      }
    }
    function isNotEmpty(caller){
      if(caller.val()==""){
        caller.css('border','1px solid red');
        return false;
      }
      else
      {
        caller.css('border', '');
        return true;
      }
    }
  </script>-->
  </body>
</html>