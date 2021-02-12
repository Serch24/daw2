<?php
if (isset($_GET["valor"])) {
        if (strcmp($_GET["valor"], "sergio") === 0) {
                echo "sergio";
        } else {
                echo "Nope2";
        }
} else {
        echo "nope";
}
?>
