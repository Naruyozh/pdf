

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
            h1{
                text-align: center;
                font-size: 26px;
                margin-bottom: 0;
                padding-bottom: 0;
                line-height: 26px;
                font-weight: bolder;
            }
            h2{
                text-align: center;
                font-size: 14px;
                margin-bottom: 0;
                font-weigh: bolder;
            }
            .input-text {
                font-size: 12px;
                padding: 2px 0;
            }
            .blue-text {
                font-size: 14px;
                font-weight: bolder;
            }
            .cyan-text {
                font-size: 14px;
                font-weight: bolder;
                color: #4EBCC2;
            }
            .purple-text {
                font-size: 14px;
                font-weight: bolder;
                color: #754595;
            }
            .magenta-text {
                font-size: 14px;
                font-weight: bolder;
                color: #CA255C;
            }
            .orange-text {
                font-size: 14px;
                font-weight: bolder;
                color: #F38F1B;
            }
            .blue2-text {
                font-size: 14px;
                font-weight: bolder;
                color: #3B8CCB;
            }
            .header-table {
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .label-text-input {
                font-size: 14px;
                font-weight: bolder;
            }
            .left {
                text-align: left;
            }

            .center {
                text-align: center;
            }

            .right {
                text-align: right;
            }

            .foto {
                width: 120px;
                height: 160px;
                background-color: gray;
            }

            .border {
                border: 1px solid #CDCCCC;
            }
            .border-b {
                border-bottom: 1px solid gray;
                height: 12px;
            }

            .pt-1 {
                padding-top: 4px;
            }
            .pt-2 {
                padding-top: 8px;
            }
            .pt-3 {
                padding-top: 20px;
            }

            .pb-1 {
                padding-bottom: 4px;
            }
            .pb-2 {
                padding-bottom: 6px;
            }
            .pb-3 {
                padding-bottom: 16px;
            }

            .labels {
                color: #565656;
                font-weight: bolder;
            }
            .icon-label {
                width: 40px;
                padding: 0;
                margin: 0;
            }

            .gray-table {
                background-color: #CDCCCC;
                padding: 4px 30px;
            }
            .padding {
                padding: 12px 30px 18px 30px;
            }

            .text-white {
                color: white;
            }
            .fondo {
                background-color: #29A845;
                border-radius: 5px;
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
            }
            /**
                footer
             */

            .footer-main {
                position:fixed;
                padding:20px 50px;
                top:94%;
                
            }
            .text-footer-title {
                font-size:11px;
                font-weight: bolder;
            }
            .text-footer {
                font-size:11px;
            }
            /*
            ////////////////////////////////
             */

            .blue-title {
                color: #2A56A3;
                font-weight:bolder;
            }
            
            .icon {
                width: 46px;
            }
            
            
        </style>
    </head>
    <body>

        <!-- //////////////////////////////////// -->
        <!-- Header -->
        <div class="header-main">
            <table class="header-table" style="margin-bottom:10px;">
                <tr>
                    <td width="33%" class="left">
                        <img style="height:70px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\logotipogobierno.svg';?>"/>
                    </td>
                    <td width="34%" class="center">
                        <img style="height:70px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\logosubsecretaria.png';?>"/>
                    </td>
                    <td width="16%" class="right">
                        <img style="height:70px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\logo_carrera.png';?>"/>
                    </td>
                </tr>
            </table>
            <!-- Title -->
            <table class="header-table">
                <tr>
                    <td class="center title" style="padding-top: 20px;">
                        HOJA NUEVA 
                    </td>
                </tr>
                <tr>
                    <td class="center subtitle">
                        CIUDAD DE MÉXICO dd/mm/aaaa 
                    </td>
                </tr>
            </table>
        </div>

        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- First-page -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="content">
            <!-- Initial info -->
            <table class="header-table" style="margin-bottom:40px;">
                <tr>
                    <td width="16%">
                        <div class="foto">
                        </div>
                    </td>
                    <td width="84%">
                        <table style="width:100%;">
                            <tr>
                                <td style="background-color:#29A845; padding-left:210px;">
                                    <span class="text-white">DATOS PERSONALES</span>
                                </td>
                            </tr>
                        </table>
                        <!-- Información personal 1 -->
                        <table style="width:100%;" class="input-text">
                            <tr class="blue-text">
                                <td width="50%">Nombre</td>
                                <td width="5%"></td>
                                <td width="20%">N° de Empleado</td>
                                <td width="5%"></td>
                                <td width="20%">RFC</td>                            
                            </tr>
                            <tr>
                                <td width="50%" class="pt-1 border-b">Nombre Nombre Nombre</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">texto</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">texto</td>                            
                            </tr>
                        </table>
                        <!-- Información personal 2 -->
                        <table style="width:100%;" class="input-text pt-2">
                            <tr class="blue-text">
                                <td width="25%">CURP</td>
                                <td width="5%"></td>
                                <td width="20%">Loc</td>
                                <td width="5%"></td>
                                <td width="45%">Lugar de Nacimiento</td>                            
                            </tr>
                            <tr>
                                <td width="25%" class="pt-1 border-b">0000000000000000</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">loc</td>
                                <td width="5%"></td>
                                <td width="45%" class="pt-1 border-b">Lugar de NacimIento</td>                            
                            </tr>
                        </table>
                        <!-- Información personal 3 -->
                        <table style="width:100%;" class="input-text pt-2">
                            <tr class="blue-text">
                                <td width="25%">Licencia tipo "E"</td>
                                <td width="5%"></td>
                                <td width="20%">Fecha de alta</td>
                                <td width="50%"></td>
                            </tr>
                            <tr>
                                <td width="25%" class="pt-1 border-b">Licencia</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">Fecha</td>
                                <td width="50%"></td>                      
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- End first content -->
            <!-- ------------------------------------------- -->

            <!-- Second-title -->
            <div style="position:relative; pt-3">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconoservicios.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#2A56A3;" class="center">
                                        <span class="text-white">INFORMACIÓN POLICIAL</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>

            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="38%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Placa</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="38%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">CUIP</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="14%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Gpo. sangüineo</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-1" style="margin-bottom:40px;">
                <tr class="input-text">
                    <td width="38%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Puesto</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="38%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Adscripción</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="14%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Antigüedad</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Ends second section -->
            <!-- ------------------------------------------- -->

            <!-- Third section -->

            <!-- Third-title -->
            <div style="position:relative; pt-3">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconoeconomico.svg';?>"/>
                <table class="header-table">
                    <tr>
                        
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#ffcd5f;" class="center">
                                        <span class="text-white">DATOS NOMINALES</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- First-content -->
            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="40%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Tipo de empleado</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="20%"></td>
                    <td width="40%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Sueldo mensual bruto</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-2">
                <tr class="input-text">
                    <td width="20%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Fecha de nacimiento</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="5%"></td>
                    <td width="20%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Entidad de nacimiento</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="20%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Último grado de estudios</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="20%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Genero</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-2" style="margin-bottom: 40px;">
                <tr class="input-text">
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Tipo de pago</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Último año de cobro</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Última quincena de cobro</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
             <!-- Four-title -->
             <div style="position:relative; pt-3">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconobajas.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#d8002f;" class="center">
                                        <span class="text-white">BAJAS</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="header-table pt-3" style="margin-bottom: 40px;">
                <tr class="input-text">
                    <td width="100%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%" class="pb-1">Motivo de baja</td>
                            </tr>
                            <tr>
                                <td width="100%" class="border" style="height: 50px; padding: 2px 10px;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Four-title -->
            <div style="position:relative; pt-3">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconogrado.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#00b894;" class="center">
                                        <span class="text-white">GRADO Y SITUACIÓN JURÍDICA</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="header-table pt-3" style="margin-bottom: 40px;">
                <tr class="input-text">
                    <td width="40%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Grado real</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="10%"></td>
                    <!-- 3 -->
                    <td width="40%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Situación Jurídica</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Five-title -->
            <div style="position:relative; pt-3">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconohorario.svg';?>"/>
                <table class="header-table">
                    <tr>
                        
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#ff7b69;" class="center">
                                        <span class="text-white">HORARIO</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- Third section -->
            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Horario</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Edad</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Estado civil</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <!-- //////////////////////////////////// -->
        <!-- Header -->
        <div class="footer-main">
            <table class="header-table center">
                <tr>
                    <td width="100%" class="text-footer-title">
                        Secretaría de Seguridad Ciudadana - Subsecretaría de Desarrollo Institucional - Dirección General de Carrera Policial
                    </td>
                </tr>
                <tr>
                    <td width="100%" class="text-footer">
                        Av. Arcos de Belén número 79, piso 10, Colonia Centro, Alcaldía Cuauhtémoc, C.P. 06000 http://www.ssp.cdmx.gob.mx/ Tels. 52425100 Exts: 5283 y 5532
                    </td>
                </tr>
            </table>
        </div>
        <!-- //////////////////////////////////////// -->

        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Breack -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="page-break"></div>
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Breack -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        

        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Second-page -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="content">
            <!-- first-content -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconocredencial.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#754595;" class="center">
                                        <span class="text-white">CÉDULA Y CREDENCIALIZACIÓN</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="header-table pt-3" style="margin-bottom: 40px;">
                <tr class="input-text">
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Cédula</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Credencial</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Madre</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- First-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconohistorial.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#1cc98b;" class="center">
                                        <span class="text-white">SIUACIÓN EN NÓMINA </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- Second-content -->
            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Situación en nómina</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Cartilla militar</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Fecha de baja</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Gray table -->
            <table class="header-table pt-3" style="margin-bottom: 40px;">
                <tr class="input-text">
                    <td width="100%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%" class="pb-1">Observaciones</td>
                            </tr>
                            <tr>
                                <td width="100%" class="border" style="height: 50px; padding: 2px 10px;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Second-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconopersonales.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#0984e3;" class="center">
                                        <span class="text-white">DATOS PERSONALES</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- third-content -->
            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="100%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Domicilio para oir y recibir notificaciones</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-3" style="margin-bottom: 40px;">
                <tr class="input-text">
                    <td width="40%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Teléfono particular</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="10%"></td>
                    <!-- 3 -->
                    <td width="40%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Correo</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            
            <!-- Second-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconofamiliares.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="100%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#CA255C;" class="center">
                                        <span class="text-white">DATOS FAMILIARES</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                </table>
            </div>
            <table class="header-table pt-3" style="margin-bottom: 40px;">
                <tr class="input-text">
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Padre</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Madre</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%">Esposa(o)</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="input-text">
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%" class="pt-2">Hijos</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%"  class="pt-2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%"  class="pt-2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="input-text">
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%" class="pt-2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%"  class="pt-2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td width="30%">
                        <table style="width:100%;">
                            <tr class="blue-text">
                                <td width="100%"  class="pt-2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            
        </div> <!-- end content class -->
            
        <!-- Ends content -->
        <!-- //////////////////////////////////////// -->
        <!-- //////////////////////////////////////// -->

        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Breack -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="page-break"></div>
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Breack -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        

        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- Third-page -->
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
        <div class="content">
            <!-- first-content -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconobeneficiarios.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="100%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#6c5ce7;" class="center">
                                        <span class="text-white">BENEFIFICIARIOS</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                </table>
            </div>
            <!-- 1 -->
            <table style="width:100%;"  class="pt-3">
                <tr class="input-text">
                    <td width="100%" class="blue-text">   Seguro institucional</td>
                </tr>
            </table>
            <table style="width:100%;">
                <tr class="input-text">
                    <td width="3%" class="pt-2">1.</td>
                    <td width="27%" class="border-b pt-2">      Nombre Nombre Nombre</td>
                    <td width="5%"></td>
                    <td width="3%" class="pt-2">2.</td>
                    <td width="27%" class="border-b pt-2">      Nombre Nombre Nombre</td>
                    <td width="5%"></td>
                    <td width="3%" class="pt-2">3.</td>
                    <td width="27%" class="border-b pt-2">      Nombre Nombre Nombre</td>
                </tr>
            </table>
            <!-- 2 -->
            <table style="width:100%;"  class="pt-3">
                <tr class="input-text">
                    <td width="100%" class="blue-text">   FONAC</td>
                </tr>
            </table>
            <table style="width:100%;">
                <tr class="input-text">
                    <td width="2%" class="pt-2">1.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">2.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">3.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                </tr>
            </table>
            <!-- 3 -->
            <table style="width:100%;"  class="pt-3">
                <tr class="input-text">
                    <td width="100%" class="blue-text">   SAR</td>
                </tr>
            </table>
            <table style="width:100%;">
                <tr class="input-text">
                    <td width="2%" class="pt-2">1.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">2.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">3.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                </tr>
            </table>
            <!-- 4 -->
            <table style="width:100%;"  class="pt-3">
                <tr class="input-text">
                    <td width="100%" class="blue-text">   Pensión</td>
                </tr>
            </table>
            <table style="width:100%;">
                <tr class="input-text">
                    <td width="2%" class="pt-2">1.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">2.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">3.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                </tr>
            </table>
            <!-- 5 -->
            <table style="width:100%;"  class="pt-3">
                <tr class="input-text">
                    <td width="100%" class="blue-text">   BANORTE</td>
                </tr>
            </table>
            <table style="width:100%;">
                <tr class="input-text">
                    <td width="2%" class="pt-2">1.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">2.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                    <td width="5%"></td>
                    <td width="2%" class="pt-2">3.</td>
                    <td width="28%" class="border-b pt-2">      </td>
                </tr>
            </table>
            <!-- Second-title -->
        </div><!-- ENDS CONTENT -->
    </body>
</html>

