 @extends('admin.app')
 @section('content')   
    <div id="adminClasificados"></div> 
 @endsection

 @push('js')
 <script src="{{ url('/js/admin/clasificados/main.js') }}"></script>	 
 @endpush