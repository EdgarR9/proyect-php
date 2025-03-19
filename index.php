
<?php 
#inicializar una nueva sesion de curl ch = curl handler
const API_CURL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_CURL);
#indicar que queremos recibir una nueva sesion de curl y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*
ejecutar la peticion 
y guardamos el resultado
*/ 
$result = curl_exec($ch);

//una laternativa seria utilizar file_get contents
//$result = file_get_content(API_UR); SI SOLO QUIERES HACER UN GET DE UNA API

$data = json_decode($result, true);


curl_close($ch);

#var_dump($data);
?>

<head>
    <meta charset="UTF-8">
    <title>La proxima pelicula de marvel</title>
    <meta name="description" content="Laproxima pelicula de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
    <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"];?>" style="border-radius: 16px">
    </section>

    <hgroup>
        <h3><?=$data["title"]; ?> se estrena en: <?= $data["days_until"]; ?> dias</h3>
        <p>fecha de estreno: <?=$data["release_date"]; ?></p>
        <p>La siguiente es: <?=$data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<!--
<section>
    <pre style="font-size: 8px; overflow: scroll; height: 250px;">
    
    </pre>
    
    
        
    </section>
-->




<style>
    :root{
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        place-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>
