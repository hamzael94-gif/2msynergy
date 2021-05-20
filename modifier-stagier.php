<?php
    include_once "include/header.php";
     include_once "include/sidebar.php";
    include "./Classes/stagier.class.php";

    $stage = new stagier();

    $sta = $stage->Modifier($_GET['id']);

    $id= $sta['id_stagier'];

    $nom = $sta['Nom'];
    $prenom = $sta['Prenom'];
    $adresse =$sta['Adresse'];
    $dtNaiss = $sta['DateNaiss'];
    $cin =$sta['CIN'];
    $type_stage =$sta['type_stage'];
    $sexe =$sta['sexe'];

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
    
    <section class="breadcrumb">
          <legend  class="sheduler-boreder"></legend>
        <form action="stagier/stagier-traitemen.php?send=update&id=<?=$id?>" method="POST">
           <table class="table">
               <tr>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Nom :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nom" value="<?= $nom ?>" required>
                      </div>
                    </div>
                  </th>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Prenom :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="prenom" value="<?= $prenom ?>" required>
                      </div>
                    </div>
                  </th>
               </tr>
               <tr>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Adresse :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="adresse" value="<?= $adresse ?>" required>
                      </div>
                    </div>
                  </th>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Date Naissance :</label>
                      <div class="col-md-9">
                        <input type="date" class="form-control" name="dateNaiss" value="<?= $dtNaiss ?>" required>
                      </div>
                    </div>
                  </th>
               </tr>
               <tr>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">cin :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="cin" value="<?= $cin ?>" required>
                      </div>
                    </div>
                  </th>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">type de satge :</label>
                      <div class="col-md-9">
                        <select name="type-stage" class="form-control">
                            <option value ="<?= $type_stage?>"> <?=$type_stage ?></option>
                            <option value="<?= $type_stage ?>"><?= $type_stage ?></option>
                            <option value="<?= $type_stage ?>"><?= $type_stage ?></option>
                        </select>
                      </div>
                    </div>
                  </th>
               </tr>
               <tr>
                 <th>
                    <div class="form-group row">
                      <label  class="col-md-6 col-form-label">sexe :</label>
                      <div class="col-md-9">
                              <input class="form-control" type="text" name="sexe" value="<?= $sexe?>">
                      </div>
                    </div>
                 </th>
               </tr>
               <tr>
                 <th>
                    <div class="form-group row">
                      <div class="col"> 
                        <button type="submit" name="update"class="btn btn-primary btn-sm" class="fa fa-plus-circle colorer bg-primary" style="width:100%; height:50px; border-radius:20px">Modifier</div>
                    </div>
                 </th>
               </tr>
           </table>
        </form>
    </section>
<?php
    include_once "include/footer.php";
?>