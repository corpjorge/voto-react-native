<template>
<div class="col-lg-10 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center mb-2 border-bottom">   
	<h3>Clasificados</h3>     
  </header>  
  <p v-if="!enviando" class="fs-5 col-md-12">A través de este formulario podrá solicitar la publicación de sus anuncios, llene de forma correcta los datos a continuación y
	  espere a que uno de nuestros funcionarios valide su información, si todo esta correcto se realizara la publicación de su clasificado.</p>
  <div v-else class="fs-5 col-md-12 alert alert-success" role="alert">  
	Su solicitud ha sido enviada.
  </div> 
  <hr class="col-3 col-md-2 mb-5" />
  <div class="row ">
    <div class="col-md-12">      
		<form v-if="!enviando" class="needs-validation" autocomplete="off" novalidate  @submit.prevent="crearClasificado" >
			<div class="mb-3 row">
				<label for="nombre" class="col-sm-1 col-form-label">Nombre:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control form-control-sm" :class="errors.nombre ? 'is-invalid' : '' " id="nombre" aria-describedby="nombre" v-model="clasificado.nombre" >
					<div class="invalid-feedback">{{ errors.nombre ? errors.nombre[0] : ''}}</div>
				</div>
			</div> 

			<div class="mb-3 row">
				<label for="celular" class="col-sm-1 col-form-label">Celular:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control form-control-sm" :class="errors.celular ? 'is-invalid' : '' " id="celular" aria-describedby="celular"  v-model="clasificado.celular" >
					<div class="invalid-feedback">{{ errors.celular ? errors.celular[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="correo" class="col-sm-1 col-form-label">Correo:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control form-control-sm" :class="errors.correo ? 'is-invalid' : '' " id="correo" aria-describedby="correo"  v-model="clasificado.correo">
					<div class="invalid-feedback">{{ errors.correo ? errors.correo[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="tipo" class="col-sm-1 col-form-label">Tipo:</label>
				<div class="col-sm-10">
					<select class="form-select form-select-sm" :class="errors.tipo ? 'is-invalid' : '' "  aria-label="oficinas" v-model="clasificado.tipo">
					  <option v-for="tipo in tipos" :key="tipo.id" :value="tipo.nombre">{{tipo.nombre}}</option>
				</select>
				<div class="invalid-feedback">{{ errors.tipo ? errors.tipo[0] : ''}}</div>
				</div>
			</div> 

			<div class="mb-3 row">
				<label for="titulo" class="col-sm-1 col-form-label">Titulo:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control form-control-sm" :class="errors.titulo ? 'is-invalid' : '' " id="titulo" aria-describedby="titulo"  v-model="clasificado.titulo">
					<div class="invalid-feedback">{{ errors.titulo ? errors.titulo[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="descripcion" class="col-sm-1 col-form-label">Descripción:</label>
				<div class="col-sm-10">
					<textarea class="form-control form-control-sm" :class="errors.descripcion ? 'is-invalid' : '' " id="descripcion" v-model="clasificado.descripcion" ></textarea>
					<div class="invalid-feedback">{{ errors.descripcion ? errors.descripcion[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="archivo1" class="col-sm-1 col-form-label">Foto 1:</label>
				<div class="col-sm-10">
					<input type="file" accept=".jpg" class="form-control form-control-sm" :class="errors.archivo1 ? 'is-invalid' : '' " aria-label="file example"  @change="archivo1">
					<div class="invalid-feedback">{{ errors.archivo1 ? errors.archivo1[0] : ''}}</div>
				</div>
			</div> 	 

			<div class="mb-3 row">
				<label for="archivo1" class="col-sm-1 col-form-label">Foto 2:</label>
				<div class="col-sm-10">
					<input type="file" accept=".jpg" class="form-control form-control-sm" :class="errors.archivo2 ? 'is-invalid' : '' " aria-label="file example"  @change="archivo2">
					<div class="invalid-feedback">{{ errors.archivo2 ? errors.archivo2[0] : ''}}</div>
				</div>
			</div> 	

			<div class="mb-3 row">
				<label for="archivo1" class="col-sm-1 col-form-label">Foto 3:</label>
				<div class="col-sm-10">
					<input type="file" accept=".jpg" class="form-control form-control-sm" :class="errors.archivo3 ? 'is-invalid' : '' " aria-label="file example"  @change="archivo3">
					<div class="invalid-feedback">{{ errors.archivo3 ? errors.archivo3[0] : ''}}</div>
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
          clasificado: {},		
		  errors: {},
		  enviando: null,
		  tipos: {}
        }
    },
	created() {
		this.getClasificados()
	},
	methods: {
		archivo1(event) {
			this.clasificado.archivo1 = event.target.files[0];
		},
		archivo2(event) {
			this.clasificado.archivo2 = event.target.files[0]
		},
		archivo3(event) {
			this.clasificado.archivo3 = event.target.files[0]
		},
		archivo4(event) {
			this.clasificado.archivo4 = event.target.files[0]
		},
		async crearClasificado(){
			const data = new FormData();
			data.append('nombre', this.clasificado.nombre ? this.clasificado.nombre : '')	 
			data.append('celular', this.clasificado.celular ? this.clasificado.celular : '')
			data.append('correo', this.clasificado.correo ? this.clasificado.correo : '')
			data.append('tipo', this.clasificado.tipo ? this.clasificado.tipo : '')
			data.append('titulo', this.clasificado.titulo ? this.clasificado.titulo : '')			
			data.append('descripcion', this.clasificado.descripcion ? this.clasificado.descripcion : '')  
			data.append('archivo1', this.clasificado.archivo1 ? this.clasificado.archivo1 : '')	 
			data.append('archivo2', this.clasificado.archivo2 ? this.clasificado.archivo2 : '')	 
			data.append('archivo3', this.clasificado.archivo3 ? this.clasificado.archivo3 : '')	 	 

			await axios.post('/clasificados', data).then(() => { this.enviando = true; }).catch(error => { this.errors = error.response.data.errors; })
		},
		async getClasificados(){ await axios.get('/clasificados-tipo').then( response => { this.tipos = response.data; }) }
	 
	}
};
</script>
 