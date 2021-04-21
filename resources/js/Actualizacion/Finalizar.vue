<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">   
    <h3>Proceso Finalizado</h3>     
    </header>     
    <div class="row g-3">
        <p> Gracias por actualizar tu informacion </p>  

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" type="button" @click="logout" >Cerrar</button>            
        </div>  
        
    </div>
  </div>
</template>

<script> 
import axios from 'axios';

export default {
    name: 'Localizacion',	 
	mounted() {	  
     window.scrollTo(0, 0);
	},  
	methods: {         
        async logout(){ await axios.post('/logout').then( () => { window.location.assign("/login") } )  }
	}
};
</script>