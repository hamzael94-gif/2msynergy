<?php
    include_once "./include/header.php";
    include "./../Admin/include/sidebar.php"; 
    include "./Classes/stagier.class.php";
 ?>

 <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Gestion salarie</li>
          </ol> <section class="content-header">
          <h1>
          </h1>
          <style>
               .ta{
                 background-color: #6495ED;
                 
               }
               
          </style>

          <script>function supprimer(id){
                if (confirm("Etes-Vous sûr de vouloir supprimer le stagier?")==true) {
                  window.location.href="./stagier/stagier-traitemen.php?send=del&id="+id;
                }
              }
          </script>
          <ol class="breadcrumb">
            <button type="button" class="btn btn-sm">
            <a href="index.php"><i class="fa fa-home colorer" aria-hidden="true "></i> Home
           </a></li>
          </button>
          <button type="button" class="btn btn-sm">
            <a href="ajouter-stagier.php">  <i class="fa fa-plus-circle colorer" aria-hidden="true"></i>Ajouter stagier
            </a></li>
          </button>
          <!-- <li><a href="addEvenement.php">
             -->

          </ol>
          <br><br><br>
        </section>

        <!-- Content -->
        
 </section id="table" class="conatainer">
        <div class="container">
          <div class="row">
          <div class="alert alert-dismissible" role="alert" style="background-color: #92A8D4;">
          <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <marquee><p style="font-family: Impact; font-size: 18pt">Stagier 2MSYNERGY</p></marquee>
        </div>
          </div>
        </div>
              
       <table class="table">
  <thead class="thead-dark">
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Date Naissance</th>
      <th scope="col">CIN</th>
      <th scope="col">Type stage</th>
      <th scope="col">Sexe</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $stagier = new stagier();
         if($stagier->getStagi()){
           foreach ($stagier->getStagi() as $sta) {
             echo '<tr>';
            //  echo "<td scop='col'>".$sta['id_stagier']."</td>";
             echo "<td scop='col'>".$sta['Nom']."</td>";
             echo "<td scop='col'>".$sta['Prenom']."</td>";
             echo "<td scop='col'>".$sta['Adresse']."</td>";
             echo "<td scop='col'>".$sta['DateNaiss']."</td>";
             echo "<td scop='col'>".$sta['CIN']."</td>";
             echo "<td scop='col'>".$sta['type_stage']."</td>";
             echo "<td scop='col'>".$sta['sexe']."</td>";
             echo "<td scop='col'><a href='modifier-stagier.php?id=".$sta['id_stagier'] ."' class='btn btn-warning'>Modifier</a></td>";
             echo "<td scop='col'><a href='javascript:supprimer($sta[id_stagier])' class='btn btn-danger'>Supprimer</a></td>";
             echo "</tr>";
           }
         }else {
           echo "<p class = 'mt- mx auto'> Stagier et vide ....</p>";
         }
      ?>
  </tbody>
</table>

 </section>
