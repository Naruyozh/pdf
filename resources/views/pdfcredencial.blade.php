

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            html {
                margin: 0;
                padding: 0;
                font-family: 'Montserrat', sans-serif;
            }
            body {
                margin: 20px 50px;
            }
            table {
                border-collapse: collapse;
            }
            .page-break {
                page-break-after: always !important;
            }

            /*
            header
             */

            .header-main {
                position:fixed;
                padding:20px 50px;
                top: 1%;
            }
            .title {
                font-size: 26px;
                font-weight: bolder;
            }
            .subtitle {
                font-size: 16px;
                font-weight: lighter;
                color: gray;
            }

            .content {
                margin-top: 200px;
                height: 8.77cm;
                position: relative;
            }

            .center {
                text-align: center;
            }
            /*
            ////////////////////////////////
             */

            .image-container {
                display: inline-block;
                width: 5.6cm;
                height: 8.77cm;
                position: relative;
            }

            .icon {
                width: 5.6cm;
                height: 8.77cm;
            }

            .content-front {
                position: relative;
            }

            .absolute {
                position: absolute;
            }
            
            .nombre {
                top: 0;
            }
            .uppercase {
                text-transform: uppercase;
            }

            .foto {
                width: 110px;
                height: 135px;
                margin-top: 5px;
                margin-left: 1px;
                background-color: aqua;
                position: absolute;
                top: 12%;
                left: 8%;
                background-repeat: none;
                background-size: 50% 50%;
            }
            
        </style>
    </head>
    <body>

        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- First-page -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="content">
            <div class="image-container">
                <!-- FRENTE -->
                <img class="icon" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\frente-dani.png';?>"/>
                <!-- ENDS FRENTE -->
                <!-- Foto persona -->
                <div class="foto" style="background-image: url(https://dummyimage.com/330X405/000/fff); background-size: cover;">
                </div>
                <!-- Nombre -->
                <div class="center uppercase" style="position:absolute; top: 13%; left:57%; width: 96px; font-weight: bolder; font-size: 15px;">
                    <p>María de Guadalupe Hernández Gutierrez</p>
                </div>
                <!-- Foto -->
                <img src="" style="position:absolute; top: 13%; left:56%; width: 96px; font-weight: bolder; font-size: 15px;" alt="Fotografía">
                <!-- Empledo -->
                <div class="" style="position:absolute; top: 23%; left:10%; width: 200px; font-size: 11px; margin-top:3px;">
                    <p>Empleado: <span style="font-weight: bolder;">913358</span></p>
                </div>
                <!-- Puesto -->
                <div class="center uppercase" style="position:absolute; top: 26%; left:31%; width: 96px; font-weight: bolder; font-size: 10px;">
                    <p>Personal Administrativo</p>
                </div>
            </div>

            <div class="image-container">
                <!-- VUELTA -->
                <img class="icon" style="margin-left:20px" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\vuelta.png';?>"/>
                <!-- Nombre -->
                <div class="center uppercase" style="position:absolute; top: 1%; left: 30%; width: 150px; font-weight: bolder; font-size: 10px;">
                    <p>Jefatura del estado mayor policial</p>
                </div>
                <!-- Información -->
                <ul style="position:absolute; top: 8%; left: 30%; width: 160px; font-size: 10px; list-style: none; padding: 5px 0 0 0; margin: 0;">
                    <li>Folio: <span style="font-weight: bolder;">2014585968</span></li>
                    <li>RFC: <span style="font-weight: bolder;">MAHG553681</span></li>
                    <li>CURP: <span style="font-weight: bolder;">MAH41564GER</span></li>
                    <li>CUIP: <span style="font-weight: bolder;">MAH41564GERDRGDRRE</span></li>
                </ul>
            </div>
            
            
        </div>
    </body>
</html>

