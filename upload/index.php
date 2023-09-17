<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" content="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
       <input type="file" name="file"/>
       <input type="submit" name="acao" value="enviar"/>
    </form>
 
<?php 

 if(null !== '$_acao'){
   // meu formulario foi enviado//
   $arquivos = $_FILES['file'];

   $arquivosNovo = explode('.',$arquivos['name']);

   if($arquivosNovo[sizeof($arquivosNovo)-1] != 'jpg'){
       die('Você não pode fazer um upload desse tipo de arquivo');
     }else{
      echo'Imagem carregada...';
   }
}
?><br>

<img src="img/img.jpg" alt="imagem">

</body>
</html>