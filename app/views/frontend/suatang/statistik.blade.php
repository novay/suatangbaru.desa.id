@extends('frontend._templates.default')

{{-- Judul Website --}}
@section('title')
	{{{ $title }}}
@stop

@section('styles')
	<link rel="stylesheet" href="{{ asset('packages/web/css/BlueHeader-Hosting-Unix.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/web/css/speechbubble.css') }}">
@stop

@section('statistik')
	<div id="blue-body" class="subpage" style="background-image:none;">
		<div class="section-wrapper">
			<div id="unix-offer">
				<div id="unix-offer-switch">
					<table id="tabs">
						<tbody><tr>
							<td loadid="hp-offer-populasi" class="active"><div>Statistik Populasi</div></td>
							<td loadid="hp-offer-usia"><div>Populasi Menurut Usia</div></td>
							<td loadid="hp-offer-pencaharian" class=""><div>Mata Pencaharian</div></td>
							<td loadid="hp-offer-pendidikan" class=""><div>Jenjang Pendidikan</div></td>
							<td loadid="hp-offer-agama" class=""><div>Statistik Agama</div></td>
						</tr>
					</tbody></table>
					<div class="clr"></div>
					
					<div id="offer-body">
							<div class="offer-tab showHand active" id="hp-offer-populasi">
								<script type="text/javascript">
									$(function () {
											$('#populasi').highcharts({
												chart: {
													type: 'bar'
												},
												subtitle: {
													text: 'Statistik Populasi Tahun 2012'
												},
												title: {
													text: 'Desa Suatang Baru'
												},
												xAxis: {
													categories: ['Kepala Keluarga', 'Pria', 'Wanita'],
													title: {
														text: null
													}
												},
												yAxis: {
													min: 0,
													title: {
														text: 'Populasi',
														align: 'middle'
													},
													labels: {
														overflow: 'Justified'
													}
												},
												tooltip: {
													valueSuffix: ' Orang'
												},
												plotOptions: {
													bar: {
														dataLabels: {
															enabled: true
														}
													}
												},
												
												credits: {
													enabled: false
												},

												series: [{
													name: 'Jumlah Jiwa',
													data: [813, 1392, 1291]
												}]
											});
										});
										

								</script>
								<div id="populasi" style="min-width: 920px; height: 400px; margin: 0 auto"></div>
							</div>
							
							<div class="offer-tab showHand" id="hp-offer-usia">
								<script type="text/javascript">
									$(function () {
											$('#usia').highcharts({
												chart: {
													type: 'column'
												},
												subtitle: {
													text: 'Statistik Populasi Menurut Usia Tahun 2012'
												},
												title: {
													text: 'Desa Suatang Baru'
												},
												xAxis: {
													categories: [
														'0 - 1',
														'2 - 4',
														'5 - 9',
														'10 - 14',
														'15 - 19',
														'20 - 24',
														'25 - 29',
														'30 - 34',
														'35 - 39',
														'40 - 44',
														'45 - 49',
														'50 - 54',
														'55 - 59 Keatas'
													],
													title: {
														text: 'Umur'
													}
												},
												yAxis: {
													min: 0,
													title: {
														text: 'Populasi'
													}
												},
												tooltip: {
													headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
													pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
														'<td style="padding:0"><b>{point.y:.f} Orang</b></td></tr>',
													footerFormat: '</table>',
													shared: true,
													useHTML: true
												},
												plotOptions: {
													column: {
														pointPadding: 0.2,
														borderWidth: 0
													}
												},
												series: [{
													name: 'Jumlah Jiwa',
													data: [143, 177, 261, 382, 304, 140, 145, 181, 186, 170, 163, 177, 254]
												}]
											});
										});
								

									</script>
								<div id="usia" style="min-width: 920px; height: 400px; margin: 0 auto"></div>
							</div>

							<div class="offer-tab showHand col2" id="hp-offer-pencaharian">
								<script type="text/javascript">
									$(function () {
											$('#pencaharian').highcharts({
												chart: {
													type: 'column'
												},
												subtitle: {
													text: 'Statistik Mata Pencaharian Tahun 2012'
												},
												title: {
													text: 'Desa Suatang Baru'
												},
												xAxis: {
													categories: [
														'Petani',
														'Buruh Tani',
														'PNS',
														'Pedagang',
														'Nelayan',
														'Polri',
														'Pensiunan',
														'Dukun',
														'Pengusaha'
													]
												},
												yAxis: {
													min: 0,
													title: {
														text: 'Populasi'
													}
												},
												tooltip: {
													headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
													pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
														'<td style="padding:0"><b>{point.y:.f} Orang</b></td></tr>',
													footerFormat: '</table>',
													shared: true,
													useHTML: true
												},
												plotOptions: {
													column: {
														pointPadding: 0.2,
														borderWidth: 0
													}
												},
												series: [{
													name: 'Jumlah Jiwa',
													data: [429, 40, 56, 10, 1, 1, 8, 6, 1]
												}]
											});
										});
										

											</script>
								<div id="pencaharian" style="min-width: 920px; height: 400px; margin: 0 auto"></div>
							</div>

							<div class="offer-tab showHand" id="hp-offer-pendidikan">
								<script type="text/javascript">
									$(function () {
											$('#pendidikan').highcharts({
												chart: {
													type: 'bar'
												},
												subtitle: {
													text: 'Statistik Jenjang Pendidikan 2012'
												},
												title: {
													text: 'Desa Suatang Baru'
												},
												xAxis: {
													categories: ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2'],
													title: {
														text: null
													}
												},
												yAxis: {
													min: 0,
													title: {
														text: 'Populasi',
														align: 'middle'
													},
													labels: {
														overflow: 'Justified'
													}
												},
												tooltip: {
													valueSuffix: ' Orang'
												},
												plotOptions: {
													bar: {
														dataLabels: {
															enabled: true
														}
													}
												},
												
												credits: {
													enabled: false
												},

												series: [{
													name: 'Wanita',
													data: [525, 414, 86, null, 25, null]
												},{
													name: 'Pria',
													data: [517, 381, 223, 2, 24, 2]
												}]
											});
										});
								</script>
								<div id="pendidikan" style="min-width: 920px; height: 400px; margin: 0 auto"></div>
							</div>

							<div class="offer-tab showHand" id="hp-offer-agama">
								<script type="text/javascript">
									$(function () {
											$('#container').highcharts({
												chart: {
													type: 'bar'
												},
												subtitle: {
													text: 'Statistik Agama 2012'
												},
												title: {
													text: 'Desa Suatang Baru'
												},
												xAxis: {
													categories: ['Islam', 'Kristen', 'Katolik'],
													title: {
														text: null
													}
												},
												yAxis: {
													min: 0,
													title: {
														text: 'Populasi',
														align: 'middle'
													},
													labels: {
														overflow: 'Justified'
													}
												},
												tooltip: {
													valueSuffix: ' Orang'
												},
												plotOptions: {
													bar: {
														dataLabels: {
															enabled: true
														}
													}
												},
												
												credits: {
													enabled: false
												},

												series: [{
													name: 'Jumlah Jiwa',
													data: [2260, 8, 15]
												}]
											});
										});
									</script>
								<div id="container" style="min-width: 920px; height: 400px; margin: 0 auto"></div>
							</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			    $(document).ready(function() {
			        $("#unix-offer-switch #tabs td").click(function() {
			            $("#unix-offer-switch #tabs td").removeClass("active");
			            $(this).addClass("active");
			            var getid = "#" + $(this).attr("loadid");
			            $("#unix-offer-switch #offer-body div.offer-tab").removeClass("active");
			            $(getid).addClass("active");
			        });
			    });
			</script>
			
			<div class="clr"></div>

			<script type="text/javascript">
			    $(document).ready(function() {
					$('#uptime-link a, #uptime-reliability .close').click(function() {
			            $('#uptime-reliability').toggle();
			        });
			    });
			</script>

			
			<div class="clr"></div>			
		</div>
	</div>    

@stop 

@section('scripts')

	<script src="{{ asset('packages/web/statistik/js/highcharts.js') }}"></script>
	<script src="{{ asset('packages/web/statistik/js/exporting.js') }}"></script>

@stop