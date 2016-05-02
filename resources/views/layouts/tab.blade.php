<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Data Tables</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/tab/jquery-ui.css') }}" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('assets/tab/dataTables.jqueryui.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/tab/AdminLTE.min.css') }}" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/tab/_all-skins.min.css') }}" />


	<![endif]-->
	<script src=""></script>
</head>
<body>


@yield('content')
<!-- jQuery 2.1.4 -->

<script src="{{ asset('assets/tab/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.5 -->


<!-- DataTables -->
<script src="{{ asset('assets/tab/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/tab/dataTables.bootstrap.js') }}"></script>
<!-- SlimScroll -->

<!-- FastClick -->
\
<!-- AdminLTE App -->
\
<!-- AdminLTE for demo purposes -->

<!-- page script -->





<script>
	/*	$(function () {
	 $("#").DataTable();
	 $('#example2').DataTable({
	 "paging": true,
	 "lengthChange": false,
	 "searching": false,
	 "ordering": true,
	 "info": true,
	 "autoWidth": false
	 });
	 });*/
	$(document).ready(function() {
		$('#example1').DataTable( {
			"order": [[ 2, "desc" ]],
			"jQueryUI": true,
			"language": {
				"lengthMenu": "Показать _MENU_ records per page",
				"zeroRecords": "Nothing found - sorry",
				"info": "Показано page _PAGE_ of _PAGES_",
				"infoEmpty": "No records available",
				"infoFiltered": "(filtered from _MAX_ total records)"
			}
		} );

	} );
</script>
</body>
</html>