<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba #1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="assets/js/jquery-1.9.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-confirm.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Prueba #1 | OTP</h2>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-12">
                <form method="POST" id="formRegistrar">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="number" name="cedula" id="cedula" class="form-control" onkeyup="buscar_cedula(this.value)">
                        <small class="text-danger d-none">Cédula ya registrada.</small>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lenguajes">Lenguajes</label>
                        <input type="text" name="lenguajes" id="lenguajes" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="type" value="guardar">
                        <a class="btn btn-primary btn-block" id="btnEnviar" onclick="guardar();"><i class="fas fa-paper-plane"></i>&nbsp;Guardar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="assets/js/jquery-confirm.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/myscript.js"></script>
</body>
</html>