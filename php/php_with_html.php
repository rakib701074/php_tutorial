<?php
$h1_color="red";


$h2_color ="green";


echo "<h1 style='color:green'>php with html</h1>";

$t = "shaikh";
echo "<h1 style='color:red';> my name is ".$t."</h1>";

?>

<h1>
    My Real Name Is <?php echo $t; ?>
</h1>

<h2 style="color: <?php echo $h1_color; ?>">my name is <?php echo $t; ?> </h2>

<h2 style="color: <?php echo $h2_color  ?> "> my name is <?php echo $t; ?></h2>