










<?php
error_reporting(0);
ini_set("display_errors", 0 );

if ( $_POST['editacodigo'] == true) {
    // Create a function that receives a text parameter.
    function gravar_editacodigo($texto)
    {
        // File variable stores the name and extension of the file.
        $arquivo = "editacodigo.txt";

        // $fp variable stores the connection to the file and the type of action.
        $fp = fopen($arquivo, "w");

        // Write to the opened file.
        fwrite($fp, $texto);

        // Close the file.
        fclose($fp);
    }

    // Call the function with the posted data.
    gravar_editacodigo($_POST['editacodigo']);
  

}

?>



<?php

if ($_POST['openai'] == true) {
    // Create a function that receives a text parameter.
    function gravar_openai($texto)
    {
        // File variable stores the name and extension of the file.
        $arquivo = "openai.txt";

        // $fp variable stores the connection to the file and the type of action.
        $fp = fopen($arquivo, "w");

        // Write to the opened file.
        fwrite($fp, $texto);

        // Close the file.
        fclose($fp);
    }

    // Call the function with the posted data.
    gravar_openai($_POST['openai']);
   

}

?>




<?php

if ( $_POST['prompt'] == true) {
    // Create a function that receives a text parameter.
    function gravar_prompt($texto)
    {
        // File variable stores the name and extension of the file.
        $arquivo = "prompt.txt";

        // $fp variable stores the connection to the file and the type of action.
        $fp = fopen($arquivo, "w");

        // Write to the opened file.
        fwrite($fp, $texto);

        // Close the file.
        fclose($fp);
    }

    // Call the function with the posted data.
    gravar_prompt($_POST['prompt']);
       

}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .progress-container {
            width: 80%;
            max-width: 400px;
            background-color: #f0f0f0;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .progress-bar {
            width: 0%;
            height: 30px;
            background-color: #007bff;
            text-align: center;
            line-height: 30px;
            color: white;
            transition: width 0.3s ease-in-out;
        }

        .progress-label {
            font-size: 16px;
            font-weight: bold;
            padding: 5px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
        <div class="progress-label" id="progressLabel">Processando</div>
    </div>

    <script>
        // Simulate progress (for demonstration purposes)
        let progress = 0;
        const progressBar = document.getElementById('progressBar');
        const progressLabel = document.getElementById('progressLabel');

        function updateProgress() {
            if (progress < 100) {
                progress += 10;
                progressBar.style.width = progress + '%';
                progressLabel.innerText = `Processando ${progress}%`;
                setTimeout(updateProgress, 100); // Update every 100ms
            } else {
                progressLabel.innerText = 'Processo concluído!';
                // Redirect to "index.php" after 1 second (1000ms)
                setTimeout(() => {
                    window.location.href = 'index.php';
                }, 1000);
            }
        }

        // Start the progress update
        updateProgress();
    </script>
</body>
</html>
