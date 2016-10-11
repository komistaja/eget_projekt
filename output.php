<?php
include('dbconnect.php');  // database connectionhandler

$thisPage = "Output"; // pagevariable for nav.php

// Mysql query for ingredient where feelcount per ingredient amount
$aines = "vehna";  // variable for ingredient input
$base_q = "SELECT COUNT(feel.feel) FROM jannyholm LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY) WHERE jannyholm.";
$q_output_feel_count = "SELECT COUNT(feel.feel) AS feel0, ($base_q$aines = 1) AS feel1, ($base_q$aines = 2) AS feel2, ($base_q$aines = 3) AS feel3
FROM jannyholm
LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY)
WHERE jannyholm.vehna = 0;";

$r_output_feel = mysqli_query($link, $q_output_feel_count);
$output_vehna_feel = mysqli_fetch_array($r_output_feel);


// Query for ingredient 2
$aines = "ruis";
$base_q = "SELECT COUNT(feel.feel) FROM jannyholm LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY) WHERE jannyholm.";
$q_output_feel_count = "SELECT COUNT(feel.feel) AS feel0, ($base_q$aines = 1) AS feel1, ($base_q$aines = 2) AS feel2, ($base_q$aines = 3) AS feel3
FROM jannyholm
LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY)
WHERE jannyholm.vehna = 0;";

$r_output_feel = mysqli_query($link, $q_output_feel_count);
$output_ruis_feel = mysqli_fetch_array($r_output_feel);


// Query for ingredient 3
$aines = "soija";
$base_q = "SELECT COUNT(feel.feel) FROM jannyholm LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY) WHERE jannyholm.";
$q_output_feel_count = "SELECT COUNT(feel.feel) AS feel0, ($base_q$aines = 1) AS feel1, ($base_q$aines = 2) AS feel2, ($base_q$aines = 3) AS feel3
FROM jannyholm
LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY)
WHERE jannyholm.vehna = 0;";

$r_output_feel = mysqli_query($link, $q_output_feel_count);
$output_soija_feel = mysqli_fetch_array($r_output_feel);


// Query for ingredient 4
$aines = "pavut";
$base_q = "SELECT COUNT(feel.feel) FROM jannyholm LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY) WHERE jannyholm.";
$q_output_feel_count = "SELECT COUNT(feel.feel) AS feel0, ($base_q$aines = 1) AS feel1, ($base_q$aines = 2) AS feel2, ($base_q$aines = 3) AS feel3
FROM jannyholm
LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY)
WHERE jannyholm.vehna = 0;";

$r_output_feel = mysqli_query($link, $q_output_feel_count);
$output_pavut_feel = mysqli_fetch_array($r_output_feel);


// Query for ingredient 5
$aines = "chili";
$base_q = "SELECT COUNT(feel.feel) FROM jannyholm LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY) WHERE jannyholm.";
$q_output_feel_count = "SELECT COUNT(feel.feel) AS feel0, ($base_q$aines = 1) AS feel1, ($base_q$aines = 2) AS feel2, ($base_q$aines = 3) AS feel3
FROM jannyholm
LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL 1 DAY)
WHERE jannyholm.vehna = 0;";

$r_output_feel = mysqli_query($link, $q_output_feel_count);
$output_chili_feel = mysqli_fetch_array($r_output_feel);

include('head.php');
?>


</head> <!-- from head.php -->
<body>
<header>
<?php include('nav.php'); // navigation ?>
</header>
<div class="container">   
<main class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Osumataulukko</h3>
  </div>
  <div class="panel-body">
    <table>
        <!-- print values from output.php querys -->
	<tr>
		<th>Määrä</th>
		<th>Ei</th>
		<th>Vähän</th>
		<th>Reippasti</th>
		<th>Todella paljon</th>
	</tr>
	<tr>
		<td>Vehnä</td>
		<td><?php echo $output_vehna_feel['feel0']; ?></td>
		<td><?php echo $output_vehna_feel['feel1']; ?></td>
		<td><?php echo $output_vehna_feel['feel2']; ?></td>
		<td><?php echo $output_vehna_feel['feel3']; ?></td>
		
	</tr>
    <tr>
		<td>Soija</td>
		<td><?php echo $output_soija_feel['feel0']; ?></td>
		<td><?php echo $output_soija_feel['feel1']; ?></td>
		<td><?php echo $output_soija_feel['feel2']; ?></td>
		<td><?php echo $output_soija_feel['feel3']; ?></td>
    </tr>
    <tr>
		<td>Pavut</td>
		<td><?php echo $output_pavut_feel['feel0']; ?></td>
		<td><?php echo $output_pavut_feel['feel1']; ?></td>
		<td><?php echo $output_pavut_feel['feel2']; ?></td>
		<td><?php echo $output_pavut_feel['feel3']; ?></td>
		
	</tr>
	<tr>
		<td>Ruis</td>
		<td><?php echo $output_ruis_feel['feel0']; ?></td>
		<td><?php echo $output_ruis_feel['feel1']; ?></td>
		<td><?php echo $output_ruis_feel['feel2']; ?></td>
		<td><?php echo $output_ruis_feel['feel3']; ?></td>
		
	</tr>
    <tr>
		<td>Chili</td>
		<td><?php echo $output_chili_feel['feel0']; ?></td>
		<td><?php echo $output_chili_feel['feel1']; ?></td>
		<td><?php echo $output_chili_feel['feel2']; ?></td>
		<td><?php echo $output_chili_feel['feel3']; ?></td>
		
	</tr>
	</table>
  </div>
</div>
      
    </div>
    <div class="col-md-6">
    </div>

</main>
<?php include('footer.php'); ?>

</div><!-- end .container -->
<?php include('footer-scripts.php'); ?>

</body>
</html> <!-- from head.php -->