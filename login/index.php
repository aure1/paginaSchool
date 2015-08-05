<?php
session_start();
$_SESSION['key'] = md5(time());

if (!isset($_SESSION['contador'])) $_SESSION['contador'] = 0;

?>

<!DOCTYPE html>

<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="login/estilo.css">

  <title>Instituto Tecnológico Superior de Zapopan</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

</head>


<body>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-lock"></span> Inicio de sesión</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" target= "_top" action="./login/principal.php">
                                <input type="hidden" name="key" value="<?php echo $_SESSION['key'];?>">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">
                                        Usuario</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="Usuario" name="usu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">
                                            Contraseña</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" name="pass" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"/>
                                                        Recuerdame
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group last">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-success btn-sm" id="boton">
                                                    Sign in</button>
                                                    <button type="reset" class="btn btn-default btn-sm">
                                                        Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="panel-footer">
                                            Not Registred? <a href="#">Register here</a></div>
                                        </div>
                                    </div>	
                        </body>
                        </html>
