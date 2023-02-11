
   <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
                 <h1 class="services_taital"><span style="color: rgb(216,3,7);">Nos</span> activités</h1>
          <p class="news_text"style="font-family:tahoma; font-size:25px;line-height: 30px; font-weight:">Au fil des ans, PYE s'est développé comme un incubateur. Bien que nous ayons des programmes communautaires de développement dans différentes régions, nous de succursales. Notre structure décentralisée permet à des leaders de différentes cultures d'émerger. </p>
            <br><br>
               <div class="row">
             <!-- Card deck -->
              <div class="card-deck">
                <!-- Card -->
                <?php 
                  $myqwery=$db->prepare("SELECT * FROM blog ORDER BY id DESC limit 3");
                  $myqwery->execute();
                  $datas=$myqwery->fetchAll(PDO::FETCH_OBJ);
                  if ($datas):
                  foreach($datas as $token): 
                ?>
                <div class="card mb-4">
                  <!--Card image-->
                  <div class="view overlay">
                    <a href=""><img class="card-img-top" src="202301/images/<?= $token->image;?>" alt="Card image cap"></a>
                   <!--  <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a> -->
                  </div>
                  <!--Card content-->
                  <div class="card-body">

                    <!--Title-->
                    <h2 class="card-title" style="font-weight:bold; font-family:tahoma;"><?=$token->titre;?></h2>
                    <!--Text-->
                    <div  style="color:black; font-family:tahoma;font-size:25px;" ><?= substr($token->detail,0,120);?><a href="detail_act.php?id=<?=$token->id;?>" style="font-family:tahoma;color:red;font-weight:bold;"> ... plus</a>.</div>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <a href="detail_act.php?id=<?=$token->id;?>"><button type="button" class="btn btn-blue btn-md" style="background-color:red;color:white;">Plus</button></a>

                  </div>

                </div>
                <!-- Card -->
       
                   <?php
                    endforeach;
                    else: 
                  ?>
                  <center><span style="font-family: Tahoma; font-weight: bold; background-color: red; font-size:15px;" class="text-white text-center alert ">Aucune Information pour le moment!</span></center>
                  <?php
                  endif;
                  ?>
              
              </div>
              <!-- Card deck -->
               </div>
           
            <div class="text-center" ><a href="activites"style="color:red; font-size:17px; font-weight:bold;">Parcourez nos activités <i class="fa fa-angle-right mx-2" aria-hidden="true" style="color:red; font-weight:bold;"></i></a></div> 
         </div>
      </div>
      <!-- blog section end -->