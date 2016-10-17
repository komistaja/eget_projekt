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

// Q for avg feel by ingredient 2
$qIngredient = 'soija';
$qByIng = 'SELECT ROUND(AVG(feel.feel), 1) AS ' . $qIngredient . 'feel FROM jannyholm JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL -1 DAY) RIGHT JOIN feelref ON feel.feel = feelref.feel GROUP BY jannyholm.' . $qIngredient;

$rOutputFeelSoija = mysqli_query($link, $qByIng);

// Q for avg feel by ingredient 3
$qIngredient = 'pavut';
$qByIng = 'SELECT ROUND(AVG(feel.feel), 1) AS ' . $qIngredient . 'feel FROM jannyholm JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL -1 DAY) RIGHT JOIN feelref ON feel.feel = feelref.feel GROUP BY jannyholm.' . $qIngredient;

$rOutputFeelPavut = mysqli_query($link, $qByIng);


// Q for avg feel by ingredient 4
$qIngredient = 'ruis';
$qByIng = 'SELECT ROUND(AVG(feel.feel), 1) AS ' . $qIngredient . 'feel FROM jannyholm JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL -1 DAY) RIGHT JOIN feelref ON feel.feel = feelref.feel GROUP BY jannyholm.' . $qIngredient;

$rOutputFeelRuis = mysqli_query($link, $qByIng);


// Q for avg feel by ingredient 5
$qIngredient = 'chili';
$qByIng = 'SELECT ROUND(AVG(feel.feel), 1) AS ' . $qIngredient . 'feel FROM jannyholm JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL -1 DAY) RIGHT JOIN feelref ON feel.feel = feelref.feel GROUP BY jannyholm.' . $qIngredient;

$rOutputFeelChili = mysqli_query($link, $qByIng);


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
    <h3 class="panel-title">Vointi ainesten mukaan</h3>
  </div>
  <div class="panel-body">
    <table class="table">
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
    <h3 class="panel-title">Oireet syödyn aineksen määrän mukaan</h3>
  </div>
  <div class="panel-body">
    
    <table class="table">
        <tr>
            <th>Aines</th>
            <th>Ei</th>
            <th>Vähän</th>
            <th>Kohtuudella</th>
            <th>Paljon</th>
        </tr>
        <tr>
            <td>Vehnä</td>
            <?php
            while($row = mysqli_fetch_assoc($rOutputFeelVehna)) {
                if($row['vehnafeel'] < 2) { echo '<td class="goodfeel">Hyvä</td>'; }
                if($row['vehnafeel'] >= 2 && $row['vehnafeel'] < 3) { echo '<td class="okfeel">Ok</td>'; }
                if($row['vehnafeel'] >= 3) { echo '<td class="badfeel">Huono</td>'; };
            } ?>
        </tr>
        <tr>
            <td>Soijarouhe</td>
<?php
            while($row = mysqli_fetch_assoc($rOutputFeelSoija)) {
                if($row['soijafeel'] < 2) { echo '<td class="goodfeel">Hyvä</td>'; }
                if($row['soijafeel'] >= 2 && $row['soijafeel'] < 3) { echo '<td class="okfeel">Ok</td>'; }
                if($row['soijafeel'] >= 3) { echo '<td class="badfeel">Huono</td>'; };
            
            }
?>
        </tr>
        <tr>
            <td>Pavut</td>
<?php
            while($row = mysqli_fetch_assoc($rOutputFeelPavut)) {
                if($row['pavutfeel'] < 2) { echo '<td class="goodfeel">Hyvä</td>'; }
                if($row['pavutfeel'] >= 2 && $row['pavutfeel'] < 3) { echo '<td class="okfeel">Ok</td>'; }
                if($row['pavutfeel'] >= 3) { echo '<td class="badfeel">Huono</td>'; };
            }
?>
        </tr>
        <tr>
            <td>Ruis</td>
<?php
            while($row = mysqli_fetch_assoc($rOutputFeelRuis)) {
                if($row['ruisfeel'] < 2) { echo '<td class="goodfeel">Hyvä</td>'; }
                if($row['ruisfeel'] >= 2 && $row['ruisfeel'] < 3) { echo '<td class="okfeel">Ok</td>'; }
                if($row['ruisfeel'] >= 3) { echo '<td class="badfeel">Huono</td>'; };
            }
?>
        </tr>
        <tr>
            <td>Chili/tuliset</td>
<?php
            while($row = mysqli_fetch_assoc($rOutputFeelChili)) {
                if($row['chilifeel'] < 2) { echo '<td class="goodfeel">Hyvä</td>'; }
                if($row['chilifeel'] >= 2 && $row['chilifeel'] < 3) { echo '<td class="okfeel">Ok</td>'; }
                if($row['chilifeel'] >= 3) { echo '<td class="badfeel">Huono</td>'; };
            }
?>
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