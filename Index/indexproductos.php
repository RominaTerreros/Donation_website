<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="shortcut icon" href="../Imagenes/NankuLogoIcon.png">
	<link rel="stylesheet" href="../Styles/normalize.css">
	<link rel="stylesheet" href="../Styles/Style.css">
	<link rel="stylesheet" href="../Styles/hfStyle.css">
    <!--Icons-->
    <script src="https://kit.fontawesome.com/414c30f412.js" crossorigin="anonymous"></script>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Java Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
</head>

<body>
<header class="header">
        <div class="logo">
            <img src="../Imagenes/LogoNankuFinal.png" alt="Logo Nanku">
        </div>
        <nav class="nav">
            <ul class="navbar-links">
                <li>
                    <a href="../index.php">Inicio</a>
                </li>
            
                <li>
                    <a href="indexproductos.php">Productos</a>
                </li>

                <li>
                    <a href="campanasIndex.php">Campañas</a>
                </li>

                <li>
                    <a href="#">Donaciones</a>
                    <ul>
                        <li><a href="indexdonacion1.php">Donacion de Ropa</a></li>
                        <li><a href="indexdonacion2.php">Donacion de Muebles</a></li>
                        <li><a href="indexdonacion3.php">Donacion de Medicamentos</a></li>
                        <li><a href="../donacionM.php">Donacion Monetaria</a></li>
                    </ul>
                </li>

                <li>
                    <a href="indexPreguntasFrecuentes.php">Preguntas frecuentes</a>
                </li>

                <li>
                    <a href="indexGaleria.php">Galería</a>
                </li>
            </ul>
        </nav>
        <button class="btn"><a href="../login.php"><span><i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión</span></a> </button>
        <button class="btn"><a href="../sign_up.php"><span><i class="fa-solid fa-user-plus"></i></i> Registrarse</span></a> </button>
</header>

	<div class="title">
		<h1>Solidary Box</h1>	
	</div>
    
	<div class="row justify-content-center">
        <div class="col-6 ">
            <figure class="">
				<img src="../Imagenes/Nan.gif" class="img-responsive align-items-right figg">
			</figure>
        </div>
        <div class="col-3">
            <h6 class="textini">
			¡Únete a nuestra misión de ayudar a aquellos que más lo necesitan! Con nuestros paquetes de ayuda, puedes marcar la diferencia 
			en la vida de las personas que se encuentran en situaciones de necesidad. Cada paquete que compres contiene elementos esenciales 
			como alimentos, ropa o útiles escolares, los cuales, al finalizar cada mes, serán entregados directamente a organizaciones 
			benéficas y personas necesitadas. Tu contribución ayudará a aliviar la carga de aquellos que luchan por satisfacer sus 
			necesidades básicas. No importa cuánto decidas donar, cada aporte suma y puede marcar la diferencia en la vida de alguien. 
			¡Compra un paquete de ayuda hoy y ayúdanos a hacer del mundo un lugar mejor para todos!	
            </h6>
        </div>
    </div>

	<!--   Tarjetas-->
	<div class="container-card">	
		<div class="card">
			<figure>
				<img src="../Imagenes/viveres.jpeg">
			</figure>
			<div class="contenido-card">
				<h3>Nanku-Box Alimenticio</h3>
				<p>El Box de Alimentos que ofrece Nanku contiene los siguientes elementos:</p>
				<p>5 kg. de azúcar, 5 kg. de arroz, 10 latas de conservas de atún, 5 paquetes de fideos tallarín, 2 paquetes de fideos 
					canelones, 3 paquetes de fideos tornillo, 1 kg. de avena, 1 kg. de quinua,1 kg. de maca, 2 paquetes de media docena 
					de leche, 2 botellas de aceite, 3 kg. de lentejas, 3 kg. de frejoles canario, 3 kg. de alverja, 2 latas de duraznos, 
					1 kg. de mermelada.</p>
				<h5>S/129.90</h5>
			</div>
		</div>

		<div class="card">
			<figure>
				<img src="../Imagenes/Ropa y calzado.jpeg">
			</figure>
			<div class="contenido-card">
				<h3>Nanku-Box Ropa y Calzado</h3>
				<p>El Box de Ropa y Calzado que ofrece Nanku contiene los siguientes elementos:</p>
				<p>2 polos para adulto (tallas M y L), 3 polos para niño (tallas 14, 16 y S), 2 casacas de invierno para adulto (tallas L), 
					3 casacas de invierno para niño (talla S), 2 pantalones para adulto (tallas 32), 3 pantalones para niño (talla 24 y 26), 
					2 pares de zapatos para adulto (tallas 38 y 42), 3 pares de zapatos para niño (talla 34 y 36), 5 frazadas polares.</p>
				<h5>S/109.90</h5>
			</div>
		</div>

		<div class="card">
			<figure>
				<img src="../Imagenes/Utiles.jpeg">
			</figure>
			<div class="contenido-card">
				<h3>Nanku-Box Útiles Escolares</h3>
				<p>El Box de Útiles Escolares que ofrece Nanku contiene los siguientes elementos:</p>
				<p>15 cuadernos, 3 cartucheras, 3 cajas de colores, 3 cajas de plumones, 3 juegos de escuadras, 1 paquete de una docena de 
					lápices, 1 paquete de media docena de borradores, 1 paquete de media docena de tajadores, 3 botellas de goma, 
					3 paquetes de lapiceros de colores (rojo, azul, negro), 1 paquete de media docena de correctores.</p>
				<h5>S/99.90</h5>
			</div>
		</div>
	</div>
	<!--Fin   Tarjetas-->

	<div class="btn-comprar">
		<a href="../login.php">Comprar</a>
	</div>

	<footer class="footer">
        <!--<section class="content contact">-->
        <h2 class="titleFotter">Contáctanos</h2>

        <div class="box-container3">

            <div class="box3">
                <a href="https://web.whatsapp.com/" target="_blank"><span><i class="fa-brands fa-whatsapp"></i>
                        WhatsApp</span></a>
                <p>+51 999 999 999</p>
            </div>

            <div class="box3">
                <a href="https://www.facebook.com/" target="_blank"><span><i class="fa-brands fa-facebook"></i> Facebook</span></a>
                <p>Fundación NANKU</p>
            </div>

            <div class="box3">
                <a href="https://www.instagram.com/" target="_blank"><span><i class="fa-brands fa-instagram"></i> Instagram</span></a>
                <p>@NankuFundacion</p>
            </div>

            <div class="box3">
                <a href="https://www.youtube.com/" target="_blank"><span><i class="fa-brands fa-youtube"></i> Youtube</span></a>
                <p>@NankuFundacion</p>
            </div>
        </div>

        <div class="derechos">
            <small>&copy; 2023 <b>Fundación NANKU</b></small>
        </div>
        <!-- </section>-->
    </footer>
</body>
</html>