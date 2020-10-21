<?php

    if(isset($_GET["num"])){
        $nume = $_GET["num"];
        printf("Decimal: "."%'010e" . "<br>",$nume);

        printf("Octal: "."%'010o" . "<br>" ,$nume);

        printf("Hexa: "."%'010x" . "<br>" ,$nume);
    }