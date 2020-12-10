<?php 
ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api</title>
</head>
<body>
<?php
    ERROR_REPORTING(E_ALL);
    $rand = mt_rand(1,255);
    $res = json_decode(file_get_contents('https://pokeapi.co/api/v2/pokemon/'.$rand),true);
    echo "<img src={$res['sprites']['other']['dream_world']['front_default']} alt='aa'";
    /*print_r($res['sprites']['other']['dream_world']['front_default']);*/
    /*echo $res->data;->sprites->other->dream_world->front_default;*/
    $brawl= 'https://api.brawlstars.com/v1/players/%2398Q9YJ8C2'; 
    $tokencito = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImJkNzY5MGNhLTViYmYtNDEwOC04YzJkLTJkMjgzODM5MzM4YiIsImlhdCI6MTYwNzYwMzc0Niwic3ViIjoiZGV2ZWxvcGVyL2YzNTg4NmIxLWI5ZmMtY2Y2Yy05YzU0LTQ2NTQzMTMxZjQ2ZSIsInNjb3BlcyI6WyJicmF3bHN0YXJzIl0sImxpbWl0cyI6W3sidGllciI6ImRldmVsb3Blci9zaWx2ZXIiLCJ0eXBlIjoidGhyb3R0bGluZyJ9LHsiY2lkcnMiOlsiODAuMjkuMTgxLjEwMCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.UTO_uD794sUTlNDU2WM47mUfn0_rrAecQotx7Cbu1MfGajy8JVOoRkRNF-WmBPWLpY-wa8sqfjc-vAZWdlr8nQ";
    $curl = curl_init($brawl);
    curl_setopt($curl,CURLOPT_HTTPHEADER,['Authorization: Berer'])
    echo "<pre>";
    print_r($brawl);
    echo "</pre>";
?>
</body>
</html>
<?php ob_flush(); ?>
