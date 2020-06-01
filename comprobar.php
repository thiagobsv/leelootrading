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
        	<div class="banner-img"><img src="https://www.leelootrading.com/static/8452429920cfdd4c745619190ff0f097/13bd3/leeloo-logo.png"></div>
            <div class="page-title">	
	            <div class="container">
                    <h1>Certificado</h1>
                </div>
            </div>
        </section>
       
        <div class="certificate-view" id="certificate"> 
        	<div class="container" >
            
                <div class="institut-text">
                	<h2> <?php echo $_POST['sexo'];?>  <?php echo $_POST['nombre'];?> TE HAS GANADO UN CERTIFICADO!</h2>
                    <p>¡Felicidades! Esta página resume lo que logró.</p>
                    <h3>Con el siguiente certificado.</h3>
                </div>

                <div class="certificate" id="imp1">
                	<div class="certificate-logo"><img src="https://www.leelootrading.com/static/8452429920cfdd4c745619190ff0f097/13bd3/leeloo-logo.png" style="max-width: 40%;"></div>
                    <div class="top-text">Opere menos, viva más: vida sin límites </div>
                    <div class="honor-text">  <?php echo $_POST['nombre'];?>   </div>
                    <p>Ha aprobado exitosamente en <b><?php echo $_POST['fecha'];?> del 2020 </b>  la categoria de: </p>
                    <div class="honor-text no-padding" style="color: #255589;">Prueba de fondeo <?php echo $_POST['prueba'];?> </div>
                    <p>Mucha suerte en la siguiente etapa como trader.</p>

                    <div class="signechar-row">
                        <div class="signechar-box">
                            <div class="img"><img src="images/save-timeIcon.png" alt=""></div>
                        </div>
                        
                    </div>
                </div>

             
                <div class="download-btn">





                    <a href="#" class="btn"><i class="fa fa-file-pdf-o"></i> Descargar Certificado</a>
                    

 <!-- OCULTOS
                    <button class="btn" id="cmd" onclick ="run()">Generar PDF</button>
                    <button class="btn" type="button" onclick="javascript:imprim1(imp1);">Imprimir</button>
               
  ------------------------------------------ -->            
               
               
               
               
                </div>
            </div>
        </div>
        <footer id="footer">
        	
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-8">
            			<div class="copy-right">
                        	<p>Copyright © <span class="year">2020</span> Thiago.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 ">	
                    	<div class="social-media">
                        	<ul>
                            	<li><a href="https://www.instagram.com/bitek.co"><i class="fa fa-instagram"></i></a></li>
                                
                            </ul>
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
