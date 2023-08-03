<?php

require __DIR__.'/vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;
$open_ai_key = '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';

$open_ai= new OpenAi($open_ai_key);
$prompt = $_POST['prompt'];

$complete = $open_ai->image([
    "prompt" => "Need $prompt image for marketing need good sstyle and good quality attract cutomers need cartonistic or digital art or anime style you need choose good style without title",
    "n" => 1,
    "size" => "256x256",
    "response_format" => "url",
]);


$response= json_decode($complete, true);
$response=$response['data'][0]['url'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            *{
            text-align: center;
            color: blue;
            background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20190223/ourmid/pngtree-blue-tech-artificial-intelligence-poster-background-intelligencelight-effecttextureposterbackground-image_68116.jpg);
            

        }
    </style>
</head>
<body>
    <div>
    <h3>Generated responses for you query <?php echo $prompt?></h3>
                           
    <img src="<?php echo $response?>">

    
    </div>
    <a href="ai-image.php">Go back</a>
    
</body>
</html>