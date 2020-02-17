

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
                padding-top: 16px;
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
                margin-top: 160px;
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
                    <td class="center title">
                        HOJA DE SERVICIO 
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
            <table class="header-table">
                <tr>
                    <td width="16%">
                        <div class="foto">
                        </div>
                    </td>
                    <td width="84%">
                        <table style="width:100%;">
                            <tr>
                                <td style="background-color:#29A845; padding-left:183px;">
                                    <span class="text-white">INFORMACIÓN PERSONAL</span>
                                </td>
                            </tr>
                        </table>
                        <!-- Información personal 1 -->
                        <table style="width:100%;" class="input-text">
                            <tr class="labels">
                                <td width="50%">Nombre</td>
                                <td width="5%"></td>
                                <td width="20%">F. Nacimiento</td>
                                <td width="5%"></td>
                                <td width="20%">Edad</td>                            
                            </tr>
                            <tr>
                                <td width="50%" class="pt-1 border-b">Nombre Nombre Nombre</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">Nombre</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">Nombre</td>                            
                            </tr>
                        </table>
                        <!-- Información personal 2 -->
                        <table style="width:100%;" class="input-text pt-2">
                            <tr class="labels">
                                <td width="25%">Kardex</td>
                                <td width="5%"></td>
                                <td width="20%">RFC</td>
                                <td width="5%"></td>
                                <td width="45%">Lugar de Nacimiento</td>                            
                            </tr>
                            <tr>
                                <td width="25%" class="pt-1 border-b">Kardex</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">RFC</td>
                                <td width="5%"></td>
                                <td width="45%" class="pt-1 border-b">Lugar de NacimIento</td>                            
                            </tr>
                        </table>
                        <!-- Información personal 3 -->
                        <table style="width:100%;" class="input-text pt-2">
                            <tr class="labels">
                                <td width="25%">CURP</td>
                                <td width="5%"></td>
                                <td width="20%">Género</td>
                                <td width="5%"></td>
                                <td width="45%">Estado Civil</td>                            
                            </tr>
                            <tr>
                                <td width="25%" class="pt-1 border-b">Kardex</td>
                                <td width="5%"></td>
                                <td width="20%" class="pt-1 border-b">Femenino</td>
                                <td width="5%"></td>
                                <td width="45%" class="pt-1 border-b">Lugar de NacimIento</td>                            
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-2">
                <tr class="input-text">
                    <td width="6%">
                        <img class="icon-label" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconodomicilio.svg';?>"/>
                    </td>
                    <td width="94%">
                        <table style="width:100%;">
                            <tr class="labels">
                                <td width="100%">Domicilio</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">Domicilio</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-2">
                <tr class="input-text">
                <!-- 1 -->
                    <td width="6%">
                        <img class="icon-label" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconocorreo.svg';?>"/>
                    </td>
                    <td width="25%">
                        <table style="width:100%;">
                            <tr class="labels">
                                <td width="100%">Correo</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">Correo</td>
                            </tr>
                        </table>
                    </td>
                    <!-- 2 -->
                    <td width="6%">
                        <img class="icon-label" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconotelefono.svg';?>"/>
                    </td>
                    <td >
                        <table style="width:100%;">
                            <tr class="labels">
                                <td width="100%">Particular</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">Particular</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 3 -->
                    <td >
                        <table style="width:100%;">
                            <tr class="labels">
                                <td width="100%">Oficina</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">Oficina</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 4 -->
                    <td >
                        <table style="width:100%;">
                            <tr class="labels">
                                <td width="100%">Extensión</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">Extensión</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <!-- 5 -->
                    <td >
                        <table style="width:100%;">
                            <tr class="labels">
                                <td width="100%">Celular</td>
                            </tr>
                            <tr>
                                <td width="100%" class="pt-1 border-b">Celular</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-3" style="margin-bottom: 25px;">
                <tr class="input-text">
                    <td class="labels">Escolaridad concluida</td>
                    <td width="84%" class="border-b">
                        Escolaridad concluida
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
                                        <span class="text-white">SERVICIO PROFESIONAL DE CARRERA POLICIAL</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>

            <table class="header-table pt-3">
                <tr>
                    <td width="40%">
                        <table width="100%">
                            <tr class="input-text">
                                <td>
                                    <table style="width:100%;">
                                        <tr>
                                            <td class="labels blue-text" width="100%">GRADO</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="pt-1 border-b pb-2">Grado</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="pt-2 labels blue-text">PLACA</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="pt-1 border-b pb-2">Placa</td>
                                        </tr>
                                    </table>
                                    <table style="width:100%;" class="pt-3">
                                        <tr>
                                            <td class="labels blue-text">CUIP</td>
                                            <td width="86%" style="border: 1px solid gray;">CUIP</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <!-- Space -->
                    <td width="5%"></td>
                    <td width="55%">
                    <!-- First -->
                        <table style="width:100%;">
                            <tr class="input-text">
                                <td class="blue-title">
                                    ÚLTIMO GRADO REGISTRADO EN PROMOCIÓN
                                </td>
                            </tr>
                        </table>
                        <table style="width:100%; pt-1">
                            <tr class="input-text">
                                <td width="34">Grado</td>
                                <td  width="33">Fecha de ascenso</td>
                                <td  width="33">Antigüedad en el grado</td>
                            </tr>
                            </table>
                            <table style="width:100%;border-top: 1px solid gray;" >
                            <tr class="input-text labels">
                                <td width="34" >Grado</td>
                                <td  width="33">Fecha de ascenso</td>
                                <td  width="33">Antigüedad en el grado</td>
                            </tr>
                        </table>
                        <!-- Second -->
                        <table style="width:100%;" class="pt-2">
                            <tr class="input-text">
                                <td class="blue-title">
                                    ÚLTIMO GRADO REGISTRADO EN ACUERDOS
                                </td>
                            </tr>
                        </table>
                        <table style="width:100%; pt-1">
                            <tr class="input-text">
                                <td width="34">Grado</td>
                                <td  width="33">Fecha de ascenso</td>
                                <td  width="33">Antigüedad en el grado</td>
                            </tr>
                            </table>
                            <table style="width:100%;border-top: 1px solid gray;" >
                            <tr class="input-text labels">
                                <td width="34" >Grado</td>
                                <td  width="33">Fecha de ascenso</td>
                                <td  width="33">Antigüedad en el grado</td>
                            </tr>
                        </table>
                        <!-- Third -->
                        <table  style="width:100%;" class="pt-2">
                            <tr class="input-text">
                                <td width="18%" class="labels">Fecha de alta</td>
                                <td  width="17%" class="border-b">00-00-0000</td>
                                <!-- Space -->
                                <td width="5%"></td>
                                <td width="35%" class="labels">Antigüedad en la Institución</td>
                                <td  width="20%" class="border-b">00-00-0000</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- Third section -->
            <!-- Table gray -->
            <table style="width:100%;" class="pt-3">
                <tr class="input-text">
                    <td class="gray-table">
                        CURSOS RECIBIDOS (Se muestran únicamente los tres más recientes)
                    </td>
                </tr>
            </table>
            <!--  -->
            <div class="border" style="margin-bottom: 25px;">
                <table style="width:100%;" class="padding">
                    <tr class="input-text">
                        <td width="3%" class="labels">1.</td>
                        <td class="border-b">Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels pt-2">2.</td>
                        <td class="border-b pt-2">Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels pt-2">3.</td>
                        <td class="border-b pt-2">Texto</td>
                    </tr>
                </table>
            </div>
            
            <!-- Ends second section -->
            <!-- ------------------------------------------- -->

            <!-- Third section -->

            <!-- Third-title -->
            <div style="position:relative; pt-3">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconocondecoraciones.svg';?>"/>
                <table class="header-table">
                    <tr>
                        
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#F38F1B;" class="center">
                                        <span class="text-white">CONDECORACIONES E INCENTIVOS</span>
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
                    <td width="20%" class="orange-text">CONDECORACIONES</td>
                    <td width="35%" class="border-b">Texto</td>
                    <td width="10%"></td>
                    <td width="8%">Monto total: </td>
                    <td width="27%" class="border-b">Texto</td>
                </tr>
            </table>
            <!-- Third section -->
            <!-- Table gray -->
            <table style="width:100%;" class="pt-3">
                <tr class="input-text">
                    <td class="gray-table">
                        <span style="font-weight:bolder;">MOTIVO</span> (Se muestran únicamente los dos más recientes)
                    </td>
                </tr>
            </table>
            <!--  -->
            <div class="border">
                <table style="width:100%;" class="padding">
                    <tr class="input-text">
                        <td width="3%" class="labels">      1.</td>
                        <td width="41%" class="border-b">   Texto</td>
                        <td width="5%"></td>
                        <td width="5%" class="labels"       >Año</td>
                        <td width="18%" class="border-b">   Texto</td>
                        <td width="5%"></td>
                        <td width="5%" class="labels">      Monto</td>
                        <td width="18%" class="border-b">   Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="pt-2 labels">      2.</td>
                        <td width="41%" class="pt-2 border-b">   Texto</td>
                        <td width="5%" class="pt-2"></td>
                        <td width="5%" class="pt-2 labels"       >Año</td>
                        <td width="18%" class="pt-2 border-b">   Texto</td>
                        <td width="5%" class="pt-2"></td>
                        <td width="5%" class="pt-2 labels">      Monto</td>
                        <td width="18%" class="pt-2 border-b">   Texto</td>
                    </tr>
                </table>
            </div>
            <!-- Second-content -->
            <table class="header-table pt-2">
                <tr class="input-text">
                    <td width="12%" class="orange-text">INCENTIVOS</td>
                    <td width="43%" class="border-b">Texto</td>
                    <td width="10%"></td>
                    <td width="8%">Monto total: </td>
                    <td width="27%" class="border-b">Texto</td>
                </tr>
            </table>
            <!--  -->
             <!-- Table gray -->
             <table style="width:100%;" class="pt-3">
                <tr class="input-text">
                    <td class="gray-table">
                        <span style="font-weight:bolder;">MOTIVO</span> (Se muestran únicamente los tres más recientes)
                    </td>
                </tr>
            </table>
            <!--  -->
            <div class="border">
                <table style="width:100%;" class="padding">
                    <tr class="input-text">
                        <td width="3%" class="labels">      1.</td>
                        <td width="41%" class="border-b">   Texto</td>
                        <td width="5%"></td>
                        <td width="5%" class="labels"       >Año</td>
                        <td width="18%" class="border-b">   Texto</td>
                        <td width="5%"></td>
                        <td width="5%" class="labels">      Monto</td>
                        <td width="18%" class="border-b">   Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="pt-2 labels">      2.</td>
                        <td width="41%" class="pt-2 border-b">   Texto</td>
                        <td width="5%" class="pt-2"></td>
                        <td width="5%" class="pt-2 labels"       >Año</td>
                        <td width="18%" class="pt-2 border-b">   Texto</td>
                        <td width="5%" class="pt-2"></td>
                        <td width="5%" class="pt-2 labels">      Monto</td>
                        <td width="18%" class="pt-2 border-b">   Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="pt-2 labels">      3.</td>
                        <td width="41%" class="pt-2 border-b">   Texto</td>
                        <td width="5%" class="pt-2"></td>
                        <td width="5%" class="pt-2 labels"       >Año</td>
                        <td width="18%" class="pt-2 border-b">   Texto</td>
                        <td width="5%" class="pt-2"></td>
                        <td width="5%" class="pt-2 labels">      Monto</td>
                        <td width="18%" class="pt-2 border-b">   Texto</td>
                    </tr>
                </table>
            </div>
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
            <table class="header-table">
                <tr  class="input-text">
                    <td width="10%" class="blue-text">
                        SITUACIÓN
                    </td>
                    <td width="20%" class="border-b">
                        Texto
                    </td>
                    <td width="90%"></td>
                </tr>
            </table>
            <table class="header-table pt-2" style="margin-bottom:25px;">
                <tr  class="input-text">
                    <td width="8%" class="blue-text">
                        GRADO
                    </td>
                    <td width="17%" class="border-b">
                        Texto
                    </td>
                    <!-- space -->
                    <td width="5%"></td>
                    <!-- space -->
                    <td width="5%" class="blue-text">
                        PLACA
                    </td>
                    <td width="15%" class="border-b">
                        Texto
                    </td>
                    <!-- space -->
                    <td width="5%"></td>
                    <!-- space -->
                    <td width="7%" class="blue-text">
                        NOMBRE
                    </td>
                    <td width="38%" class="border-b">
                        Texto
                    </td>
                </tr>
            </table>
            <!-- First-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconoresultadosevaluaciones.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#4EBCC2;" class="center">
                                        <span class="text-white">SERVICIO PROFESIONAL DE CARRERA POLICIAL</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="28%" class="cyan-text">
                        EVALUACIÓN DEL DESEMPEÑO
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Resultado Final</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Aplicación</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Tipo de Resultado</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Calificación</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td width="16%">
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Período de Evaluación</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-2">
                <tr class="input-text">
                    <td width="28%" class="cyan-text">
                        HABILIDADES BÁSICAS
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Resultado Final</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Aplicación</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td style="font-size:10px;" class="labels">Estado de Evaluación</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td>
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Promedio</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td width="16%">
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Días Faltantes</td>
                            </tr>
                            <tr>
                                <td  class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table class="header-table pt-2" style="margin-bottom:25px;">
                <tr class="input-text">
                    <td width="28%" class="cyan-text">
                        HABILIDADES BÁSICAS
                    </td>
                    <td width="1%"></td>
                    <td width="54%" class="border-b">
                        <table width="100%" class="center">
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Texto</td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"></td>
                    <td width="16%">
                        <table width="100%" class="center">
                            <tr>
                                <td class="labels">Días Faltantes</td>
                            </tr>
                            <tr>
                                <td class="border-b">Texto</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- First-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconoservsocial.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#754595;" class="center">
                                        <span class="text-white">HISTORIAL DE SERVICIOS</span>
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
                    <td width="21%" class="purple-text">ADSCRIPCIÓN ACTUAL</td>
                    <td width="34%" class="border-b">Texto</td>
                    <td width="7%"></td>
                    <td width="15%" class="labels">Total de Adscripciones:</td>
                    <td width="20%" class="border-b">Texto</td>
                </tr>
            </table>
             <!-- Table gray -->
             <table style="width:100%;" class="pt-3">
                <tr class="input-text">
                    <td class="gray-table">
                        <span style="font-weight:bolder;">ADSCRIPCIONES</span> (Se muestran únicamente los cinco más recientes)
                    </td>
                </tr>
            </table>
            <!--  -->
            <div class="border" style="margin-bottom: 25px;">
                <table style="width:100%;" class="padding">
                <tr class="input-text">
                        <td width="3%" class="labels">    &nbsp;</td>
                        <td width="31%" class="labels">   Adscripción durante su carrera policial</td>
                        <td width="5%"></td>
                        <td width="" class="labels">      Período</td>
                        <td width="5%"></td>
                        <td width="" class="labels">      Cargo</td>
                        <td width="5%"></td>
                        <td width="31%" class="labels">   Actividades</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels pt-2">      1.</td>
                        <td width="31%" class="border-b pt-2">   Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="32%" class="border-b pt-1">   Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels pt-2">      2.</td>
                        <td width="31%" class="border-b pt-2">   Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="32%" class="border-b pt-1">   Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels pt-2">      3.</td>
                        <td width="31%" class="border-b pt-2">   Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="32%" class="border-b pt-1">   Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels pt-2">      4.</td>
                        <td width="31%" class="border-b pt-2">   Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="32%" class="border-b pt-1">   Texto</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels pt-2">      5.</td>
                        <td width="31%" class="border-b pt-2">   Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      Texto</td>
                        <td width="5%"></td>
                        <td width="32%" class="border-b pt-1">   Texto</td>
                    </tr>
                    
                </table>
            </div>
            <!-- Second-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconopuestasadisp.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#CA255C;" class="center">
                                        <span class="text-white">PUESTAS A DISPOSICIÓN REALIZADAS DURANTE SU CARRERA POLICIAL</span>
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
                    <td width="20%" class="magenta-text">TOTAL GENERAL</td>
                    <td width="20%" class="border-b">Texto</td>
                    <td width="60%"></td>
                </tr>
            </table>
            <table style="width:100%; margin-bottom: 25px;" class="input-text pt-3">
                <tr>
                    <td width="20%" class="labels label-text-input">Ministerio Público Local</td>
                    <td style="border: 1px solid gray; text-align:center;">CUIP</td>
                    <td width="5%"></td>
                    <td width="20%" class="labels label-text-input">Ministerio Público Federal</td>
                    <td style="border: 1px solid gray; text-align:center;">CUIP</td>
                    <td width="5%"></td>
                    <td class="labels label-text-input">Juzgados Cívicos</td>
                    <td style="border: 1px solid gray; text-align:center;">CUIP</td>
                    <td width="5%"></td>
                    <td class="labels label-text-input">Otros</td>
                    <td style="border: 1px solid gray; text-align:center;">CUIP</td>
                </tr>
            </table>
            
            <!-- Second-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconohistorialdisciplinario.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#3B8CCB;" class="center">
                                        <span class="text-white">HISTORIAL DISCIPLINARIO</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <table style="width:100%;" class="input-text pt-3">
                <tr>
                    <td width="30%">
                        <table width="100%">
                            <tr>
                                <td width="50%" class="blue-text">QUEJAS</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#AF3022;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">ACTAS ADMTVS.</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#23587B;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">AV. PREVIAS</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#1B7C53;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">CARPETAS DE INV.</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#CC3B6A;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">FALTAS</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#D06F31;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">AMONESTACIONES</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#1EA9AB;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">INCAPACIDADES</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#7B2F6B;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">PERMISOS</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#207DBA;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                            <tr>
                                <td width="50%" class="blue-text">ARRESTOS</td>
                                <td width="5%"></td>
                                <td width="7%"><div style="height:20px; display:block; background-color:#707B27;"></div></td>
                                <td width="5%"></td>
                                <td width="24%" class="border-b">holi</td>
                            </tr>
                        </table>
                    </td>
                    <td width="10%"></td>
                    <td width="60%">
                        <table class="header-table">
                            <tr class="input-text">
                                <td width="100%" class="blue2-text pt-1 pb-1">RESOLUCIÓN CHyJ</td>
                            </tr>
                            <tr>
                                <td width="100%" class="border" style="height: 50px; padding: 2px 10px;">
                                </td>
                            </tr>
                        </table>
                        <table class="header-table">
                            <tr class="input-text">
                                <td width="100%" class="labels pt-1 pb-1">Conducta</td>
                            </tr>
                            <tr>
                                <td width="100%" class="border" style="height: 50px; padding: 2px 10px;"></td>
                            </tr>
                        </table>
                        <table class="header-table">
                            <tr class="input-text">
                                <td width="8%" class="labels pt-1 ">Fecha</td>
                                <td width="92%" class="border-b">Fecha</td>
                            </tr>
                        </table>
                        <table class="header-table">
                            <tr class="input-text">
                                <td width="20%" class="labels pt-1">Expediente CHyJ</td>
                                <td width="80%" class="border-b">Expediente CHyJ</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <!-- Table gray -->
            <table style="width:100%;" class="pt-3">
                <tr class="input-text">
                    <td class="gray-table">
                        <span style="font-weight:bolder;">INCIDENCIAS REPORTADAS POR ASUNTOS INTERNOS</span>
                    </td>
                </tr>
            </table>
            <!--  -->
            <div class="border" style="margin-bottom: 25px;">
                <table style="width:100%;" class="padding">
                <tr class="input-text">
                    <td style="height: 40px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui laboriosam nostrum eos, quaerat quod alias sapiente, voluptatum totam beatae consequatur numquam ipsum harum dolores maxime veritatis iure! Doloremque, commodi libero.
                    </td>
                </tr>
                </table>
            </div>
        </div>
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
            <table class="header-table">
                <tr  class="input-text">
                    <td width="10%" class="blue-text">
                        SITUACIÓN
                    </td>
                    <td width="20%" class="border-b">
                        Texto
                    </td>
                    <td width="90%"></td>
                </tr>
            </table>
            <table class="header-table pt-2" style="margin-bottom:25px;">
                <tr  class="input-text">
                    <td width="8%" class="blue-text">
                        GRADO
                    </td>
                    <td width="17%" class="border-b">
                        Texto
                    </td>
                    <!-- space -->
                    <td width="5%"></td>
                    <!-- space -->
                    <td width="5%" class="blue-text">
                        PLACA
                    </td>
                    <td width="15%" class="border-b">
                        Texto
                    </td>
                    <!-- space -->
                    <td width="5%"></td>
                    <!-- space -->
                    <td width="7%" class="blue-text">
                        NOMBRE
                    </td>
                    <td width="38%" class="border-b">
                        Texto
                    </td>
                </tr>
            </table>
            <!-- First-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconoascensos.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#7AB929;" class="center">
                                        <span class="text-white">HISTORIAL DE ASCENSO</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="28%" class="purple-text">TOTAL DE ASCENSOS POR PROMOCIÓN</td>
                    <td width="15%" class="border-b">Texto</td>
                    <td width="7%"></td>
                    <td width="20%" class="labels">Total de Ascensos por Promoción:</td>
                    <td width="18%" class="border-b">Texto</td>
                </tr>
            </table>
            <table style="width:100%;" class="pt-3">
                <tr class="input-text">
                    <td class="gray-table">
                        <span style="font-weight:bolder;">PROMOCIONES</span>
                    </td>
                </tr>
            </table>
            <!--  -->
            <div class="border">
                <table style="width:100%;" class="padding">
                    <tr class="input-text">
                        <td width="3%" class="labels">    &nbsp;</td>
                        <td width="31%" class="labels">   Promoción</td>
                        <td width="5%"></td>
                        <td width="" class="labels">      Grado Inicial</td>
                        <td width="5%"></td>
                        <td width="" class="labels">      Grado Asciende</td>
                        <td width="5%"></td>
                        <td width="" class="labels">   Fecha Ascenso</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           1.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           2.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           3.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           4.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           5.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                </table>
            </div>
            <table class="header-table pt-3">
                <tr class="input-text">
                    <td width="50%"></td>
                    <td width="20%" class="labels">Total de Ascensos por Acuerdo:</td>
                    <td width="18%" class="border-b">Texto</td>
                </tr>
            </table>       
            <table style="width:100%;" class="pt-3">
                <tr class="input-text">
                    <td class="gray-table">
                        <span style="font-weight:bolder;">ACUERDOS</span>
                    </td>
                </tr>
            </table>
            <!--  -->
            <div class="border" style="margin-bottom: 25px;">
                <table style="width:100%;" class="padding">
                    <tr class="input-text">
                        <td width="3%" class="labels">    &nbsp;</td>
                        <td width="31%" class="labels">   Acuerdo</td>
                        <td width="5%"></td>
                        <td width="" class="labels">      Grado Inicial</td>
                        <td width="5%"></td>
                        <td width="" class="labels">      Grado Asciende</td>
                        <td width="5%"></td>
                        <td width="" class="labels">   Fecha Ascenso</td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           1.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           2.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           3.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           4.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                    <tr class="input-text">
                        <td width="3%" class="labels">           5.</td>
                        <td width="31%" class="border-b pt-2">   </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                        <td width="5%"></td>
                        <td width="" class="border-b pt-2">      </td>
                    </tr>
                </table>
            </div>
            <!-- Second-title -->
            <div style="position:relative;">
                <img class="icon" style="position:absolute; top:-10px;" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'\img\iconoreconoc_facial.svg';?>"/>
                <table class="header-table">
                    <tr>
                        <td width="90%">
                            <table style="width:100%;">
                                <tr>
                                    <td style="background-color:#EC663B;" class="center">
                                        <span class="text-white">RECONOCIMIENTO FACIAL</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="header-table" style="padding-top: 30px;">
                <tr>
                    <td style="border: 2px solid #EC663B; height: 300px;"></td>
                    <td width="15%"></td>
                    <td style="border: 2px solid #EC663B; height: 300px;"></td>
                    <td width="15%"></td>
                    <td style="border: 2px solid #EC663B; height: 300px;"></td>
                </tr>
            </table>
            <table class="header-table center" style="padding-top: 50px;">
                <tr>
                    <td width="100%" class="input-text">
                    Confome a lo dispuesto en los artículos 3, fracciones IX, XI y XXXIV, 9, 10, 11 y 19 de la <span style="font-weight:bolder">Ley de Protección de Datos Personales en Posesión de 
                    Sujetos Obligados de la Ciudad de México</span>, así como 6 fracciones XII y XXII, 21, 24 fracción XXIII, y 186 de la <span style="font-weight:bolder">Ley de Transparencia, Acceso a la 
                    Información Pública y Rendición de Cuentas de la Ciudad de México</span>, por tratarse de <span style="font-weight:bolder">Datos Personales, queda bajo su estricta responsabilidad el uso 
                    de la información que se proporciona</span>.
                    </td>
                </tr>
            </table>
        </div>


    </body>
</html>

