<?php
    include_once "./include/header.php";
    include_once "./include/sidebar.php"; 
 ?>

 <?php 
  
 
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

            <script>
                 function reset(){
                     
                 }
            </script>
          <ol class="breadcrumb">
              <button type="button" class="btn" style="background-color: #194CB2;">
                  <a href="user.php"><i class="fa fa-home" style="color: white;" ></i>Accueille</a>
                </button>
              <button type="button" class="btn" style="background-color: #194CB2;">
                  <a href="bulletin-paie.php"><i class="fa fa-plus" style="color: white;"></i>Nouveau bulletin de pai</a>
                </button>
              <!-- <li><a href="addEvenement.php">
                -->    

          </ol><br>
</section>
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <!-- <h1 class="text-center">PHP OOP AJAX DATATABLES DATE RANGE</h1> -->
                <hr>
            </div>
        </div>
        <form method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Start Date" required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control"name ="end_date" id="end_date" placeholder="End Date" required >
                        </div>
                    </div>
                </div>
                <div>
                    <button name="filter" id="filter" class="btn btn-outline-info btn-sm">Filter</button>
                    <button  id="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless display nowrap" id="records" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>TOTAL BRUT</th>
                                        <th>TOTAL COTISATIONS</th>
                                        <th>Brut Imposable</th>
                                        <th>Mode de Paiement</th>
                                        <th>Net à Payer</th>
                                        <th>Nom salarie</th>
                                    </tr>
                                </thead>
                              <tbody>
                              
                                    <?php 
                                          $host ="localhost";
                                          $user = "root";
                                          $pw = "";
                                          $dbName = "2msenergy";
                                      
                                         $conn = mysqli_connect($host ,$user,$pw ,$dbName);
                                         if(!$conn){
                                             die("conexion echouer:".mysqli_connect_error());
                                         }
                                         $count = 0;
                                         if(isset($_POST['filter'])){
                                            $start_date = $_POST['start_date'];
                                            $end_date =$_POST['end_date'];

                                             $query=mysqli_query($conn,"SELECT * from bulletin_pai,salarie where ( 	DatePai<= '$start_date' AND 	DatePai >= '$end_date') AND bulletin_pai.Id_salarie=salarie.Num_salarie   ORDER BY DatePai");
                                             $count =mysqli_num_rows($query);

                                             
                                         }

                                        //  print_r($count);

                                         if($count == 0){
                                            echo'<tr>';
                                           echo"<td style='color:red'>Aucun Fiche de pai a ce date</td>";
                                           echo'</tr>';
                                        //    print_r($start_date);
                                        //    print_r($end_date);
                                          }else{
                                             while($row = mysqli_fetch_array($query)){
                                                 echo'<tr>';
                                                     echo'<td>'.$row['DatePai'].'</td>';
                                                    echo'<td>'.$row['GainTotB'].'</td>';
                                                    echo'<td>'.$row['RetenuTotC'].'</td>';
                                                    echo'<td>'.$row['BrutIM'].'</td>';
                                                    echo'<td>'.$row['Mode_Paiement'].'</td>';
                                                    echo'<td>'.$row['NetPaim'].'</td>';
                                                    echo'<td>'.$row['Nom'].'</td>';
                                                 echo'</tr>';
                                             };  
                                          }
                                    ?>
                              
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </div>
<?php include './include/footer.php'; ?>
                 