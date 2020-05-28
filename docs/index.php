<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./upiicsa.png" />
	<title>Lista de Archivos | UPIICSA</title>
	<?php
		// Include and instantiate the class.
		require_once "./Mobile_Detect.php";
		$detect = new Mobile_Detect();
	?>
	<!-- Bootstrap CSS --
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /> -->
	<!-- Material Design Bootstrap --
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/css/mdb.min.css" rel="stylesheet"> -->
	<!-- DataTables Release CSS --
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" />  -->
	<link rel="stylesheet" type="text/css" href="https://kanyjo.com/lib/DataTables-1.10.11/media/css/dataTables.bootstrap.css"/>
	<!-- Buttons CSS --
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap.min.css" /> -->
	<link rel="stylesheet" href="https://kanyjo.com/lib/DataTables-1.10.11/extensions/Buttons/css/buttons.bootstrap.css" />
	<!-- ColReorder CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.5.2/css/colReorder.dataTables.min.css"/>
	<!-- FixedHeader CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css"/>
	<!-- Select CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"/>
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap.min.css"/> -->
	<!-- KeyTable CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/keytable/2.5.2/css/keyTable.bootstrap.min.css"/>
	
	<!-- Font Awesome --
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
	<script src="https://kit.fontawesome.com/696a6baa61.js" crossorigin="anonymous"></script>
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
	
	<!-- JQuery-UI CSS --
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
	
	<!-- JQuery JS --
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
	
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap JS --
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- MDB core JavaScript --
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/js/mdb.min.js"></script> -->
	<!-- DataTables Release JS --
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script> -->
	<script type="text/javascript" language="javascript" src="https://kanyjo.com/lib/DataTables-1.10.11/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="https://kanyjo.com/lib/DataTables-1.10.11/media/js/dataTables.bootstrap.js"></script>
	
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<!-- Buttons JS --
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap.min.js"></script> -->
	<script type="text/javascript" language="javascript" src="https://kanyjo.com/lib/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.js"></script>
	<script type="text/javascript" language="javascript" src="https://kanyjo.com/lib/DataTables-1.10.11/extensions/Buttons/js/buttons.bootstrap.js"></script>
	<!-- JSZip --
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<!-- HTML5 export buttons JS --
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script> -->
	<script src="https://kanyjo.com/lib/DataTables-1.10.11/extensions/Buttons/js/buttons.html5.js"></script>
	<!-- Column visibility control JS --
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script> -->
	<script src="https://kanyjo.com/lib/DataTables-1.10.11/extensions/Buttons/js/buttons.colVis.js"></script>
	<!-- Flash export buttons JS -->
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
	<!-- Print button JS -->
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
	
	<!--
		https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	-->
	<!-- ColReorder JS -->
	<script src="https://cdn.datatables.net/colreorder/1.5.2/js/dataTables.colReorder.min.js"></script>
	<!-- FixedHeader JS -->
	<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
	<!-- Select JS -->
	<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
	<!-- Keys DataTables JavaScript -->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/keytable/2.5.2/js/dataTables.keyTable.min.js"></script>
	<!-- JQuery-UI JS --
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	<!-- TypeAhead JavaScript -->
	<!-- <script charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> -->
	<script charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
	<!-- Sort JavaScript -->
	<script charset="utf8" src="//cdn.datatables.net/plug-ins/1.10.20/sorting/intl.js"></script>
	<!-- Date Datatables JavaScript -->
	<script src="//cdn.datatables.net/plug-ins/1.10.11/sorting/date-eu.js"></script>
	
	<!-- Moment JS --
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.4/moment.min.js"></script> -->
	<!-- Locales for Moment JS --
	<script src="http://cdn.datatables.net/plug-ins/1.10.12/sorting/datetime-moment.js"></script>
	<!-- <script src="http://cdn.datatables.net/plug-ins/1.10.19/sorting/datetime-moment.js"></script> -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153527225-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-153527225-1');
	</script>
	
	<style>
	td.highlight { background-color: whitesmoke !important; }
	th { background: rgb(5,83,11); background: linear-gradient(0deg, rgba(5,83,11,1) 0%, rgba(68,140,19,1) 75%, rgba(20,110,13,1) 100%); color:#eee; word-wrap:break-word; }
	table.dataTable tbody tr.selected { background-color: rgba(170, 183, 209, 0.3); }
	table.dataTable tbody tr.selected { background: rgb(242,182,0); background: linear-gradient(0deg, rgba(242,182,0,1) 0%, rgba(242,195,53,1) 50%, rgba(242,182,0,1) 100%); }
	.text-wrap { white-space:normal; }
	.width-100 { max-width:100px; }
	td a { margin:5px; }
	thead input, thead select { width: 100%; }
	tfoot select { width: 100%; }
	<?php
		if ( $detect -> isMobile ( ) || $detect -> isTablet ( ) )
		{ ?>
			/* table.dataTable tbody tr:hover { background: #f0ad4e; } */
			table.dataTable tbody tr.selected
			{
				background: rgb(236,177,0);
				background: linear-gradient(0deg, rgba(236,177,0,1) 0%, rgba(242,195,53,1) 50%, rgba(236,177,0,1) 100%);
			}
	<?php
		} ?>
	
	.back-to-top 
	{
		cursor: pointer;
		position: fixed;
		bottom: 20px;
		right: 20px;
		display:none;
	}
	
	@-moz-document url-prefix()
	{
		#dateInicio, #dateFin { padding-top: 0px; }
	}
	</style>
</head>
<body>
	<div class="container">
		
		<!-- <hr/>
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="banner.png" width="100%">
			</div>
		</div> -->
		<hr/>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
						<?php
							if ( $detect -> isMobile ( ) || $detect -> isTablet ( ) )
							{ ?>
								<div class="col-xs-6 text-left">
									<img src="ipn.png" height="50px">
								</div>
								<div class="col-xs-6 text-right">
									<img src="logo-upiicsa.png" height="50px">
								</div>
								<div class="col-xs-10 col-xs-offset-1 text-center">
									<h3 style="color:#a12040; margin:0; padding:0;">Segunda entrega de actividades académicas durante el autoconfinamiento</h3>
								</div>
						<?php
							}
							else
							{ ?>
								<div class="col-md-2 text-left">
									<img src="ipn.png" height="100px">
								</div>
								<div class="col-md-8 text-center">
									<h1 style="color:#a12040;">Segunda entrega de actividades académicas durante el autoconfinamiento</h1>
								</div>
								<div class="col-md-2 text-right">
									<img src="logo-upiicsa.png" height="100px">
								</div>
						<?php
							} ?>
						</div>
					</div>
					<div class="panel-body" style="text-align:justify;">
						<center><h1 style="margin-top:-8px;"><small style="color:#666;">Comunidad estudiantil de la UPIICSA:</small></h1></center>
						<hr style="margin:0px;"/>
						<div class="row">
							<div class="col-md-12">
								<h4>
									En la presente página encontrarás las actividades que deberás realizar en el periodo de autoconfinamiento 
									como parte del Plan de Conclusión del Semestre Académico 20-2.
								</h4>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md-12 text-center">
								<div class="alert alert-info" style="font-family:Open Sans, sans-serif; margin-bottom:0px;"><b>Actualización</b> Miércoles 29 de Abril del 2020</div>
							</div>
						</div> -->
					</div>
					<!-- <div class="panel-footer"></div> -->
				</div>
			</div>
		</div>
		
		<div class="table-responsive">
		<table id="tabla" class="table table-striped table-bordered table-hover table-condensed" style="width:100%">
<thead>
		<tr>
            <th scope="col" data-label="Nombre(s)" style="vertical-align:middle;">Nombre(s)</th>
            <th scope="col" data-label="Primer apellido" style="vertical-align:middle;">Primer apellido</th>
            <th scope="col" data-label="Segundo apellido" style="vertical-align:middle;">Segundo apellido</th>
            <th scope="col" data-label="Correo electrónico" style="vertical-align:middle;">Correo electrónico</th>
            <th scope="col" data-label="Unidad de Aprendizaje" style="vertical-align:middle;">Unidad de Aprendizaje</th>
            <th scope="col" data-label="Archivos" style="vertical-align:middle;">Archivos</th>
            <th scope="col" data-label="Fecha de Entrega" style="vertical-align:middle;">Fecha de Entrega</th>
       </tr>
	   
	   <tr>
			<th class="filterhead" style="padding:5px;"></th>
			<th class="filterhead" style="padding:5px;"></th>
			<th class="filterhead" style="padding:5px;"></th>
			<th class="filterhead" style="padding:5px;"></th>
			<th class="filterhead" style="padding:5px;"></th>
			<th class="filterhead" style="padding:5px;"></th>
			<th class="filterhead" style="padding:5px;"></th>
		</tr>

</thead>
<tfoot>
	<tr>
		<th scope="col" data-label="Nombre(s)" style="vertical-align:middle;">Nombre(s)</th>
		<th scope="col" data-label="Primer apellido" style="vertical-align:middle;">Primer apellido</th>
		<th scope="col" data-label="Segundo apellido" style="vertical-align:middle;">Segundo apellido</th>
		<th scope="col" data-label="Correo electrónico" style="vertical-align:middle;">Correo electrónico</th>
		<th scope="col" data-label="Unidad de Aprendizaje" style="vertical-align:middle;">Unidad de Aprendizaje</th>
		<th scope="col" data-label="Archivos" style="vertical-align:middle;">Archivos</th>
		<th scope="col" data-label="Fecha de Entrega" style="vertical-align:middle;">Fecha de Entrega</th>
	</tr>
</tfoot>
</table>
</div>
<hr/>
	<!-- Top Click -->
	<button id="back-to-top" class="btn btn-primary btn-lg back-to-top" role="button" data-toggle="tooltip"
		onclick="$('html,body').animate({scrollTop:0},'slow'); document.getElementById('back-to-top').blur(); return false;">
		<i class="fa fa-chevron-up"></i> <!-- <span class="glyphicon glyphicon-chevron-up"></span> -->
	</button>
	</div>
	<script>
	// $(document).on("ready", function() 
	$(document).ready( function ()
	{
		$(window).scroll(function ()
		{
            if ( $(this).scrollTop() > 50 )
				$('#back-to-top').fadeIn();
			else
				$('#back-to-top').fadeOut();
        });
		
		$( '#tabla' ) . on ( 'mouseover', function ( )
		{
			$( '[data-toggle="tooltip"]' ) . blur ( );
		});
		
		$( '[data-toggle="tooltip"]' ) . tooltip
		({
			content:
			function ( )
			{
				return $(this).prop('title');
				
				// var tooltipContent = $('<div />').html( $.parseHTML( $(this).attr('title') ) );
				// return tooltipContent;
			},
			// title: 'hello', 
			container: 'body', 
			html: true,
			trigger: 'hover', // trigger: 'hover', 'click', 'focus'
			// placement: 'left',
			track: true
		});
		
		<!--|||||||||||||||||||||||||||||  Filtro por Fecha de Solicitud  |||||||||||||||||||||||||||||-->
		$( '#tabla' ) . append ( '<caption style="background:#eee; margin:0px 0px 10px 0px; padding:8px 0px; border-radius:5px;">' + 
											// '<div class="row">' +
											<?php
												if ( $detect -> isMobile ( ) || $detect -> isTablet ( ) )
												{ ?> 
													'<div class="col-xs-12">' +
														'<div class="col-xs-2"><label style="padding-top:7px;">Fecha de Entrega:</label></div>' +
														'<label class="col-xs-1" style="padding-top:17px;">De</label>' +
														'<div class="col-xs-3">' +
															'<div class="input-group date" style="padding-top:10px;">' +
																'<label class="input-group-addon" for="dateInicio">' +
																	'<i class="fa fa-calendar"></i>' +
																'</label>' +
																'<input id="dateInicio" name="dateInicio" type="date" class="form-control fecha" />' +
															'</div>' +
														'</div>' +
														'<label class="col-xs-1" style="padding-top:17px;">Hasta</label>' +
														'<div class="col-xs-3">' +
															'<div class="input-group date" style="padding-top:10px;">' +
																'<label class="input-group-addon" for="dateFin">' +
																	'<i class="fa fa-calendar"></i>' +
																'</label>' +
																'<input id="dateFin" name="dateFin" type="date" class="form-control fecha" />' +
															'</div>' +
														'</div>' +
														'<div class="col-xs-2" style="padding-top:10px;">' +
															'<button id ="filterDateBtn" type="button"  class="btn btn-default btn-block btn-md"><i class="fa fa-filter fa-md"></i> Filtrar</button>' +
														'</div>' +
													'</div>' +
											<?php
												} 
												else
												{ ?> 
												'<div class="col-md-12">' +
													'<div class="col-md-2"><label style="padding-top:7px;">Fecha de Entrega:</label></div>' +
													'<label class="col-md-1" style="padding-top:7px;">De</label>' +
													'<div class="col-md-3">' +
														'<div class="input-group date">' +
															'<label class="input-group-addon" for="dateInicio">' +
																'<i class="fa fa-calendar"></i>' +
															'</label>' +
															'<input id="dateInicio" name="dateInicio" type="date" class="form-control fecha" />' +
														'</div>' +
													'</div>' +
													'<label class="col-md-1" style="padding-top:7px;">Hasta</label>' +
													'<div class="col-md-3">' +
														'<div class="input-group date">' +
															'<label class="input-group-addon" for="dateFin">' +
																'<i class="fa fa-calendar"></i>' +
															'</label>' +
															'<input id="dateFin" name="dateFin" type="date" class="form-control fecha" />' +
														'</div>' +
													'</div>' +
													'<div class="col-md-2">' +
														'<button id ="filterDateBtn" type="button"  class="btn btn-default btn-block btn-md"><i class="fa fa-filter fa-md"></i> Filtrar</button>' +
													'</div>' +
												'</div>' +
											<?php
												} ?> 
											'</caption>' );
		
		<?php
			// Include and instantiate the class.
			// require_once "./Mobile_Detect.php";
			// $detect = new Mobile_Detect();
			
			if ( ! ( $detect -> isMobile ( ) || $detect -> isTablet ( ) ) )
			{ ?>
				listar();
		<?php
			}
			else
			{ ?>
				listarMobil();
		<?php
			} ?>
	});
	
	$.fn.dataTable.ext.order.intl();
	
	// Filter a column on a specific date range. Note that you will likely need to change the id's on the inputs and the columns in which the start and end date exist.
	$.fn.dataTableExt.afnFiltering.push ( function ( oSettings, aData, iDataIndex ) {
		if ( oSettings . nTable != document . getElementById ( "tabla" ) )
			return true;
		
		var iFini = document.getElementById ( 'dateInicio' ) . value . replace ( "-", "" ) . replace ( "-", "" );
		var iFfin = document.getElementById ( 'dateFin' ) . value . replace ( "-", "" ) . replace ( "-", "" );
		
		var iStartDateCol = 6;
		var iEndDateCol = 6;
		
		var datofini=aData[iStartDateCol].substring(6,10) + aData[iStartDateCol].substring(3,5)+ aData[iStartDateCol].substring(0,2);
		var datoffin=aData[iEndDateCol].substring(6,10) + aData[iEndDateCol].substring(3,5)+ aData[iEndDateCol].substring(0,2);

		if ( iFini === "" && iFfin === "" )
		{
			return true;
		}
		else if ( iFini <= datofini && iFfin === "")
		{
			return true;
		}
		else if ( iFfin >= datoffin && iFini === "")
		{
			return true;
		}
		else if (iFini <= datofini && iFfin >= datoffin)
		{
			return true;
		}
		return false;
	});
	
	var listar = function()
	{
		var dataSrc = [];
		var lastIdx = null;
		
		var table = $("#tabla").DataTable(
		{
			"searchHighlight": true,
			// "deferRender": true,
			"processing": true,
			// "serverSide": true,
			"orderCellsTop": true,
			// "destroy": true,
			"ajax": 'data.txt',
			"initComplete":
				function(settings, json)
				{
					// var pag = $("#page_info").val();
					// table.page(pag-1).draw(false);
					
					// table.on( 'search.dt', function () 
					// { 
						// $("#buscar").val( table.search());
					// } );
					// if ($("#buscar").val() != '')
						// table.search($("#buscar").val()).draw();
					
					// console.log( 'DataTables has finished its initialisation.' );
					
					// this.api().row(':eq(' + $("#events").val() + ')', { page: 'current' }).select();
					
					// function sortAlphaNum(as,bs)
					// {
						// var a, b, a1, b1, i= 0, L, rx=  /(\d+)|(\D+)/g, rd=  /\d/;
						// if(isFinite(as) && isFinite(bs)) return as - bs;
						// a= String(as).toLowerCase();
						// b= String(bs).toLowerCase();
						// if(a=== b) return 0;
						// if(!(rd.test(a) && rd.test(b))) return a> b? 1:-1;
						// a= a.match(rx);
						// b= b.match(rx);
						// L= a.length> b.length? b.length:a.length;
						// while(i<L){
							// a1= a[i];
							// b1= b[i++];
							// if(a1!== b1){
								// if(isFinite(a1) && isFinite(b1)){
									// if(a1.charAt(0)=== '0') a1= '.' + a1;
									// if(b1.charAt(0)=== '0') b1= '.' + b1;
									// return a1 - b1;
								// }
								// else return a1> b1? 1:-1;
							// }
						// }
						// return a.length - b.length;
					// }
					
					function ordenar(a,b)
					{
						var partsA =a.split('/');
						var d1 = new Date(partsA[2], partsA[1] - 1, partsA[0]);
						
						var partsB =b.split('/');
						var d2 = new Date(partsB[2], partsB[1] - 1, partsB[0]);
						
						return (d1== d2) ? 0 : (d1 > d2) ? 1 : -1;
					}
					
					const compare = new Intl.Collator ().compare;
					
					// // this.api().columns().every( function ()
					// this.api().columns([ 0, 1, 2, 3, 4 ]).every( function ()
					// {	
						// var column = this;
						// var select = $('<select style="color:#000;"><option value="">' + this.header().innerHTML + '</option></select>')
						// // var select = $('<select style="color:#000;"><option value="">' + 'Filtro' + '</option></select>')
								// .appendTo( $(column.footer()).empty() )
								// // .appendTo( $(column.header()))
								// // // .appendTo( '#filter' )
								// .on ( 'change', function ()
								// {
									// var val = $.fn.dataTable.util.escapeRegex($(this).val());
									// column.search( val ? '^'+val+'$' : '', true, false ).draw();
									// // column.search( this.value ).draw();
								// });
						
						// // column.data().unique().sort().each( function ( d, j )
						// column.cells('', column[0]).render('display').sort(compare).unique().each( function ( d, j )
						// {
							// var val = $('<div/>').html(d).text();
							
							// // select.append ( '<option value="' + d + '">' + d + '</option>' )
							// if ( column.search() === '^'+d+'$' )
								// // select.append( '<option value="' + d + '" selected="selected">' + d + '</option>' )
								// select.append( '<option value="' + val + '" selected="selected">' + val + '</option>' )
							// else
								// // select.append( '<option value="' + d + '">' + d + '</option>' )
								// select.append( '<option value="' + val + '">' + val + '</option>' );
						// });
					// });
					
					$(".filterhead").not(":eq(5)").each( function ( i )
					{
						const compare = new Intl.Collator ().compare;
						
						if ( i == 5 ) i++;
						
						var select = $('<select class="filtro" style="font-family:Open sans, sans serif; color:#000;"><option value="">' + '&#128246; Filtro' + '</option></select>')
							.appendTo( $(this).empty() )
							.on( 'change', function ( )
							{
								var term = $(this).val();
								table.column( i ).search(term, false, false ).draw();
							});
							
						if ( i == 6 )
						{
							table.column( i ).data().unique().sort(ordenar).each( function ( d, j )
							{
								if ( j % 2 == 0 )
									select.append( '<option value="'+d+'" style="background:#D9EBF8; font-weight:normal; font-family: Open Sans, sans-serif; font-size:14px;">'+d+'</option>' )
								else
									select.append( '<option value="'+d+'" style="background:#F6FAFD; font-weight:normal; font-family: Open Sans, sans-serif; font-size:14px;">'+d+'</option>' )
							});
						}
						else
						{
							// column.cells('', column[0]).render('display').sort(sortAlphaNum).unique().each( function ( d, j )
							table.column( i ).data().unique().sort(compare).each( function ( d, j )
							{
								if ( j % 2 == 0 )
									select.append( '<option value="'+d+'" style="background:#D9EBF8; font-weight:normal; font-family: Open Sans, sans-serif; font-size:14px;">'+d+'</option>' )
								else
									select.append( '<option value="'+d+'" style="background:#F6FAFD; font-weight:normal; font-family: Open Sans, sans-serif; font-size:14px;">'+d+'</option>' )
							});
						}
					});
					 
					var api = this.api();

					// Populate a dataset for autocomplete functionality using data from first, second and third columns
					table . cells ( ) . every ( function ( )
					// api . table ( ) . cells ( ) . every ( function ( )
					// api . cells ( 'tr', [ 0, 1 ] ) . every ( function ( )
					{
						// Get cell data as plain text
						var data = $('<div>').html(this.data()).text();
						// var data = this.data();
						if ( dataSrc.indexOf(data) === -1 ) { dataSrc.push(data); }
					});
					
					// Sort dataset alphabetically
					dataSrc.sort(compare);
					
					// Initialize Typeahead plug-in
					$('.dataTables_filter input[type="search"]', api.table().container())
						.typeahead(
						{
						   source: dataSrc,
						   afterSelect: function(value)
							{
								api.search(value).draw();
							}
						}
					);
				},
			"lengthMenu": [[ 10, 15, 25, 50, 100, -1 ],[ 10, 15, 25, 50, 100, "Todo" ]],
			"pagingType": "full_numbers",
			// "fixedHeader": true,
			"fixedHeader": 
			{
				header: true,
				footer: false
			},
			"select": { "style": "single" }, // "style": "multi", "style": "single"
			"order": [[ 0, "asc" ], [1, "asc"], [ 2, "asc" ], [3, "asc"], [ 4, "asc" ], [ 6, "asc" ]],
			"createdRow": function( row, data, index )
			{
				var dia = data[6] . substring ( 0, 2 );
				var mes = data[6] . substring ( 3, 5 );
				var anio = data[6] . substring ( 6, 10 );
				
				var fecha = new Date ( anio, mes - 1, dia );
				// var date = new Date ( data[6] . replace ( /-+/g, '/' ) );
				
				let options =
				{
					weekday: 'long',
					year: 'numeric',
					month: 'long',
					day: 'numeric'
				};
				
				fecha = fecha . toLocaleDateString ( 'es-MX', options );
				
				console . log ( fecha );
				
				// ( mes == 01 ) ? mes = "Enero" : ( mes == 02 ) ? mes = "Febrero" : ( mes == 03 ) ? mes = "Marzo" : ( mes == 04 ) ? mes = "Abril" :
				// ( mes == 05 ) ? mes = "Mayo" : ( mes == 06 ) ? mes = "Junio" : ( mes == 07 ) ? mes = "Julio" : ( mes == 08 ) ? mes = "Agosto" :
				// ( mes == 09 ) ? mes = "Septiembre" : ( mes == 10 ) ? mes = "Octubre" : ( mes == 11 ) ? mes = "Noviembre" : ( mes == 12 ) ? mes = "Diciembre" :
				// mes = "Error";
				
				// console . log ( "Día: " + dia + " Mes: " + mes + " Año: " + anio );
				
				var countFiles = ( data [ 5 ] . match ( /Descargar/g ) || [] ) . length;
				
				$('td', row).eq(0) . addClass ( 'text-left' ) . css('vertical-align', 'middle').css('word-wrap','break-word');
				$('td', row).eq(1) . addClass ( 'text-left' ) . css('vertical-align', 'middle');
				$('td', row).eq(2) . addClass ( 'text-left' ) . css('vertical-align', 'middle');
				$('td', row).eq(3) . addClass ( 'text-left' ) . css('vertical-align', 'middle').css('font-family', 'Open Sans, sans-serif');
				$('td', row).eq(4) . addClass ( 'text-left' ) . css('vertical-align', 'middle').css('font-weight', 'bold').css('font-family', 'Open Sans, sans-serif');
				$('td', row) . eq ( 5 ) . css ( { 'cursor' : 'default' , 'padding-left' : '9px' , 'padding-bottom' : '10px' , 'vertical-align' : 'middle' } ) .
					attr ( "data-toggle", "tooltip" ) .  attr ( "title", '<span style="font-family:Open Sans, sans-serif;"><i class="fa fa-user fa-md"></i>&nbsp; <b>' + data[0] + ' ' + data[1] + ' ' + data[2] + '</b></span>' + '&nbsp; <span class="badge">' + countFiles + '</span>' );
				$('td', row).eq(6) . addClass ( 'text-center' ) . css ( { 'vertical-align' : 'middle' , 'font-family' : '"Roboto",sans-serif' } ) .
					attr ( "data-toggle", "tooltip" ) .  attr ( "title", '<span style="font-family:Open Sans, sans-serif;"><i class="fa fa-calendar fa-md"></i>&nbsp; <b>' + fecha + '</b></span>' ) .
					attr ( "data-placement", "left" );
			},
			// "colReorder": true,
			"keys": true,
			// "autoWidth": true,
			"columnDefs": 
			[
				{
                    render: function (data, type, full, meta)
					{
                        return "<div class='text-wrap width-100'>" + data + "</div>";
                    },
					"targets": [ 0, 1, 2 ],
                },
				{ targets: [ 0, 1, 2, 3, 4 ], type: 'locale-compare' },
				{ targets: 0, orderData: [ 0, 1, 2, 3, 4 ] },
				{ targets: 1, orderData: [ 1, 0, 2, 3, 4 ] },
				{ targets: 2, orderData: [ 2, 0, 1, 3, 4 ] },
				{ targets: 3, orderData: [ 3, 0, 1, 2, 4 ] },
				{ targets: 4, orderData: [ 4, 0, 1, 2, 3 ] },
				{ targets: 5, orderData: [ 5, 0, 1, 2, 3, 4 ] },
				{ targets: 6, orderData: [ 6, 0, 1, 2, 3, 4, 5 ], type: "date-eu" },
				{ width: "250px", targets: 5 },
				{ width: "70px", targets: 6 },
				
				// {
					// "searchable": true,
					// "orderable": true,
					// // "targets": 0
					// // type : 'date',
					// "targets": [ 1, 2, 3, 4 ],
					// "visible": true
				// }
			],
			"dom": // "fBlrtip",
				"<'row'<'col-sm-5'f><'col-sm-4'B><'col-sm-3 text-right'l><'clear'><'col-sm-6'i><'col-sm-6 small'p>>" + 
				"<'row'<'col-sm-12'tr>>" + 
				"<'row'<'form-inline'<'col-sm-4'i><'col-sm-4 text-center'l><'col-sm-4 small'p>>>",
			"buttons":
			[
				<!------------------ Botón Actualizar ---------------------->
				{
					title: 'Actualizar',
					text: '<i class="fa fa-sync-alt fa-lg text-primary"></i>',
					className: 'btn btn-default btn-sm',
					titleAttr: 'Actualizar tabla',
					action: function ( e, dt, node, config )
					{
						// listar();
						// table.reload();
						// table.ajax.reload();
						// table . colReorder . reset ( );
						dt . columns ( config . show ) . visible ( true );
						dt . order ( [ [ 0, 'asc'], [ 1, 'asc' ], [ 2, 'asc' ], [ 3, 'asc' ], [ 4, 'asc' ], [ 6, 'asc' ] ] ) . draw ( false );
						$( '#dateInicio' ) . val ( '' );
						$( '#dateFin' ) . val ( '' );
						$( '.filtro' ) . prop ( 'selectedIndex', 0 ) . change ( );
						$('.dataTables_length select') . prop ( 'selectedIndex', 0 ) . change ( );
						$( '#tabla' ) . DataTable ( ) . search ( '' ) . draw ( );
						$( '#tabla' ) . DataTable() . ajax . reload ( );
					}
				},
				<!------------------ Botón Excel ---------------------->
				{
					extend:    'excelHtml5',
					className: "btn btn-default btn-sm",
					// filename: 'pasantes_inscritos',
					// title: 	'Excel',
					text:	'<i class="fa fa-file-excel-o fa-lg text-success"></i>',
					titleAttr: 'Excel',
					autoFilter: true,
					exportOptions: 
					{
						columns: [ 0, 1, 2, 3, 4, 6 ], 
						// columns: [ 0, ':visible' ]
						orthogonal: 'excel',
						modifier:
						{
							order: 'current',
							page: 'all',
							selected: false,
						},
					},
					customize: function ( xlsx )
					{
						var sheet = xlsx.xl.worksheets['sheet1.xml'];
						var col = $('col', sheet);
						col.each(function () 
						{
							$(this).attr('width', 25);
						});
						// $('row c', sheet).attr( 's', '20' );	// Color de fondo
						// $('row:first c', sheet).attr( 's', '25' );	// Borde
						// $('row c', sheet).attr('s', '25');
						// $('row:first c', sheet).attr( 's', '40' );
						// $('row:first c', sheet).attr( 's', '55' );
						
						// $('row c[r*="C"]', sheet).each( function () 
						// {
							// $(this).attr( 's', '20' );
							// // Get the value
							// // if ( $('is t', this).text() == 'New York' ) 
							// // {
								// // $(this).attr( 's', '20' );
							// // }
						// });
						
						// $('row c[r^="A"]', sheet).attr('width', 20);
						// $(col[0]).attr('width', 11);
					},
					somethingLikeRender: function (data, type, row, meta)
					{
						// EDIT CELLS...
					}
				},
				<!------------------ Botón Columnas ---------------------->
				{
					extend: 'colvis',
					className: 'btn btn-default btn-sm',
					text: '<i class="fa fa-columns fa-lg"></i>',
					titleAttr: 'Mostrar columnas',
				}
			],
			"drawCallback":
				function ( settings )
				{
					$('[data-toggle="tooltip"]').tooltip
					({
						content:
						function ( )
						{
							return $(this).prop('title');
							
							// var tooltipContent = $('<div />').html( $.parseHTML( $(this).attr('title') ) );
							// return tooltipContent;
						},
						// title: 'hello',
						container: 'body', 
						html: true,
						trigger: 'hover',
						// placement: 'auto',
						delay: { "show": 50, "hide": 50 },
						placement: function ( context, source )
						{
							var position = $( source ) . position ( );
							
							if ( position . top < 200 )
								return "bottom";
							return "top";
						}
					}) ;
				},
			"language": 
			{
				"sProcessing":	"<i class='fa fa-spinner fa-spin fa-2x fa-fw'></i> &nbsp; Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla", // "Ningún dato disponible en esta tabla",
				"sInfo":           "<i class='fa fa-check'></i> Mostrando registros del <b>_START_</b> al <b>_END_</b> de un <b>Total</b> de <b>_TOTAL_</b> registros",
				"sInfoEmpty":      "<i class='fa fa-check'></i> Mostrando registros del <b>0</b> al <b>0</b> de un <b>Total</b> de <b>0</b> registros",
				"sInfoFiltered":   "<br><i class='fa fa-check'></i> Filtrado de un <b>Total</b> de <b>_MAX_</b> registros",
				"sInfoPostFix":    "",
				"sSearch":         "&nbsp;&nbsp;&nbsp;<i class='fa fa-search fa-md'></i>", // "<span class='glyphicon glyphicon-search'></span>",
				"searchPlaceholder": "Buscar registro...",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "<i class='fa fa-spinner fa-spin fa-2x fa-fw'></i> &nbsp; Cargando...",
				"oPaginate":
				{
					"sFirst":    	 "<span class='text-info'>Primero</span>",	// "<i class='fa fa-chevron-left text-primary' aria-hidden='true'></i><i class='fa fa-chevron-left text-primary' aria-hidden='true'></i>",
					"sPrevious":  	"<span class='text-info'>Anterior</span>",	// "<i class='fa fa-chevron-left text-primary' aria-hidden='true'></i>",
					"sNext":     	 "<span class='text-info'>Siguiente</span>",	// "<i class='fa fa-chevron-right text-primary' aria-hidden='true'></i>",
					"sLast":     	 "<span class='text-info'>Último</span>", // "<i class='fa fa-chevron-right text-primary' aria-hidden='true'></i><i class='fa fa-chevron-right text-primary' aria-hidden='true'></i>",
				},
				"oAria":
				{
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				},
				"select": 
				{
					"rows":
					{
						_: '', // <b><i class="fa fa-check"></i> %d filas seleccionadas',
						0: '',
						1: '', // <b><i class="fa fa-check"></i> Una </b> fila seleccionada'
					}
				}
			}
		});
		
		table . on ( 'user-select', function ( e, dt, type, cell, originalEvent )
		{
			if ( $( cell.node ( ) ) . parent ( ) . hasClass ( 'selected' ) )
				e . preventDefault ( );
		});
		
		$( '#filterDateBtn' ) . on ( 'click', function ( )
		{
			table.draw();
		});
		
		<?php
			if ( ! ( $detect -> isMobile ( ) || $detect -> isTablet ( ) ) )
			{ ?>
				$('.dataTables_filter input[type="search"]').attr('placeholder','Buscar registro...').css({'min-width':'400px', 'font-family':'Calibri', 'font-size':'16px', 'display':'inline-block'});
				$('.dataTables_info') . css ( { 'font-family' : '"Roboto",sans-serif', 'font-size' : '14px' } );
				$( '.dataTables_processing' ) . css ( { 'margin-top' : '10px' } );
		<?php
			} ?>
	}
	
	var listarMobil = function()
	{
		var dataSrc = [];
		
		var table = $("#tabla").DataTable(
		{
			"searchHighlight": true,
			"deferRender": true,
			"processing": true,
			"orderCellsTop": true,
			"ajax": 'data.txt',
			"orderCellsTop": true,
			"initComplete":
				function()
				// function(settings, json)
				{
					// var pag = $("#page_info").val();
					// table.page(pag-1).draw(false);
					
					// table.on( 'search.dt', function () 
					// { 
						// $("#buscar").val( table.search());
					// } );
					// if ($("#buscar").val() != '')
						// table.search($("#buscar").val()).draw();
					
					// console.log( 'DataTables has finished its initialisation.' );
					
					// this.api().row(':eq(' + $("#events").val() + ')', { page: 'current' }).select();
					
					// function sortAlphaNum(as,bs)
					// {
						// var a, b, a1, b1, i= 0, L, rx=  /(\d+)|(\D+)/g, rd=  /\d/;
						// if(isFinite(as) && isFinite(bs)) return as - bs;
						// a= String(as).toLowerCase();
						// b= String(bs).toLowerCase();
						// if(a=== b) return 0;
						// if(!(rd.test(a) && rd.test(b))) return a> b? 1:-1;
						// a= a.match(rx);
						// b= b.match(rx);
						// L= a.length> b.length? b.length:a.length;
						// while(i<L){
							// a1= a[i];
							// b1= b[i++];
							// if(a1!== b1){
								// if(isFinite(a1) && isFinite(b1)){
									// if(a1.charAt(0)=== '0') a1= '.' + a1;
									// if(b1.charAt(0)=== '0') b1= '.' + b1;
									// return a1 - b1;
								// }
								// else return a1> b1? 1:-1;
							// }
						// }
						// return a.length - b.length;
					// }
					
					function ordenar(a,b)
					{
						var partsA =a.split('/');
						var d1 = new Date(partsA[2], partsA[1] - 1, partsA[0]);
						
						var partsB =b.split('/');
						var d2 = new Date(partsB[2], partsB[1] - 1, partsB[0]);
						
						return (d1== d2) ? 0 : (d1 > d2) ? 1 : -1;
					}
					
					const compare = new Intl.Collator ().compare;
					
					// // this.api().columns().every( function ()
					// this.api().columns([ 0, 1, 2, 3, 4 ]).every( function ()
					// {	
						// var column = this;
						// var select = $('<select style="color:#000;"><option value="">' + this.header().innerHTML + '</option></select>')
						// // var select = $('<select style="color:#000;"><option value="">' + 'Filtro' + '</option></select>')
								// .appendTo( $(column.footer()).empty() )
								// // .appendTo( $(column.header()))
								// // // .appendTo( '#filter' )
								// .on ( 'change', function ()
								// {
									// var val = $.fn.dataTable.util.escapeRegex($(this).val());
									// column.search( val ? '^'+val+'$' : '', true, false ).draw();
									// // column.search( this.value ).draw();
								// });
						
						// // column.data().unique().sort().each( function ( d, j )
						// column.cells('', column[0]).render('display').sort(compare).unique().each( function ( d, j )
						// {
							// var val = $('<div/>').html(d).text();
							
							// // select.append ( '<option value="' + d + '">' + d + '</option>' )
							// if ( column.search() === '^'+d+'$' )
								// // select.append( '<option value="' + d + '" selected="selected">' + d + '</option>' )
								// select.append( '<option value="' + val + '" selected="selected">' + val + '</option>' )
							// else
								// // select.append( '<option value="' + d + '">' + d + '</option>' )
								// select.append( '<option value="' + val + '">' + val + '</option>' );
						// });
					// });
					
					$(".filterhead").not(":eq(5)").each( function ( i )
					{
						const compare = new Intl.Collator ().compare;
						
						if ( i == 5 ) i++;
						
						var select = $('<select class="filtro" style="color:#000;"><option value="">' + '&#128246; Filtro' + '</option></select>')
							.appendTo( $(this).empty() )
							.on( 'change', function ( )
							{
								var term = $(this).val();
								table.column( i ).search(term, false, false ).draw();
							});
							
						if ( i == 6 )
						{
							table.column( i ).data().unique().sort(ordenar).each( function ( d, j )
							{
								select.append( '<option value="'+d+'" style="background:#D9EBF8; font-weight:normal; font-family: Open Sans, sans-serif; font-size:14px;">'+d+'</option>' )
							});
						}
						else
						{
							// column.cells('', column[0]).render('display').sort(sortAlphaNum).unique().each( function ( d, j )
							table.column( i ).data().unique().sort(compare).each( function ( d, j )
							{
								select.append( '<option value="'+d+'" style="background:#D9EBF8; font-weight:normal; font-family: Open Sans, sans-serif; font-size:14px;">'+d+'</option>' )
							});
						}
					});
						
					// var api = this.api();

					// // Populate a dataset for autocomplete functionality using data from first, second and third columns
					// // table . cells ( ) . every ( function ( )
					// // api . table ( ) . cells ( ) . every ( function ( )
					// api.cells('tr', [ 0, 1, 2, 3, 4, 6 ]).every(function()
					// {
						// // Get cell data as plain text
						// // var data = $('<div>').html(this.data()).text();
						// var data = this.data();
						// if ( dataSrc.indexOf(data) === -1 ) { dataSrc.push(data); }
					// });
					
					// // Sort dataset alphabetically
					// dataSrc.sort(compare);
					
					// // Initialize Typeahead plug-in
					// $('.dataTables_filter input[type="search"]', api.table().container())
						// .typeahead(
						// {
						   // source: dataSrc,
						   // afterSelect: function(value)
							// {
							  // api.search(value).draw();
							// }
						// }
					// );
				},
			"select": { "style": "single" }, // "style": "multi", "style": "single"
			"lengthMenu": [[ 10, 15, 25, 50, 100, -1 ],[ 10, 15, 25, 50, 100, "Todo" ]],
			"pagingType": "full_numbers",
			"order": [[ 0, "asc" ], [1, "asc"], [ 2, "asc" ], [3, "asc"], [ 4, "asc" ]],
			"createdRow": function( row, data, index )
			{
				var dia = data[6] . substring ( 0, 2 );
				var mes = data[6] . substring ( 3, 5 );
				var anio = data[6] . substring ( 6, 10 );
				
				var fecha = new Date ( anio, mes - 1, dia );
				// var date = new Date ( data[6] . replace ( /-+/g, '/' ) );
				
				let options =
				{
					weekday: 'long',
					year: 'numeric',
					month: 'long',
					day: 'numeric'
				};
				
				fecha = fecha . toLocaleDateString ( 'es-MX', options );
				
				// console . log ( fecha );
				
				// ( mes == 01 ) ? mes = "Enero" : ( mes == 02 ) ? mes = "Febrero" : ( mes == 03 ) ? mes = "Marzo" : ( mes == 04 ) ? mes = "Abril" :
				// ( mes == 05 ) ? mes = "Mayo" : ( mes == 06 ) ? mes = "Junio" : ( mes == 07 ) ? mes = "Julio" : ( mes == 08 ) ? mes = "Agosto" :
				// ( mes == 09 ) ? mes = "Septiembre" : ( mes == 10 ) ? mes = "Octubre" : ( mes == 11 ) ? mes = "Noviembre" : ( mes == 12 ) ? mes = "Diciembre" :
				// mes = "Error";
				
				var countFiles = ( data [ 5 ] . match ( /Descargar/g ) || [] ) . length;
				
				$('td', row).eq(0).addClass ( 'text-left' ).css('vertical-align', 'middle');
				$('td', row).eq(1).addClass ( 'text-left' ).css('vertical-align', 'middle');
				$('td', row).eq(2).addClass ( 'text-left' ).css('vertical-align', 'middle');
				$('td', row).eq(3).addClass ( 'text-left' ).css('vertical-align', 'middle');
				$('td', row).eq(4).addClass ( 'text-left' ) . css ( { 'vertical-align' : 'middle' , 'font-weight' : 'bold' } ) .
					attr ( "data-toggle", "tooltip" ) .  attr ( "title", '<span style="font-family:Open Sans, sans-serif;"><i class="fa fa-user fa-md"></i>&nbsp; ' + data[0] + ' ' + data[1] + ' ' + data[2] + '</span>' + '&nbsp; <span class="badge">' + countFiles + '</span>' );
				$('td', row).eq(5).css('padding-bottom', '10px') . css('vertical-align', 'middle');
				$('td', row).eq(6).addClass ( 'text-center' ) . css ( { 'vertical-align' : 'middle' , 'font-family' : '"Roboto",sans-serif' } ) .
					attr ( "data-toggle", "tooltip" ) .  attr ( "title", '<span><i class="fa fa-calendar fa-md"></i>&nbsp; <b>' + fecha + '</b></span>' );
			},
			// "colReorder": true,
			"keys": true,
			"columnDefs": 
			[
				{
                    render: function (data, type, full, meta) {
                        return "<div class='text-wrap width-100'>" + data + "</div>";
                    },
					"targets": [ 0, 1, 2 ],
                },
				{ targets: [ 0, 1, 2, 3, 4 ], type: 'locale-compare' },
				{ targets: 0, orderData: [ 0, 1, 2, 3, 4 ] },
				{ targets: 1, orderData: [ 1, 0, 2, 3, 4 ] },
				{ targets: 2, orderData: [ 2, 0, 1, 3, 4 ] },
				{ targets: 3, orderData: [ 3, 0, 1, 2, 4 ] },
				{ targets: 4, orderData: [ 4, 0, 1, 2, 3 ] },
				{ targets: 5, orderData: [ 5, 0, 1, 2, 3, 4 ] },
				{ targets: 6, orderData: [ 6, 0, 1, 2, 3, 4, 5 ], type: "date-eu" },
			],
			"dom": // "fBlrtip",
				"<'row'<'col-xs-4 col-xs-offset-4'B>>" + 
				"<'row'<'col-md-12'f><'col-md-12'l><'clear'><'col-sm-6'i><'col-sm-6 small'p>>" + 
				"<'row'<'col-sm-12'tr>>" + 
				"<'row'<'form-inline'<'col-sm-4'i><'col-sm-4 text-center'l><'col-sm-4 small'p>>>",
			"buttons":
			[
				<!------------------ Botón Actualizar ---------------------->
				{
					title: 'Actualizar',
					text: '<i class="fa fa-sync-alt fa-lg text-primary"></i>',
					className: 'btn btn-default btn-sm',
					titleAttr: 'Actualizar tabla',
					action: function ( e, dt, node, config )
					{
						// listar();
						// table.reload();
						// table.ajax.reload();
						// table . colReorder . reset ( );
						dt . columns ( config . show ) . visible ( true );
						dt . order ( [ [ 0, 'asc'], [ 1, 'asc' ], [ 2, 'asc' ], [ 3, 'asc' ], [ 4, 'asc' ], [ 6, 'asc' ] ] ) . draw ( false );
						$( '#dateInicio' ) . val ( '' );
						$( '#dateFin' ) . val ( '' );
						$( '.filtro' ) . prop ( 'selectedIndex', 0 ) . change ( );
						$('.dataTables_length select') . prop ( 'selectedIndex', 0 ) . change ( );
						$( '#tabla' ) . DataTable ( ) . search ( '' ) . draw ( );
						$( '#tabla' ) . DataTable() . ajax . reload ( );
					}
				},
				<!------------------ Botón Excel ---------------------->
				{
					extend:    'excelHtml5',
					className: "btn btn-default btn-sm",
					// filename: 'pasantes_inscritos',
					// title: 	'Excel',
					text:	'<i class="fa fa-file-excel-o fa-lg text-success"></i>',
					titleAttr: 'Excel',
					autoFilter: true,
					exportOptions: 
					{
						columns: [ 0, 1, 2, 3, 4, 6 ], 
						// columns: [ 0, ':visible' ]
						orthogonal: 'excel',
						modifier:
						{
							order: 'current',
							page: 'all',
							selected: false,
						},
					},
					customize: function ( xlsx )
					{
						var sheet = xlsx.xl.worksheets['sheet1.xml'];
						var col = $('col', sheet);
						col.each(function () 
						{
							$(this).attr('width', 25);
						});
						// $('row c', sheet).attr( 's', '20' );	// Color de fondo
						// $('row:first c', sheet).attr( 's', '25' );	// Borde
						// $('row c', sheet).attr('s', '25');
						// $('row:first c', sheet).attr( 's', '40' );
						// $('row:first c', sheet).attr( 's', '55' );
						
						// $('row c[r*="C"]', sheet).each( function () 
						// {
							// $(this).attr( 's', '20' );
							// // Get the value
							// // if ( $('is t', this).text() == 'New York' ) 
							// // {
								// // $(this).attr( 's', '20' );
							// // }
						// });
						
						// $('row c[r^="A"]', sheet).attr('width', 20);
						// $(col[0]).attr('width', 11);
					},
					somethingLikeRender: function (data, type, row, meta)
					{
						// EDIT CELLS...
					}
				},
				<!------------------ Botón Columnas ---------------------->
				{
					extend: 'colvis',
					className: 'btn btn-default btn-sm',
					text: '<i class="fa fa-columns fa-lg"></i>',
					titleAttr: 'Mostrar columnas',
				}
			],
			"drawCallback":
				function ( settings )
				{
					$('[data-toggle="tooltip"]').tooltip
					({
						content:
						function ( )
						{
							return $(this).prop('title');
							
							// var tooltipContent = $('<div />').html( $.parseHTML( $(this).attr('title') ) );
							// return tooltipContent;
						},
						title: 'hello', 
						container: 'body', 
						html: true,
						trigger: 'hover', // trigger: 'hover', 'click', 'focus'
						// placement: 'auto top'
						// track: true
					});
				},
			"language": 
			{
				"sProcessing":	"<i class='fa fa-spinner fa-spin fa-2x fa-fw'></i> &nbsp; Cargando...",
				"sLengthMenu":     "Mostrar _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla", // "Ningún dato disponible en esta tabla",
				"sInfo":           "<i class='fa fa-check'></i> Mostrando registros del <b>_START_</b> al <b>_END_</b> de un <b>Total</b> de <b>_TOTAL_</b> registros",
				"sInfoEmpty":      "<i class='fa fa-check'></i> Mostrando registros del <b>0</b> al <b>0</b> de un <b>Total</b> de <b>0</b> registros",
				"sInfoFiltered":   "<br><i class='fa fa-check'></i> Filtrado de un <b>Total</b> de <b>_MAX_</b> registros",
				"sInfoPostFix":    "",
				"sSearch":         "&nbsp;&nbsp;&nbsp;<i class='fa fa-search fa-md'></i>", // "<span class='glyphicon glyphicon-search'></span>",
				"searchPlaceholder": "Buscar registro...",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": " ", // "<i class='fa fa-spinner fa-spin fa-1x fa-fw'></i> &nbsp; Cargando...",
				"oPaginate":
				{
					"sFirst":    	 "<span class='text-info'>Primero</span>",	// "<i class='fa fa-chevron-left text-primary' aria-hidden='true'></i><i class='fa fa-chevron-left text-primary' aria-hidden='true'></i>",
					"sPrevious":  	"<span class='text-info'>Anterior</span>",	// "<i class='fa fa-chevron-left text-primary' aria-hidden='true'></i>",
					"sNext":     	 "<span class='text-info'>Siguiente</span>",	// "<i class='fa fa-chevron-right text-primary' aria-hidden='true'></i>",
					"sLast":     	 "<span class='text-info'>Último</span>", // "<i class='fa fa-chevron-right text-primary' aria-hidden='true'></i><i class='fa fa-chevron-right text-primary' aria-hidden='true'></i>",
				},
				"oAria":
				{
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				},
				"select": 
				{
					"rows":
					{
						_: '', // <b><i class="fa fa-check"></i> %d filas seleccionadas',
						0: '',
						1: '', // <b><i class="fa fa-check"></i> Una </b> fila seleccionada'
					}
				}
			}
		});
		
		table . on ( 'user-select', function ( e, dt, type, cell, originalEvent )
		{
			if ( $( cell.node ( ) ) . parent ( ) . hasClass ( 'selected' ) )
				e . preventDefault ( );
		});
		
		$( '#filterDateBtn' ) . on ( 'click', function ( )
		{
			table.draw();
		});
		
		$( '.dataTables_processing' ) . css ( { 'margin-top' : '10px' } );
	}
	</script>
</body>
</html>