<?php include ('header.php'); ?>
      <hr>
      <br>
      <div class="text-left">
          <?php
              if (isset($_POST['btninscrit'])) {
                # code...
                extract($_POST);
                if (!empty($nom) && !empty($prenom) && !empty($email)&& !empty($message)) {
                  # code...
               $myqwery=$db->prepare("INSERT INTO contact(nom,prenom,email,message) VALUES(:nom,:prenom,:email,:message)");
                 $myqwery->execute(array(
                 ':nom'   =>  $nom,
                 ':prenom'   =>  $prenom,
                 ':email'   =>  $email,
                 ':message'   =>  $message
                    ));
                 
                 if ($myqwery){
                 echo '<b style="background-color:green;" class="text-white text-center alert  alert-dismissible fade show" role="alert"><i class="fa fa-check" aria-hidden="true"></i>  Merci pour votre candidature, nous allons vous contactez sous peu! 
                 <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> </b>';
                 }  
                
                 else {
                   echo'érreur';
                 }
                }
                  else{
                 echo '<b class="text-white text-center alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-check" aria-hidden="true"></i>  Veuillez remplir tous les champs
                 <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> </b>';
                  }
                   $email =$_POST['email'];
                  $from = "www.info@bridgeconnexions.com";
                  $name ='Bridge connexions';
                  $subject = 'Bridge Connexions';
                  $number = 'www.bridgeconnexions.com';
                  $cmessage = 'Bonjour "'.$nom.'"';
                  $headers = "From: $from";
                  $headers = "From: " . $from . "\r\n";
                  $headers .= " ". $from . "\r\n";
                  $headers .= "MIME-Version: 1.0\r\n";
                  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                  $csubject = "Confirmation email.";
                  $logo = './assets/images/AGA_(12).jpg';
                  $link = 'www.info@bridgeconnexions.com';
                  $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
                  $body .= "<table style='width: 100%;'>";
                  $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
                  // $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
                  $body .= "</td></tr></thead><tbody><tr>";
                  $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
                  $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
                  $body .= "</tr>";
                  $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
                  $body .= "<tr><td></td></tr>";
                  $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
                  $body .= "</tbody></table>";
                  $body .= "</body></html>";
                  if (mail($email, $subject, $body, $headers)) {
                    // echo 'Email envoyé avec succes';
                    }else{
                    // echo 'Erreur du systeme de messagerie';
                    }
                 }
         
          ?>
        </div>
      <div class="col-md-12 contact_section ">
        <div class="newsletter_section ">
         <div class="container">
            <div class="newsletter_main">
               <h1 class="newsletter_taital" style="font-family:tahoma;">Nous contactez </h1>
            </div>
            <p class="dolor_text" style="font-family:tahoma;color:black;font-size:25px;">Remplissez le formulaire ci-dessous pour contacter l'équipe de PYE. </p>
         </div>
          <br><br><br><br>
      </div>
     
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              
                <form method="POST">
                 <!-- 2 column grid layout with text inputs for the first and last names -->
                 <div class="row mb-4">
                   <div class="col">
                     <div class="form-outline">
                       <input type="text" id="form6Example1" class="form-control" placeholder="Entrer votre Prenom" name="nom" required="" />
                       <label class="form-label" for="form6Example1" style="font-family:tahoma;color:black;">Prenom</label>
                     </div>
                   </div>
                   <div class="col">
                     <div class="form-outline">
                       <input type="text" id="form6Example2" class="form-control" placeholder="Entrer votre nom" name="prenom" required="" />
                        <label class="form-label" for="form6Example1" style="font-family:tahoma;color:black;">Nom</label>
                     </div>
                   </div>
                 </div>


                 <!-- Text input -->
                 <div class="form-outline mb-4">
                   <input type="email" id="form6Example4" class="form-control" placeholder="Entrer votre adresse email" name="email" required="" />
                    <label class="form-label" for="form6Example1" style="font-family:tahoma;color:black;">Email</label>
                 </div>

                 <!-- Message input -->
                 <div class="form-outline mb-4">
                   <textarea class="form-control" id="form6Example7" rows="4" placeholder="Message" name="message" required=""></textarea>
                   <label class="form-label" for="form6Example7"style="font-family:tahoma;color:black;">Message</label>
                 </div>

                 <!-- Submit button -->
                 <button type="submit" class="btn btn  mb-4" name="btninscrit" style="background-color: rgb(216,3,7); color:white;font-weight: bold;font-family:tahoma;">
                   Envoyer
                 </button>
               </form>
            </div>
            <div class="col-md-4">
               <div class="contact-info-right"  >
                        <h2 class="mx-2" style="font-family:tahoma;color:black;font-weight:bold;">Jeunesse et culture </h2>
                        <p  class="mx-2" style="font-family:tahoma;color:black; font-size:20px;">Nous nous concentrons sur les jeunes et incluons également des personnes de tout âge. Nous avons actuellement une centaine des volontaires qui accompagnent les jeunes aux activités d’inclusion. </p>
                        <hr>
                        <h2 class="mx-2" style="font-family:tahoma;color:black; font-weight:bold;">Contact info </h2>
                        <hr>
                        <ul>
                            <li>
                                 <p style="font-family:tahoma;color:black;font-size:20px; "><i class="fas fa-map-marker-alt" style="color:rgb(237,112,1);"></i>Addresse: RDC, Ville de Goma, Commune de Goma <br>Quartier Kyeshero </p>
                            </li>
                            <li>
                                <p class="mx-3"style="font-family:tahoma;color:black;font-size:20px;"><i class="fa fa-phone-square" style="color:black"></i>Phone: <a href="tel:+1-888705770"> <span style="font-family:tahoma;color:black; font-size:20px;">+243 9876543210</span></a></p>
                            </li>
                            <li>
                                <p class="mx-3" style="font-family:tahoma;color:black;font-size:20px;"><i class="fa fa-envelope" style="color:black;"></i>Email: <a href="mailto:info@bindecologie.com"><span style="font-family:tahoma;color:black; font-size:20px">info@pye.org</span></a></p>
                            </li>
                        </ul>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <!-- contact section end -->
      <br><br>
        <?php include('nosformations.php') ?>
      <!-- footer section start -->
   <?php include ('footer.php'); ?>