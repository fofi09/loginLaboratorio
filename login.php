<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
function validarDatosPOST(){
            var verificar=true;
            //! SE LEE: si NO HAY NADA dentro del valor de la caja de texto nombre 
            //que esta dentro del formulario valida_datos_get ENTONCES va a pasar lo q pongas dentro de las {}
            if(!document.valida_datos_post.nombre_txt.value)
            //si document. NAME del FORMULARIO(DEL FORM). AHI SI EL NAME DEL INPUT Q QUIERAS.EL VALUE 
        //OSEA REQUIERO EL VALOR DEL INPUT QUE TIENE EL NOMBRE
        // QUE ESTA DENTRO DEL FORMULARIO DE NAME VALIDA_DATOS_GET
        //YA Q PODES TENER MAS FORMULAROS
        {
           
        
             alert('No ha ingresado el Nombre');
    
        
           document.valida_datos_post.nombre_txt.focus();
           verificar=false;
        }
        else if(!document.valida_datos_post.password_txt.value)
        {
            alert("por favor ingrese la contraseña");
            document.valida_datos_post.password_txt.focus(); //si no se escribio nada
                                // entonces se pone en ese input asi el usuario escriba
       
       verificar=false;
         }
         else if(!document.valida_datos_post.passwordR_txt.value)
        {
            alert("por favor repita la contraseña");
            document.valida_datos_post.password_txt.focus(); //si no se escribio nada
                                // entonces se pone en ese input asi el usuario escriba
       
       verificar=false;
         }

        else if(!document.valida_datos_post.email.value)
        {
            alert("ingrese su email");
            document.valida_datos_post.email.focus();
            varificar=false;
        }

        if(verificar==true)
        {
            document.valida_datos_post.submit(); 
        }
        }

        window.onload= function(){
          // document.getElementById("enviar-get").onclick=validarDatosGET;
            document.getElementById("enviar-post").onclick=validarDatosPOST;
        }
        </script>


      
            <hgroup><h1>login</h1></hgroup>

    <form name="valida_datos_post" action="calculadora.php" method="post">
        <label>ingresa tu nombre</label>
        <input type="text" name="nombre_txt"><br>

        <label>ingresa tu contraseña</label>
        <input type="password" name="password_txt">
        <br><br>
        <label>repita contraseña</label>
        <input type="password" name="passwordR_txt">
        <br><br>
      <label>ingresa tu email</label>
        <input type="email" name="email">
        <br><br>
        <input type="hidden" name="enviar_hdn" value="post">
        <input type="button" id="enviar-post" name="enviar_btn" value="enviar" onclick="validarDatosPOST();">
        <?php 
          include("validarDatos.php");
        ?>

    </form>
    
</body>
</html>