
<?php
$existingNames = array("Daniel", "Dennis", "Danny", "Jane");

if (isset($_POST['suggestion'])) {
    $name =strtolower( $_POST['suggestion']);

   if(!empty($name)){
    foreach ($existingNames as $existingName) {
        if (strpos(strtolower($existingName), $name) !== false) {
            echo $existingName;
            echo "<br>";
   }
        }
    }
}
?>