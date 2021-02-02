<?php
$tmp = range("a", "z");
$contra = hash("sha256", "sergio", true);
$contra2 = strlen(hash("sha256", "sergio"));
echo "<p>" . hash("sha256", "sergio", true) . "</p>";
echo hash("sha256", "sergio");
/*echo $contra === $contra2 ? "yeah" : "nope";*/
echo "leng: " . $contra2;
?>
