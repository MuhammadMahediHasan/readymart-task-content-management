        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend_assets/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend_assets/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend_assets/assets/demo/datatables-demo.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ asset('backend_assets/js/scripts.js') }}"></script>
        <script type="text/javascript">
        	if("{{ Session::has('toastr') }}"){
			    toastr.success("{{ Session::get('toastr') }}");
			    let session_clear = "{{ Session::forget('toastr')}}";
			}

			if("{{$errors->any()}}"){
			    $('#modal').modal('show');
			}
        </script>