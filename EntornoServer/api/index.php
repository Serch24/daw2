
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api</title>
</head>
<body style='background-color:#000;color:white'>
<?php
    ERROR_REPORTING(E_ALL);
    /* $rand = mt_rand(1,255);
    $res = json_decode(file_get_contents('https://pokeapi.co/api/v2/pokemon/'.$rand),true); */
    //echo "<img src={$res['sprites']['other']['dream_world']['front_default']} alt='aa'";
    
/*     $res = json_decode(file_get_contents('https://api.brawlstars.com/v1/players/%2398Q9YJ8C2'.$rand),true);        
 */
    $brawl= 'https://api.brawlstars.com/v1/players/%2398Q9YJ8C2'; 
    $tokencito = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6Ijk1ODJlZmUwLWE4ZmUtNDBjNC05N2EwLTRkNmEzOGFkY2FhNSIsImlhdCI6MTYwNzYxOTc1NSwic3ViIjoiZGV2ZWxvcGVyL2YzNTg4NmIxLWI5ZmMtY2Y2Yy05YzU0LTQ2NTQzMTMxZjQ2ZSIsInNjb3BlcyI6WyJicmF3bHN0YXJzIl0sImxpbWl0cyI6W3sidGllciI6ImRldmVsb3Blci9zaWx2ZXIiLCJ0eXBlIjoidGhyb3R0bGluZyJ9LHsiY2lkcnMiOlsiMTg4LjI2LjIxMC4yMjciXSwidHlwZSI6ImNsaWVudCJ9XX0.PZdxLipJBKG9GqdwMCfx695HitEi-hj801JuMe-K8MceX_oevS15eLUmo99_gqIwaQnl_AsP1cFlG0xytgQ6cw";
    $header = ["Accept: application/json","Authorization: Bearer {$tokencito}"];
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$brawl);
    /* curl_setopt($curl,CURLOPT_CUSTOMREQUEST,"GET"); */
    curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
    $data = json_decode(curl_exec($curl),true);
    curl_close($curl);

    /* echo explode($data,"}"); */
    $color = substr($data['nameColor'],2);
    echo "<h1 style='color:#{$color}'>Hola</h1>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
?>
</body>
</html>