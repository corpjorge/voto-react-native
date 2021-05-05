<template>
<div class="col-lg-10 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center mb-2 border-bottom">   
	<h3>PQRS</h3>     
  </header>  
  <p v-if="!enviando" class="fs-5 col-md-12">A continuación, encontrará una serie de campos que deberá completar para enviarnos su solicitud.</p>
  <div v-else class="fs-5 col-md-12 alert alert-success" role="alert">  
	Su solicitud ha sido enviada.
  </div> 
  <hr class="col-3 col-md-2 mb-5" />
  <div class="row ">
    <div class="col-md-12">      
		<form v-if="!enviando" class="needs-validation" autocomplete="off" novalidate  @submit.prevent="crearPQRS" >
			<div class="mb-3 row">
				<label for="nombre" class="col-sm-1 col-form-label">Nombre:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control form-control-sm" :class="errors.nombre ? 'is-invalid' : '' " id="nombre" aria-describedby="nombre" v-model="pqr.nombre" >
					<div class="invalid-feedback">{{ errors.nombre ? errors.nombre[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="cedula" class="col-sm-1 col-form-label">Cedula:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control form-control-sm" :class="errors.cedula ? 'is-invalid' : '' " id="cedula" aria-describedby="cedula" v-model="pqr.cedula">
					<div class="invalid-feedback">{{ errors.cedula ? errors.cedula[0] : ''}}</div>
				</div>
			</div>			

			<div class="mb-3 row">
				<label for="celular" class="col-sm-1 col-form-label">Celular:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control form-control-sm" :class="errors.celular ? 'is-invalid' : '' " id="celular" aria-describedby="celular"  v-model="pqr.celular" >
					<div class="invalid-feedback">{{ errors.celular ? errors.celular[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="correo" class="col-sm-1 col-form-label">Correo:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control form-control-sm" :class="errors.correo ? 'is-invalid' : '' " id="correo" aria-describedby="correo"  v-model="pqr.correo">
					<div class="invalid-feedback">{{ errors.correo ? errors.correo[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="oficinas" class="col-sm-1 col-form-label">Área:</label>
				<div class="col-sm-10">
					<select class="form-select form-select-sm" :class="errors.oficinas ? 'is-invalid' : '' "  aria-label="oficinas" v-model="pqr.oficinas">
					  <option v-for="oficina in oficinas" :key="oficina.id" :value="oficina.nombre">{{oficina.nombre}}</option>
				</select>
				<div class="invalid-feedback">{{ errors.oficinas ? errors.oficinas[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="tipo" class="col-sm-1 col-form-label">Tipo :</label>
				<div class="col-sm-10">
					<select class="form-select form-select-sm" :class="errors.tipo ? 'is-invalid' : '' "  aria-label="tipo"  v-model="pqr.tipo">						 
						<option value="">Seleccione el tipo</option>
						<option value="Peticion">Petición</option>
						<option value="Queja">Queja</option>
						<option value="Reclamo">Reclamo</option>
						<option value="Solicitud">Solicitud</option>
						<option value="Felicitacion">Felicitación</option>                        
					</select>
					<div class="invalid-feedback">{{ errors.tipo ? errors.tipo[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="descripcion" class="col-sm-1 col-form-label">Descripción:</label>
				<div class="col-sm-10">
					<textarea class="form-control form-control-sm" :class="errors.descripcion ? 'is-invalid' : '' " id="descripcion" v-model="pqr.descripcion" ></textarea>
					<div class="invalid-feedback">{{ errors.descripcion ? errors.descripcion[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="archivo1" class="col-sm-1 col-form-label">Archivo1:</label>
				<div class="col-sm-10">
					<input type="file" class="form-control form-control-sm" :class="errors.archivo1 ? 'is-invalid' : '' " aria-label="file example"  @change="archivo1">
					<div class="invalid-feedback">{{ errors.archivo1 ? errors.archivo1[0] : ''}}</div>
				</div>
			</div> 	 

			<div class="mb-3 row">
				<label for="archivo2" class="col-sm-1 col-form-label">Archivo2:</label>
				<div class="col-sm-10">
					<input type="file" accept=".pdf, .jpg, .gif, .doc" class="form-control form-control-sm" :class="errors.archivo2 ? 'is-invalid' : '' " aria-label="file example"  @change="archivo2">
					<div class="invalid-feedback">{{ errors.archivo2 ? errors.archivo2[0] : ''}}</div>
				</div>
			</div> 	

			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="btn btn-primary" type="submit" >Enviar</button>		 
			</div> 			 
		</form>
		
    </div>   
  </div>
  <!-- 
  <footer class="pt-5 my-5 text-muted border-top">
    Created by the Bootstrap team &middot; &copy; 2021
  </footer>
  -->
</div>
</template>

<script>
const axios = require('axios');

export default {
    name: 'App',
	data() {
        return {           		
          pqr: {},		
		  errors: {},
		  enviando: null,
		  oficinas: {}
        }
    },
	created() {
		this.pqrsOFicinas()
	},
	methods: {
		archivo1(event) {
			this.pqr.archivo1 = event.target.files[0];
		},
		archivo2(event) {
			this.pqr.archivo2 = event.target.files[0]
		},
		async crearPQRS(){
			const data = new FormData();
			data.append('nombre', this.pqr.nombre ? this.pqr.nombre : '')
			data.append('cedula', this.pqr.cedula ? this.pqr.cedula : '')
			data.append('celular', this.pqr.celular ? this.pqr.celular : '')
			data.append('correo', this.pqr.correo ? this.pqr.correo : '')
			data.append('oficinas', this.pqr.oficinas ? this.pqr.oficinas : '')
			data.append('tipo', this.pqr.tipo ? this.pqr.tipo : '')
			data.append('descripcion', this.pqr.descripcion ? this.pqr.descripcion : '')  
			data.append('archivo1', this.pqr.archivo1 ? this.pqr.archivo1 : '')
			data.append('archivo2', this.pqr.archivo2 ? this.pqr.archivo2 : '') 

			await axios.post('/pqrs', data).then(() => { this.enviando = true; }).catch(error => { this.errors = error.response.data.errors; })
		},
		async pqrsOFicinas(){
			await axios.get('/pqrs-oficinas').then( response => { this.oficinas = response.data; })
		}
	 
	}
};
</script>
 