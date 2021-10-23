<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{ $title }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{URL::to('/')}}/backend/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{URL::to('/')}}/backend/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{URL::to('/')}}/backend/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/backend/assets/css/atlantis.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo">
					<img src="{{URL::to('/')}}/backend/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			@include('backend.template.navbar')
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		@include('backend.template.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="{{URL::to('/')}}/backend/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{URL::to('/')}}/backend/assets/js/core/popper.min.js"></script>
	<script src="{{URL::to('/')}}/backend/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/datatables/datatables.min.js"></script>
    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
    
	<!-- Bootstrap Notify -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="{{URL::to('/')}}/backend/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="{{URL::to('/')}}/backend/assets/js/atlantis.min.js"></script>

	{{-- sweet allert --}}
	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {
				//== Sweetalert Demo 1
				$('#alert_demo_1').click(function(e) {
					swal('Good job!', {
						buttons: {        			
							confirm: {
								className : 'btn btn-success'
							}
						},
					});
				});

				//== Sweetalert Demo 2
				$('#alert_demo_2').click(function(e) {
					swal("Here's the title!", "...and here's the text!", {
						buttons: {        			
							confirm: {
								className : 'btn btn-success'
							}
						},
					});
				});

				//== Sweetalert Demo 3
				$('#alert_demo_3_1').click(function(e) {
					swal("Good job!", "You clicked the button!", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : 'btn btn-warning'
							}
						},
					});
				});

				$('#alert_demo_3_2').click(function(e) {
					swal("Good job!", "You clicked the button!", {
						icon : "error",
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
				});

				$('#alert_demo_3_3').click(function(e) {
					swal("Tersimpan","Data Berhasil di Simpan !", {
						icon : "success",
						buttons: {        			
							confirm: {
								className : 'btn btn-success'
							}
						},
					});
				});

				$('#alert_demo_3_4').click(function(e) {
					swal("Good job!", "You clicked the button!", {
						icon : "info",
						buttons: {        			
							confirm: {
								className : 'btn btn-info'
							}
						},
					});
				});

				//== Sweetalert Demo 4
				$('#alert_demo_4').click(function(e) {
					swal({
						title: "Good job!",
						text: "You clicked the button!",
						icon: "success",
						buttons: {
							confirm: {
								text: "Confirm Me",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					});
				});

				$('#alert_demo_5').click(function(e){
					swal({
						title: 'Input Something',
						html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
						content: {
							element: "input",
							attributes: {
								placeholder: "Input Something",
								type: "text",
								id: "input-field",
								className: "form-control"
							},
						},
						buttons: {
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							},        			
							confirm: {
								className : 'btn btn-success'
							}
						},
					}).then(
					function() {
						swal("", "You entered : " + $('#input-field').val(), "success");
					}
					);
				});

				$('#alert_demo_6').click(function(e) {
					swal("This modal will disappear soon!", {
						buttons: false,
						timer: 3000,
					});
				});

				$('#alert_demo_7').click(function(e) {
					swal({
						title: 'Are you sure?',
						text: "You won't be able to revert this!",
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Yes, delete it!',
								className : 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {
							swal({
								title: 'Deleted!',
								text: 'Your file has been deleted.',
								type: 'success',
								buttons : {
									confirm: {
										className : 'btn btn-success'
									}
								}
							});
						} else {
							swal.close();
						}
					});
				});

				$('#alert_demo_8').click(function(e) {
					swal({
						title: 'Are you sure?',
						text: "You won't be able to revert this!",
						type: 'warning',
						buttons:{
							cancel: {
								visible: true,
								text : 'No, cancel!',
								className: 'btn btn-danger'
							},        			
							confirm: {
								text : 'Yes, delete it!',
								className : 'btn btn-success'
							}
						}
					}).then((willDelete) => {
						if (willDelete) {
							swal("Poof! Your imaginary file has been deleted!", {
								icon: "success",
								buttons : {
									confirm : {
										className: 'btn btn-success'
									}
								}
							});
						} else {
							swal("Your imaginary file is safe!", {
								buttons : {
									confirm : {
										className: 'btn btn-success'
									}
								}
							});
						}
					});
				})

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>
</body>
</html>