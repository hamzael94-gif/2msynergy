<?php 
   include_once "./include/header.php";
   include_once "./include/sidebar.php";
?> 
<style>
     .info-sala{
         position: relative;
         float: right;
         top: 50px;
         width: 250px;
     }
     .btn{
      border: none;
      font-family: inherit;
      font-size: inherit;
      color: inherit;
      background: none;
      cursor: pointer;
      padding: 20px 20px;
      display: inline-block;
      margin: 15px 30px;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 700;
      outline: none;
      position: relative;
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      transition: all 0.3s;
     }
     .btn:after {
      content: '';
      position: absolute;
      z-index: -1;
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      transition: all 0.3s;
    }
    .btn {
      background: #3379FF;
      color: #fff;
      height: 70px;
      min-width: 260px;
      line-height: 24px;
      font-size: 16px;
      overflow: hidden;
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .btn:active {
      background: #9053a9;
      top: 2px;
    }

    .btn span {
      display: inline-block;
      width: 100%;
      height: 100%;
      -webkit-transition: all 0.3s;
      -webkit-backface-visibility: hidden;
      -moz-transition: all 0.3s;
      -moz-backface-visibility: hidden;
      transition: all 0.3s;
      backface-visibility: hidden;
    }

    .btn:before {
      position: absolute;
      height: 100%;
      width: 100%;
      line-height: 2.5;
      font-size: 180%;
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      transition: all 0.3s;
    }

    .btn:active:before {
      color: #703b87;
    }

    /* Button 5a */
    .btn:hover span {
      -webkit-transform: translateY(300%);
      -moz-transform: translateY(300%);
      -ms-transform: translateY(300%);
      transform: translateY(300%);
    }

    .btn:before {
      left: 0;
      top: -100%;
    }

    .btn:hover:before {
      top: 0;
    }

    /* Button 5b */
    .btn:hover span {
      -webkit-transform: translateX(200%);
      -moz-transform: translateX(200%);
      -ms-transform: translateX(200%);
      transform: translateX(200%);
    }

    .btn:before {
      left: -100%;
      top: 0;
    }

    .btn:hover:before {
      left: 0;
    }
</style>
<!-- Content Header (Page header) -->
     <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Gestion stagier</li>
        </ol>
      </section>

    <!-- Main Content -->

    <section class="content" style='height:1000px;position:relative;left:200px'>
        <div class="container">
          <div class="row">
            <div class="alert  alert-dismissible" role="alert" style="background-color: #92A8D4;">
            <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert">
               <span aria-hidden="true">×</span><span class="sr-only">Close</span>
            </button>
            <p style="font-family: Impact; font-size: 18pt; width:40px">nouveau Stagier</p>
        </div>
          </div>
        </div>
          <legend  class="sheduler-boreder"></legend>
        <form action="<?= './stagier/stagier-traitemen.php'?>" method="POST">
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Nom :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nom" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Prenom :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="prenom" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Adresse :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="adresse" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">Date Naissance :</label>
                      <div class="col-md-9">
                        <input type="date" class="form-control" name="dateNaiss" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">cin :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="cin" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">type de satge :</label>
                      <div class="col-md-9">
                        <select name="type-stage" class="form-control">
                            <option value="Stage d’observation ou d’initiation">Stage d’observation ou d’initiation</option>
                            <option value="Stage d’application">Stage d’application</option>
                            <option value="Stage de fin d’études">Stage de fin d’études</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="num" class="col-md-6 col-form-label">sexe :</label>
                      <div class="form-check">
                              <input type="radio" name="sexe" value="male" id="sexe">
                              <label>male</label>
                              <input type="radio" name="sexe" value="femlae ">
                              <label for="célibataire">femlae</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col" id="ajou">
                        <button type="submit" name="submit" class="btn ">Ajouter</div>
                    </div>    
        </form>
    </section>
<?php include_once "./include/footer.php" ?>