<template>
<div class="col-lg-10 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center mb-2 border-bottom">   
	<h3>Eventos</h3>     
  </header>  
  <p v-if="!enviando" class="fs-5 col-md-12">A continuación, encontrarás una serie de campos que deberás completar para realizar tu inscripción.
	  Ingresa tu información y selecciona el evento en el que deseas participar.</p>
  <div v-else class="fs-5 col-md-12 alert alert-success" role="alert">  
	Su solicitud ha sido enviada.
  </div> 
  <hr class="col-3 col-md-2 mb-5" />
  <div class="row ">
    <div class="col-md-12">      
		<form v-if="!enviando" class="needs-validation" autocomplete="off" novalidate  @submit.prevent="crearEvento" >
			<div class="mb-3 row">
				<label for="nombre" class="col-sm-1 col-form-label">Nombre:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control form-control-sm" :class="errors.nombre ? 'is-invalid' : '' " id="nombre" aria-describedby="nombre" v-model="evento.nombre" >
					<div class="invalid-feedback">{{ errors.nombre ? errors.nombre[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="cedula" class="col-sm-1 col-form-label">Cedula:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control form-control-sm" :class="errors.cedula ? 'is-invalid' : '' " id="cedula" aria-describedby="cedula"  v-model="evento.cedula" >
					<div class="invalid-feedback">{{ errors.cedula ? errors.cedula[0] : ''}}</div>
				</div>
			</div> 

			<div class="mb-3 row">
				<label for="celular" class="col-sm-1 col-form-label">Celular:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control form-control-sm" :class="errors.celular ? 'is-invalid' : '' " id="celular" aria-describedby="celular"  v-model="evento.celular" >
					<div class="invalid-feedback">{{ errors.celular ? errors.celular[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="correo" class="col-sm-1 col-form-label">Correo:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control form-control-sm" :class="errors.correo ? 'is-invalid' : '' " id="correo" aria-describedby="correo"  v-model="evento.correo">
					<div class="invalid-feedback">{{ errors.correo ? errors.correo[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="tipo" class="col-sm-1 col-form-label">Evento:</label>
				<div class="col-sm-10">
					<select class="form-select form-select-sm" :class="errors.evento ? 'is-invalid' : '' "  aria-label="oficinas" v-model="evento.evento">
					  <option v-for="event in eventos" :key="event.id" :value="event.nombre">{{event.nombre}}</option>
				</select>
				<div class="invalid-feedback">{{ errors.evento ? errors.evento[0] : ''}}</div>
				</div>
			</div>  

			<div class="mb-3 row">
				<label for="descripcion" class="col-sm-1 col-form-label">Observación:</label>
				<div class="col-sm-10">
					<textarea class="form-control form-control-sm" :class="errors.descripcion ? 'is-invalid' : '' " id="descripcion" v-model="evento.descripcion" ></textarea>
					<div class="invalid-feedback">{{ errors.descripcion ? errors.descripcion[0] : ''}}</div>
				</div>
			</div>
 
			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="btn btn-primary" type="submit" >Enviar</button>		 
			</div> 			 
		</form>		

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
		  errors: {},
		  enviando: null,
		  eventos: {}
        }
    },
	created() {
		this.getEventos()
	},
	methods: {
		async crearEvento(){ await axios.post('/eventos', this.evento).then(() => { this.enviando = true; }).catch(error => { this.errors = error.response.data.errors; }) },
		async getEventos(){ await axios.get('/eventos-lista').then( response => { this.eventos = response.data; }) }
	 
	}
};
</script>
 