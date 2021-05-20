<?php 
     include "./Classes/Sallarie.class.php";

      $salla = new Sallarie();
     if(isset($_POST['submit'])) {

         $num= $_POST['num'];
         $nom = $_POST['Nom'];
         $prenom = $_POST['prenom'];
         $adresse  = $_POST['Adresse'];
         $dtNaiss = $_POST['DateNaiss'];
         $cin = $_POST['CIN'];
         $stFam = $_POST['situationFamil'];
         $nbrDead = $_POST['nbeDead'];
         $cnss = $_POST['nCnss'];
         $dtEntre = $_POST['dateEntre'];
         $dtSort = $_POST['dateSort'];
         $fonction = $_POST['fonction'];
         $departement =$_POST['Departement'];
         $typeSalire = $_POST['typeSal'];
         $nbrenf = $_POST['nbrEnf'];

         $salla->addSala($num, $nom, $prenom, $adresse , $dtNaiss , $cin , $stFam, $nbrDead , $cnss , $dtEntre ,$dtSort ,$fonction ,$departement ,$typeSalire ,$nbrenf);

         header("location: {$_SERVER['HTTP_ORIGIN']}/PROJET_2MS/Admin/afficher-salarie.php");
  
  }else if($_GET['send'] === 'update') {

         $Num_salarie= $_GET['num'];

         $Nom = $_POST['Nom'];
         $Prenom = $_POST['Prenom'];
         $Adresse  = $_POST['Adresse'];
         $DateNaiss = $_POST['DateNaiss'];
         $CIN = $_POST['CIN'];
         $Situation_Fam = $_POST['sitution-famil'];
         $Nbr_dead = $_POST['nbr-dead'];
         $N_CNSS = $_POST['cnss'];
         $Date_Entre = $_POST['dtEntre'];
         $date_sortie = $_POST['dtSort'];
         $fonction = $_POST['fonction'];
         $Departement =$_POST['departement'];
         $type_salaire = $_POST['typeSalir'];
         $Nbr_enfante = $_POST['nbrEnfant'];

         $salla->Update($Nom,$Prenom,$Adresse,$DateNaiss, $CIN,$Situation_Fam, $Nbr_dead, $N_CNSS,$Date_Entre,$date_sortie,$fonction,$Departement,$type_salaire,$Nbr_enfante,$Num_salarie);
         
          header("location: {$_SERVER['HTTP_ORIGIN']}/PROJET_2MS/Admin/afficher-salarie.php");
                     
        }else if($_GET['send'] === 'del'){
                     $num =$_GET['num'];
                     $salla->Supprimer($num);

         header("location: {$_SERVER['HTTP_ORIGIN']}/PROJET_2MS/Admin/afficher-salarie.php");
      }