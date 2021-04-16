<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">   
    <h3>PQRS</h3>     
    </header>  
    <div class="row ">
        <div v-if="enviando" class="fs-5 col-md-12 alert alert-success" role="alert">  
          Informacion actualizada
        </div>  
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p><b>Nombre:</b> {{datos.nombre}}</p>
                    <p><b>Cedula:</b> {{datos.cedula}}</p>
                    <p><b>Celular:</b> {{datos.celular}}</p>
                    <p><b>Correo:</b> {{datos.correo}}</p>
                </div>
                <div class="col-sm">
                    <a :href="'/storage/pqrs/'+datos.archivo1" target="_blank" >Documento 1</a> / 
                    <a :href="'/storage/pqrs/'+datos.archivo2" target="_blank" >Documento 2</a>
                </div>
                <div class="col-sm">
                    <p><b>{{datos.tipo}}:</b> {{datos.descripcion}}</p>
                </div>
            </div>
        </div>  

        <hr>

        <form  v-if="!datos.estado" class="needs-validation" autocomplete="off" novalidate  @submit.prevent="atender" >
			<div class="mb-3 row">
				<label for="descripcion" class="col-sm-1 col-form-label">Respuesta (atención):</label>
				<div class="col-sm-10">
					<textarea class="form-control" :class="errors.observacion_antendido ? 'is-invalid' : '' " id="descripcion" v-model="datos.observacion_antendido" ></textarea>
					<div class="invalid-feedback">{{ errors.observacion_antendido ? errors.observacion_antendido[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="archivo1" class="col-sm-1 col-form-label">Archivo1:</label>
				<div class="col-sm-10">
					<input type="file" class="form-control form-control-sm" :class="errors.archivo_antendido ? 'is-invalid' : '' " aria-label="file example"  @change="archivo1">
					<div class="invalid-feedback">{{ errors.archivo_antendido ? errors.archivo_antendido[0] : ''}}</div>
				</div>
			</div> 	   

			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="btn btn-primary" type="submit" >Guardar</button>		 
			</div> 			 
		</form>

        <template v-if="datos.estado" >

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p><b>Fecha atendido:</b> {{datos.fecha_atendido}}</p>                   
                </div>
                <div class="col-sm">
                    <a :href="'/storage/pqrs/respuestas/'+datos.archivo_antendido" target="_blank" >Archivo antendido </a>                   
                </div>
                <div class="col-sm">
                    <p><b>Respuesta (atención):</b> {{datos.observacion_antendido}}</p>
                </div>
            </div>
        </div> 

        <hr> 

        </template>

        <template v-if="datos.estado == 'ATENDIDO' " >

        <form class="needs-validation" autocomplete="off" novalidate  @submit.prevent="cerrar" >
			<div class="mb-3 row">
				<label for="descripcion" class="col-sm-1 col-form-label">Respuesta (Cierre):</label>
				<div class="col-sm-10">
					<textarea class="form-control" :class="errors.observacion_cierre ? 'is-invalid' : '' " id="descripcion" v-model="datos.observacion_cierre" ></textarea>
					<div class="invalid-feedback">{{ errors.observacion_cierre ? errors.observacion_cierre[0] : ''}}</div>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="archivo1" class="col-sm-1 col-form-label">Archivo1:</label>
				<div class="col-sm-10">
					<input type="file" class="form-control form-control-sm" :class="errors.archivo_cierre ? 'is-invalid' : '' " aria-label="file example"  @change="archivo2">
					<div class="invalid-feedback">{{ errors.archivo_cierre ? errors.archivo_cierre[0] : ''}}</div>
				</div>
			</div> 	   

			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="btn btn-primary" type="submit" >Guardar</button>		 
			</div> 			 
		</form>
        </template>  

        <template v-if="datos.estado == 'CERRADO'" >

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p><b>Fecha cierre:</b> {{datos.fecha_cierre}}</p>                   
                </div>
                <div class="col-sm">
                     <a :href="'/storage/pqrs/respuestas/'+datos.archivo_cierre" target="_blank" >Archivo cierre </a>                  
                </div>
                <div class="col-sm">
                    <p><b>Respuesta (Cierre):</b> {{datos.observacion_cierre}}</p>
                </div>
            </div>
        </div>   
        </template> 
 
    </div> 
  </div>
</template>

<script> 
import axios from 'axios';

export default {
    name: 'Datos',
	data() {
        return {           		
          datos: {}, 
          errors: {},
		  enviando: null,         
        }
    },
	mounted() {
		this.obtenerDatos()  
        window.scrollTo(0, 0);
	},  
	methods: {
        archivo1(event) {
			this.datos.archivo_antendido = event.target.files[0];
		},
        archivo2(event) {
			this.datos.archivo_cierre = event.target.files[0];
		},
		async obtenerDatos(){ await axios.get('/admin/pqrs/editar/'+this.$route.params.id).then(response => { this.datos = response.data;}) },	
        async atender(){
			const data = new FormData();
            data.append('observacion_antendido', this.datos.observacion_antendido ? this.datos.observacion_antendido : '')    
			data.append('archivo_antendido', this.datos.archivo_antendido ? this.datos.archivo_antendido : '') 
			await axios.post('/admin/pqrs/atender/'+this.$route.params.id, data).then(() => { this.enviando = true; this.obtenerDatos(); }).catch(error => { this.errors = error.response.data.errors; })
            
		},

        async cerrar(){
			const data = new FormData();		 		 
			data.append('observacion_cierre', this.datos.observacion_cierre ? this.datos.observacion_cierre : '')  		 
			data.append('archivo_cierre', this.datos.archivo_cierre ? this.datos.archivo_cierre : '') 
			await axios.post('/admin/pqrs/cerrar/'+this.$route.params.id, data).then(() => { this.enviando = true; this.obtenerDatos(); }).catch(error => { this.errors = error.response.data.errors; })
		},
        
    
	}
};
</script>