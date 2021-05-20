<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bulletin de pai</title>
    <meta http-equiv="Content-Type" content="text/html"/>
    <meta charset="UTF-8">
	<style media="all">
		*{
			margin: 0;
			padding: 0;
			line-height: 1.3;
			font-family: sans-serif;
			color: #008080;
		}
		body{font-size: .875rem;}
		.gry-color *,.gry-color{color:#878f9c;}
        .black-color{color: #010;}.red-color{color:red}
		table{width: 100%;}
		table th{font-weight: normal;}
		table.padding th{padding: .5rem .7rem;}
		table.padding td{padding: .7rem;}
		table.sm-padding td{padding: .2rem .7rem;}
		.border-bottom td,
		.border-bottom th{border-bottom:1px solid #ADFF2F;}
        .text-upper{text-transform: uppercase;}.text-center{text-align: center;}
		.text-left{text-align:left;}
		.text-right{text-align:right;}.strong{font-weight: bold;}
		.small{font-size: .85rem;}img{float: right;}
	</style>
	
</head>
<body>
	<div style="margin-left:auto;margin-right:auto;" id="Fact">
		<?php session_start();?>
		<!-- Les Information client Obligatorie -->
		<div style="background: #90EE90;padding: 1.5rem;">
			<table>
				<tr>
					<td style="font-size: 2rem;" class="text-left text-upper"> bulletin de pai</td>
					<td>
						<img src="./assets/img/logo.png" class="text-right" width="130px" height="50px" style="display:inline-block;">
					</td>
				</tr>
			</table>
			<table>
					<tr>
						<td style="font-size: 1.2rem;" class="strong gry-color">Mr.<span class="text-upper black-color"><?php echo $_SESSION['salarie'][1].' '.$_SESSION['salarie'][2]?></span></td>
						<td class="text-right"></td>
					</tr>
					<tr>
						<td class="gry-color">Adresse : <span class="strong black-color"><?php echo$_SESSION['salarie'][3]?></span></td>
                        <td class="text-right">CIN:<span class="strong"><?php echo $_SESSION['salarie'][5]?></span></td>
					</tr>
					<tr>
						<td class="gry-color">Téléphone : <span class="strong black-color">+212688827249</span></td>
						<td class="text-right gry-color">Date Naissance: <span class="strong black-color"><?php echo $_SESSION['salarie'][4]?></span></td>
                    </tr>
			</table>
		</div>

		<div style="padding: 1.5rem;padding-bottom: 0;">
			<h3 class="gry-color text-center" style="background: #90EE90;padding:10px"><span class="strong black-color">bulletin de pai </span></h3>
		</div>

		<!-- Element 1  -->
	    <div style="padding: 1.5rem;">
			<table class="padding text-left small border-bottom">
				<thead>
	                <tr>
	                    <th width="25%" style="background: #f2f2f2;">Designiation</th>
                        <th width="75%" style="background: #f2f2f2;">#</th>
	                </tr>
				</thead>
				<tbody class="strong">
                    <tr class="strong">
                        <td class="gry-color">N°CNSS</td>
                        <td class="strong black-color"><?php echo $_SESSION['salarie'][8] ?></td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Situation Familiale </td>
                        <td class="strong black-color"><?php $_SESSION['salarie'][6]?></td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Date Entre</td>
                        <td class="strong black-color"><?php echo $_SESSION['salarie'][9]?></td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Fonction</td>
                        <td class="strong black-color"><?php echo $_SESSION['salarie'][11]?></td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Departement</td>
                        <td class="strong black-color"><?php echo $_SESSION['salarie'][12]?></td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">type salarie</td>
                        <td class="strong black-color"><?php echo $_SESSION['salarie'][13]?></td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Nombre D'enfante</td>
                        <td class="strong black-color"><?php echo $_SESSION['salarie'][14]?></td>
                    </tr>
	            </tbody>
			</table>
		</div>
		<!-- Element 2  -->
        <div style="padding: 1.5rem;">
			<table class="padding text-left small border-bottom">
				<thead>
	                <tr>
	                    <th width="50%" style="background: #f2f2f2;">Titre</th>
	                    <th width="50%" style="background: #f2f2f2;">Eléments</th>
                    </tr>
				</thead>
				<tbody class="strong">
                    <tr class="strong">
                        <td class="gry-color"></td>
                        <td class="strong black-color"></td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Salaire de Base Horaire</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Nombre:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["nbrheBs"]?></span><br>
							<span class="strong black-color">Base:</span ><span class="gry-color"><?php echo $_SESSION['bilPai']["baseBs"] ?></span><br>
							<span class="strong black-color">Gain:</span ><span class="gry-color"><?php echo $_SESSION['bilPai']["GainBs"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Congés Payés</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Nombre:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["nbrheCo"]?></span><br>
							<span class="strong black-color">Base:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["baseCo"]?></span><br>
							<span class="strong black-color">Gain:</span ><span class="gry-color"><?php echo $_SESSION['bilPai']["TauxCo"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Prime d'ancienneté</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Base:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["basePa"]?></span><br>
							<span class="strong black-color">Taux:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["TauxPa"] ?></span><br>
							<span class="strong black-color">Gain:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["GainPa"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Prime Rendement </td>
                        <td class="strong black-color" >
							<span class="strong black-color">Gain:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["GainPr"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Indemnité de Transport</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Gain:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["GainTr"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Indemnité de Repas</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Gain:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["GainIr"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">TOTAL BRUT</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Gain:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["GainTotB"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Cotisation CNSS</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Base:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["baseCnss"]?></span><br>
							<span class="strong black-color">Taux:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["TauxCnss"] ?></span><br>
							<span class="strong black-color">Retenu:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["RetenuCnss"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">CNSS-AMO</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Base:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["baseAMO"]?></span><br>
							<span class="strong black-color">Taux:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["TauxAMO"] ?></span><br>
							<span class="strong black-color">Retenu:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["RetenuAMO"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Cotisation Mutuelle</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Base:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["baseMut"]?></span><br>
							<span class="strong black-color">Taux:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["TauxMut"] ?></span><br>
							<span class="strong black-color">Retenu:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["RetenuMut"] ?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Participation AMO</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Base:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["basePo"]?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">TOTAL COTISATIONS</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Retenu:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["RetenuTotC"]?></span><br>
						</td>
                    </tr>
                    <tr class="strong">
                        <td class="gry-color">Retenue IR</td>
                        <td class="strong black-color" >
							<span class="strong black-color">Base:</span><span class="gry-color"><?php echo $_SESSION['bilPai']["BaseRetenuI"];?></span><br>
							<span class="strong black-color">Taux:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["TauxRetenuI"] ?></span><br>
							<span class="strong black-color">Retenu:</span ><span class="gry-color"> <?php echo $_SESSION['bilPai']["GainRetenuI"] ?></span><br>
						</td>
                    </tr>
	            </tbody>
			</table>
		</div>

		<!-- Element 3  -->
        <div style="padding: 2rem;">
			<table class="padding text-left small border-bottom">
				<thead>
	                <tr>
	                    <th width="50%" style="background: #f2f2f2;">Brut Imposable (Mensuel)</th>
	                    <th width="25%" style="background: #f2f2f2;">Net Imposable (Mensuel)</th>
	                    <th width="25%" style="background: #f2f2f2;">Frais Professionnels(Mensuel)</th>
                    </tr>
				</thead>
				<tbody class="strong">
                    <tr class="strong">
                        <td class="gry-color"><?php echo $_SESSION['bilPai']["BrutIM"]?></td>
                        <td class="strong black-color"><?php echo $_SESSION['bilPai']["NetImposM"]?></td>
                        <td class="strong black-color"><?php echo $_SESSION['bilPai']["FraisProM"]?></td>
                    </tr>
	            </tbody>
			</table>
			<table class="padding text-left small border-bottom">
				<thead>
	                <tr>
	                    <th width="50%" style="background: #f2f2f2;">Brut Imposable (Annuel)</th>
	                    <th width="25%" style="background: #f2f2f2;">Net Imposable (Annuel)</th>
	                    <th width="25%" style="background: #f2f2f2;">Frais Professionnels(Annuel)</th>
                    </tr>
				</thead>
				<tbody class="strong">
                    <tr class="strong">
                        <td class="gry-color"><?php echo $_SESSION['bilPai']["BrutIA"]?></td>
                        <td class="strong black-color"><?php echo $_SESSION['bilPai']["NetImposA"]?></td>
                        <td class="strong black-color"><?php echo $_SESSION['bilPai']["FraisProA"]?></td>
                    </tr>
	            </tbody>
			</table>
		</div>
		<div style="padding: 2rem;">
			<table class="padding text-left small border-bottom">
				<thead>
	                <tr>
	                    <th width="50%" style="background: #f2f2f2;">Mode de paiement</th>
	                    <th width="25%" style="background: #f2f2f2;">Net à Payer</th>
                    </tr>
				</thead>
				<tbody class="strong">
                    <tr class="strong">
                        <td class="strong black-color"><?php echo $_SESSION['bilPai']["Mode_Paiement"]?></td>
                        <td class="strong black-color"><?php echo $_SESSION['bilPai']["NetPaim"]?></td>
                    </tr>
	            </tbody>
			</table>
		<a href="Facture.php" download="bottle.pdf" class="btn btn-primary">Telecharger</a>
		</div>
	</div>
</body>
</html>
<?php
// print_r($_SESSION["bilPai"]);
//session_destroy();

?>