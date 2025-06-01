<?php include("component/header.component.php"); ?>

<h2> Popular Cat Breeds</h2>

<?php
$breeds = ["Siamese", "Persian", "Maine Coon", "Ragdoll", "Bengal"];

echo "<ul>";
for ($i = 0; $i < count($breeds); $i++) {
    echo "<li>" . $breeds[$i] . "</li>";
}
echo "</ul>";
?>

<?php include("component/footer.component.php"); ?>