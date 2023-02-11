<?php include ('header.php'); ?>
<hr>
<!-- about section start -->

      <div class="news_section layout_padding " >
        <div class="text-center">
          <?php
              if (isset($_POST['btninscrit'])) {
                # code...
                extract($_POST);
                if (!empty($prenom) && !empty($nom) && !empty($ville)&& !empty($categorie_volontaire)&& !empty($email)&& !empty($telephone)&& !empty($message)) {
                  
                  # code...
               $myqwery=$db->prepare("INSERT INTO membre_volontaire(prenom,nom,ville,categorie_volontaire,email,telephone,message) VALUES(:prenom,:nom,:ville,:categorie_volontaire,:email,:telephone,:message)");
                 $myqwery->execute(array(
                 ':prenom'   =>  $prenom,
                 ':nom'   =>  $nom,
                 ':ville'   =>  $ville,
                 ':categorie_volontaire'   =>  $categorie_volontaire,
                 ':email'   =>  $email,
                 ':telephone'   =>  $telephone,
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
         <div class="newsletter_section ">
         <div class="container">
            <div class="newsletter_main">
               <h1 class="newsletter_taital" style="font-family:tahoma;">Devenir volontaire </h1>
               
            </div>
             <div class="callout callout-danger"> 
               <h4 style="font-weight:bold;color:black; font-family:tahoma.">Comment devenir un volontaire</h4>
               <div class="card-body text-justify" style="font-family:tahoma;color:black; font-size:20px;">
                PYE travail pour construire la reconnaissance et la participation de la contribution des volontaires pour le développement à l’Agenda 2030 et la réalisation des objectifs du développement durable pour éradiquer la pauvreté et aboutir à un développement durable.  </div>
              
            </div>
            </div>
         </div>
      </div>
         <div class="container">
           
            <div class="news_section_2">
              <form method="POST" action="">
                 <!-- 2 column grid layout with text inputs for the first and last names -->
                 <div class="row mb-4">
                   <div class="col">
                     <div class="form-outline">
                       <input type="text" id="form6Example1" class="form-control"placeholder="Entrer votre Prenom" name="prenom" required="" />
                       <label class="form-label" for="form6Example1" style="font-family:tahoma;color:black;">Prenom</label>
                     </div>
                   </div>
                   <div class="col">
                     <div class="form-outline">
                       <input type="text" id="form6Example2" class="form-control"placeholder="Entrer votre nom" name="nom" required="" />
                        <label class="form-label" for="form6Example1" style="font-family:tahoma;color:black;">Nom</label>
                     </div>
                   </div>
                 </div>

                 <!-- Text input -->
                 <div class="form-outline mb-4">
                   <input type="text" id="form6Example3" class="form-control" placeholder="Entrer votre ville | pays,..." name="ville" required="" />
                    <label class="form-label" for="form6Example1" style="font-family:tahoma;color:black;">Ville | pays</label>
                 </div>

                 <!-- Email input -->
                 <div class="form-outline mb-4">
                  <select  class="form-control" id="form6Example5" style="font-family: candara;" required=""  rows="9"  style="color:black; font-family: candara;" name="categorie_volontaire" required="">
                             <option value="-------------">----------------------</option>
                             <option value="volontaire" style="font-family: tahoma;color:black; font-weight: bold;">Devenir volonaire exterieur</option>
                             <option value="volontaire" style="font-family: tahoma;color:black; font-weight: bold;">Devenir volontaire interieur</option>
                             <option value="volontaire" style="font-family: tahoma;color:black; font-weight: bold;">Devenir Membre PYE</option>
                           </select>
         
                   <label class="form-label" for="form6Example5"style="font-family:tahoma;color:black;">Devenir volonatire</label>
                 </div>

                 <!-- Text input -->
                 <div class="form-outline mb-4">
                   <input type="email" id="form6Example4" class="form-control"placeholder="email" name="email" required="" />
                    <label class="form-label" for="form6Example1" style="font-family:tahoma;color:black;">Votre adresse email</label>
                 </div>

                 <!-- Number input -->
                 <div class="form-outline mb-4">
                   <input type="phone" id="form6Example6" class="form-control" placeholder="Telephone" name="telephone" required="" />
                   <label class="form-label" for="form6Example6" style="font-family:tahoma;color:black;">Telephone</label>
                 </div>

                 <!-- Message input -->
                 <div class="form-outline mb-4">
                   <textarea class="form-control" id="form6Example7" rows="4" placeholder="Motivations" name="message" required=""></textarea>
                   <label class="form-label" for="form6Example7"style="font-family:tahoma;color:black;">Vos motivations</label>
                 </div>

                 <!-- Submit button -->
                 <button type="submit" class="btn btn mb-4" name="btninscrit" style="background-color: rgb(216,3,7); color:white;font-weight: bold;font-family:tahoma;">
                   Envoyer
                 </button>
               </form>
            </div>
         </div>
  <?php include ('menu_missions.php'); ?>
      <!-- about section end -->
<?php include ('footer.php'); ?>