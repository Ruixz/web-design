<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI Free</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    
    <!-- Loading part4.css -->
		<link href="css/part4.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
    		<div id="header">
					<img src="header.jpg" width="1140px" alt="header img"/>
				</div>
				<div id="content">
				<form>
					<div id="submitted">
						<h5><span>SUBMITTER INFORMATION</span><span> Directions for Submission: <span>Insect/Spider</span> or <span>Disease</span></span></h5>		
						<div>
							<label for="name"><strong>Name: </strong><?php echo $_POST["txtName"]; ?></label>
						</div>
						<label for="address"><strong>Address: </strong><?php echo $_POST["txtAddress"]; ?></label>
						<div>
							<label for="city"><strong>City: </strong><?php echo $_POST["txtCity"]; ?></label>
							<label for="state"><strong>State: </strong><?php echo $_POST["txtState"]; ?></label>
							<label for="zip"><strong>Zip: </strong><?php echo $_POST["txtZip"]; ?></label>	
							<label for="country"><strong>Country: </strong><?php echo $_POST["txtCountry"]; ?></label>
						</div>
						<div>
							<label for="phone"><strong>Phone: </strong><?php echo $_POST["txtPhone"]; ?></label>
							<label for="cell"><strong>Cell: </strong><?php echo $_POST["txtCell"]; ?></label>
							<label for="email"><strong>Email: </strong><?php echo $_POST["txtEmail"]; ?></label>
						</div>
					</div>
					<div id="contact">
						<h5>CONTACT ME BY: </h5><?php echo implode(",",$_POST["chkContact"]); ?>
					</div>
					<div id="requested">
						<h5>INFORMATION REQUESTED: </h5><?php echo implode(",",$_POST["chkReq"]); ?>
					</div>
					<hr/>
					<div id="collection">
						<h5>COLLECTION INFORMATION:</h5>
						<p><span>What plant species was the sample collected from</span><span>PLANT INFO:</span></p>
						<div>
							<label for="plantComName"><strong>Host Plant Common Name: </strong><?php echo $_POST["txtPlantComName"]; ?></label>
							<label for="plantAge"><strong>Plant age: </strong><?php echo $_POST["txtPlantAge"]; ?></label>
							<label for="plantSize"><strong>Size: </strong><?php echo $_POST["txtPlantSize"]; ?></label>
						</div>
						<div>
							<label for="plantSciName"><strong>Host Plant Scientific Name/Variety: </strong><?php echo $_POST["txtPlantSciName"]; ?></label>
							<label for="numAffected"><strong>Number of plants affected: </strong><?php echo $_POST["txtNumAffected"]; ?></label>
						</div>
						<div>
							<label for="other"><strong>If not collected from a plant,then please describe: </strong><?php echo $_POST["txtOther"]; ?></label>
							<label for="percAffected"><strong>Percent of plants affected: </strong><?php echo $_POST["txtPercAffected"]; ?></label>
						</div>
						<div>
							<label><strong>Problem worsening: </strong><?php echo $_POST["worsenRadio"]; ?></label>
						</div>
				  </div>
				  <hr/>
				  <div id="description">
				  	<h5>PLANT SYMPTOM(S) DESCRIPTION: </h5>
				  	<p>Describle in detail what is wrong with the plant and what parts are affected</p>
				  	<p><?php echo $_POST["txtWorsen"]; ?></p>
				  	<h5>PEST/SYMPTOM IMAGES: </h5>
				  	<p>If possible, please provide photes of the affected plant(s). Arange of photos from landscape-level shots to close-ups are ideal. Including photos can aid diagnosis.</p>
						<div>
							<label><span><strong>Did you include images with your submission? </strong></span><?php echo $_POST["imageIncludedRadio"]; ?></label>
						</div>	
						<div>
							<label><span><strong>I include pictures as: </strong></span><?php echo $_POST["pictureIncludedRadio"]; ?></label>
						</div>	
					</div>
					<hr/>
					<div id="pest info">
				  	<h5><span>PEST INFORMATION:</span></h5>
				  	<div>
				  		<label for="specimens"><strong>Number of Specimens in Sample: </strong><?php echo $_POST["txtSpecimens"]; ?></label>
				  		<label for="individuals"><strong>Number of Individuals in Observed: </strong><?php echo $_POST["txtIndividuals"]; ?></label>
						</div>
						<div><label for="appearence"><strong>Describle the Appearence of the Pest:</strong></label></div>
						<p><?php echo $_POST["txtAppearence"]; ?></p>
						<h5>EXTRA INFORMATION:</h5>
						<p>Use the back of this sheet to include additional information:e.g. irrigation type and rate, fertilization type and rate, pesticide, fungucides or herbicides applied, map/schematic of property and location of affected plants includeing directional arrows(N,E,S,W), general care/maintenance or situation of plants,planting depth or method, progression of symptoms,etc.</p>	
					</div>
					<hr/>
						<div id="diagnosis">
							<div>
								<h5><span>DIAGNOSIS</span>(Lab use only)</h5>
								<div>
									<label for="commonName"><strong>Common Name: </strong><?php echo $_POST["txtCommonName"]; ?></label>
									<label for="family"><strong>Family: </strong><?php echo $_POST["txtFamily"]; ?></label>
								</div>
								<div>
									<label for="genus"><strong>Genus: </strong><?php echo $_POST["txtGenus"]; ?></label>
									<label for="species"><strong>Species: </strong><?php echo $_POST["txtSpecies"]; ?></label>
								</div>					
							</div>
							<div id="reponse">
									<h5><span>RESPONSE:</span></h5>
									<p><?php echo $_POST["responsRadio"]; ?></p>								
									<div>
										<label for="date"><strong>Date: </strong><?php echo $_POST["txtdate"]; ?></label>
										<label for="time"><strong>Time: </strong><?php echo $_POST["txtTime"]; ?></label>
									</div>		
							</div>
						</div>
				</form>
				</div>
    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
  </body>
</html>
