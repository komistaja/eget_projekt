<?php
include('dbconnect.php');  // database connectionhandler
include('inputhandler.php');  // php form inputhandler
include('head.php');  // head file

$thisPage = "Index"; // pagevariable for nav.php

if(isset($output)) { echo $output; }  // ouput for dbconnect.php database connection and inputhandler.php
?>

</head>
<body>
<header>
<?php include('nav.php'); // navigation ?>
</header>
<div class="container">   
<main class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Input</h3>
  </div>
  <div class="panel-body">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Päivämäärä</span>
            <input id="date" name="date" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" >
            
            <span class="input-group-addon" id="basic-addon1">Vointi</span>
                <select type="text" name="fiilis" id="fiilis" class="form-control" aria-describedby="basic-addon1">
                <option value="1">Hyvä</option>
				<option value="2">Ok</option>
                <option value="3">Huono</option>
                <option value="4">Todella huono</option>
                </select>
        </div>
       
		<div class="input-group">
                <span class="input-group-btn" id="basic-addon1" onclick="fpChart('vehna')"><button class="btn btn-default inputid" type="button">Vehnä</button></span>
                <select type="text" name="vehna" id="vehna" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-btn" id="basic-addon1" onclick="fpChart('soija')"><button class="btn btn-default inputid" type="button">Soijarouhe</button></span>
                <select type="text" name="soija" id="soija" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-btn" id="basic-addon1"  onclick="fpChart('pavut')"><button class="btn btn-default inputid" type="button">Pavut/herneet</button></span>
                <select type="text" name="pavut" id="pavut" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-btn" id="basic-addon1" onclick="fpChart('ruis')"><button class="btn btn-default inputid" type="button">Ruis</button></span>
                <select type="text" name="ruis" id="ruis" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-btn" id="basic-addon1"  onclick="fpChart('chili')"><button class="btn btn-default inputid" type="button">Chili ym. tuliset</button></span>
                <select type="text" name="chili" id="chili" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
	
		<span class="input-group-btn">
        <button name="save" id="save" class="btn btn-default" type="submit">Syötä</button>
		</span>

        </form>
    </div>
        </div>
    </div>
	<div class="col-md-6">
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edelliset 30 päivää</h3>
  </div>
  <div class="panel-body" id="indexpanel">
        
    <div id="chart_div"></div>
    </div>
        </div>

</main>
<?php include('footer.php'); ?>

</div><!-- end .container -->
<?php include('footer-scripts.php'); ?>
<script src="js/gchart.js"></script>
</body>
</html>