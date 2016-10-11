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
        <h2>Input</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Päivämäärä</span>
            <input id="date" name="date" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" >
            <span class="input-group-addon" id="basic-addon1">Olo</span>
                <select type="text" name="fiilis" id="fiilis" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Hyvä</option>
				<option value="1">Ok</option>
                <option value="2">Huono</option>
                <option value="3">Todella huono</option>
                </select>
        </div>
       
		<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Vehnä</span>
                <select type="text" name="vehna" id="vehna" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Soijarouhe</span>
                <select type="text" name="soija" id="soija" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Pavut/herneet</span>
                <select type="text" name="pavut" id="pavut" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Ruis</span>
                <select type="text" name="ruis" id="ruis" class="form-control" aria-describedby="basic-addon1">
                <option value="0">Ei</option>
				<option value="1">Vähän</option>
                <option value="2">Kohtuudella</option>
                <option value="3">Fullretart</option>
                </select>
        </div>
		
		<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Tulinen (chili)</span>
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
	<div class="col-md-6"></div>

</main>
<?php include('footer.php'); ?>

</div><!-- end .container -->
<?php include('footer-scripts.php'); ?>

</body>
</html>