  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- google chart scripts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!-- php-sql query to json -->
<?php 
// Query for json array
$qForjs = 'SELECT jannyholm.date, jannyholm.vehna, jannyholm.soija, jannyholm.pavut, jannyholm.ruis, jannyholm.chili, feel.feel FROM jannyholm LEFT JOIN feel ON jannyholm.date = DATE_ADD(feel.date, INTERVAL -1 DAY) JOIN feelref on feel.feel = feelref.feel';

$rOutputjs = mysqli_query($link, $qForjs);  // mysqli result for js array

$jsdata = array();
while($row = mysqli_fetch_array($rOutputjs, MYSQLI_ASSOC)) {
   $jsdata[] = $row;
}
// var_dump($jsdata);
echo "<script>var js_array = " . json_encode($jsdata) . ";</script>";  // php to json
?>