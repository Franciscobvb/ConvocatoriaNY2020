<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | CONVOCATORIA NUEVA YORK</title>
		<link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/flaticon/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/css/pages/landing-page/style.css')}}">
		<link href="{{asset('convassets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('convassets/css/modals/component.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('convassets/css/ui-kit/custom-modal.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/table/datatable/datatables.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/table/datatable/custom_dt_zero_config.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('convassets/plugins/table/datatable/custom_dt_html5.css')}}">
		<link href="{{asset('convassets/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('convassets/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('convassets/css/ui-kit/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
		<script src="{{asset('convassets/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
		<style>
			.btn-conv{
				background: linear-gradient(90deg, rgba(51,20,69,1) 0%, rgba(222,2,90,1) 100%);
				color: white;
				border: none;
			}

			.btn-conv:hover{
				color: gray
			}

			.btn-biolet{
				background: linear-gradient(90deg, rgba(100,12,107,1) 0%, rgba(51,4,108,1) 100%);
				color: white;
				border: none;
			}

			.btn-biolet:hover{
				color: gray
			}

			.btn-puntos{
				background-color: #7b0041;
				color: white;
				border: none;
			}

			.btn-puntos:hover{
				color: gray
			}

			.btn-equipos{
				border: 1px solid gray;
			}

			body{
				background-image: url('../convassets/img/background3.jpg');
				background-size: cover;
				background-attachment: fixed;
			}

			.menu{
				color: black;
			}

			.modal{
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			}

			.modal-dialog{
				margin: 1.75rem auto;
			}

			.premios{
				color: white;
				background-image: url('../convassets/img/premiosbg2.jpg');
				background-size: cover;
			}

			.prl{
				margin-top: 10px;
				border-left: 5px double #8a9594;
				border-radius: 5px 5px 5px 5px;
				border-right: 5px double #8a9594;
			}

			.prr{
				margin-top: 10px;
				border-right: 5px double #8a9594;
				border-radius: 5px 5px 5px 5px;
				border-left: 5px double #8a9594;
			}

			.bd-estatusper-modal-xl input{
				border: 1px solid blueviolet;
				border: none;
			}

			.badge-kaizen {
				color: #91e3fb;
			}

			.badge-taishi {
				color: #ff777f;
			}

			.badge-puntosV {
				color: #dde5f7;
			}

			h4{
				color: #000;
			}

			a {
				color: #000;
				text-decoration: none;
				background-color: transparent;
			}

			.elipse_1 {
				border-width: 2px;
				border-color: 
				rgb( 83, 83, 83 );
				border-style: solid;
				border-radius: 50%;
				width: 36px;
				height: 36px;
				z-index: 915;
				margin: auto
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

			.flaticon-warning{
				font-size: 90px;
				background: -webkit-linear-gradient(#ff6f00, #ffbb44);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
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
								<ul class="navbar-nav text-center mt-lg-0 mt-5">
									<li class="nav-item active">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#navHeadWrapper">Inicio</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapper">Requisitos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#servicesWrapper">Términos y Condiciones</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
			
			<div id="headerWrapper" class="container">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-1 order-1 text-center mb-lg-0 mb-1">
							<div class="site-header-inner">
								<img src="{{asset('convassets/img/2.png')}}" width="40%">
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 order-lg-2 order-1 text-center">
							<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
									<a href="#whyusWrapper" id="requisitosSection" class="btn btn-conv btn-rounded pt-3 pb-3 pl-5 pr-5 " role="button" style="width: 100%">
										Requisitos
									</a>
								</div>
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
									<a href="javascript:void(0)" class="btn btn-conv btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" data-toggle="modal" data-target=".bd-rankingDirPla-modal-xl" style="width: 100%">
										Ranking Directo Ejecutivo
									</a>
								</div>
								<div class="col-lg-4">
									<a href="javascript:void(0)" class="btn btn-conv btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" data-toggle="modal" data-target=".bd-rankingPlaAdel-modal-xl" style="width: 100%">
										Ranking Plata en Adelante
									</a>
								</div>
								<div class="col-lg-4">
									<a href="javascript:void(0)" class="btn btn-conv btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl" style="width: 100%">
										Estatus Personal
									</a>
								</div>
								<div class="col-lg-12 mt-5">
									<h2><b>ÚNETE A ESTA GRAN CELEBRACIÓN</b></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper ">
			<div class="container" style="background-color: white; border-radius: 25px; opacity: 0.98;">
				<div id="whyusWrapper" class="row">
					<div class="col-md-12 text-center mb-5">
						<h2 class="section-title mb-2">REQUISITOS </h2>
						<b>* Periodo de medición: Noviembre de 2019 a Enero de 2020.</b>
					</div>

					<div class="col-md-3 text-center"></div>
					<div class="col-md-3 text-center">
						<a href="javascript:void(0)" class="btn btn-conv btn-rounded pt-3 pb-3 pl-1 pr-1 mt-3" role="button" data-toggle="modal" data-target=".bd-dirToEj-modal-xl" style="width: 100%">
							Rango Directo <br> y Ejecutivo
						</a>
					</div>
					<div class="col-md-3 text-center">
						<a href="javascript:void(0)" class="btn btn-biolet btn-rounded pt-3 pb-3 pl-1 pr-1 mt-3" role="button" data-toggle="modal" data-target=".bd-plaToDrl-modal-xl" style="width: 100%">
							Rango Plata, Oro, Platino <br> Diamante y Diamante Real
						</a>
					</div>
					<div class="col-md-3 text-center"></div>

					<div class="col-md-4 text-center">
						<a href="javascript:void(0)" class="btn btn-equipos btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" data-toggle="modal" data-target=".bd-kaizen-modal-xl" style="color: #14bdb0; width: 100%">
							<img src="{{asset('convassets/img/kaizen_logo.png')}}" width="50px"><br>
							<b>Equipo Kaizen</b>
						</a>
					</div>
					<div class="col-md-4 text-center">
						<a href="javascript:void(0)" class="btn btn-equipos btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" data-toggle="modal" data-target=".bd-taishi-modal-xl" style="color: #ff757d; width: 100%">
							<img src="{{asset('convassets/img/taishi_logo.png')}}" width="50px"><br>
							<b>Equipo Taishi</b>
						</a>
					</div>
					<div class="col-md-4 text-center">
						<a href="javascript:void(0)" class="btn btn-puntos btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" data-toggle="modal" data-target=".bd-puntosv-modal-xl" style="width: 100%">
							Puntos Viaje al 100% <br> (10 puntos viaje)
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="container" style="background-color: white; border-radius: 25px; opacity: 0.93;">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5 mt-5">
						<h2 class="section-title mb-5 mt-5">TÉRMINOS Y CONDICIONES</h2>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-calendar-2"></i>
						<p class="mb-4 mt-5">Vigencia de la convocatoria es del 1 de noviembre de 2019 hasta el 31 de enero de 2020.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-dead-fill"></i>
						<p class="mb-4 mt-5">La equivalencia del VGP de Kaizen (6000 de VGP) y Taishi (9000 de VGP), no aplica para los requisitos solo para Ranking.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-confused-fill"></i>
						<p class="mb-4 mt-5">La equivalencia de un punto viaje es de 3000 de VGP aplicables para el ranking de acuerdo a su rango, este puntaje no aplica para los requisitos.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-like-circle"></i>
						<p class="mb-4 mt-5">El requisito mínimo para participar, es tener 100 puntos de VP en cada uno de los meses de la convocatoria.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-calendar-bold"></i>
						<p class="mb-4 mt-5">El Rango inicial se considerará por el rango al cierre de octubre de 2019.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-cup"></i>
						<p class="mb-4 mt-5">Los premios no son acumulables.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-error"></i>
						<p class="mb-4 mt-5">Para los ascensos plata no aplica comprensión especial.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-calendar-22"></i>
						<p class="mb-4 mt-5">Se tomará el VP y VGP del cierre de mes.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-group-1"></i>
						<p class="mb-4 mt-5">Los volúmenes e incorporaciones que se considerarán para los requisitos, deben ser realizados en la unidad de Mercado de Latinoamérica.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-1"></i>
						<p class="mb-4 mt-5">Los CLUB DE BIENESTAR no cuentan como requisito para las incorporaciones</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-users"></i>
						<p class="mb-4 mt-5">Para que asistan Titular y Cotitular deben cumplir el doble de cada uno de los requisitos de la convocatoria.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-circle"></i>
						<p class="mb-4 mt-5">Se podrá hacer cesión del premio exclusivamente a un asesor del mismo segmento de la convocatoria.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-user-12"></i>
						<p class="mb-4 mt-5">Para los requisitos de incorporación no se incluirán las nuevas incorporaciones de Chile.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-map-1"></i>
						<p class="mb-4 mt-5">Para los requisitos de volumen de VP y VGP se incluirá los puntos de Chile</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-warning-fill"></i>
						<p class="mb-4 mt-5">NIKKEN se reserva el derecho de interpretación de la convocatoria.</p>
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

		@php
			$lugarRank = 0;
			$participante = 0;
		@endphp

		@foreach ($winPuntosV as $row)
			@if ($row->Associateid == $associateid && $row->Count_PuntosV >= 10)
				@php 
					$participante = 1; 
					$lugarRank = null;
				@endphp

				<script>
					function winner(){
						swal({
							title: 'Felicitaciones!',
							text: "Ganaste el premio nivel 2 para rangos plata en adelante, por Puntos Viaje 100%!",
							type: 'success',
							padding: '2em'
						})
					}
					
					winner();
					//setTimeout('winner()',2000);
				</script>
			@endif
		@endforeach

		<!-- Modals -->
		<div class="modal fade bd-rankingDirPla-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">RANKING DIRECTO A EJECUTIVO</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" >
						<div class="col-md-12">
							<div class="table-responsive mb-4">
								<table id="html5-extension" class="table table-bordered table-hover">
									<thead>
										<tr class="text-center">
											<th>Ranking</th>
											<th>VGP Ranking</th>
											<th>VGP Puntos Viaje</th>
											<th><p style="width: 200px">Nombre</p></th>
											<th>Rango</th>
											<th>País</th>
											<th>VP Mes Actual</th>
											<th>Ascensos</th>
											<th>VP Acumulado</th>
											<th>VGP Acumulado</th>
											<th>Incorporados Frontales</th>
											<th>Incorporados con 100 VP</th>
											<th>KinYa! - Grupo Personal</th>
										</tr>
									</thead>
									<tbody>
										@php
											$ranknum = 1;
											$pais = "";
											$bandera = "";
											$rango = "";
											$par = "";
											$clase = "";
											$trbgcolor = "background-color: #fff";
											$count = 0;
										@endphp
										@foreach ($direjec as $row)
											@switch($row->Pais)
												@case('LAT')
													@php $pais = "México"; $bandera = "mexico.png"; @endphp
													@break
												@case('COL')
													@php $pais = "Colombia"; $bandera = "colombia.png"; @endphp
													@break
												@case('CRI')
													@php $pais = "Costa Rica"; $bandera = "costarica.png"; @endphp
													@break
												@case('PAN')
													@php $pais = "Panamá"; $bandera = "panama.png"; @endphp
													@break
												@case('ECU')
													@php $pais = "Ecuador"; $bandera = "ecuador.png"; @endphp
													@break
												@case('PER')
													@php $pais = "Perú"; $bandera = "peru.png"; @endphp
													@break
												@case('SLV')
													@php $pais = "El Salvador"; $bandera = "salvador.png"; @endphp
													@break
												@case('GTM')
													@php $pais = "Guatemala"; $bandera = "guatemala.png"; @endphp
													@break
											@endswitch
											@switch($row->Rango_ini)
												@case(1)
													@php $rango = "DIR"; $clase = "badge-secondary"; @endphp 
													@break
												@case(3)
													@php $rango = "EXE"; $clase = "badge-success"; @endphp
													@break
												@case(5)
													@php $rango = "PLA"; $clase = "table-default"; @endphp
													@break
												@case(6)
													@php $rango = "ORO"; $clase = "yellow"; @endphp
													@break
												@case(7)
													@php $rango = "PLO"; $clase = "badge-info"; @endphp
													@break
												@case(8)
													@php $rango = "DIA"; $clase = "badge-danger"; @endphp
													@break
												@case(9)
													@php $rango = "DRL"; $clase = "badge-primary"; @endphp
													@break
											@endswitch
											@php
												$count++;
												if ($associateid == $row->Associateid) {
													$lugarRank = $ranknum;
												}

												if($count <= 30){
													$trbgcolor = "background-color: #fde0e3";
												}
												else{
													$trbgcolor = "background-color: #fff";
												}
											@endphp
											<tr style="{{ $trbgcolor }}">
												<td>{{ $ranknum }}</td>
												<td><b>{{ number_format($row->VGP_Ranking) }}</b></td>
												<td>{{ number_format($row->VGP_PuntosV) }}</td>
												<td>{{ $row->Nombre }}</td>
												<td class="text-center">
													<span class="badge {{ $clase }}">
														{{ $rango }}
													</span>
												</td>
												<td class="text-center">
													<img src="{{ asset('convassets/img/flag/' . $bandera)}}" width="15px">
													{{ $pais }}
												</td>
												<td>{{ number_format($row->VP_Mes) }}</td>
												<td>{{ $row->Ascensos }}</td>
												<td>{{ number_format($row->VpAcumulado) }}</td>
												<td>{{ number_format($row->VGPAcumulado) }}</td>
												<td>{{ $row->Incorpor_Frontal }}</td>
												<td>{{ $row->Incorp_Front_ConVP }}</td>
												<td>{{ $row->Kinya_GP }}</td>
											</tr>
											@php $ranknum++; @endphp
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade bd-rankingPlaAdel-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">RANKING PLATA EN ADELANTE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="col-md-12">
							<div class="table-responsive mb-4">
								<table id="html5-extension2" class="table table-hover" style="width:100%">
									<thead>
										<tr class="text-center">
											<th>Ranking</th>
											<th>VGP Ranking</th>
											<th>VGP Puntos Viaje</th>
											<th>VGP Retos Especiales</th>
											<th><p style="width: 200px">Nombre</p></th>
											<th>Rango </th>
											<th>País</th>
											<th>VP Mes Actual</th>
											<th>VP Acumulado</th>
											<th>VGP Acumulado</th>
											<th>Incorporados Frontales</th>
											<th>Incorporados con 100 VP</th>
											<th>KinYa! - Grupo Personal</th>
										</tr>
									</thead>
									<tbody>
										@php
											$ranknum = 1;
											$pais = "";
											$bandera = "";
											$rango = "";
											$trbgcolor = "background-color: #fff";
											$count = 0;
										@endphp
										@foreach ($plaadel as $row)
											@switch($row->Pais)
												@case('LAT')
													@php $pais = "México"; $bandera = "mexico.png"; @endphp
													@break
												@case('COL')
													@php $pais = "Colombia"; $bandera = "colombia.png"; @endphp
													@break
												@case('CRI')
													@php $pais = "Costa Rica"; $bandera = "costarica.png"; @endphp
													@break
												@case('PAN')
													@php $pais = "Panamá"; $bandera = "panama.png"; @endphp
													@break
												@case('ECU')
													@php $pais = "Ecuador"; $bandera = "ecuador.png"; @endphp
													@break
												@case('PER')
													@php $pais = "Perú"; $bandera = "peru.png"; @endphp
													@break
												@case('SLV')
													@php $pais = "El Salvador"; $bandera = "salvador.png"; @endphp
													@break
												@case('GTM')
													@php $pais = "Guatemala"; $bandera = "guatemala.png"; @endphp
													@break
											@endswitch
											@switch($row->Rango_ini)
												@case(1)
													@php $rango = "DIR"; $clase = "badge-secondary"; @endphp 
													@break
												@case(3)
													@php $rango = "EXE"; $clase = "badge-success"; @endphp
													@break
												@case(5)
													@php $rango = "PLA"; $clase = "badge-dark"; @endphp
													@break
												@case(6)
													@php $rango = "ORO"; $clase = "badge-warning"; @endphp
													@break
												@case(7)
													@php $rango = "PLO"; $clase = "badge-info"; @endphp
													@break
												@case(8)
													@php $rango = "DIA"; $clase = "badge-danger"; @endphp
													@break
												@case(9)
													@php $rango = "DRL"; $clase = "badge-primary"; @endphp
													@break
											@endswitch
											@php
												$count++;
												if ($associateid == $row->Associateid) {
													$lugarRank = $ranknum;
												}

												if($count <= 90){
													/*if ($row->PuntosNY_10 >= 10){
														$trbgcolor = "background-color: #dde5f7";
													}
													else if ($row->Reto_Especial == 1) {
														$trbgcolor = "background-color: #bee1eb;";
													}
													else if ($row->Reto_Especial == 2){
														$trbgcolor = "background-color: #f5c6cb";
													}
													else{
														$trbgcolor = "background-color: #fff";
													}*/
													$trbgcolor = "background-color: #fde0e3";
												}
												else{
													$trbgcolor = "background-color: #fff";
												}
											@endphp
											<tr style="{{ $trbgcolor }}">
												<td>{{ $ranknum }}</td>
												<td><b>{{ number_format($row->VGP_Ranking) }}</b></td>
												<td>{{ number_format($row->VGP_PuntosV) }}</td>
												<td>{{ number_format($row->VGP_Retos) }}</td>
												<td>{{ $row->Nombre }}</td>
												<td class="text-center">
													<span class="badge {{ $clase }}">
														{{ $rango }}
													</span>
												</td>
												<td class="text-center">
													<img src="{{ asset('convassets/img/flag/' . $bandera)}}" width="15px">
													{{ $pais }}
												</td>
												<td>{{ number_format($row->VP_Mes) }}</td>
												<td>{{ number_format($row->VpAcumulado) }}</td>
												<td>{{ number_format($row->VGPAcumulado) }}</td>
												<td>{{ $row->Incorpor_Frontal }}</td>
												<td>{{ $row->Incorp_Front_ConVP }}</td>
												<td>{{ $row->Kinya_GP }}</td>
											</tr>
											@php $ranknum++; @endphp
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade bd-estatusper-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">RANKING CONVOCATORIA 45 ANIVERSARIO- NUEVA YORK 2020</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" style="">
						@php
							setlocale(LC_TIME, 'es_ES');
							$dia = Date('d');
							$mes = Date('m');
							$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Abril', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
							$mes = DateTime::createFromFormat('!m', $mes);
							$mes = strftime("%B", $mes->getTimestamp());
							$mesnum = Date('m');
						@endphp
						<div class="row ">
							<div class="col-lg-5 text-center">
								<img src="{{ asset('convassets/img/2.png')}}" width="50%">
							</div>
							<div class="col-lg-7">
								<div class="row">
									<div class="col-lg-12 pb-4 mb-4">
										<h6>Periodo de la convocatoria: <b>Noviembre 2019 a  Enero 2020.</b></h6>
										<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las <span id="hora"></span> hora México.</h6>
									</div>
									@foreach ($estatuspersonal as $row)
										<div class="col-lg-12">
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<span class="input-group-text form-control-rounded-left">
														Nombre Asesor
													</span>
												</div>
												<input type="text" class="form-control form-control-rounded text-center" readonly value="{{ $row->NameAssociate }}">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<span class="input-group-text form-control-rounded-left">
														VGP Ranking
													</span>
												</div>
												<input type="text" class="form-control" readonly value="{{ number_format($row->VGP_Ranking) }}">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<span class="input-group-text form-control-rounded-left">
														VGP Puntos viaje
													</span>
												</div>
												<input type="text" class="form-control" readonly value="{{ number_format($row->VGP_PuntosV) }}">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<span class="input-group-text form-control-rounded-left">
														VGP Programas especiales
													</span>
												</div>
												<input type="text" class="form-control-rounded-right form-control" readonly value="{{ number_format($row->VGP_Retos) }}">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<span class="input-group-text form-control-rounded-left">
														VGP Nov-Dic-Ene
													</span>
												</div>
												<input type="text" class="form-control-rounded-right form-control" readonly value="{{ number_format($row->VGPAcumulado) }}">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<span class="input-group-text form-control-rounded-left">
														<b>Tipo de convocatoria</b>
													</span>
												</div>
												@php
													if($row->Rango_ini < 5) { 
														$tipoConvocatoria = "Directo a Ejecutivo";
														$lugarRankFormat = "# " . $lugarRank;
													} 
													else{
														$tipoConvocatoria = "Plata en Adelante";
														$lugarRankFormat = "# " . $lugarRank;
													}
													if(empty($lugarRank)){
														$tipoConvocatoria = "Puntos Viaje 100%";
														$lugarRank = "";
													}
												@endphp
												<input type="text" class="form-control-rounded-right form-control" value="{{ $tipoConvocatoria }}" readonly>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<span class="input-group-text form-control-rounded-left">
														<b>Lugar Ranking</b>
													</span>
												</div>
												<input type="text" class="form-control-rounded-right form-control" value="{{ $lugarRank }}" readonly>
											</div>
										</div>
									@endforeach
								</div>
							</div>
							<div class="col-md-12 mt-5 mb-5">
								<div class="col-md-12">
									<div class="table-responsive mb-4">
										<table id="html5-extension5" class="table table-striped table-bordered table-hover" style="width:100%">
											<thead>
												<tr class="table-primary">
													<th>REQUISITOS </th>
													<th class="text-center">Nov-19</th>
													<th hidden class="text-center">Dic-19</th>
													<th hidden class="text-center">Ene-20</th>
													<th class="text-center">Acumulado</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($estatuspersonal as $avance)
													@if ($avance->Rango_ini < 5)
														<tr>
															<td>
																AVANZAR AL RANGO PLATA
															</td>
															<td class="text-center">
																@if ($avance->Rango_max > $avance->Rango_ini)
																	<span class="flaticon-fill-tick" style="color: darkcyan; font-size: 20px;"></span>
																@else
																	<span class="flaticon-close-fill" style="color: red; font-size: 20px;"></span>
																@endif
															</td>
															<td hidden class="text-center">
																
															</td>
															<td hidden class="text-center">
																
															</td>
															<td></td>
														</tr>
													@endif
												@endforeach
												<tr class="table-success">
													<td>
														100 DE VP CADA MES 
													</td>
													<td class="text-center">
														@foreach ($estatuspersonal as $vp)
															@if ($vp->VP_Mes >= 100)
																<span class="flaticon-fill-tick" style="color: darkcyan; font-size: 20px;"></span>
															@else
																<span class="flaticon-close-fill" style="color: red; font-size: 20px;"></span>
															@endif
														@endforeach
													</td>
													<td hidden class="text-center">
														
													</td>
													<td hidden class="text-center">
														
													</td>
													<td></td>
												</tr>
												<tr>
													<td>
														VP Acumulado
													</td>
													<td class="text-center">
														@foreach ($vpperiodo1 as $vpmes)
															{{ number_format($vpmes->VP_MES) }}
														@endforeach
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td></td>
												</tr>
												<tr class="table-success">
													<td>
														VGP Acumulado
													</td>
													<td class="text-center">
														@php $vgp_final = 0; @endphp
														@foreach ($vgpperiodo1 as $vgpmes)
															@php $vgp_final = $vgp_final + $vgpmes->VGPAcumulado; @endphp
															{{ number_format($vgpmes->VGPAcumulado) }}
														@endforeach
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td class="text-center">
														{{ number_format($vgp_final) }}
													</td>
												</tr>
												<tr>
													<td>
														INCORPORACIONES FRONTALES CON 100 DE VP 
													</td>
													<td class="text-center">
														@php $total_incorp = 0; @endphp
														@foreach ($incorporadosperiodo1 as $incorp)
															@php $total_incorp = $total_incorp + $incorp->Incorp_VP100; @endphp
															{{ number_format($incorp->Incorp_VP100) }}
														@endforeach
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td class="text-center">
														{{ $total_incorp }}
													</td>
												</tr>
												<tr class="table-success">
													<td>
														KINYA DE GRUPO PERSONAL 
													</td>
													<td class="text-center">
														@php $total_kinya = 0; @endphp
														@foreach ($kinyaperiodo1 as $kinya)
															@php $total_kinya = $total_kinya + $kinya->KINYA_GP; @endphp
															{{ number_format($kinya->KINYA_GP) }}
														@endforeach
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td hidden class="text-center">
														0
													</td>
													<td class="text-center">
														{{ $total_kinya }}
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-12 text-center" >
									<a href="http://services.nikken.com.mx/points-ny/{{ base64_encode($associateid) }}" target="_new" class="btn btn-default btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button">
										Micrositio Puntos Viaje
									</a>
								</div>
								
								<div class="col-md-12 text-center mt-5" hidden>
									<h2>Mi Genealogia Organizacional. </h2>
								</div>

								<div class="col-md-12 mt-3" id="genealogiaOrganizacional" hidden>
									<div class="table-responsive mb-4">
                                        <table id="html5-extension3" class="table table-striped table-bordered table-hover" >
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Código</th>
                                                    <th>Nivel</th>
                                                    <th>Nombre</th>
                                                    <th>Rango Inicial</th>
                                                    <th>Rango Actual</th>
                                                    <th>País</th>
                                                    <th>VP Acumulado</th>
                                                    <th>VGP Acumulado</th>
                                                    <th>Incorporados Frontales</th>
													<th>Incorporados con VP 100</th>
													<th>KinYa! - Grupo Personal</th>
                                                    <th>Tipo Convocatoria</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												@if (!empty($genealogia))
													@foreach ($genealogia as $gen)
														<tr>
															<td>{{ $gen->associateid }}</td>
															<td>{{ $gen->nivel }}</td>
															<td>{{ $gen->NameAssociate }}</td>
															<td>{{ $gen->Rango_ini }}</td>
															<td>{{ $gen->Rango_max }}</td>
															<td>{{ $gen->Pais }}</td>
															<td>{{ $gen->VpAcumulado }}</td>
															<td>{{ $gen->VGPAcumulado }}</td>
															<td>{{ $gen->Total_Incorpo }}</td>
															<td>{{ $gen->Incorp_VP100 }}</td>
															<td>{{ $gen->KINYA_GP }}</td>
															@if ($gen->Rango_ini < 5)
																<td>Directos a Ejecutivos</td>
															@else
																<td>Platas en adelante</td>
															@endif
														</tr>
													@endforeach
												@endif
                                            </tbody>
                                        </table>
                                    </div>
								</div>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-dirToEj-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document" style="max-width: 85%">
				<div class="modal-content" style="/*background-image: url('../convassets/img/modal-bg.jpg'); background-size: cover;*/">
					<div class="modal-header">
						<h2 class="modal-title" id="myExtraLargeModalLabel">REQUISITOS Y PREMIOS PARA ASESORES RANGO DIRECTOS Y EJECUTIVOS</h2>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" style="">
						<div class="row ">
							<div class="col-md-12 ">
								<div class="statbox widget box box-shadow">
									<div class="widget-content widget-content-area rounded-pills">
										<ul class="nav nav-tabs  mb-3 justify-content-center" id="creativeJustifyCenterTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link show active" id="creative-justify-center-home-tab" data-toggle="tab" href="#creative-justify-center-home" role="tab" aria-controls="creative-justify-center-home" aria-selected="false">
													<i class="flaticon-user-11"></i>
													Nivel 1
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link show" id="creative-justify-center-profile-tab" data-toggle="tab" href="#creative-justify-center-profile" role="tab" aria-controls="creative-justify-center-profile" aria-selected="true">
													<i class="flaticon-user-11"></i>
													Nivel 2
												</a>
											</li>
										</ul>
										<div class="tab-content ml-3 mr-3" id="creativeJustifyCenterTabContent">
											<div class="tab-pane fade active show" id="creative-justify-center-home" role="tabpanel" aria-labelledby="creative-justify-center-home-tab">
												<div class="row">
													<div class="col-md-6 text-center">
														<img src="{{asset('convassets/img/2.png')}}" width="40%" class="img-fluid">
													</div>
													<div class="col-md-6 align-self-center">
														<h4>TODO INCLUIDO (RANKING DE 30 PRIMEROS LUGARES NIVEL LATINOAMÉRICA)</h4>
														<ul>
															<li>Alcanzar a rango plata.</li>
															<li>100 puntos  mínimo de volumen personal en cada mes. </li>
															<li>VP 1,500 Acumulados en el periodo de la convocatoria.</li>
															<li>VGP 8000 Acumulados en el periodo de la convocatoria.</li>
															<li>Incorporar 2 asesores (Frontales) durante el periodo de la convocatoria, hacer 100 puntos en un mes calendario.</li>
															<li>Que al menos 2 asesores de su grupo personal califiquen el KinYa!.</li>
															<li><b>Estar dentro de los primeros 30 lugares del ranking.</b></li>
															<li><b>Este ranking es solo rangos directos y ejecutivos.</b></li>
														</ul>
													</div>
													<div class="col-md-6 premios prl">
														<h2 class="text-center mb-4">EL PREMIO NIVEL 1, INCLUYE.</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (7 días y 6 noches).</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/city-tour.png')}}" width="12%">
																<p class="mb-1 mt-1">City Tour ganadores convocatoria.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/show-broadway.png')}}" width="12%">
																<p class="mb-1 mt-1">Show de Broadway.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-especial.png')}}" width="12%">
																<p class="mb-1 mt-1"><b>Cena Especial ganadores convocatoria.</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="6%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr">
														<h2 class="text-center mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane fade " id="creative-justify-center-profile" role="tabpanel" aria-labelledby="creative-justify-center-profile-tab">
												<div class="row">
													<div class="col-md-6 text-center">
														<img src="{{asset('convassets/img/2.png')}}" width="40%" class="img-fluid">
													</div>
													<div class="col-md-6 align-self-center">
														<h4 class="mb-4">Convención y Hospedaje (Ganan Directos y Ejecutivos sin Ranking)</h4>
														<ul>
															<li>Alcanzar a rango plata.</li>
															<li>100 puntos  mínimo de volumen personal en cada mes.</li>
															<li>VP 1,500 Acumulados en el periodo de la convocatoria.</li>
															<li>VGP 8000 Acumulados en el periodo de la convocatoria.</li>
															<li>Incorporar 2 asesores (Frontales) durante el periodo de la convocatoria, hacer 100 puntos en un mes calendario.</li>
															<li>Que al menos 2 asesores de su grupo personal califiquen el KinYa!.</li>
															<li><b>No necesario aparecer en el ranking.</b></li>
														</ul>
													</div>
													<div class="col-md-6 premios prl">
														<h2 class="text-center mb-4">EL PREMIO NIVEL 2, INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (4 días y 3 noches).</b> </p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="12%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr">
														<h2 class="text-center mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-plaToDrl-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document" style="max-width: 85%">
				<div class="modal-content" style="/*background-image: url('../convassets/img/modal-bg.jpg'); background-size: cover;*/">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">REQUISITOS Y PREMIOS PARA ASESORES RANGO PLATA, ORO, PLATINO, DIAMANTE Y DIAMANTE REAL</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" style="">
						<div class="row ">
							<div class="col-md-12 ">
								<div class="statbox widget box box-shadow">
									<div class="widget-content widget-content-area rounded-pills">
										<ul class="nav nav-tabs  mb-3 justify-content-center" id="creativeJustifyCenterTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link show active" id="creative-justify-center-home-tab" data-toggle="tab" href="#creative-justifyplatodrl-center-home" role="tab" aria-controls="creative-justify-center-home" aria-selected="false">
													<i class="flaticon-user-11"></i>
													Nivel 1
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link show" id="creative-justify-center-profile-tab" data-toggle="tab" href="#creative-justifyplatodrl2-center-profile" role="tab" aria-controls="creative-justify-center-profile" aria-selected="true">
													<i class="flaticon-user-11"></i>
													Nivel 2
												</a>
											</li>
										</ul>
										<div class="tab-content ml-3 mr-3" id="creativeJustifyCenterTabContent">
											<div class="tab-pane fade active show" id="creative-justifyplatodrl-center-home" role="tabpanel" aria-labelledby="creative-justify-center-home-tab">
												<div class="row">
													<div class="col-md-12 text-center">
														<h4 class="mb-4">TODO INCLUIDO (RANKING DE 90 PRIMEROS LUGARES NIVEL LATINOAMÉRICA)</h4>
													</div>
													<div class="col-md-6">
														<ul>
															<li>100 puntos mínimo de volumen personal en cada mes. </li>
															<li>2,000 puntos de Volumen Personal acumulados en el periodo de la convocatoria (VP).</li>
															<li>Acumular dentro del periodo de la convocatoria un Volumen de Grupo Personal de (VGP) según el país:</li>
														</ul>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover mb-4">
																<thead >
																	<tr>
																		<th>PAÍS</th>
																		<th>VGP</th>
																	</tr>
																</thead>
																<tbody style="color: black">
																	<tr>
																		<td>México</td>
																		<td>18,000</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>12,000</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-md-6 align-self-center">
														<li>Incorporar Asesores de Bienestar (Frontales) durante el periodo de la convocatoria con <b>100 de VP</b> en un mes calendario, el requisito por país es: </li>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>INCORPORADOS</th>
																	</tr>
																</thead>
																<tbody  style="color: black">
																	<tr>
																		<td>México</td>
																		<td>3</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>2</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<li>Mínimo 2 asesores de su grupo personal que califiquen el KinYa! durante el periodo de la convocatoria. </li>
														<li><b>Estar dentro de los primeros 90 lugares del ranking.</b></li>
														<li><b>Este ranking es solo rangos Plata, Oro, Platino, Diamante y Diamante Real.</b></li>
													</div>
													<div class="col-md-12 text-center mb-3">
														<hr>
													</div>
													<div class="col-md-6 premios prl text-center">
														<h2 class="mb-4">EL PREMIO NIVEL 1, INCLUYE.</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (7 días y 6 noches).</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/city-tour.png')}}" width="12%">
																<p class="mb-1 mt-1">City Tour ganadores convocatoria.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/show-broadway.png')}}" width="12%">
																<p class="mb-1 mt-1">Show de Broadway.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-especial.png')}}" width="12%">
																<p class="mb-1 mt-1"><b>Cena Especial ganadores convocatoria.</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="6%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr text-center">
														<h2 class="mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane fade " id="creative-justifyplatodrl2-center-profile" role="tabpanel" aria-labelledby="creative-justify-center-profile-tab">
												<div class="row">
													<div class="col-md-12 text-center">
														<h4 class="mb-4">Convención y Hospedaje (Ganan Plata, Oro, Platino, Diamante y Diamante Real sin Ranking)</h4>
													</div>
													<div class="col-md-6">
														<ul>
															<li>100 puntos mínimo de volumen personal en cada mes. </li>
															<li>2,000 puntos de Volumen Personal acumulados en el periodo de la convocatoria (VP).</li>
															<li>Acumular dentro del periodo de la convocatoria un Volumen de Grupo Personal de (VGP) según el país:</li>
														</ul>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>VGP</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>México</td>
																		<td>18,000</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>12,000</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-md-6 align-self-center">
														<li>Incorporar Asesores de Bienestar (Frontales) durante el periodo de la convocatoria con <b>100 de VP</b> en un mes calendario, el requisito por país es: </li>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>INCORPORADOS</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>México</td>
																		<td>3</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>2</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<li>Mínimo 2 asesores de su grupo personal que califiquen el KinYa! durante el periodo de la convocatoria. </li>
														<li><b>No es necesario aparecer en el ranking.</b></li>
														<li><b>Este ranking es solo rangos Plata, Oro, Platino, Diamante y Diamante Real.</b></li>
													</div>
													<div class="col-md-12 text-center mb-3">
														<hr>
													</div>
													<div class="col-md-6 premios prl text-center">
														<h2 class="mb-4">EL PREMIO NIVEL 2, INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (4 días y 3 noches).</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="12%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr text-center">
														<h2 class="mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-kaizen-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document" style="max-width: 85%">
				<div class="modal-content" style="/*background-image: url('../convassets/img/modal-bg.jpg'); background-size: cover;*/">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">REQUISITOS PARA ASESORES QUE CUMPLAN EL PROGRAMA ESPECIAL KAIZEN DURANTE EL AÑO 2019</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" style="">
						<div class="row ">
							<div class="col-md-12 ">
								<div class="statbox widget box box-shadow">
									<div class="widget-content widget-content-area rounded-pills">
										<ul class="nav nav-tabs  mb-3 justify-content-center" id="creativeJustifyCenterTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link show active" id="creative-justify-center-home-tab" data-toggle="tab" href="#creative-kaizen1-center-home" role="tab" aria-controls="creative-justify-center-home" aria-selected="false">
													<i class="flaticon-user-11"></i>
													Nivel 1
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link show" id="creative-justify-center-profile-tab" data-toggle="tab" href="#creative-kaizen2-center-profile" role="tab" aria-controls="creative-justify-center-profile" aria-selected="true">
													<i class="flaticon-user-11"></i>
													Nivel 2
												</a>
											</li>
										</ul>
										<div class="tab-content ml-3 mr-3" id="creativeJustifyCenterTabContent">
											<div class="tab-pane fade active show" id="creative-kaizen1-center-home" role="tabpanel" aria-labelledby="creative-justify-center-home-tab">
												<div class="row">
													<div class="col-md-6">
														<ul>
															<li>100 puntos mínimo de volumen personal en cada mes. </li>
															<li>2,000 puntos de Volumen Personal acumulados en el periodo de la convocatoria (VP).</li>
															<li>Acumular dentro del periodo de la convocatoria un Volumen de Grupo Personal de (VGP) según el país:</li>
														</ul>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover mb-4">
																<thead >
																	<tr>
																		<th>PAÍS</th>
																		<th>VGP</th>
																	</tr>
																</thead>
																<tbody style="color: black">
																	<tr>
																		<td>México</td>
																		<td>18,000</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>12,000</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-md-6 align-self-center">
														<li>Incorporar Asesores de Bienestar (Frontales) durante el periodo de la convocatoria con <b>100 de VP</b> en un mes calendario, el requisito por país es: </li>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>INCORPORADOS</th>
																	</tr>
																</thead>
																<tbody  style="color: black">
																	<tr>
																		<td>México</td>
																		<td>3</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>2</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<li>Mínimo 2 asesores de su grupo personal que califiquen el <b>KinYa!</b> durante el periodo de la convocatoria. </li>
														<li><b>Estar dentro de los primeros 90 lugares del ranking.</b></li>
														<li><b>Tendrán una ventaja de 6,000 VGP para el ranking.</b></li>
														<li><b>Este ranking es solo rangos Plata, Oro, Platino, Diamante y Diamante Real.</b></li>
													</div>
													<div class="col-md-12 text-center mb-3">
														<hr>
													</div>
													<div class="col-md-6 premios prl">
														<h2 class="mb-4">EL PREMIO NIVEL 1, INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (7 días y 6 noches).</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/city-tour.png')}}" width="12%">
																<p class="mb-1 mt-1">City Tour con los Directivos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/show-broadway.png')}}" width="12%">
																<p class="mb-1 mt-1">Show de Broadway.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-especial.png')}}" width="12%">
																<p class="mb-1 mt-1"><b>Cena Especial con los Directivos.</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/coctail.png')}}" width="12%">
																<p class="mb-1 mt-1">Coctail VIP Kaizen y Taishi.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="12%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr">
														<h2 class="mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane fade " id="creative-kaizen2-center-profile" role="tabpanel" aria-labelledby="creative-justify-center-profile-tab">
												<div class="row">
													<div class="col-md-6">
														<ul>
															<li>100 puntos mínimo de volumen personal en cada mes. </li>
															<li>2,000 puntos de Volumen Personal acumulados en el periodo de la convocatoria (VP).</li>
															<li>Acumular dentro del periodo de la convocatoria un Volumen de Grupo Personal de (VGP) según el país:</li>
														</ul>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>VGP</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>México</td>
																		<td>18,000</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>12,000</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-md-6 align-self-center">
														<li>Incorporar Asesores de Bienestar (Frontales) durante el periodo de la convocatoria con <b>100 de VP</b> en un mes calendario, el requisito por país es: </li>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>INCORPORADOS</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>México</td>
																		<td>3</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>2</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<li>Mínimo 2 asesores de su grupo personal que califiquen el <b>KinYa!</b> durante el periodo de la convocatoria. </li>
														<li><b>No es necesario aparecer en el ranking.</b></li>
													</div>
													<div class="col-md-6 premios prl">
														<h2 class="text-center mb-4">EL PREMIO NIVEL 2, INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (4 días y 3 noches).</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/coctail.png')}}" width="12%">
																<p class="mb-1 mt-1">Coctail VIP Kaizen y Taishi.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="12%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr">
														<h2 class="text-center mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-taishi-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document" style="max-width: 85%">
				<div class="modal-content" style="/*background-image: url('../convassets/img/modal-bg.jpg'); background-size: cover;*/">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">REQUISITOS PARA ASESORES QUE CUMPLAN EL PROGRAMA ESPECIAL TAISHI DURANTE EL AÑO 2019</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" style="">
						<div class="row ">
							<div class="col-md-12 ">
								<div class="statbox widget box box-shadow">
									<div class="widget-content widget-content-area rounded-pills">
										<ul class="nav nav-tabs  mb-3 justify-content-center" id="creativeJustifyCenterTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link show active" id="creative-justify-center-home-tab" data-toggle="tab" href="#creative-taishi1-center-home" role="tab" aria-controls="creative-justify-center-home" aria-selected="false">
													<i class="flaticon-user-11"></i>
													Nivel 1
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link show" id="creative-justify-center-profile-tab" data-toggle="tab" href="#creative-taishi2-center-profile" role="tab" aria-controls="creative-justify-center-profile" aria-selected="true">
													<i class="flaticon-user-11"></i>
													Nivel 2
												</a>
											</li>
										</ul>
										<div class="tab-content ml-3 mr-3" id="creativeJustifyCenterTabContent">
											<div class="tab-pane fade active show" id="creative-taishi1-center-home" role="tabpanel" aria-labelledby="creative-justify-center-home-tab">
												<div class="row">
													<div class="col-md-6">
														<ul>
															<li>100 puntos mínimo de volumen personal en cada mes. </li>
															<li>2,000 puntos de Volumen Personal acumulados en el periodo de la convocatoria (VP).</li>
															<li>Acumular dentro del periodo de la convocatoria un Volumen de Grupo Personal de (VGP) según el país:</li>
														</ul>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover mb-4">
																<thead >
																	<tr>
																		<th>PAÍS</th>
																		<th>VGP</th>
																	</tr>
																</thead>
																<tbody style="color: black">
																	<tr>
																		<td>México</td>
																		<td>18,000</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>12,000</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-md-6 align-self-center">
														<li>Incorporar Asesores de Bienestar (Frontales) durante el periodo de la convocatoria con <b>100 de VP</b> en un mes calendario, el requisito por país es: </li>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>INCORPORADOS</th>
																	</tr>
																</thead>
																<tbody  style="color: black">
																	<tr>
																		<td>México</td>
																		<td>3</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>2</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<li>Mínimo 2 asesores de su grupo personal que califiquen el <b>KinYa!</b> durante el periodo de la convocatoria. </li>
														<li><b>Estar dentro de los primeros 90 lugares del ranking.</b></li>
														<li><b>Tendrán una ventaja de 9,000 VGP para el ranking.</b></li>
														<li><b>Este ranking es solo rangos Plata, Oro, Platino, Diamante y Diamante Real.</b></li>
													</div>
													<div class="col-md-12 text-center mb-3">
														<hr>
													</div>
													<div class="col-md-6 premios prl text-center">
														<h2 class="mb-4">EL PREMIO NIVEL 1, INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (7 días y 6 noches).</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/city-tour.png')}}" width="12%">
																<p class="mb-1 mt-1">City Tour con los Directivos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/show-broadway.png')}}" width="12%">
																<p class="mb-1 mt-1">Show de Broadway.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-especial.png')}}" width="12%">
																<p class="mb-1 mt-1"><b>Cena Especial con los Directivos.</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/coctail.png')}}" width="12%">
																<p class="mb-1 mt-1">Coctail VIP Kaizen y Taishi.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="12%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr text-center">
														<h2 class="mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane fade " id="creative-taishi2-center-profile" role="tabpanel" aria-labelledby="creative-justify-center-profile-tab">
												<div class="row">
													<div class="col-md-6">
														<ul>
															<li>100 puntos mínimo de volumen personal en cada mes. </li>
															<li>2,000 puntos de Volumen Personal acumulados en el periodo de la convocatoria (VP).</li>
															<li>Acumular dentro del periodo de la convocatoria un Volumen de Grupo Personal de (VGP) según el país:</li>
														</ul>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>VGP</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>México</td>
																		<td>18,000</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>15,000</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>12,000</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>12,000</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-md-6 align-self-center">
														<li>Incorporar Asesores de Bienestar (Frontales) durante el periodo de la convocatoria con <b>100 de VP</b> en un mes calendario, el requisito por país es: </li>
														<div class="table-responsive">
															<table class="table table-bordered table-hovered table-hover table-striped mb-4">
																<thead>
																	<tr>
																		<th>PAÍS</th>
																		<th>INCORPORADOS</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>México</td>
																		<td>3</td>
																	</tr>
																	<tr>
																		<td>Colombia</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Costa Rica</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Ecuador</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Guatemala</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Panamá</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>Perú</td>
																		<td>2</td>
																	</tr>
																	<tr>
																		<td>El Salvador</td>
																		<td>2</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<li>Mínimo 2 asesores de su grupo personal que califiquen el <b>KinYa!</b> durante el periodo de la convocatoria. </li>
														<li><b>No es necesario aparecer en el ranking.</b></li>
													</div>
													<div class="col-md-6 premios prl">
														<h2 class="mb-4">EL PREMIO NIVEL 2, INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
																<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (4 días y 3 noches).</b></p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
																<p class="mb-1 mt-1">Entrada a la Convención.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
																<p class="mb-1 mt-1">Cena de Celebración.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/coctail.png')}}" width="12%">
																<p class="mb-1 mt-1">Coctail VIP Kaizen y Taishi.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="12%">
																<p class="mb-1 mt-1">Bono en efectivo.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 premios prr">
														<h2 class="mb-4">NO INCLUYE</h2>
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
																<p class="mb-1 mt-1">Tiquetes aéreos.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
																<p class="mb-1 mt-1">Alimentación.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos consulares.</p>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
																<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
																<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-puntosv-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document" style="max-width: 85%">
				<div class="modal-content" style="/*background-image: url('../convassets/img/modal-bg.jpg'); background-size: cover;*/">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">REQUISITOS Y PREMIO PARA ASESORES QUE CUMPLIERON EL 100% DE PUNTOS VIAJE (10 PUNTOS)</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" style="">
						<div class="row">
							<div class="col-md-12 text-center">
								<h4 class="mb-4">Requisitos para tener Upgrade a Nivel 1</h4>
							</div>
							<div class="col-md-6">
								<ul>
									<li>100 puntos mínimo de volumen personal en cada mes. </li>
									<li>2,000 puntos de Volumen Personal acumulados en el periodo de la convocatoria (VP).</li>
									<li>Acumular dentro del periodo de la convocatoria un Volumen de Grupo Personal de (VGP) según el país:</li>
								</ul>
								<div class="table-responsive">
									<table class="table table-bordered table-hovered table-hover mb-4">
										<thead >
											<tr>
												<th>PAÍS</th>
												<th>VGP</th>
											</tr>
										</thead>
										<tbody style="color: black">
											<tr>
												<td>México</td>
												<td>15,000</td>
											</tr>
											<tr>
												<td>Colombia</td>
												<td>13,000</td>
											</tr>
											<tr>
												<td>Ecuador</td>
												<td>13,000</td>
											</tr>
											<tr>
												<td>Perú</td>
												<td>13,000</td>
											</tr>
											<tr>
												<td>Guatemala</td>
												<td>10,000</td>
											</tr>
											<tr>
												<td>Panamá</td>
												<td>10,000</td>
											</tr>
											<tr>
												<td>El Salvador</td>
												<td>10,000</td>
											</tr>
											<tr>
												<td>Costa Rica</td>
												<td>10,000</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-md-6 align-self-center">
								<li>Incorporar Asesores de Bienestar (Frontales) durante el periodo de la convocatoria con <b>100 de VP</b> en un mes calendario, el requisito por país es: </li>
								<div class="table-responsive">
									<table class="table table-bordered table-hovered table-hover table-striped mb-4">
										<thead>
											<tr>
												<th>PAÍS</th>
												<th>INCORPORADOS</th>
											</tr>
										</thead>
										<tbody  style="color: black">
											<tr>
												<td>México</td>
												<td>2</td>
											</tr>
											<tr>
												<td>Colombia</td>
												<td>2</td>
											</tr>
											<tr>
												<td>Costa Rica</td>
												<td>2</td>
											</tr>
											<tr>
												<td>Ecuador</td>
												<td>2</td>
											</tr>
											<tr>
												<td>Guatemala</td>
												<td>2</td>
											</tr>
											<tr>
												<td>Panamá</td>
												<td>2</td>
											</tr>
											<tr>
												<td>Perú</td>
												<td>2</td>
											</tr>
											<tr>
												<td>El Salvador</td>
												<td>2</td>
											</tr>
										</tbody>
									</table>
								</div>
								<li>Mínimo 2 asesores de su grupo personal que califiquen el <b>KinYa!</b> durante el periodo de la convocatoria. </li>
								<li><b>No es necesario aparecer en el ranking.</b></li>
							</div>
							<div class="col-md-6 premios prl text-center">
								<h2 class="mb-4">PREMIO NIVEL 2 AUTOMÁTICO</h2>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/alojamiento-hotel.png')}}" width="12%">
										<p class="mb-1 mt-1">Alojamiento en acomodación doble en el <b>Hotel Sheraton de Times Square (4 días y 3 noches).</b></p>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/entrada-convencion.png')}}" width="12%">
										<p class="mb-1 mt-1">Entrada a la Convención.</p>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/cena-celebracion.png')}}" width="12%">
										<p class="mb-1 mt-1">Cena de Celebración.</p>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/bono-efectivo.png')}}" width="12%">
										<p class="mb-1 mt-1">Bono en efectivo.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 premios prr text-center">
								<h2>NO INCLUYE.</h2>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/tiquetes-aereos.png')}}" width="12%">
										<p class="mb-1 mt-1">Tiquetes aéreos.</p>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/alimentacion.png')}}" width="12%">
										<p class="mb-1 mt-1">Alimentación.</p>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/gastos-consulares.png')}}" width="12%">
										<p class="mb-1 mt-1">Gastos consulares.</p>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner text-center">
										<img src="{{ asset('convassets/img/icons/gastos-no-mencionados.png')}}" width="12%">
										<p class="mb-1 mt-1">Gastos no mencionados en el premio.</p>
									</div>
								</div>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-trabajando-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document" style="max-width: 85%">
				<div class="modal-content" style="/*background-image: url('../convassets/img/modal-bg.jpg'); background-size: cover;*/">
					<div class="modal-header">
						<h5 class="modal-title" id="myExtraLargeModalLabel">En construcción</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
						</button>
					</div>
					<div class="modal-body" style="">
						<div class="row ">
							<div class="col-md-12 text-center">
								<img src="http://www.antadtv.com/wp-content/uploads/2018/02/Trabajando.png" width="50%">
								<h1>En construcción</h1>
							</div>
						</div>
	
						<div class="modal-footer" hidden>
							<button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Cerrar</button>
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
		$('#html5-extension').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				{ 
					extend: 'excel', className: 'btn btnExcel btn-rounded btn-sm ', text:"<img src='http://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
					title: 'CONVOCATORIA NUEVA YORK  |  RANKING DIRECTOS Y EJECUTIVOS',
					customize: function( xlsx ) {
						var sheet = xlsx.xl.worksheets['sheet1.xml'];
						$('row c[r^="B"]', sheet).attr( 's', '2' );
					}
				}
			],
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
			},
			
		} );

		$('#html5-extension2').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				{ 
					extend: 'excel', className: 'btn btn-rounded btn-sm btnExcel', text:"<img src='http://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
					title: 'CONVOCATORIA NUEVA YORK  |  RANKING PLATA, ORO, PLATINO, DIAMANTE Y DIAMANTE REAL',
					customize: function( xlsx ) {
						var sheet = xlsx.xl.worksheets['sheet1.xml'];
						$('row c[r^="B"]', sheet).attr( 's', '2' );
					}
				}
			],
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
			},
		} );

		$('#html5-extension3').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'excel', className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', text:"<img src='http://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> <b>Exportar a Excel</b>",}
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
        } );
		
		$('#requisitosSection').on('click', function(event) {
			var target = $(this.getAttribute('href'));
			if( target.length ) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top
				}, 2000);
			}
		});

		function setHora(){
			fecha = new Date();
			hora = fecha.getHours();
			minuto = fecha.getMinutes();
			var ampm = hora >= 12 ? 'pm' : 'am';
			updateHour = hora + ":00:00 " + ampm;
			$("#hora").text(updateHour);
			setTimeout("setHora()",1000)
		}

		setHora();
	</script>
</html>