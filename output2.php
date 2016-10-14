<?php
include('dbconnect.php');  // database connectionhandler

$thisPage = "Output"; // pagevariable for nav.php




// Query for ingredients avg by feel
$qByFeel = 'SELECT ROUND(SUM(jannyholm.soija) / COUNT(NULLIF(jannyholm.soija, 0)), 1) AS soija, ROUND(SUM(jannyholm.vehna) / COUNT(NULLIF(jannyholm.vehna, 0)), 1) AS vehna, ROUND(SUM(jannyholm.pavut) / COUNT(NULLIF(jannyholm.pavut, 0)), 1) AS pavut, ROUND(AVG(jannyholm.ruis) / COUNT(NULLIF(jannyholm.ruis, 0)), 1) AS ruis, ROUND(AVG(jannyholm.chili) / COUNT(NULLIF(jannyholm.chili, 0)), 1) AS chili, feelref.feelname FROM jannyholm RIGHT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL -1 DAY) JOIN feelref on feel.feel = feelref.feel GROUP BY feel.feel';

$rOutputByFeel = mysqli_query($link, $qByFeel);  // mysqli result for ingredients avg by feel

// Query for avg feel by ingredient
$qIngredient = 'vehna';
$qByIng = 'SELECT ROUND(AVG(feel.feel), 1) AS ' . $qIngredient . 'feel FROM jannyholm JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL -1 DAY) RIGHT JOIN feelref ON feel.feel = feelref.feel GROUP BY jannyholm.' . $qIngredient;

$rOutputFeelVehna = mysqli_query($link, $qByIng);


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
		<th>Vointi</th>
		<th>Soijarouhe</th>
		<th>Vehnä</th>
		<th>Pavut</th>
		<th>Ruis</th>
		<th>Chili</th>
	</tr>
	<tr>
		
<?php 
        while($row = mysqli_fetch_assoc($rOutputByFeel)) {
            echo "<tr><td>" . $row['feelname'] . "</td><td>" . $row['soija'] . "</td><td>" . $row['vehna'] . "</td><td>" . $row['pavut'] . "</td><td>" . $row['ruis'] . "</td><td>" . $row['chili'] . "</td></tr>";
        }
?>
    </tr>
    </table>
  </div>
</div>
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Osumataulukko</h3>
  </div>
  <div class="panel-body">
    
    <table>
        <tr>
            <th>Aines</th>
            <th>Vointi</th>
        </tr>
        <tr>
            <td></td>
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