<?php
    system("cls");
    echo("Enter an integer positive number\r\n");
    $strLine = chop(fgets(STDIN));
    $ulNum = intval($strLine);
    if($ulNum % 2 ==0)
        echo("The number is even\r\n");
    else
        echo("The number is odd\r\n");
    fgetc(STDIN);   
?>