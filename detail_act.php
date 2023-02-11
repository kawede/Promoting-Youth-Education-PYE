<?php include('202301/includes/_headersec.php');
 if(isset($_GET['id']) and !empty($_GET['id'])):
  $id=htmlspecialchars($_GET['id']);
  $myqwery=$db->prepare("SELECT * FROM blog WHERE id=:id");
  $myqwery->execute(array(
  'id'=>$id
  ));
  if ($myqwery):
  $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
  // var_dump($data);
  if (!empty($data)):
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?=$data[0]->titre;?></title>
      <!-- Shareable -->
      <meta property="og:title" content="<?=$data[0]->titre;?>" />
      <meta property="og:type" content="www.pye.org"/>
      <meta property="og:url" content="www.pye.com"/>
      <meta property="og:image" content="202301/images/<?= $data[0]->image;?>"/>
      <!--End Shareable-->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/pye1.png" type="images/pyenew-1.png" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="">
         <div class="header_bg" style="background-color:white;">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="logo" href="accueil"><img src="images/pyenew-1.png" style="max-width:90px;"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="accueil" style="font-family:tahoma;">Accueil</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about" style="font-family:tahoma;">Nous decouvrir</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="missions" style="font-family:tahoma;">missions</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="notre-expertise" style="font-family:tahoma;">Notre expertise </a>
                        </li>
                         <li class="nav-item">
                           <a class="nav-link" href="donateur" style="font-family:tahoma;">Espace donateur </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact" style="font-family:tahoma;">Contact</a>
                        </li>
                     </ul>
                   
                  </div>
               </nav>
            </div>
         </div>
      <!--banner section start -->
<hr>
 <h2 class="mx-2" style="font-family:tahoma;color:black; font-weight:bold;"><marquee direction:left;>PYE - Pour une jeunesse autonome</marquee> </h2>
<!-- about section start -->
      <div class="news_section" style="margin-top:-40px;">
         <div class="container">
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-8">
                     <div class="">
                      <!--   <p class="date_text">01 Jan 2020</p> -->
                      <img src="202301/images/<?= $data[0]->image;?>" class="image_6" style="height:450px;" >
                      <br>
                        <h1 class="make_text mt-2" style="font-family:tahoma; font-weight:bold;"> <?=$data[0]->titre;?></h1>
                        <h3 class="mt-0 mb-1" style="color:black; font-size:30px; font-family:tahoma;"><?=$data[0]->detail;?></h3>
                        
                     </div>
                     <hr>
                      <p style="font-family:tahoma; color:black"> posté par : <?=$data[0]->post;?>  | <span style="font-family:tahoma; color:black"><?=$data[0]->date;?></span></p>
                     <hr>
                         <p style="color:black; font-weight:bold; font-family:tahoma;">Partager ici | <i class="fa fa-thumbs-o-down" aria-hidden="true"></i></p>
                                             <!-- Facebook -->
                        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
                          ><i class="fa fa-facebook"></i
                        ></a>

                        <!-- Twitter -->
                        <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
                          ><i class="fa fa-twitter"></i
                        ></a>

                   

                        <!-- Instagram -->
                        <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"
                          ><i class="fa fa-instagram"></i
                        ></a>

                        <!-- Linkedin -->
                        <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"
                          ><i class="fa fa-linkedin"></i
                        ></a>
                        <hr><div class="callout callout-danger"> 
              <!--  <h4 style="font-weight:bold;color:black; font-family:tahoma.">Comment devenir un volontaire</h4> -->
               <div class="card-body text-justify" style="font-family: tahoma; font-size:17px; color:black;">
               "Nous développons et mettons en œuvres les activités de promotion du genre. Pour rassurer que les besoins des femmes et filles sont prise en compte et la question  des vulnérabilités dans nos interventions, nous installons des clubs communautaires (femmes et filles leaders) et les espaces de confiances pour leur inclusion visant un développement durable. " </div>

            </div>

                  </div>
                  <div class="col-md-4">
                     <hr>
                     <h1 class="make_text" style="font-family:tahoma; font-weight:bold;"> Dernieres publications</h1>
                     <hr>
                     <?php 
                        $myqwery=$db->prepare("SELECT * FROM blog ORDER BY id DESC limit 6");
                        $myqwery->execute(array("id_article"=>$id));
                        $datas=$myqwery->fetchAll(PDO::FETCH_OBJ);
                        if ($datas):
                        foreach($datas as $token1): 
                      ?>
                     <li class="media">
                          <img src="202301/images/<?= $data[0]->image;?>" class="mr-3 " width="100px" alt="...">
                          <div class="media-body">
                            <h3 class="mt-0 mb-1" style="color:black; font-family:tahoma;"><?=$data[0]->titre;?></h3>
                            <h6 class="mt-0 mb-1"style="color:black; font-family:tahoma;"><?=$data[0]->date;?></h6>
                          </div>

                     </li>
                        <hr>
                       <?php
                          endforeach;
                          else: 
                        ?>
                        <center><span style="font-family: Tahoma; font-weight: bold; background-color: red; font-size:12px;" class="text-white text-center alert ">Aucun information pour le moment!</span></center>
                        <?php
                        endif;
                        ?>
                       <hr>
                      <div id="img">
                          <a class="twitter-timeline" href="https://twitter.com/LeagueAcademia" data-widget-id="275430111547887616" style="width: 50px; height: 50px;">Tweets by Promoting Youth Education</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                      </div>
                      <hr>
                  </div>


               </div>
               <hr>
            </div>
           
         </div>
         <!-- <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email"> -->
      <!-- about section end -->
<?php endif;?>
<?php endif;?>
<?php endif;?>
<?php include ('mains/footer.php'); ?>
