<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reconocimiento de voz</title>
	<link rel="stylesheet" href="./bootstrap.css">
</head>

<body>
	<div class="container pt-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<h5 class="title">TEST RECORDING</h5>
					</div>
					<div class="card-body">
						<textarea name="texto" id="texto" rows="10" class="form-control"></textarea>
					</div>
					<div class="card-footer">
						<button type="button" id="btnStart" class="btn btn-primary btn-block">Grabar</button>
						<button type="button" id="btnStop" class="btn btn-danger btn-block">Detener</button>
						<button type="button" id="btnPlayText" class="btn btn-success btn-block">Reproducir</button>
					</div>
				</div>
			</div>
		</div>
    </div>

    <script src="./app.js"></script>
</body>

</html>
