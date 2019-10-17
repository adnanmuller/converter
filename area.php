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

$to_value=convert_area($from_value, $from_unit, $to_unit);


}else{
  echo 'nothing submited yet!';
}

if(isset($_POST['delet'])){
  $_POST=[];
  print_r($_POST);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Area</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Area</h1>

      <form action="" method="post">

        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value ?>" />&nbsp;
          <select name="from_unit">
            <option value="square_inches" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_inches"){echo " selected";}}  ?>>square inches</option>
            <option value="square_feet" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_feet"){echo " selected";}} ?>>square feet</option>
            <option value="square_yards"  <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_yards"){echo " selected";}}  ?>>square yards</option>
            <option value="square_miles" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_miles"){echo " selected";}}?>>square miles</option>
            <option value="square_millimeters" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_millimeters"){echo " selected";}} ?>>square millimeters</option>
            <option value="square_centimeters" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_centimeters"){echo " selected";}} ?>>square centimeters</option>
            <option value="square_meters" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_meters"){echo " selected";}}  ?>>square meters</option>
            <option value="square_kilometers" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="square_kilometers"){echo " selected";}}  ?>>square kilometers</option>
            <option value="acres" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="acres"){echo " selected";}}  ?>>acres</option>
            <option value="hectars" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="hectars"){echo " selected";}}  ?>>hectars</option>
          </select>
        </div>

        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value ?>" />&nbsp;
          <select name="to_unit">
            <option value="square_inches" <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_inches"){echo " selected";}}  ?>>square inches</option>
            <option value="square_feet" <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_feet"){echo " selected";}} ?>>square feet</option>
            <option value="square_yards"  <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_yards"){echo " selected";}}  ?>>square yards</option>
            <option value="square_miles" <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_miles"){echo " selected";}}?>>square miles</option>
            <option value="square_millimeters" <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_millimeters"){echo " selected";}} ?>>square millimeters</option>
            <option value="square_centimeters" <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_centimeters"){echo " selected";}} ?>>square centimeters</option>
            <option value="square_meters" <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_meters"){echo " selected";}}  ?>>square meters</option>
            <option value="square_kilometers" <?php if(isset($_POST['to_unit'])){if($_POST['to_unit']=="square_kilometers"){echo " selected";}}  ?>>square kilometers</option>
            <option value="acres" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="acres"){echo " selected";}}  ?>>acres</option>
            <option value="hectars" <?php if(isset($_POST['from_unit'])){if($_POST['from_unit']=="hectars"){echo " selected";}}  ?>>hectars</option>
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
