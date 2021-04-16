 @extends('admin.app')
 @section('content')
 
    <div id="adminPqrs"></div>
  
 @endsection

 @push('js')
 <script src="{{ url('/js/admin/pqrs/main.js') }}"></script>	 
 @endpush