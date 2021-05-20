<?php
    include_once "./include/header.php";
    include_once "./include/sidebar.php"; 
    include "./Classes/partenaire.class.php";
 ?>
<!-- Content Header (Page header) -->
       <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Gestion partenaire</li>
          </ol> <section class="content-header">
          <h1>
          </h1>
          <style>
               
          </style>

          <script>function supprimer(id){
                if (confirm("Etes-Vous sûr de vouloir supprimer le parteniare?")==true) {
                     window.location.href="./partenaire/partenaire-traitemen.php?send=del&id="+id;
                }
              }
          </script>
          <ol class="breadcrumb">
          <button type="button" class="btn btn-link">
              <a href="index.php"><i class="fa fa-home"></i>Acceuile</a>
            </button>
          <button type="button" class="btn-btn-primary">
              <a href="ajouter-partenaire.php"><i class="fa fa-plus"></i>Nouveau partenaire</a>
            </button>
          <!-- <li><a href="addEvenement.php">
             -->

          </ol><br><br><br><br>
</section>
 </section id="table" class="conatainer">
<div class="container">
	<div class="row">
	<div class="alert  alert-dismissible" role="alert" style="background-color: #92A8D4;">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <marquee><p style="font-family: Impact; font-size: 18pt">Partenaire 2MSYNERGY</p></marquee>
</div>
	</div>
</div>
       <table class="table table-sm">
  <thead class="thead-dark">
   <tr>
        <!-- <th scope="col">ID</th> -->
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Date Naissance</th>
        <th scope="col">CIN</th>
        <th scop='col'></th>
        <th scop='col'></th>
        </tr>
  </thead>
  <tbody>
      <?php 
        $partenaire = new parteniare(); 
       if($partenaire->getPart()){
           foreach($partenaire->getPart() as $pat){
                     echo '<tr>';
                    // echo "<td scop='col'>".$pat['id_Partenaire']."</td>";
                     echo "<td scop='col'>".$pat['Nom']."</td>";
                     echo "<td scop='col'>".$pat['Prenom']."</td>";
                     echo "<td scop='col'>".$pat['Adresse']."</td>";
                     echo "<td scop='col'>".$pat['DateNaiss']."</td>";
                     echo "<td scop='col'>".$pat['CIN']."</td>";
                     echo "<td scop='col'><a href='modifer_partenaire.php?id=" . $pat['id_Partenaire'] ."' class='btn btn-warning'>Modifier</a></td>";
                     echo "<td scop='col'><a href='javascript:supprimer($pat[id_Partenaire])' class='btn btn-danger'>Supprimer</a></td>";
                     echo "</tr>";
                    }
                  }else {
                         echo "<p class='mt-5 mx-auto'>vous devez ajouter un nouveau partenaire...</p>";
                        }
      ?>
  </tbody>
</table>
        <!-- .content -->
<?php include './include/footer.php' ?>
                 