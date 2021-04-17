<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">   
    <h3>Eventos</h3>     
    </header> 
 
    <form class="row g-3" @submit.prevent="crear">       
      <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Nombre nuevo evento</label>
        <input type="text" class="form-control" id="evento" placeholder="Nombre nuevo evento" v-model="evento.nombre" required>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Crear evento</button>
      </div>

      <div class="col-auto">
        <div v-if="enviando" class="alert alert-success alert-dismissible fade show" role="alert" style="padding-bottom: 4px; padding-top: 2px;">
           Evento creado
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="padding-top: 2px; padding-bottom: 14px;" @click="close"></button>
        </div>
      </div>
 
    </form>
    
    <hr>

    <div class="row ">
      <div class="table-responsive-lg">      
        <table class="table">
          <thead>
            <tr>              
              <th scope="col">Nombre:</th>               
              <th scope="col">Ver</th>              
            </tr>
          </thead>
          <tbody>
            <tr v-for="dato in datos" :key="dato.id">             
              <td>{{ dato.nombre }}</td>                          
              <td>
                  <button style="margin-right: 7px;" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" :data-bs-target="'#eliminar'+dato.id">
                    <ion-icon name="trash-outline"></ion-icon>
                  </button>
                  <div class="modal fade" :id="'eliminar'+dato.id" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="eliminar">Eliminar</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Eliminar clasificado : {{dato.nombre}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" @click="eliminarEvento(dato.id)">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>  
                  <router-link  type="button" class="btn btn-success btn-sm"  :to="{ name: 'Editar', params: { evento: dato.nombre } }">
                    <ion-icon name="person-outline"></ion-icon>
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
          evento: {},           		
          datos: null, 
          errors: {}, 
          enviando: null,        
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
    close(){
       this.enviando = false;
    },
		async obtenerDatos(){ await axios.get('/admin/eventos/datos').then(response => { this.datos = response.data.data; this.paginacion = response.data;}) },	
    async pagina(url){ await axios.get(url).then(response => { this.datos = response.data.data; this.paginacion = response.data; }) },  
    async eliminarEvento(id) { await axios.delete('/admin/eventos/eliminar/'+id).then(() => { this.obtenerDatos(); }) },
    async crear() { await axios.post('/admin/eventos/crear', this.evento).then(() => { ;this.enviando = true; this.obtenerDatos(); this.evento = {} }).catch(error => { this.errors = error.response.data.errors; }) }    
	}
};
</script> 