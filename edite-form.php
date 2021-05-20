<?php
    include_once "include/header.php";
     include_once "include/sidebar.php";
    include "./Classes/Sallarie.class.php";

    $salla = new Sallarie();

    $sal = $salla->Modifier($_GET['num']);
    
    $num_sla = $sal['Num_salarie'];
    
    $stFam = $sal['Situation_Fam'];
    $nbrDead = $sal['Nbr_dead'];
    $cnss = $sal['N_CNSS'];
    $dtEntre = $sal['Date_Entre'];
    $dtSort = $sal['date_Sortie'];
    $fonction = $sal['fonction'];
    $departement = $sal['Departement'];
    $typeSalire = $sal['type_salaire'];
    $nbrenf = $sal['Nbr_enfante'];
    $nom = $sal['Nom'];
    $prenom = $sal['Prenom'];
    $adresse =$sal['Adresse'];
    $dtNaiss = $sal['DateNaiss'];
    $cin =$sal['CIN'];
?>
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        	
        <!-- Main content -->
    <div class="section-1-container section-container">
    <h3 align='center' style="background-color: cadetblue; height:40px;" >Modifier Sallarie</h3>
  </div>
  <section class="content" style='height:1000px'>
      <!-- form input -->
      <form method="POST" action="salarie-tretment.php?send=update&num=<?=$num_sla?>">
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Nom: </label>
            <div class="col-md-9">
              <input class="form-control" name="Nom" type="text" value="<?= $nom ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label"> Prenom: </label>
            <div class="col-md-9">            
            <input class="form-control" name="Prenom" type="text" value="<?= $prenom ?>" required>
          </div>
        </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Adresse: </label>
            <div class="col-md-9">
              <input class="form-control" name="Adresse" type="text" value="<?= $adresse ?>" required>
          </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Date Naissance: </label>
            <div class="col-md-9">
              <input class="form-control" name="DateNaiss" type="date" value="<?= $dtNaiss?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-3 col-form-label">CIN: </label>
            <div class="col-md-9">
            <input class="form-control" name="CIN" type="text" value="<?= $cin ?>" required>
         </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Situation_Fam: </label>
            <div class="col-md-9">
            <input class="form-control" name="sitution-famil" type="text" value="<?= $stFam ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">nombre dead: </label>
            <div class="col-md-9">
            <input class="form-control" name="nbr-dead" type="text" value="<?= $nbrDead ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">CNSS: </label>
            <div class="col-md-9">
            <input class="form-control" name="cnss" type="text" value="<?= $cnss ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">date entrez: </label>
            <div class="col-md-9">
            <input class="form-control" name="dtEntre" type="date" value="<?= $dtEntre ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Date Sortie: </label>
            <div class="col-md-9">
            <input class="form-control" name="dtSort" type="date" value="<?= $dtSort ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">fonction: </label>
            <div class="col-md-9">
            <input class="form-control" name="fonction" type="text" value="<?= $fonction ?>" required>
          </div>
        </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Departement: </label>
            <div class="col-md-9">
            <input class="form-control" name="departement" type="text" value="<?= $departement ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">type salaire: </label>
            <div class="col-md-9">
            <input class="form-control" name="typeSalir" type="text" value="<?= $typeSalire ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label">Nombre enfante: </label>
            <div class="col-md-9">
            <input class="form-control" name="nbrEnfant" type="text" value="<?= $nbrenf ?>" required>
            </div>
          </div>
          <div align='center'>
            <a href="index.php" class="btn btn-secondary">Fermer</a>
            <button type="submit" name="update" class="btn btn-primary">Modifier</button>
          </div>
      </form>
  
  </section>
<?php
    include_once "include/footer.php";
?>