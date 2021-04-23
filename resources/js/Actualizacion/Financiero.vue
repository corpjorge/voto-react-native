<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">
    <h3>Información financiera</h3>
    </header>
    <div class="row g-3">
      <div class="col-md-3">
        <label for="ingreso_mensual" class="form-label">Ingresos mensuales</label>
        <input type="text" class="form-control" id="ingreso_mensual" @change="guardarDatos" v-model="datos.ingreso_mensual">
      </div>
      <div class="col-md-3">
        <label for="otros_ingresos" class="form-label">Otros ingresos</label>
        <input type="text" class="form-control" id="otros_ingresos" @change="guardarDatos" v-model="datos.otros_ingresos">
      </div>
      <div class="col-md-3">
        <label for="concepto_otros_ingresos" class="form-label">Conceptos otros ingresos</label>
        <input type="text" class="form-control" id="concepto_otros_ingresos" @change="guardarDatos" v-model="datos.concepto_otros_ingresos">
      </div>
      <div class="col-md-3">
        <label for="total_ingresos" class="form-label">Total ingresos mensuales</label>
        <input type="text" class="form-control" id="total_ingresos" @change="guardarDatos" v-model="datos.total_ingresos">
      </div>

      <div class="col-md-2">
        <label for="gastos_personales" class="form-label">Gastos personales</label>
        <input type="text" class="form-control" id="gastos_personales" placeholder="" @change="guardarDatos" v-model="datos.gastos_personales">
      </div>
      <div class="col-md-2">
        <label for="cuotas_creditos" class="form-label">Cuotas créditos</label>
        <input type="text" class="form-control" id="cuotas_creditos" placeholder="" @change="guardarDatos" v-model="datos.cuotas_creditos">
      </div>
      <div class="col-md-2">
        <label for="otros_gastos" class="form-label">Otros gastos</label>
        <input type="text" class="form-control" id="otros_gastos" placeholder="" @change="guardarDatos" v-model="datos.otros_gastos">
      </div>

      <div class="col-md-2">
        <label for="total_ingresos" class="form-label">Total gastos mensuales</label>
        <input type="text" class="form-control" id="total_ingresos" placeholder="" @change="guardarDatos" v-model="datos.total_gastos">
      </div>

      <h5>Descripcíon activos bienes muebles</h5>

      <div class="col-md-3">
        <label for="tipo_bienes_1" class="form-label">Tipo vivienda</label>
        <select id="tipo_bienes_1" class="form-select" @change="guardarDatos" v-model="datos.tipo_bienes_1">
          <option value="Casa">Casa</option>
          <option value="Apto">Apto</option>
          <option value="Finca">Finca</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="direccion_bienes_1" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion_bienes_1" @change="guardarDatos" v-model="datos.direccion_bienes_1">
      </div>

      <div class="col-md-3">
        <label for="ciudad_bienes_1" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad_bienes_1" @change="guardarDatos" v-model="datos.ciudad_bienes_1">
      </div>

      <div class="col-md-3">
        <label for="valor_bienes_1" class="form-label">Valor comercial</label>
        <input type="text" class="form-control" id="valor_bienes_1" @change="guardarDatos" v-model="datos.valor_bienes_1">
      </div>

      <div class="col-md-3">
        <label for="tipo_bienes_2" class="form-label">Tipo vivienda</label>
        <select id="tipo_bienes_2" class="form-select" @change="guardarDatos" v-model="datos.tipo_bienes_2">
          <option value="Casa">Casa</option>
          <option value="Apto">Apto</option>
          <option value="Finca">Finca</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="direccion_bienes_2" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion_bienes_2" @change="guardarDatos" v-model="datos.direccion_bienes_2">
      </div>

      <div class="col-md-3">
        <label for="ciudad_bienes_2" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad_bienes_2" @change="guardarDatos" v-model="datos.ciudad_bienes_2">
      </div>

      <div class="col-md-3">
        <label for="valor_bienes_2" class="form-label">Valor comercial</label>
        <input type="text" class="form-control" id="valor_bienes_2" @change="guardarDatos" v-model="datos.valor_bienes_2">
      </div>

      <h5>Descripcíon activos vehículos</h5>

      <div class="col-md-2">
        <label for="tipo_vehiculo_1" class="form-label">Tipo vehículos</label>
        <select id="tipo_vehiculo_1" class="form-select" @change="guardarDatos" v-model="datos.tipo_vehiculo_1">
          <option value="Particular">Particular</option>
          <option value="Público">Público</option>
          <option value="moto">moto</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="marca_vehiculo_1" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca_vehiculo_1" @change="guardarDatos" v-model="datos.marca_vehiculo_1">
      </div>

      <div class="col-md-3">
        <label for="modelo_vehiculo_1" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="modelo_vehiculo_1" @change="guardarDatos" v-model="datos.modelo_vehiculo_1">
      </div>

      <div class="col-md-2">
        <label for="placa_vehiculo_1" class="form-label">Placa</label>
        <input type="text" class="form-control" id="placa_vehiculo_1" @change="guardarDatos" v-model="datos.placa_vehiculo_1">
      </div>

      <div class="col-md-3">
        <label for="valor_vehiculo_1" class="form-label">Valor comercial</label>
        <input type="text" class="form-control" id="valor_vehiculo_1" @change="guardarDatos" v-model="datos.valor_vehiculo_1">
      </div>

      <div class="col-md-2">
        <label for="tipo_vehiculo_2" class="form-label">Tipo vehículos</label>
        <select id="tipo_vehiculo_2" class="form-select" @change="guardarDatos" v-model="datos.tipo_vehiculo_2">
          <option value="Particular">Particular</option>
          <option value="Público">Público</option>
          <option value="moto">moto</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="marca_vehiculo_2" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca_vehiculo_2" @change="guardarDatos" v-model="datos.marca_vehiculo_2">
      </div>

      <div class="col-md-3">
        <label for="modelo_vehiculo_2" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="modelo_vehiculo_2" @change="guardarDatos" v-model="datos.modelo_vehiculo_2">
      </div>

      <div class="col-md-2">
        <label for="placa_vehiculo_2" class="form-label">Placa</label>
        <input type="text" class="form-control" id="placa_vehiculo_2" @change="guardarDatos" v-model="datos.placa_vehiculo_2">
      </div>

      <div class="col-md-3">
        <label for="valor_vehiculo_2" class="form-label">Valor comercial</label>
        <input type="text" class="form-control" id="valor_vehiculo_2" @change="guardarDatos" v-model="datos.valor_vehiculo_2">
      </div>

      <div class="col-md-3">
        <label for="otros_activos" class="form-label">Otros activos</label>
        <input type="text" class="form-control" id="otros_activos" @change="guardarDatos" v-model="datos.otros_activos">
      </div>

      <div class="col-md-3">
        <label for="total_activos" class="form-label">Total activos</label>
        <input type="text" class="form-control" id="total_activos" @change="guardarDatos" v-model="datos.total_activos">
      </div>

      <div class="col-md-3">
        <label for="total_pasivos" class="form-label">Total pasivos</label>
        <input type="text" class="form-control" id="total_pasivos" @change="guardarDatos" v-model="datos.total_pasivos">
      </div>

      <div class="col-md-3">
        <label for="total_patrimonio" class="form-label">Total patrimonio</label>
        <input type="text" class="form-control" id="total_patrimonio" @change="guardarDatos" v-model="datos.total_patrimonio">
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <router-link class="btn btn-primary me-md-2"  :to="{ name: 'Economica' } ">
            <ion-icon name="caret-back-outline"></ion-icon> Anterior
        </router-link>
        <router-link class="btn btn-primary"  :to="{ name: 'Familiares' } ">
             Siguiente <ion-icon name="caret-forward-outline"></ion-icon>
        </router-link>
      </div>

    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'Economica',
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
