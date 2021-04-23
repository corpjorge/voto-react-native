<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">
    <h3>Datos de localizacion</h3>
    </header>
    <div class="row g-3">
      <div class="col-md-3">
        <label for="direccion_residencia" class="form-label">Dirección de residencia</label>
        <input type="text" class="form-control" id="direccion_residencia" @change="guardarDatos" v-model="datos.direccion_residencia">
      </div>
      <div class="col-md-3">
        <label for="barrio" class="form-label">Barrio</label>
        <input type="text" class="form-control" id="barrio" @change="guardarDatos" v-model="datos.barrio">
      </div>
      <div class="col-md-3">
        <label for="ciudad" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" @change="guardarDatos" v-model="datos.ciudad">
      </div>
      <div class="col-md-3">
        <label for="departamento" class="form-label">Departamento</label>
        <input type="text" class="form-control" id="departamento" @change="guardarDatos" v-model="datos.departamento">
      </div>

      <div class="col-md-2">
        <label for="estrato" class="form-label">Estrato</label>
        <input type="number" class="form-control" id="estrato" placeholder="" @change="guardarDatos" v-model="datos.estrato" min="0" max="6">
      </div>
      <div class="col-md-2">
        <label for="telefono_celular" class="form-label">Telefono Celular</label>
        <input type="number" class="form-control" id="telefono_celular" placeholder="" @change="guardarDatos" v-model="datos.telefono_celular" min="0" >
      </div>
      <div class="col-md-2">
        <label for="telefono_fijo" class="form-label">Telefono Fijo</label>
        <input type="number" class="form-control" id="telefono_fijo" placeholder="" @change="guardarDatos" v-model="datos.telefono_fijo" min="0">
      </div>


      <div class="col-md-3">
        <label for="tipo_vivienda" class="form-label">Tipo vivienda</label>
        <select id="tipo_vivienda" class="form-select" @change="guardarDatos" v-model="datos.tipo_vivienda">
          <option value="Propia">Propia</option>
          <option value="Familiar">Familiar</option>
          <option value="Arrendada">Arrendada</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="documento_numero" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="documento_numero" @change="guardarDatos" v-model="datos.correo">
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <router-link class="btn btn-primary me-md-2"  :to="{ name: 'root' } ">
            <ion-icon name="caret-back-outline"></ion-icon> Anterior
        </router-link>
        <router-link class="btn btn-primary"  :to="{ name: 'Economica' } ">
             Siguiente <ion-icon name="caret-forward-outline"></ion-icon>
        </router-link>
      </div>

    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'Localizacion',
	data() {
        return {
          datos: {},
        }
    },
	mounted() {
		this.obtenerDatos()
    window.scrollTo(0, 0);
	},
	methods: {
    async obtenerDatos(){ await axios.get('datos').then(response => { this.datos = response.data; this.paginacion = response.data;}) },
    async guardarDatos(){ await axios.post('/actualizacion', this.datos ) }
	}
};
</script>
