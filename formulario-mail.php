<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario </title>

    <script>
        function validarFormulario()
        {

            var verificar=true;
           // let formatoEmail= filter_val();
           if(!document.mail_frm.mail_txt.value)
           {
            alert("Debe ingresar su gmail");
            document.mail_frm.mail_txt.focus();
            verificar=false; 
           }
        
            
        if(verificar==true)
        {
            document.mail_frm.submit(); 
        }
          
           
           
        }
        // window.onload= function()
        // {
        //     document.mail_frm.enviar_btn.onclick=validarFormulario;
        // }
        window.onload= function(){
           document.getElementById("enviar-post").validarFormulario;
           // document.getElementById("enviar-post").onclick=validarDatosPOST;
        }
     //   http://bextlan.com/alumnos/recursos/curso-PHP/phpmailer.zip
     //SMPT::DEBUG_SERVER
    </script>
</head>
<body>
    <hgroup><h1>hola</h1></hgroup>
    
    <form name="mail_frm" action="http://bextlan.com/alumnos/recursos/curso-PHP" method="post">
    <label>de:</label>
        <input type="email" name="name" required=""><br>
        <label>ingresa tu email</label>
        <input type="email" name="mail_txt" placeholder="Ej: fofi2911@gmail.com"><br>
        <label>asunto:</label>
        <input type="text" name="asunto" required="">
        <label>mensaje:</label>
      <textarea name="msg"></textarea>
        <input type="button" id="enviar-post" name="enviar_btn" value="enviar" onclick="validarFormulario();">

        <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            if(isset($_GET["respuesta"])){
                echo "<span>".$_GET["respuesta"]."</span>";
            }
        ?>
</form>

</body>
</html>