<template>   
   <div class="col-lg-10 mx-auto p-3 py-md-5">    
	<p class="fs-5 col-md-12">
		<router-link style="text-decoration: none;" class="col-sm-3" :to="{ name: 'root' }">                                     
			<ion-icon name="arrow-back-circle-outline"></ion-icon>
		</router-link> 
		{{$route.params.tipo}}</p>   
	
	<div class="row ">
		<div class="col-md-12">      
			<div class="row">
				<template  v-for="clasificado in clasificados" :key="clasificado.id" > 
					<hr/>
					<h4>{{clasificado.titulo}}</h4>
					<p>{{clasificado.descripcion}}</p>
					<small><b>Contacto: </b>{{clasificado.celular}} / {{clasificado.correo}} </small>
					<div class="row row-cols-1 row-cols-md-3 g-4">
						<template v-for="foto in clasificado.archivo1" >
							<div class="col" v-if="foto">								
								<a :href="'/storage/clasificados/'+foto" target="_black">
								<div  class="card">								  
									<img  :src="'/storage/clasificados/'+foto" class="card-img-top" alt="">							 
								</div>
								</a>					 
							</div>
						</template>						 
					</div>				
				</template> 
			</div>
		</div>   
	</div> 
</div>
</template>

<script>
const axios = require('axios');

export default {
    name: 'Detalle',
	data() {
        return {           		
          clasificados: {},			   
        }
    },
	created() {
		this.obtenerDatos()
	},
	methods: {		
		async obtenerDatos(){ await axios.get('/clasificado/'+this.$route.params.tipo).then(response => { this.clasificados = response.data;}) } 	 
	}
};
</script>
 