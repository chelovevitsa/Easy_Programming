<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    # wykorzystujac SO -> C/C++
    // $file = fopen("jedyn.txt", "r");
    // while( !feof($file)) {
    //     echo(fgets($file) . "<br />");
    // }
    // fclose($file);

    // $fileContent = file_get_contents("jedyn.txt");
    // echo(str_replace("\n", "<br>", $fileContent));

    $json = file_get_contents("data.json");
    $jsonData = json_decode($json, true);
    print_r($jsonData);
    #2
    foreach($jsonData["zdajacy"] as $item)
    {
        echo("<li>" . $item . "<li>");
    }
    ?>
</body>
</html>