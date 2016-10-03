<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name=”viewport” content=”width=device-width, initial-scale=1.0, maximum-scale=2″ />
<title>Documento sin título</title>
 <link rel="stylesheet" href="http://code.jquery.com/mobile
/1.0a2/jquery.mobile-1.0a2.min.css" /> 
<link rel="stylesheet" href="css/style.css" /> 
        <script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0a2
/jquery.mobile-1.0a2.min.js"></script> 

</head>

<body>

<div data-role="page" id="home">
	<div data-role="header">
		<h1>Market Place</h1>
	</div>
	<div data-role="content">	
		<p>Bienvenido a Market place, el lugar de compras N°1 </p>	
        <p>Da click en el siguiente botton para continuar:</p>
        <a href="#pantalla2" data-role="button"> Entrar </a>		
	</div>	
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
        <ul>
        <li><a href="https://www.facebook.com/danilo.rivera.3994" data-icon="home">FACEBOOK</a></li>
        <li><a href="acercade" data-icon="info">acerca de..</a></li>
        </ul>
        </div>
	</div>
    
                 
</div>

   <div data-role="page" id="acercade">
 
                 <div class="about-me">
  <h2>About Me</h2>
 
    <p>Hola, mi nombre es Danilo Rivera estudiante de la UDB, creador de este ejemplo del uso de jquerymobile.</p>
    <p>Cualquier duda u oferta de trabajo estare encantado de atenderlos. </p>
    <p>correo:<br>danilorb20099@hotmail.com</p>
</div>
  <a href="#home" data-rel="back" data-role="button" > Regresar </a>
                </div>
               
                        <div data-role="page" id="pantalla2">
                        <h1 align="center">Catalogo</h1>
                          <?php $json_productos = file_get_contents("http://pymesv.com/cliente01w/eStore/API/productos/ver/");
						 $array_productos = json_decode($json_productos);
						 foreach ($array_productos as $product) { ?> 
         				<ul data-role="listview" data-inset="true" >
                       
                        <li> <a href="detalle">
                        <img src="<?php echo $product->img ?>">
                        <h2><?php echo $product->nombre ?></h2>
                        <p>$ <?php echo $product->precio ?></p>
                        </a></li>
                        </ul>
                        
          <?php } ?>
         <a href="#home" data-rel="back" data-role="button" > Regresar </a>
                        </div>
                        
                      
                        
    
                    
</body>
</html>