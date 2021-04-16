 @extends('admin.app')
 @section('content')
 
    <div id="adminEventos"></div>
 
 @endsection

 @push('js')
 <script src="{{ url('/js/admin/eventos/main.js') }}"></script>	 
 @endpush