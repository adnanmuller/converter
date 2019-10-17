<?php
include_once('includes/functions.php');

$from_value='';
$from_unit='';
$to_unit='';
$to_value='';
if(isset($_POST['submit'])){
  $from_value=$_POST['from_value'];
  $from_unit=$_POST['from_unit'];
  $to_unit=$_POST['to_unit'];

$to_value=convert_volume($from_value, $from_unit, $to_unit);


}else{
  echo 'nothing submited yet!';
}

if(isset($_POST['delet'])){
  $_POST=[];
  print_r($_POST);
}

$volume_options = array(
'cubic inches','cubic feet', 'imperial gallons', 'Imperial quarts', 'Imperial pints',
'Imperial cups', 'Imperial ounces', 'Imperial tablespoons', 'Imperial teaspoons', 'US gallons',
'US quarts', 'US pints', 'US cups', 'US ounces', 'US tablespoons', 'US teaspoons', 'cubics meters',
'liters', 'milliliters'
 );

function optionize($string){
  return str_replace(' ','_',strtolower($string));
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Volume</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Volume</h1>

      <form action="" method="post">

        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value ?>" />&nbsp;
          <select name="from_unit">

            <?php foreach ($volume_options as $unit){
              $opt=optionize($unit);
              echo "<option value=\"{$opt}\"";
              if(isset($_POST['from_unit'])){
                if($_POST['from_unit']==$opt){
                echo " selected";}}
                echo  ">{$unit}</option>";
            } ?>

          </select>
        </div>

        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value ?>" />&nbsp;
          <select name="to_unit">

            <?php foreach ($volume_options as $unit){
              $opt=optionize($unit);
              echo "<option value=\"{$opt}\"";
              if(isset($_POST['to_unit'])){
                if($_POST['to_unit']==$opt){
                echo " selected";}}
                echo  ">{$unit}</option>";
            } ?>

          </select>

        </div>

        <input type="submit" name="submit" value="Submit" />
      </form>

      <br />
      <a href="index.php">Return to menu</a>
      <form class="" action="" method="post">
        <input type="submit" id="deletPost" value="Delet Post" name="delet">
      </form>

    </div>
  </body>
</html>
<?php
print_r($_POST)."<br>";

?>
