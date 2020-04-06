<html> 
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script type="text/javascript">
            function validar(){
                if ( $("#usuario").val() == "" ){                    
                    //$("#myModal").modal("show");
                    alert("Debe escribir un nombre de usuario");
                    return false;
                }
                else {
                    if ( $("#password").val() == "" ){                    
                        //$("#myModal").modal("show");
                        alert("Debe escribir su contraseña");
                        return false;
                    }
                }
                return true;                
            }
        </script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <br><br><br><h3 class="text-center">Sistema de Horarios</h3>
                <div class="container loginBox">
                    <form onsubmit="return validar()">
                        <p><strong>User: </strong>
                        <input type="text" id="usuario" name="usuario"></p><br>
                        <p><strong>Password: </strong> 
                        <input type="password" id="password" name="password"></p><br>
                        <input type="submit" class="btn btn-primary btn-lg" value="Entrar"><br>
                    </form>
                </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body> 
</html>