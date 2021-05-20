<?php 
    include './include/header.php';
    include './include/sidebar.php';
    include './Classes/bill-pai.class.php'
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
          <!-- calacul -->

          <script src="./assets/js/clc.js"></script>
          <a href="index.php"><button type="button" class="btn" style="float:right;">Home</button></a>
                
          <br>
        </section>


        <!-- main containt -->

        </section id="table" class="conatainer" >
        <form  method="POST" action="./biil-pai/bill-pai-traitement.php">
            <div class="card " style="width:400px;float:right;">
              <div class="card-header" >
                <h3>vous devez choisir un salarie:</h3>
              </div>
              <div class="card-body">
              <select class="form-select" aria-label="Default select example" name="Id_salarie" required>
                    <?php
                      $bilp = new billPai();
                      $bilp->getSala(); 
                    ?>
               </select>
              </div>
          </div> 
            <div class="card" style="width:400px">
              <div class="card-header" >
                <h3>Date de paie:</h3>
              </div>
              <div class="card-body">
                <input type="date" name="DatePai" id="DatePai" required>
              </div>
          </div> 
          <table class="table" border="2">
              <thead class="thead-dark">
               <tr>
               <th scope="col">Désignation</th>
               <th scope="col">Nombre</th>
               <th scope="col">Base</th>
               <th scope="col">Taux</th>
               <th scope="col">Gain</th>
               <th scope="col">Retenu</th>
               </tr> 
              </thead>
              <tbody>
                  <tr>
                    <td scope="col">Salaire de Base Horaire</td>
                    <td><input type="text" name="nbrheBs" id="nbrheBs" required></td>
                    <td><input type="text" name="baseBs" id="baseBs" required></td>
                    <td><input type="text" name="TauxBs" name="TauxBs"></td>
                    <td ><input type="text" name="GainBs" id="GainBs"></td>
                    <td><input type="text" name="RetenuBs"></td>
                  </tr>             
                  <tr>
                    <td scope="col">Congés Payés</td>
                    <td><input type="text" name="nbrheCo" id="nbrheCo" required></td>
                    <td><input type="text" name="baseCo" id="baseCo" required></td>
                    </td><td><input type="text" name="TauxCo" id="TauxCo"></td>
                    </td><td><input type="text" name="GainCo" id="GainCo"></td>
                    </td><td><input type="text" name="RetenuCo" id="RetenuCo"></td>
                    
                   </tr>             
                  <tr>
                    <td scope="col">Prime d'ancienneté</td>
                    <td><input type="text" name="nbrhePa" id="nbrhePa">
                    </td><td><input type="text" name="basePa" id="basePa"></td>
                    <td><input type="text" name="TauxPa" id="TauxPa" required></td>
                    <td><input type="text" name="GainPa" id="GainPa"></td>
                    <td><input type="text" name="RetenuPa" id="RetenuPa"></td>
                    
                   </tr>             
                  <tr>
                    <td scope="col">Prime Rendement</td>
                    <td><input type="text" name="nbrhePr" id="nbrhePr">
                    </td><td><input type="text" name="basePr" id="basePr"></td>
                    </td><td><input type="text" name="TauxPr" id="TauxPr"></td>
                    </td><td><input type="text" name="GainPr" id="GainPr" required></td>
                    </td><td><input type="text" name="RetenuPr" id="GainPr"></td>
                    
                    </tr>             
                  <tr>             
                  <tr>
                    <td scope="col">Prime de Transport</td>
                    <td><input type="text" name="nbrheTr" id="nbrheTr">
                    </td><td><input type="text" name="baseTr" id="baseTr"></td>
                    <td><input type="text" name="TauxTr" id="TauxTr"></td>
                    <td><input type="text" name="GainTr" id="GainTr" required></td>
                    <td><input type="text" name="RetenTr" id="RetenTr"></td>
                    
                  </tr>             
                  <tr>
                    <td scope="col">Indemnité de Repas</td>
                    <td><input type="text" name="nbrheIr">
                    </td><td><input type="text" name="baseIr" id="baseIr"></td>
                    <td><input type="text" name="TauxIr" id="TauxIr"></td>
                    <td><input type="text" name="GainIr" id="GainIr" required></td>
                    <td><input type="text" name="RetenuIr"id="RetenuIr"></td>

                    </tr>
                  <tr>
                    <td scope="col"><strong>TOTAL BRUT</strong></td>
                    <td><input type="text" name="nbrheTotB" id="nbrheTotB">
                    </td><td><input type="text" name="baseTotB" id="baseTotB"></td>
                    <td><input type="text" name="TauxTotB" id="TauxTotB"></td>
                    <td><input type="text" name="GainTotB" id="GainTotB"></td>
                    <td><input type="text" name="RetenuTotB" id="RetenuTotB"></td>
                    
                    </tr>            
                  <tr><td scope="col"></td></tr>            
                  <tr>
                      <td scope="col">Cotisation CNSS</td>
                      <td><input type="text" name="nbrheCnss" id="nbrheCnss">
                      </td><td><input type="text" name="baseCnss" id="baseCnss"></td>
                      <td><input type="text" name="TauxCnss" id="TauxCnss" required></td>
                      <td><input type="text" name="GainCnss" id="GainCnss"></td>
                      <td><input type="text" name="RetenuCnss" id="RetenuCnss"></td>
                   </tr>         
                   <td scope="col">CNSS-AMO</td>
                    <td><input type="text" name="nbrheAMO" id="nbrheAMO">
                    </td><td><input type="text" name="baseAMO" id="baseAMO"></td>
                    <td><input type="text" name="TauxAMO" id="TauxAMO" required></td>
                    <td><input type="text" name="GainAMO" id="GainAMO"></td>
                    <td><input type="text" name="RetenuAMO" id="RetenuAMO"></td>
                    
                  </tr>           
                  <tr>
                   <td scope="col">Cotisation Mutuelle</td>
                    <td><input type="text" name="nbrheMut" id="nbrheMut">
                    </td><td><input type="text" name="baseMut"   id="baseMut"></td>
                    <td><input type="text" name="TauxMut"   id="TauxMut" required></td>
                    <td><input type="text" name="GainMut"   id="GainMut"></td>
                    <td><input type="text" name="RetenuMut" id="RetenuMut"></td>
                  </tr>           
                  <tr>
                   <td scope="col">Participation AMO</td>
                    <td><input type="text" name="nbrhePo" id="nbrhePo">
                    </td><td><input type="text" name="basePo" id="basePo"></td>
                    <td><input type="text" name="TauxPo" id="TauxPo"></td>
                    <td><input type="text" name="GainPo" id="GainPo"></td>
                    <td><input type="text" name="RetenuPo" id="RetenuPo"></td>
                    
                  </tr>           
                  <tr><td scope="col"></td></tr>           
                  <tr>
                   <td scope="col"><strong>TOTAL COTISATIONS</strong></td>
                    <td><input type="text" name="nbrheTotC" id="nbrheTotC">
                    </td><td><input type="text" name="baseTotC" id="baseTotC"TotC></td>
                    <td><input type="text" name="TauxTotC" id="TauxTotC"></td>
                    <td><input type="text" name="GainTotC" id="GainTotC"></td>
                    <td><input type="text" name="RetenuTotC" id="RetenuTotC"></td>
                    
                  </tr>           
                  <tr><td scope="col"></td></tr>           
                  <tr>
                    <td scope="col">Retenue IR</td>
                    <td><input type="text" name="nbrheRetenuI" id="nbrheIR">
                    </td><td><input type="text" name="BaseRetenuI" id="BaseRetenuI"></td>
                    <td><select name="TauxRetenuI" id="TauxRetenuI" >
                       <option value="">-Taux impôt sur le revenu</option>
                       <option value="0">0%</option>
                       <option value="10">10%</option>
                       <option value="20">20%</option>
                       <option value="30">30%</option>
                       <option value="34">34%</option>
                       <option value="38">38%</option>
                    </select></td>
                    <td><input type="text" name="GainRetenuI" id="GainRetenuI"></td>
                    <td><input type="text" name="RetenuRetenuI" id="RetenuRetenuI"></td>
                  </tr>           
                  <tr>
                    <td scope="col">Arrondi du mois précédent</td>
                    <td><input type="text" name="nbrheAp">
                    </td><td><input type="text" name="baseAp"></td>
                    <td><input type="text" name="TauxAp"></td>
                    <td><input type="text" name="GainAp"></td>
                    <td><input type="text" name="RetenuAp"></td>
                    
                  </tr>           
                  <tr>
                  <td scope="col">Arrondi du mois en cours</td>
                    <td><input type="text" name="nbrheAc"></td>
                         <td><input type="text" name="baseAc"></td>
                         <td><input type="text" name="TauxAc"></td>
                         <td><input type="text" name="GainAc"></td>
                         <td><input type="text" name="RetenuAc"></td>
                  </tr>
              </tbody>
          </table>
          <table class="table" border="2" style="margin-top: 55px;">
           <tr>
            <td>Cumul</td>
            <td><strong>Brut Imposable</strong></td>
            <td>Net Imposable</td>
            <td>Charges Salariales</td>
            <td>Frais Professionnels</td>
            <td>Déduction Logement</td>
            <td>Déduction Charges Familiale</td>
            <td>Jours Travaillés/IR</td>
           </tr>
           <tr>
               <td>Mensuel</td>
            <td><input type="text" name="BrutIM" id="BrutIM"></td>
            <td><input type="text" name="NetImposM" id="NetImposM"></td>
            <td><input type="text" name="chargesSalM" id="chargesSalM"></td>
            <td><input type="text" name="FraisProM" id="FraisProM" required></td>
            <td><input type="text" name="DeducLogM" id="DeducLogM"></td>
            <td><input type="text" name="DeducaChargFaM" id="DeducaChargFaM"></td>
            <td><input type="text" name="JrsTraM" id="JrsTraM"></td>
           </tr>
           <tr>
              <td>Annuel</td>
              <td><input type="text" name="BrutIA" id="BrutIA"></td>
              <td><input type="text" name="NetImposA" id="NetImposA"></td>
              <td><input type="text" name="FraisProA" id="FraisProA"></td>
              <td><input type="text" name="chargesSalA" id="chargesSalA"></td>
              <td><input type="text" name="DeducLogA" id="DeducLogA"></td>
              <td><input type="text" name="DeducaChargFaA" id="DeducaChargFaA"></td>
              <td><input type="text" name="JrsTraA" id="JrsTraA"></td>
           </tr>
          </table>
          <table class="table" border="2" style="margin-top: 55px;">
           <tr>
              <td>Congés Pris sur Année</td>
              <td><strong>Solde Congé</strong></td>
              <td>Solde H.P.N.E (Heures)</td>
              <td>Solde H.P.N.E (Montant)</td>
              <td>Mode de Paiement</td>
              <td colspan="2" align="cneter"><strong>Net à Payer</strong></td>
           </tr>
           <tr>
              <td><input type="text" name="CongePris" id="CongePris"></td>
              <td><input type="text" name="SoldCon" id="SoldCon"></td>
              <td><input type="text" name="SoldHpne" id="SoldHpne"></td>
              <td><input type="text" name="SoldHpneSold" id="SoldHpnSeold"></td>
              <td>

                <select name="Mode_Paiement" id="Mode_Paiement" required>
                  <option value="">-------------------</option>
                  <option value="Espace">virement</option>
                  <option value="Chash">chèque </option>
                  <option value="Chash">espèces </option>
               </select>
              </td>
              <td colspan="2"><input type="text" name="NetPaim" id="NetPaim"></td>
           </tr>
           <tr>
             
           </tr>
          </table>
             <?php 
                 echo"<button type='submit' name='submit' class='btn'>Valider</div>";
                  
              ?>
        </form>
        </section>
<?php 
    include './include/footer.php';
?>