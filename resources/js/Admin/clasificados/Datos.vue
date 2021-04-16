<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">   
    <h3>Clasificados</h3>     
    </header>    
    <div class="row ">
      <div class="table-responsive-lg">      
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Datos:</th>
              <th scope="col">Estado</th>
              <th scope="col">Solicitado</th>
              <th scope="col">Atendido</th>
              <th scope="col">Cerrado</th>
              <th scope="col">Ver</th>              
            </tr>
          </thead>
          <tbody>
            <tr v-for="dato in datos" :key="dato.id">
              <th scope="row">{{dato.id}}</th>
              <td>{{ dato.nombre }}</td>
              <td>{{ dato.estado ? dato.estado : 'Sin atender' }}</td>
              <td>{{ dato.created_at }}</td>
              <td>{{ dato.fecha_atendido }}</td>
              <td>{{ dato.fecha_cierre }}</td>              
              <td>
                <router-link  :to="{ name: 'Editar', params: { id: dato.id } }">
                    <ion-icon name="create-outline"></ion-icon>
                </router-link>                            
              </td>
            </tr>  
          </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">
            <li class="page-item" :class="paginacion.prev_page_url ? '' : 'disabled'"  >
              <button class="page-link" @click="pagina(paginacion.prev_page_url)" tabindex="-1" aria-disabled="true">Anterior</button>
            </li> 
            <li class="page-item">
              <button class="page-link" v-if="Number(paginacion.current_page-3) > 0" @click="pagina(paginacion.path+'?page='+Number(paginacion.current_page-3))" tabindex="-1" aria-disabled="true">{{paginacion.current_page-3}}</button>
            </li>
            <li class="page-item">
              <button class="page-link" v-if="Number(paginacion.current_page-2) > 0" @click="pagina(paginacion.path+'?page='+Number(paginacion.current_page-2))" tabindex="-1" aria-disabled="true">{{paginacion.current_page-2}}</button>
            </li>          
            <li class="page-item">
              <button class="page-link" v-if="Number(paginacion.current_page-1) > 0" @click="pagina(paginacion.path+'?page='+Number(paginacion.current_page-1))" tabindex="-1" aria-disabled="true">{{paginacion.current_page-1}}</button>
            </li> 
            <li class="page-item active">
              <button class="page-link" @click="pagina(paginacion.path+'?page='+Number(paginacion.current_page))" tabindex="-1" aria-disabled="true">{{paginacion.current_page}}</button>
            </li>
            <li class="page-item">
              <button class="page-link" v-if="Number(paginacion.current_page+1) <= paginacion.last_page"  @click="pagina(paginacion.path+'?page='+Number(paginacion.current_page+1))" tabindex="-1" aria-disabled="true">{{paginacion.current_page+1}}</button>
            </li> 
            <li class="page-item">
              <button class="page-link" v-if="Number(paginacion.current_page+2) < paginacion.last_page"  @click="pagina(paginacion.path+'?page='+Number(paginacion.current_page+2))" tabindex="-1" aria-disabled="true">{{paginacion.current_page+2}}</button>
            </li> 
            <li class="page-item">
              <button class="page-link" v-if="Number(paginacion.current_page+3) < paginacion.last_page"  @click="pagina(paginacion.path+'?page='+Number(paginacion.current_page+3))" tabindex="-1" aria-disabled="true">{{paginacion.current_page+3}}</button>
            </li>    
            <li class="page-item" :class="paginacion.next_page_url ? '' : 'disabled'">
              <button class="page-link" @click="pagina(paginacion.next_page_url)">Siguiente</button>
            </li>
          </ul>
        </nav>         
      </div>   
    </div> 
  </div>
</template>

<script> 
import axios from 'axios';

export default {
    name: 'Datos',
	data() {
        return {           		
          datos: null,
          paginacion: {
            prev_page_url: null,
            next_page_url: null
          }
        }
    },
	mounted() {
		this.obtenerDatos()  
	},  
	methods: {
		async obtenerDatos(){ await axios.get('/admin/pqrs/datos').then(response => { this.datos = response.data.data; this.paginacion = response.data;}) },	
    async pagina(url){ await axios.get(url).then(response => { this.datos = response.data.data; this.paginacion = response.data; }) },
    
	}
};
</script>