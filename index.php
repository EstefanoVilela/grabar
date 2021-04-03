<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./bootstrap.css">
</head>

<body>
    <div class="container pt-5">
        <button type="button" id="btnStart" class="btn btn-primary">GRABAR</button>
        <button type="button" id="btnStop" class="btn btn-danger">DETENER</button>
    </div>

    <script>
        var btnStart = document.getElementById("btnStart");
        var rec = new webkitSpeechRecognition();

        if("webkitSpeechRecognition" in window){
            console.log("Todo bien!");

            rec.lang = "es-PE";
            rec.continuous = true;
            rec.interim = true;

            rec.addEventListener("result", resultadoGrabacion);
            rec.addEventListener("error", errorGrabacion);
        }else{
            console.error("No se puede usar la API");
        }

        function resultadoGrabacion(event){
            console.log('\n\n==========\n\nonresult\n----------\n');

            console.log('Transcript' + event.results[event.results.length-1][0].transcript);
            console.log('Confidence: ' + event.results[event.results.length-1][0].confidence);
            console.log('results' + event.results);

            console.log('Tú has dicho: '+event.results[event.results.length-1][0].transcript);
        }

        function errorGrabacion(event){
            console.error("errorGrabacion");
            console.error(event.error);
        }

        btnStart.addEventListener('click', () => {
            console.log("GRABAR!");
            rec.start();
        });

        btnStop.addEventListener('click', () => {
            console.log("DETENER!");
            rec.stop();
        });
    </script>
</body>

</html>
