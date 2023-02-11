<?php include ('mains/header.php'); ?>
 <hr>
   <!-- blog section start -->
      <div class="blog_section ">
         <div class="container">
                 <h1 class="services_taital"><span style="color:rgb(216,3,7);">Nos</span> activités</h1>
            <!-- <p class="news_text">do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            <br>
               <div class="row">
             <!-- Card deck -->
              <div class="card-deck">
                <!-- Card -->
                <?php 
                    $count=$db->prepare("SELECT count(id) AS records FROM blog ");
                    $count->setFetchMode(PDO::FETCH_ASSOC);
                    $count->execute();
                    $tcount=$count->fetchAll();
                    $recordsOnPage = 6;
                    $pagesNumber = ceil($tcount[0]['records']/$recordsOnPage);
                    
                    @$p = $_GET['pages']; 
                    $start = ($p-1)*$recordsOnPage;
                    $myqwery=$db->prepare("SELECT *FROM blog  ORDER BY id DESC LIMIT $start, $recordsOnPage");
                    $myqwery->execute();
                    foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token):    
                  ?>
                <div class="card mb-4">
                  <!--Card image-->
                  <div class="view overlay">
                    <img class="card-img-top" src="202301/images/<?= $token->image;?>"
                      alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card content-->
                  <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title"><?=$token->titre;?></h4>
                    <!--Text-->
                    <p class="card-text"><?= substr($token->detail,0,250);?><a href="detail_act.php?Edit=<?=$token->id;?>" style="font-family:tahoma;color:red;font-weight:bold;"> ... plus</a>.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                  </div>

                </div>
                <!-- Card -->
                <?php endforeach ?>

              </div>
              <!-- Card deck -->
  
               </div>

                    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" style="border:1px solid rgb(101,179,254);">Precedent</a>
        </li>
        <?php for ($i=1; $i <= $pagesNumber; $i++) { 
        ?>
        <li class="page-item"><a class="page-link" href="?pages=<?=$i;?>" style="background-color:rgb(101,179,254); border:1px solid rgb(101,179,254); color:white; font-weight: bold;"><?=$i?></a></li>
        <?php } ?>
          <a class="page-link" style="border:1px solid rgb(101,179,254);">Suivant</a>
        </li>
      </ul>


  </nav>
           
            <div class="read_bt"><a href="#">Parcourez nos activités</a></div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- services section end -->
      <!-- footer section start -->
  <?php include ('mains/footer.php'); ?>