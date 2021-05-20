<?php
    include_once "./include/header.php";
    include_once "./include/sidebar.php"; 
    include "./Classes/Sallarie.class.php";
 ?>
<!-- Content Header (Page header) -->
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
                 background-color: #4B46B8;
                 
               }
               
          </style>

          <script>function supprimer(num){
                if (confirm("Etes-Vous sûr de vouloir supprimer le Salarie?")==true) {
                  window.location.href="salarie-tretment.php?send=del&num="+num;
                }
              }
          </script>
          <ol class="breadcrumb">
              <button type="button" class="btn btn-light">
                  <a href="index.php"><i class="fa fa-home"></i>Accueille</a>
                </button>
              <button type="button" class="btn btn-light">
                  <a href="gestion-salarie.php"><i class="fa fa-plus"></i>Nouveau salarie</a>
                </button>
              <!-- <li><a href="addEvenement.php">
                -->    

          </ol><br><br><br>
</section>
 </section id="table" class="conatainer">
<div class="container" >
	<div class="row">
	<div class="alert alert-dismissible" role="alert" style="background-color: #92A8D4;">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <marquee><p style="font-family: Impact; font-size: 18pt">Sallarie 2MSYNERGY</p></marquee>
</div>
	</div>
</div>
<!-- border="2" style="background-color: #1B87BE;" -->
       <table class="table table-sm">
  <thead>
   <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Date Naissance</th>
        <th scope="col">CIN</th>
        <th scope="col">N_CNSS</th>
        <th scope="col">Fonction</th>
        <th scope="col">Departement</th>
        <th scope="col">Type Salaire</th>
        <th scop='col'></th>
        <th scop='col'></th>
        </tr>
  </thead>
  <tbody>
      <?php 
        $sallarie = new Sallarie(); 
       if($sallarie->getSal()){
           foreach($sallarie->getSal() as $sal){
                            echo '<tr>';
                            echo "<td scop='col'>".$sal['Nom']."</td>";
                            echo "<td scop='col'>".$sal['Prenom']."</td>";
                            echo "<td scop='col'>".$sal['Adresse']."</td>";
                            echo "<td scop='col'>".$sal['DateNaiss']."</td>";
                            echo "<td scop='col'>".$sal['CIN']."</td>";
                            echo "<td scop='col'>".$sal['N_CNSS']."</td>";
                            echo "<td scop='col'>".$sal['fonction']."</td>";
                            echo "<td scop='col'>".$sal['Departement']."</td>";
                            echo "<td scop='col'>".$sal['type_salaire']."</td>";
                            echo "<td scop='col'><a href='edite-form.php?num=" . $sal['Num_salarie'] ."' class='btn btn-warning'>Modifier</a></td>";
                            echo "<td scop='col'><a href='javascript:supprimer($sal[Num_salarie])' class='btn btn-danger'>Supprimer</a></td>";
                            echo "</tr>";
                          }
                        }else {
                          echo "<p class='mt-5 mx-auto'>Salarier is vide...</p>";
                        }
      ?>
  </tbody>
</table>
        <!-- /       .content -->
<?php include './include/footer.php' ?>
                 