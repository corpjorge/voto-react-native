<template>
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center mb-2 border-bottom">   
	<h3>Eventos</h3>     
  </header>  
  <p class="fs-5 col-md-12">A continuación, encontrarás una serie de campos que deberás completar para realizar tu inscripción.
	  Ingresa tu información y selecciona el evento en el que deseas participar.</p>  
  <hr class="col-3 col-md-2 mb-5" />
  <div class="row ">
    <div class="col-md-12">      
	 eventos

    </div>   
  </div>
 
</div>
</template>

<script>
const axios = require('axios');

export default {
    name: 'App',
	data() {
        return {           		
          evento: {},		
		 
        }
    },
	created() {
		this.crearEvento()
	},
	methods: {
		async crearEvento(){ await axios.get('/admin/pqrs', this.evento).then(() => { this.evento = true; }).catch(error => { this.errors = error.response.data.errors; }) },		 
	}
};
</script>
 