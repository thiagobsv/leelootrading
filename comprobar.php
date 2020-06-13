<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->
    
    <!-- Title -->
    <title>CERTIFICADO LEELOO</title>
    
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images2/Favicon.ico">
    
    <!-- CSS Stylesheet -->
    <link href="css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="css/font-awesome.css" rel="stylesheet"><!-- font awesome -->
    <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->
    
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900%7CPT+Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
    
<body>
    <div class="wapper">
        
      
        <section class="banner inner-page">

<!------------ -- OCULTOS  -------------------------------------       
        	<div class="banner-img"><img src="https://www.leelootrading.com/static/8452429920cfdd4c745619190ff0f097/13bd3/leeloo-logo.png"></div>
            <div class="page-title">	
	            <div class="container">
                    <h1>Certificado</h1>
                </div>
            </div>
        </section>
---------------------------FIN OCULTOS--------------------------------------------- -->
       
        <div class="certificate-view" id="certificate"> 
        	<div class="container" >

<!------------ -- OCULTOS  -------------------------------------       

                <div class="institut-text">
                	<h2> <?php echo $_POST['sexo'];?>  <?php echo $_POST['nombre'];?> TE HAS GANADO UN CERTIFICADO!</h2>
                </div>
---------------------------FIN OCULTOS--------------------------------------------- -->
    

                <div class="certificate" id="imp1"  style="border: solid 15px #255589;">
                	<div class="certificate-logo"><img src="https://www.leelootrading.com/static/8452429920cfdd4c745619190ff0f097/13bd3/leeloo-logo.png" style="max-width:100%;height: 200px;"></div>
                    <div class="top-text">CERTIFICADO DE LOGRO </div>
                    <div class="honor-text" style="font-size: 45px;">  <?php echo $_POST['nombre'];?>   </div>
                    <p style="font-size: 18px;">Para reconocer el esfuerzo y la exitosa aprobación de su Cuenta de Evaluación de trading de: </p>
                    <div class="honor-text no-padding" style="color: #255589;padding-top: 10px;"><?php echo $_POST['prueba'];?> </div>
                    <p style="font-size: 14px;">Calificando para operar una Cuenta PA de Pago por Desempeño de Leeloo</p>

                    <div class="signechar-row">
                        <div class="signechar-box">
                            <div class="img"><img src="https://i.ibb.co/gS39KJ5/footer.png" style="height: 40px;"></div>
                            <b>
                            <script>
                                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                var f=new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " del " + f.getFullYear());
                            </script>
                            </b>

                     <!------------ -- OCULTA FECHA EN PHP -------------------------------------       
       
                            <b><?php echo $_POST['fecha'];?> del 2020 </b>
                     ---------------------------FIN OCULTOS--------------------------------------------- -->

                        </div>
                        
                    </div>
                </div>

             




                <!------------------------- OCULTOS
                <div class="download-btn">
                    <button class="btn" type="button" onclick="javascript:imprim1(imp1);">Imprimir</button>
                     <a href="#" class="btn"><i class="fa fa-file-pdf-o"></i> Descargar Certificado</a>
                    <button class="btn" id="cmd" onclick ="run()">Generar PDF</button>

                </div>
                 ------------------------------------------ -->
                 
            </div>
        </div>
        <footer id="footer">
        	
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-8">
            			<div class="copy-right">
                        </div>
                    </div>
                    <div class="col-sm-4 ">	
                    	
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


    <script lang="javascript" type="text/javascript">


function run()
    {
       var pdf = new jsPDF('l', 'pt', 'letter'),
       source = $('#certificate')[0],
       margins = {
           top: 40,
           bottom: 40,
           left: 40,
           right: 40,
           width: 522
       };

pdf.fromHTML(
           source,
           margins.left,
           margins.top,
           {
           'width': margins.width 
           },
           function (dispose) {
               pdf.save('Prueba.pdf');
           },
           margins
      );
};

</script>


<script>
function imprim1(imp1){
var printContents = document.getElementById('imp1').innerHTML;
        w = window.open();
        w.document.write(printContents);
        w.document.close(); // necessary for IE >= 10
        w.focus(); // necessary for IE >= 10
		w.print();
		w.close();
        return true;}
</script>
    
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
    <script type="text/javascript" src="js/placeholder.js"></script>
    <script type="text/javascript" src="js/coustem.js"></script>
</body>

</html>
