<?php 

$url = 'http://api.openweathermap.org/data/2.5/weather?id=587445&APPID=85dedf6e7b6e702866bcb3cc42992cdd&units=metric';

$response = file_get_contents($url);
$filename = './cache.json';
$cacheTime = 30;

if (file_exists($filename) && (time() - filemtime($filename) < $cacheTime)){
    $content = file_get_contents($filename);
    
    $json = json_decode($content);
    
} else {
    $content = file_get_contents($url);
    $file = fopen($filename, 'w');
    fwrite($file, $content);
    fclose($file);

    $json = json_decode($content);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuressaare ilmateade</title>
</head>
<body>
<div class="row justify-content-center">
    <div class="col col-8">
        <h1><?php echo $json->name;?> ilmateade just praegu!</h1>
        <ul>
            <i> Oo tere päevast ilmajaam,</i><br>
            <i>mis ütleb teie ilmakaart?</i><br>
            <i>Või hoopis ilma ilmata,</i><br>
            <i>meil tuleb läbi ajadada,</i><br>
            <i>jibidijee - ilmajaam.</h3></i><br>
        </ul>
        
        <p>Mõtle, kui tore oleks olla suvilas ja...:<br>
        <ul>
            <li>Temperatuur: <?php echo $json->main->temp;?> kraadi</li>
            <li>Tundub nagu oleks: <?php echo $json->main->feels_like;?> kraadi</li>
            <li>Tuult puhub: <?php echo $json->wind->speed;?> m/s</li>
            <li>Ja sademeid/pilvi vaata pildi pealt!</li>
        </ul>
        <img src="http://openweathermap.org/img/wn/<?php echo $json->weather[0]->icon;?>@2x.png">
    </div>
</div>

</body>
</html>

<?php 

$url = 'http://api.openweathermap.org/data/2.5/weather?id=590939&APPID=85dedf6e7b6e702866bcb3cc42992cdd&units=metric';

$response = file_get_contents($url);
$filename = './cache.json';
$cacheTime = 30;

if (file_exists($filename) && (time() - filemtime($filename) < $cacheTime)){
    $content = file_get_contents($filename);
    
    $json = json_decode($content);
    
} else {
    $content = file_get_contents($url);
    $file = fopen($filename, 'w');
    fwrite($file, $content);
    fclose($file);

    $json = json_decode($content);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuressaare ilmateade</title>
</head>
<body>
<div class="row justify-content-center">
    <div class="col col-8">
        <h1><?php echo $json->name;?> ilmateade just praegu!</h1>
        
        <p>Kui aknast välja ei viitsi vaadata ja õue ei saa minna, siis:<br>
        <ul>
            <li>Temperatuur: <?php echo $json->main->temp;?> kraadi</li>
            <li>Tundub nagu oleks: <?php echo $json->main->feels_like;?> kraadi</li>
            <li>Tuult puhub: <?php echo $json->wind->speed;?> m/s</li>
            <li>Ja sademeid/pilvi vaata pildi pealt!</li>
        </ul>
        <img src="http://openweathermap.org/img/wn/<?php echo $json->weather[0]->icon;?>@2x.png">
    </div>
</div>

</body>
</html>
