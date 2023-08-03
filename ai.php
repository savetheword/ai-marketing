<?php

require __DIR__.'/vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;
$open_ai_key = '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';

$open_ai= new OpenAi($open_ai_key);
$prompt = $_POST['prompt'];

$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => 'Writing 3 marketing caption for '. $prompt,
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
]);
$response= json_decode($complete, true);
$response=$response['choices'][0]['text'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output</title>
    <style>

        *{
           
            text-align: center;
            background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20190223/ourmid/pngtree-blue-tech-artificial-intelligence-poster-background-intelligencelight-effecttextureposterbackground-image_68116.jpg);
            
        
            

        }

        .output-text{
            color: blue;
            
            
            white-space: break-spaces;
        }
    </style>
</head>
<body>

<div class="output-text">
    <h3>Generated responses for you query <?php echo $prompt?></h3>
                            ↓
    
    <hr>
    
<p id="textToCopy"><?php echo $response?></p>
        
<button id="copyButton" value="copy" onclick="copyText()">Copy</button><br>

</div>
<a href="index.php">Go back</a>
    

<script src="copy.js"></script>
    
</body>
</html>

