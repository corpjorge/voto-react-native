<template>
<div class="col-lg-10 mx-auto p-3 py-md-5">    
  <p class="fs-5 col-md-12">Elegia la categoría de clasificados que desea consultar</p>   
  <hr class="col-3 col-md-2 mb-5" />
  <div class="row ">
    <div class="col-md-12">      
		<div class="row">
            <template  v-for="tipo in tipos" :key="tipo.id" > 
                <router-link style="text-decoration: none;"  class="col-sm-3" :to="{ name: 'Ver', params: { tipo: tipo.nombre } }">                                     
                    <div class="text-center shadow p-3 mb-5 bg-body rounded" :id="'clasificado'+tipo.id" @mouseover="hoverOver(tipo.id)" @mouseleave="hoverLeave(tipo.id)">
                        <h5 class="card-title">{{tipo.nombre}}</h5>
                    </div>
                </router-link>  
            </template>       
        </div>
    </div>   
  </div> 
</div>
</template>  

<script>
const axios = require('axios');

export default {
    name: 'Lista',
    data() {
        return { 
		  tipos: {},
          shadow: 'shadow'
        }
    },
	created() {
		this.getTipo()
	},
    methods: {
        async getTipo(){ await axios.get('/clasificados-tipo').then( response => { this.tipos = response.data; }) },
        hoverOver(id) {
            var element = document.getElementById("clasificado"+id);
            element.classList.remove("shadow");
            element.classList.add("shadow-lg");
        },
        hoverLeave(id) {
            var element = document.getElementById("clasificado"+id);
            element.classList.remove("shadow-lg");
            element.classList.add("shadow");
        }
    }
	 
};
</script>
 