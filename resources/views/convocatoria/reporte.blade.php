<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | CONVOCATORIA NUEVA YORK - REPORTE STAF</title>
		<link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/flaticon/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/css/pages/landing-page/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/table/datatable/datatables.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/table/datatable/custom_dt_zero_config.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/table/datatable/custom_dt_html5.css')}}">
		<style>
			body{
				background-image: url('../convassets/img/background3.jpg');
				background-size: cover;
				background-attachment: fixed;
			}

			.btnExcel{
				background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border: none;
                font-size: 14px;
                padding: 9px 18px;
                transition: 0.3s;
            }

            .btnExcel:hover{
                background-image: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            }

			.dataTables_filter input{
				border: 1px solid #805dca;
			}

			.dataTables_processing{
                width: 50%;
                border: 0;
                z-index: 10;
                margin-top: 50px;
                left: 25%;
                background: linear-gradient(90deg, rgba(51,20,69,1) 0%, rgba(222,2,90,1) 100%);
                color:white;
                position: absolute;
            }
		</style>
	</head>
	<body>
		<div id="navHeadWrapper" class="navHeaderWrapper header-image">
			<div class="">
				<nav class="navbar navbar-expand-lg bg-faded header-nav">
					<div class="container">
						<div class="col-xl-4 col-lg-3 col-6 mx-auto ">
							<img src="{{asset('convassets/img/logotipo.png')}}" width="70%">
						</div>

						<div class="col-6 text-right d-lg-none d-block">
							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon flaticon-left-menu"></span>
							</button>
                        </div>
                        
                        <div class="col-xl-8 col-lg-9">
							<div class="collapse navbar-collapse justify-content-end" id="nav-content">   
								
							</div>
						</div>
					</div>
				</nav>
			</div>
			
			<div id="headerWrapper" class="" style="max-width: 95%; margin: auto">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white mb-5" style="border-radius: 15px;">
					<div class="table-responsive mb-4">
                        <table id="reporteConvocatoria" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr class="">
                                    <th>Associateid</th>
                                    <th><p style="width: 150px;">Nombre Asociado</p></th>
                                    <th>Rango_inicial</th>
                                    <th>Rango_actual</th>
                                    <th>País</th>
                                    <th>Correo</th>
                                    <th>Tipo_Convocatoria</th>
                                    <th>Estatus_Convocatoria</th>
                                    <th>Ascensos_Plata</th>
                                    <th>VGP_Nov</th>
                                    <th>VGP_Dic</th>
                                    <th>VGP_Ene</th>
                                    <th>VGP_Acumulado</th>
                                    <th>VGP_PuntosV</th>
                                    <th>VGP_Retos</th>
                                    <th>VGP_Ranking</th>
                                    <th>VP_Nov</th>
                                    <th>VP_Dic</th>
                                    <th>VP_Ene</th>
                                    <th>VP_Acumulado</th>
                                    <th>Inc_Nov</th>
                                    <th>Inc_Dic</th>
                                    <th>Inc_Ene</th>
                                    <th>Inc_Total</th>
                                    <th>Inc_Nov_100</th>
                                    <th>Inc_Dic_100</th>
                                    <th>Inc_Ene_100</th>
                                    <th>Inc_100_Total</th>
                                    <th>KinYa_Nov</th>
                                    <th>KinYa_Dic</th>
                                    <th>KinYa_Ene</th>
                                    <th>KinYa_Total</th>
                                    <th>Sponsorid</th>
                                    <th><p style="width: 150px;">Nombre Sponsor</p></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
				</div>
			</div>
		</div>

		<div id="miniFooterWrapper" class="">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="position-relative">
							<div class="arrow text-center">
								<span class="flaticon-double-arrow-up"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
								<p class="mt-md-0 mt-4 mb-0">© 2019 Convocatoria New York <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</body>
	<script src="{{asset('convassets/js/libs/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('convassets/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('convassets/plugins/sliders/owlCarousel/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('convassets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('convassets/js/pages/landing-page/script.js')}}"></script>
	<script src="{{asset('convassets/js/modal/classie.js')}}"></script>
	<script src="{{asset('convassets/js/modal/modalEffects.js')}}"></script>
	<script src="{{asset('convassets/plugins/table/datatable/datatables.js')}}"></script>
	<script src="{{asset('convassets/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('convassets/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
	<script src="{{asset('convassets/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
	<script src="{{asset('convassets/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>

	<script>
        $(".dataTables_processing").append('Cargando registros');

        var rangos = ['DIR', 'DIR', 'SUP', 'EXE', 'BRC', 'PLA', 'ORO', 'PLO', 'DIA', 'DRL'];
        var winPuntosV = "";

        function getWinnPuntosV(){
            $.ajax({
                type: 'get',
                url: '/getPuVi',
                success: function(result) {
                    winPuntosV = result.split(':');
                }
            });
        }

        getWinnPuntosV();

        function searchCurrentAbiCode(abicode){
            for(x = 0; x < winPuntosV.length; x++){
                if(abicode == winPuntosV[x]){
                    return true;
                    break;
                }
            }
        }

		$('#reporteConvocatoria').DataTable({
			destroy: true,
			ajax: "/reportegral",
            processing: true,
			columns: [
				{ data: 'Associateid', },
				{ data: 'AssociateName', },
				{ 
					data: 'Rango_ini', 
					"render": function (data, type, row) {
						return rangos[row.Rango_ini];
					},
				},
				{ 
					data: 'Rango_max',
					"render": function (data, type, row) {
						return rangos[row.Rango_max];
					},
				},
				{
					data: 'Pais',
                    className: "text-center",
					"render": function(data, type, row){
						if(row.Pais == ""){
							return "México";
						}
						else if(row.Pais == 'LAT'){
							return "<img src='../convassets/img/flag/mexico.png' width='25%'><br>México";
						}
						else if(row.Pais == 'COL'){
							return "<img src='../convassets/img/flag/colombia.png' width='25%'><br>Colombia";
						}
						else if(row.Pais == 'CRI'){
							return "<img src='../convassets/img/flag/costarica.png' width='25%'><br>Costa Rica";
						}
						else if(row.Pais == 'PAN'){
							return "<img src='../convassets/img/flag/panama.png' width='25%'><br>Panamá";
						}
						else if(row.Pais == 'ECU'){
							return "<img src='../convassets/img/flag/ecuador.png' width='25%'><br>Ecuador";
						}
						else if(row.Pais == 'PER'){
							return "<img src='../convassets/img/flag/peru.png' width='25%'><br>Perú";
						}
						else if(row.Pais == 'SLV'){
							return "<img src='../convassets/img/flag/salvador.png' width='25%'><br>El Salvador";
						}
						else if(row.Pais == 'GTM'){
							return "<img src='../convassets/img/flag/guatemala.png' width='25%'><br>Guatemala";
						}
						else if(row.Pais == 'CHL'){
							return "<img src='../convassets/img/flag/chile.png' width='25%'><br>Chile";
						}
					},
				},
				{ data: 'Correo' },
                {
                    data: 'Associateid',
                    "render": function(data, type, row){
                        var puntosV = searchCurrentAbiCode(row.Associateid);
                        var tipoConv = "";
                        if(row.Rango_max < 5){
                            tipoConv = "Directo a Ejecutivo";
                        }
                        else{
                            tipoConv = "Plata en Adelante";
                        }
                        if(puntosV == true){
                            tipoConv = "Puntos Viaje";
                        }

                        return tipoConv;
                    }
                },
				{ data: 'Estatus_Conv' },
				{
                    data: 'Estatus_Conv',
                    "render": function(data, type, row){
                        if(row.Rango_ini < 5 && row.Rango_max >= 5){
                            return "SI";
                        }
                        
                        if(row.Rango_max < 5){
                            return "NO";
                        }

                        if(row.Rango_ini >= 5){
                            return "No aplica";
                        }
                    }
                },
				{ data: 'VGP_Nov' },
                { data: 'VGP_Dic' },
                { data: 'VGP_Ene' },
                { data: 'VGP_Acumulado' },
                { data: 'VGP_PuntosV' },
                { data: 'VGP_Retos' },
                { data: 'VGP_Ranking' },
                { data: 'VP_Nov' },
                { data: 'VP_Dic' },
                { data: 'VP_Ene' },
                { data: 'VP_Acumulado' },
                { data: 'Inc_Nov' },
                { data: 'Inc_Dic' },
                { data: 'Inc_Ene' },
                { data: 'Inc_Total' },
                { data: 'Inc_Nov_100' },
                { data: 'Inc_Dic_100' },
                { data: 'Inc_Ene_100' },
                { data: 'Inc_100_Total' },
                { data: 'Kinya_Nov' },
                { data: 'Kinya_Dic' },
                { data: 'Kinya_Ene' },
                { data: 'Kinya_Total' },
                { data: 'Sponsorid' },
                { data: 'SponsorName' },
			],
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { 
						extend: 'excel', 
						className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
						text:"<img src='http://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
					},
                ]
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",
                "paginate": {
                    "previous": "<i class='flaticon-arrow-left-1'></i>",
                    "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });
	</script>
</html>