<?php
require_once "../conexion.php";

if(isset($_POST['btnGuardar'])){
$des=$_POST['comentario'];
$categoria=$_POST['cat']; 

$sql="INSERT INTO pregunta (descripcion,categoria) values('$des', '$categoria')";
$query= mysqli_query($conn,$sql);
if($query){

   // Header("Location: index.php");
    
}else {
    echo incorrecto;
}
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Preguntas Frecuentes</title>
	<link rel="shortcut icon" href="../Imagenes/NankuLogoIcon.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="..\Styles\stylePreguntas.css">
	<link rel="stylesheet" href="..\Styles/hfStyle.css">
    <!--Icons-->
    <script src="https://kit.fontawesome.com/414c30f412.js" crossorigin="anonymous"></script>
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
	<main>
		<h1 class="titulo">Preguntas Frecuentes</h1>
		<div class="categorias" id="categorias">

			<div class="categoria activa" data-categoria="producto">
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
					preserveAspectRatio="xMidYMid meet">

					<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000"
						stroke="none">
						<path d="M1215 4785 l-25 -24 0 -459 0 -459 26 -24 c23 -21 36 -24 125 -27
               l99 -4 0 -844 0 -844 -72 0 c-171 0 -381 -52 -526 -131 -41 -21 -75 -39 -78
               -39 -2 0 -4 103 -4 229 l0 229 -31 26 -31 27 -325 -3 -325 -3 -24 -28 -24 -28
               0 -1003 0 -1003 25 -27 24 -26 331 0 331 0 24 25 25 24 0 229 0 230 108 -54
               c59 -30 153 -66 207 -81 l100 -28 839 -3 c737 -2 849 -1 924 13 48 9 388 97
               757 196 368 99 789 212 935 251 282 75 340 99 397 161 117 131 120 328 5 458
               -32 37 -125 91 -174 103 l-28 6 0 970 0 970 90 0 c111 0 145 14 160 68 8 25
               10 177 8 470 l-3 434 -28 24 -28 24 -1895 0 -1895 0 -24 -25z m3703 -482 l-3
               -338 -1777 -3 -1778 -2 0 340 0 340 1780 0 1780 0 -2 -337z m-258 -1492 l0
               -979 -22 -6 c-13 -3 -232 -62 -488 -131 l-465 -125 -15 22 c-92 135 -114 147
               -451 238 -151 40 -431 116 -624 168 l-350 95 -317 5 -318 4 0 844 0 844 1525
               0 1525 0 0 -979z m-4070 -1431 l0 -890 -210 0 -210 0 0 890 0 890 210 0 210 0
               0 -890z m2234 382 c329 -90 611 -169 627 -177 34 -18 68 -64 80 -110 26 -95
               -60 -205 -161 -205 -17 0 -199 45 -404 100 -204 55 -382 100 -394 100 -11 0
               -33 -11 -48 -24 -35 -29 -39 -86 -8 -116 13 -13 137 -52 394 -122 334 -90 384
               -102 460 -102 73 -1 93 3 141 27 90 44 167 140 184 230 7 33 11 37 59 51 28 8
               265 72 526 141 510 136 540 141 598 98 15 -11 37 -37 50 -59 44 -76 12 -188
               -66 -228 -15 -7 -207 -62 -427 -121 -220 -59 -641 -171 -937 -250 -295 -79
               -565 -149 -600 -155 -43 -7 -323 -10 -888 -8 l-825 3 -75 23 c-92 28 -238 99
               -302 147 l-48 35 0 339 0 339 68 45 c84 56 149 88 232 116 139 47 185 50 690
               47 l475 -2 599 -162z" />
						<path d="M2655 3595 c-32 -31 -32 -75 -1 -112 l24 -28 429 -3 c235 -2 443 0
               461 3 69 13 98 97 49 143 -23 22 -25 22 -481 22 l-457 0 -24 -25z" />
					</g>
				</svg>
				<p>Productos</p>
			</div>
			<div class="categoria" data-categoria="campaña">
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
					preserveAspectRatio="xMidYMid meet">

					<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000"
						stroke="none">
						<path d="M1033 5002 l-153 -107 0 -762 0 -762 -212 -3 c-206 -3 -215 -4 -270
-30 -67 -31 -135 -91 -177 -156 -63 -99 -61 -48 -61 -1349 l0 -1183 -81 0 -81
0 4 -167 c3 -165 4 -169 35 -235 56 -119 165 -204 292 -228 74 -14 4388 -14
4462 0 115 22 230 104 280 201 38 76 49 136 49 287 l0 142 -80 0 -80 0 0 1183
c0 1301 2 1250 -61 1349 -42 65 -110 125 -177 156 -55 26 -64 27 -269 30
l-213 3 0 762 0 762 -155 108 -154 108 -68 -49 c-37 -26 -89 -62 -114 -80
l-46 -31 -114 79 c-108 76 -114 79 -136 65 -12 -9 -64 -44 -114 -80 l-92 -64
-46 31 c-25 18 -77 54 -114 80 l-68 49 -115 -81 -115 -80 -114 81 -114 80
-115 -81 -115 -80 -103 73 c-57 40 -108 76 -114 80 -6 4 -60 -28 -120 -70 -60
-42 -113 -76 -119 -76 -5 0 -57 33 -115 73 -57 40 -109 73 -115 73 -5 0 -59
-34 -119 -76 l-108 -76 -47 31 c-25 18 -76 54 -114 80 -37 26 -68 48 -70 48
-1 -1 -71 -49 -154 -108z m278 -173 c59 -42 106 -68 115 -65 8 3 59 37 114 76
54 38 102 70 105 70 4 0 55 -34 115 -75 60 -41 112 -75 116 -75 4 0 52 32 108
71 55 39 106 74 113 76 6 3 57 -27 112 -66 55 -39 107 -74 115 -77 9 -3 56 23
115 65 55 39 106 74 114 76 7 3 62 -29 121 -70 60 -42 115 -74 122 -71 8 3 59
37 115 76 56 39 107 69 113 67 7 -3 58 -37 115 -77 56 -40 107 -70 115 -67 7
3 58 37 113 76 56 39 104 71 108 71 4 0 52 -32 108 -71 55 -39 106 -73 113
-76 8 -3 59 27 115 67 57 40 108 74 115 77 6 2 43 -18 80 -44 l69 -49 3 -1922
2 -1922 -1520 0 -1520 0 0 1920 0 1919 72 51 c40 28 78 48 85 45 8 -2 59 -37
114 -76z m-431 -1779 l0 -160 -160 0 -160 0 0 -1040 0 -1040 2000 0 2000 0 0
1040 0 1040 -160 0 -160 0 0 160 0 160 188 0 c182 0 190 -1 239 -25 55 -28 99
-77 119 -134 10 -29 13 -282 14 -1218 l0 -1183 -960 0 -960 0 0 -45 c0 -55
-15 -90 -47 -104 -33 -15 -513 -15 -546 0 -32 14 -47 49 -47 104 l0 45 -960 0
-960 0 0 1183 c1 961 3 1189 14 1220 21 58 61 103 118 131 50 25 57 26 240 26
l188 0 0 -160z m0 -1200 l0 -880 -80 0 -80 0 0 880 0 880 80 0 80 0 0 -880z
m3520 0 l0 -880 -80 0 -80 0 0 880 0 880 80 0 80 0 0 -880z m-2295 -1381 c11
-33 65 -88 109 -112 40 -21 51 -22 346 -22 295 0 306 1 346 22 44 24 98 79
109 112 l6 21 970 0 969 0 0 -62 c-1 -103 -48 -185 -135 -231 l-40 -22 -2225
0 -2225 0 -40 22 c-87 46 -134 128 -135 231 l0 62 969 0 970 0 6 -21z" />
						<path d="M1280 4010 l0 -480 80 0 80 0 0 480 0 480 -80 0 -80 0 0 -480z" />
						<path d="M1600 4170 l0 -320 80 0 80 0 0 320 0 320 -80 0 -80 0 0 -320z" />
						<path d="M1920 4330 l0 -160 80 0 80 0 0 160 0 160 -80 0 -80 0 0 -160z" />
						<path d="M2624 3962 c-34 -125 -60 -228 -59 -230 5 -5 147 -44 150 -40 5 5
116 420 118 442 2 15 -11 22 -63 37 -36 10 -69 18 -75 19 -5 0 -37 -102 -71
-228z" />
						<path d="M3147 3652 l-167 -167 58 -58 57 -57 168 168 167 167 -58 58 -57 57
-168 -168z" />
						<path d="M2110 3322 l-155 -407 -280 -283 -280 -282 282 -282 283 -283 58 58
57 57 155 -156 c92 -93 171 -164 195 -175 53 -24 147 -25 200 0 121 55 175
205 116 321 -14 26 -86 109 -174 198 l-151 152 48 49 c47 48 57 52 460 207
226 87 413 159 416 161 4 4 -1061 1073 -1070 1073 -3 0 -75 -183 -160 -408z
m942 -603 c-4 -3 -146 -59 -317 -124 l-310 -118 -63 -61 -62 -61 -165 165
c-91 91 -165 169 -165 173 0 5 27 36 59 70 l60 61 117 305 c64 168 119 310
122 315 2 4 168 -155 368 -355 200 -200 360 -366 356 -370z m-1032 -314 l165
-165 -113 -112 -112 -113 -167 167 -168 168 110 110 c60 60 112 110 115 110 3
0 79 -74 170 -165z m435 -435 c135 -135 149 -153 149 -184 0 -62 -53 -96 -111
-70 -15 6 -91 75 -168 153 l-140 141 55 55 c30 30 57 55 60 55 3 0 72 -67 155
-150z" />
						<path d="M3522 3168 l-223 -61 6 -26 c3 -14 12 -49 20 -78 l15 -52 33 10 c17
5 120 32 227 61 107 28 196 52 198 53 7 5 -35 149 -43 151 -6 1 -110 -25 -233
-58z" />
						<path d="M1340 2065 l-55 -55 168 -168 167 -167 55 55 55 55 -168 168 -167
167 -55 -55z" />
						<path d="M3680 1610 l0 -480 80 0 80 0 0 480 0 480 -80 0 -80 0 0 -480z" />
						<path d="M3360 1450 l0 -320 80 0 80 0 0 320 0 320 -80 0 -80 0 0 -320z" />
						<path d="M3040 1290 l0 -160 80 0 80 0 0 160 0 160 -80 0 -80 0 0 -160z" />
					</g>
				</svg>
				<p>Campañas</p>
			</div>
			<div class="categoria" data-categoria="donacion">
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
					preserveAspectRatio="xMidYMid meet">

					<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000"
						stroke="none">
						<path d="M755 5107 c-61 -24 -104 -58 -133 -105 -16 -26 -141 -258 -278 -517
-249 -470 -249 -470 -252 -540 -5 -84 19 -146 73 -194 18 -15 119 -74 223
-130 215 -115 250 -125 345 -97 55 16 120 65 144 110 10 18 13 17 54 -12 60
-41 128 -114 179 -192 126 -191 218 -272 427 -378 76 -39 299 -171 496 -294
l359 -223 22 -70 c13 -38 35 -94 50 -122 l26 -53 -527 0 c-505 0 -529 -1 -560
-20 -21 -13 -35 -31 -42 -57 -15 -54 -15 -1868 0 -1948 19 -106 76 -181 174
-233 l50 -27 1610 0 1610 0 51 27 c67 35 138 115 161 181 17 49 18 110 18
1017 0 531 -3 978 -8 993 -4 15 -22 36 -40 47 -31 19 -53 20 -614 20 l-582 0
25 44 c95 171 115 411 50 603 -30 87 -46 118 -111 218 -30 44 -140 233 -245
420 -106 187 -210 365 -230 396 -58 84 -177 190 -267 236 -158 82 -278 110
-629 148 -421 45 -530 71 -734 175 -242 123 -240 122 -240 156 0 17 -7 54 -16
84 -26 86 -72 124 -292 241 -174 92 -198 102 -255 105 -35 2 -75 -2 -92 -9z
m263 -279 c114 -60 177 -99 184 -113 9 -19 -26 -91 -242 -496 -138 -261 -260
-483 -271 -494 -24 -25 -30 -23 -238 89 -147 80 -161 90 -161 115 0 26 474
934 508 974 8 9 22 17 30 17 9 0 94 -41 190 -92z m485 -447 c281 -146 371
-170 831 -221 270 -31 382 -49 466 -77 130 -43 246 -126 312 -221 33 -48 248
-425 245 -428 -1 -2 -31 4 -67 13 -47 11 -98 14 -182 10 l-118 -4 -27 46
c-148 254 -327 353 -586 322 -130 -15 -193 -37 -243 -86 -70 -67 -77 -150 -21
-233 14 -20 114 -129 222 -242 109 -113 210 -227 226 -255 60 -103 86 -246 57
-311 -11 -22 -17 -25 -46 -20 -20 3 -184 99 -400 234 -202 126 -431 261 -510
301 -205 105 -271 161 -391 339 -73 106 -150 187 -234 244 l-58 39 40 72 c21
40 96 180 166 312 147 277 135 255 141 255 2 0 82 -40 177 -89z m1102 -781
c48 -23 136 -115 172 -179 l23 -39 -48 -28 c-26 -15 -67 -43 -91 -62 l-44 -36
-163 169 c-90 94 -164 173 -164 177 0 12 124 27 198 23 48 -2 88 -11 117 -25z
m670 -355 c104 -27 184 -72 261 -149 114 -114 168 -242 168 -401 0 -136 -38
-245 -123 -353 l-41 -52 -399 0 -399 0 -40 53 c-38 49 -77 117 -70 120 113 55
156 100 183 189 31 106 10 280 -49 396 l-25 49 22 20 c64 58 169 112 256 132
59 14 193 12 256 -4z m1555 -1350 l0 -195 -917 -1 c-684 0 -927 -3 -953 -12
-23 -8 -41 -24 -54 -48 -23 -42 -17 -79 19 -115 l24 -24 941 0 940 0 0 -615 0
-615 -29 -32 -29 -33 -1564 -2 c-1228 -2 -1568 0 -1587 10 -13 6 -34 25 -45
40 -21 28 -21 35 -21 635 l0 607 291 3 292 2 25 25 c29 30 36 58 25 102 -17
65 -29 68 -350 71 l-288 3 0 188 c0 103 3 191 7 194 3 4 741 7 1640 7 l1633 0
0 -195z" />
						<path d="M2509 1686 c-47 -15 -75 -72 -59 -120 34 -105 190 -80 190 30 0 72
-60 113 -131 90z" />
						<path d="M2187 1189 c-43 -25 -47 -53 -47 -348 l0 -281 29 -32 29 -33 996 0
996 0 27 28 28 27 3 282 c2 200 -1 290 -9 310 -25 62 39 58 -1044 58 -654 -1
-996 -4 -1008 -11z m1863 -344 l0 -155 -855 0 -855 0 0 155 0 155 855 0 855 0
0 -155z" />
					</g>
				</svg>
				<p>Donaciones</p>
			</div>
			<div class="categoria" data-categoria="añadir">
				<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt" height="50.000000pt"
					viewBox="0 0 50.000000 50.000000" preserveAspectRatio="xMidYMid meet">

					<g transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
						<path d="M56 444 c-24 -23 -24 -365 0 -388 23 -24 365 -24 388 0 24 23 24 365
			   0 388 -23 24 -365 24 -388 0z m379 -194 l0 -185 -185 0 -185 0 -3 175 c-1 96
			   0 180 3 187 3 11 44 13 187 11 l183 -3 0 -185z" />
						<path d="M240 315 l0 -55 -55 0 c-30 0 -55 -4 -55 -10 0 -5 25 -10 55 -10 l55
			   0 0 -55 c0 -30 5 -55 10 -55 6 0 10 25 10 55 l0 55 55 0 c30 0 55 5 55 10 0 6
			   -25 10 -55 10 l-55 0 0 55 c0 30 -4 55 -10 55 -5 0 -10 -25 -10 -55z" />
					</g>
				</svg>
				<p>Añadir</p>
			</div>
		</div>
		<div class="preguntas">

			<!-- Preguntas Producto -->
			<div class="contenedor-preguntas activo" data-categoria="producto">
				<div class="contenedor-pregunta">
					<p class="pregunta">Al realizar una compra, ¿Se puede agregar un dinero extra al monto que se deberia pagar?<img src="../imagen/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Sí, ello nos permitiría, destinar ese dinero extra para las personas necesitadas</p>
				</div>
			</div>

			<!-- Preguntas Campaña -->
			<div class="contenedor-preguntas" data-categoria="campaña">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Todos pueden participar de las campañas? <img src="../imagen/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Lo que se pide es que sean mayores de edad, que tengan ganas de ayudar y disponibilidad de tiempo</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Se puede participar en más de una campaña a la vez? <img src="../imagen/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Sí, siempre y cuando tengas la disponibilidad de tiempo, de lo contrario te solicitamos que solo te unas a una campaña</p>
				</div>
			</div>

			<!-- Preguntas Donacion -->
			<div class="contenedor-preguntas" data-categoria="donacion">
				<div class="contenedor-pregunta">
					<p class="pregunta">Si se dona por error un monto mayor a lo pensado, ¿Se puede solicitar la devolución?<img src="../imagen/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Sí, Contáctanos para hacer la devolución</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Cómo se puede verificar que las donaciones esten llegando a las personas que lo necesitan? <img src="../imagen/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">En galería podemos observar todo lo relacionado a las actividades que realizamos</p>
				</div>
				</div> 
				<!-- Añadir pregunta -->
				<div class="contenedor-preguntas" data-categoria="añadir">
					<div class="contenedor-pregunta">
						<form action="indexPreguntasFrecuentes.php" method="post" >
							<div id="campos" class="campos"> 
								<p class="pregunta">Ingrese su pregunta
								</p>
								<input type="text" name="comentario" class="caja" required>
			
							   <p class="pregunta">Ingrese la categoria </p>
							   <select name="cat" id="select" class="combo" required>
								   <option value="">Seleccione</option>			
								   <option value="Productos">Productos</option>
								   <option value="Campañas">Campañas</option>
								   <option value="Donaciones">Donaciones</option>				
							   </select>
							  <input type="submit" value="Enviar" class="boton" name="btnGuardar">
							   
							</div>

				
						</form>
					</div>
			</div>

		</div>
	</main>

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

	<script src="../js/categorias.js"></script>
	<script src="../js/preguntasFrecuentes.js"></script>
</body>

</html>