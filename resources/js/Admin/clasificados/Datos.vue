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
              <th scope="col">Datos:</th>
              <th scope="col">tipo</th>
              <th scope="col">Fecha</th>
              <th scope="col">titulo</th>
              <th scope="col">descripcion</th>
              <th scope="col">archivo1</th>
              <th scope="col">Estado</th>              
            </tr>
          </thead>
          <tbody>
            <tr v-for="dato in datos" :key="dato.id">             
              <td>{{ dato.nombre }} / {{ dato.celular }} / {{ dato.correo }} / </td>
              <td>{{ dato.tipo}}</td>
              <td>{{ dato.created_at }}</td>
              <td>{{ dato.titulo }}</td>
              <td>{{ dato.descripcion }}</td> 
              <td><a :href="'/storage/clasificados/'+dato.archivo1"  target="_black" >img</a></td>              
              <td>
                  <label class="switch">
                    <input type="checkbox" v-model="dato.estado" @click="activarClasificado(dato.id, dato.estado)" >
                    <span class="slider round"></span>
                  </label>                   
                  <br>
                  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" :data-bs-target="'#eliminar'+dato.id">
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
                          Eliminar clasificado : {{dato.titulo}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" @click="eliminarClasificado(dato.id)">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>                                                             
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
		async obtenerDatos(){ await axios.get('/admin/clasificados/datos').then(response => { this.datos = response.data.data; this.paginacion = response.data;}) },	
    async pagina(url){ await axios.get(url).then(response => { this.datos = response.data.data; this.paginacion = response.data; }) },
    async activarClasificado(id, estado) { await axios.post('/admin/clasificados/activar/'+id, {estado: estado}) },
    async eliminarClasificado(id) { await axios.delete('/admin/clasificados/eliminar/'+id).then(() => { this.obtenerDatos(); }) }
    
	}
};
</script>


<style>
.switch {
  position: relative;
  display: inline-block;
  width: 46px;
  height: 17px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 15px;
  width: 16px;
  left: 3px;
  bottom: 1px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #4ddc51;
}

input:focus + .slider {
  box-shadow: 0 0 1px #4ddc51;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>