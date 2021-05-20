<?php
    include_once "./include/header.php";
    include_once "./include/sidebar.php";
    //include "./../Admin/include/class-autoload.inc.php";
    
?>
<!-- Content Header (Page header) -->
       <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          
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
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Gestion salarie</li>
          </ol>
      </section>	
        <!-- Main content -->
        <section class="content" style='height:1000px'>
        <div class="container">
          <div class="row">
          <div class="alert  alert-dismissible" role="alert" style="background-color: #92A8D4;">
          <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <p style="font-family: Impact; font-size: 18pt;text-align: center;">nouveau salarie</p>
        </div>
          </div>
        </div>
        <fieldset class="scheduler-border">
             <form method="POST" action="<?= './salarie-tretment.php' ?>" class="col-md-12">  
              <div>
                    <div class="form-group row">
                      <label for="Nom" class="col-md-3 col-form-label"><span class="label info">Nom</span></label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="Nom" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="prenom" class="col-md-3 form-control-label">Prenom :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="prenom" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Adresse" class="col-md-3 form-control-label">Adresse :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="Adresse" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="dateNai" class="col-md-3 form-control-label">Date Naissance :</label>
                      <div class="col-md-9">
                        <input type="date" class="form-control" name="DateNaiss" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cin" class="col-md-3 form-control-label">N°CIN :</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="CIN" required>
                      </div>
                    </div>
                    <div class="form-group row">
                            <label for="cin" class="col-md-3 form-control-label">Situation Familiale :</label>
                      <div class="col-md-9">
                              <input class="form-check-input" type="radio" name="situationFamil" value="célibataire">
                              <label class="form-check-label" for="célibataire">célibataire</label>
                              <input class="form-check-input" type="radio" name="situationFamil" value="marié ">
                              <label class="form-check-label" for="célibataire">Marié</label>
                              <input class="form-check-input" type="radio" name="situationFamil" value="divorcé">
                              <label class="form-check-label" for="célibataire">Divorcé(e)</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="NbrDead" class="col-md-3 form-control-label">nombre de dead:</label>
                      <div class="col-md-9">
                        <input type="number" class="form-control" id="NbrDead" name="nbeDead" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nCnss" class="col-md-3 form-control-label">N°CNSS:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nCnss">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="dateEntre" class="col-md-3 form-control-label">Date Entrez:</label>
                      <div class="col-md-9">
                        <input type="date" class="form-control" name="dateEntre" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="dateSort" class="col-md-3 form-control-label">Date Sortie:</label>
                      <div class="col-md-9">
                        <input type="date" class="form-control" name="dateSort" required>
                    </div>
            </div>
              <div>
                    <div class="form-group row">
                      <label for="fonction" class="col-md-3 form-control-label">Fonction:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="fonction">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Departement" class="col-md-3 form-control-label">Departement:</label>
                      <div class="col-md-9">
                         <select name="Departement" class="form-control">
                             <option value="Digitale Markteting">Digitale Markteting</option>                           
                             <option value="Devlepmaent informatique">Devlepmaent informatique</option>                           
                             <option value="Finance">Finance</option>                           
                             <option value="Ressource Hummaine">Ressource Hummaine</option>                           
                         </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="typeSal" class="col-md-3 form-control-label">Type salaire:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="typeSal">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nbrEnf" class="col-md-3 form-control-label">Nombre Enfante:</label>
                      <div class="col-md-9">
                        <input type="number" class="form-control" name="nbrEnf">
                      </div>
                    </div>
                    </div>
                    <div class="form-group row">
                      <div class="col">
                        <button type="submit" name="submit" class="btn" >Ajouter</div>
                    </div>
              </div>
            </form>
        </fieldset>
        </section><!-- /.content -->

<?php
    include_once "./include/footer.php";
?>