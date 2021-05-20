<?php 
   include_once "./include/header.php";
   include_once "./include/sidebar.php";
?>
<style>
   #ajou{
      position: absolute;
      top: 65%;
      left: 25%;
      width: 50%;
   }
   .nouve{
       align-content: center;
   }
</style>
<!-- Content Header (Page header) -->
     <section class="content-header">
        <h1>
           Dashboard
        <small>Control panel</small>
         </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Gestion parteniare</li>
        </ol>
      </section>

    <!-- Main Content -->

    <section class="breadcrumb">
        <div class="container">
          <div class="row">
          <div class="alert bg-success alert-dismissible" role="alert" style="background-color: #92A8D4;">
          <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <p style="font-family: Impact; font-size: 18pt;text-align: center;">nouveau partenaire</p>
        </div>
          </div>
        </div>
        <form action="<?= './partenaire/partenaire-traitemen.php'?>" method="POST">
           <table class="table">
               <tr>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Nom :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nom" required>
                      </div>
                    </div>
                  </th>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Prenom :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="prenom" required>
                      </div>
                    </div>
                  </th>
               </tr>
               <tr>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Adresse :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="adresse" required>
                      </div>
                    </div>
                  </th>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Date Naissance :</label>
                      <div class="col-md-9">
                        <input type="date" class="form-control" name="dateNaiss" required>
                      </div>
                    </div>
                  </th>
               </tr>
               <tr>
                  <th>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">cin :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="cin" required>
                      </div>
                    </div>
                  </th>
               </tr>
               <tr>
                 <th>
                    <div class="form-group row">
                      <div class="col" id="ajou">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm" class="fa fa-plus-circle colorer bg-primary" style="width:100%; height:50px; border-radius:20px">Ajouter</div>
                    </div>
                 </th>
               </tr>
           </table>
        </form>
    </section>
<?php include_once "./include/footer.php" ?>