<!doctype html>
<html lang="en">
  <head>
    <body>
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
<title> GIMNASIO </title>
 <title>Encavezado</title>
    
    <h2> <fon size=25 color="#151E3D"><marquee>GIMNASIO "Z" CUENTA CON LOS MEJORES INSTRUCTORES</marquee></fon></h2>
    
 <ul class="navbar">

                <div class="menu"><a href="PESAS.php">PESAS</a></div> 
                <div class="menu"><a href="Cardio.php">CARDIO</a></div>
                <div class="menu"><a href="zumba.php">ZUMBA</a></div>
                <div class="menu"><a href="PROMOS.php">PROMOS</a></div>
                <!-- Añade la biblioteca de iconos Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>
   <h3>
<!-- Icono de Facebook -->
<a href="https://www.facebook.com/tuPagina" class="fa fa-facebook"></a>

<!-- Icono de WhatsApp -->
<a href="https://wa.me/1234567890" class="fa fa-whatsapp"></a>
    
    <!-- Icono de YouTube -->
<a href="https://www.youtube.com/tuCanal" class="fa fa-youtube"></a>

<!-- Icono de Instagram -->
<a href="https://www.instagram.com/tuPerfil" class="fa fa-instagram"></a>

<!-- Icono de Twitter -->
<a href="https://twitter.com/tuUsuario" class="fa fa-twitter"></a>
</h3>

    </ul>
        

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/
    css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/
    bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/estilos.css">

  
    <div class="container fondo">
    <h1 class="text-container">GIMNASIO</h1>
    <h1 class="text-container">www.oscar.</h1>
    
   

    <div class="table-responsive">
        <table id="datos_usuario"  class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Imagen</th>
                    <th>Fecha </th>
                    <th>Editor</th>
                    <th>Borrar</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

</body>

  
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj
+30JU5y5xlq6YGSHK7tPXikynS7ogEvDej/m4/" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"><acript>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/
    bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzscLA8N1
    +NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    
    -->
<script type="text/javascript">
     $(document).ready(function(){
         var dataTable = $('$datos_usuario').dataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
                url: "obtener_registros.php",
                type: "POST"
            },
            "columnsDefs":[
                {
                "targets":[0,3,4],
                "orderable":false,
                },
            ]

         })
     });
</script>

 <html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css"/>
<title> GymDaza </title>

     
<div class="cuerpo">
    <h1>Gimnasio "Z"</h1>            
    <div class="cuerpo">
        <div class="img">
            <img src="gimnsio.jpg" width="300" height="200" alt="gimnsio.jpg"/>
            <h3>PESAS</h3>
            <ul>
                <li>Instructores personalizado de pesas </li>
                <li>Asesoria nutricional</li>
                <li>Venta de suplementos </li>
            </ul>
            <p style="text-align:left;">
    La zumba Elimina la grasa corporal, Fortalece el sistema cardiovascular, Tonifica músculos
    Libera el estrés y adios el aburrimiento 
</p>
                Estamos con promocion 2 x 1  aproveche este mes de mayo.
            </p>
        </div>
        <div class="img">
            <img src="fisulturita.gif" width="300" height="150" alt="No se encuentra esta imagen"/>
        </div>
    </div>
</div>
<paling="center">
    

    <li>Te esperamos </li>
    

        

<div>

</div>


 
     <footer class="pie">
        <h3>Contactos</h3>
            <h3>&copy;Wasap  70348608
            </h3>
        </footer>


        
      

   




    
     


        
</html>
</head>
    
  <body>

        
</body>
<ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> AV DEL TUNEL KM 6<br> 
                        </li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>Telefoni:   70348608</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>Email : oscardaza@gmail.com</li>
                     </ul>
                     <!DOCTYPE html>
<html>
<head>
    <title>Tu Página</title>
</head>
<body>
    <!-- Tu contenido aquí -->

    <!-- Imagen al final -->
    <img src="images/map.png" alt="#">
    
    
    
</body>
</html>


                                        


    <li>Te esperamos </li>
    

        

<div>

</div>

<li>Direccion av del tunel km 6<lip>
 
     <footer class="pie">
        <h3>Contactos</h3>
            <h3>&copy;Wasap 70348608
            </h3>
        </footer>

    
      <title>Encavezado</title>
    <h2> <fon size=25 color="#FF0000"><marquee>GIMNASIO "Z" CUENTA CON LOS MEJORES INSTRUCTORES</marquee></fon></h2>

        <h2>
 <!-- Añade la biblioteca de iconos Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Icono de Facebook -->
<a href="https://www.facebook.com/tuPagina" class="fa fa-facebook"></a>

<!-- Icono de WhatsApp -->
<a href="https://wa.me/1234567890" class="fa fa-whatsapp"></a>
    
    <!-- Icono de YouTube -->
<a href="https://www.youtube.com/tuCanal" class="fa fa-youtube"></a>

<!-- Icono de Instagram -->
<a href="https://www.instagram.com/tuPerfil" class="fa fa-instagram"></a>

<!-- Icono de Twitter -->
<a href="https://twitter.com/tuUsuario" class="fa fa-twitter"></a>

</h2>
        


</body>
</html>

