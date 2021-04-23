<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">
    <h3>Información económica</h3>
    </header>
    <div class="row g-3">
      <div class="col-md-3">
        <label for="actividad_economica" class="form-label">Actividad económica</label>
        <input type="text" class="form-control" id="actividad_economica" @change="guardarDatos" v-model="datos.actividad_economica">
      </div>

      <div class="col-md-2">
        <label for="declara_renta" class="form-label">Declara renta</label>
        <select id="declara_renta" class="form-select" @change="guardarDatos" v-model="datos.declara_renta">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="nombre_empresa" class="form-label">Nombre de la empresa donde labora</label>
        <input type="text" class="form-control" id="nombre_empresa" @change="guardarDatos" v-model="datos.nombre_empresa">
      </div>
      <div class="col-md-3">
        <label for="cargo" class="form-label">Cargo Actual</label>
        <input type="text" class="form-control" id="cargo" @change="guardarDatos" v-model="datos.cargo">
      </div>


      <div class="col-md-1">
        <label for="dia_vinculacion" class="form-label">Fecha</label>
        <input type="text" class="form-control" id="dia_vinculacion" placeholder="Dia" @change="guardarDatos" v-model="datos.dia_vinculacion">
      </div>
      <div class="col-md-1">
        <label for="mes_vinculacion" class="form-label">de</label>
        <input type="text" class="form-control" id="mes_vinculacion" placeholder="Mes" @change="guardarDatos" v-model="datos.mes_vinculacion">
      </div>
      <div class="col-md-1">
        <label for="año_vinculacion" class="form-label">vinculación</label>
        <input type="text" class="form-control" id="año_vinculacion" placeholder="Año" @change="guardarDatos" v-model="datos.año_vinculacion">
      </div>


      <div class="col-md-3">
        <label for="barrio_empresa" class="form-label">Barrio</label>
        <input type="text" class="form-control" id="barrio_empresa" @change="guardarDatos" v-model="datos.barrio_empresa">
      </div>

      <div class="col-md-2">
        <label for="telefono_fijo_empresa" class="form-label">Telefono fijo</label>
        <input type="text" class="form-control" id="telefono_fijo_empresa" placeholder="" @change="guardarDatos" v-model="datos.telefono_fijo_empresa">
      </div>

      <div class="col-md-3">
        <label for="tipo_contrato" class="form-label">Tipo de contrato</label>
        <select id="tipo_contrato" class="form-select" @change="guardarDatos" v-model="datos.tipo_contrato">
          <option value="Fijo">Fijo</option>
          <option value="Indefinido">Indefinido</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="funcionario_publico" class="form-label">¿Es funcionario publico?</label>
        <select id="funcionario_publico" class="form-select" @change="guardarDatos" v-model="datos.funcionario_publico">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="adm_recusos_publicos" class="form-label">¿Adm recursos públicos?</label>
        <select id="adm_recusos_publicos" class="form-select" @change="guardarDatos" v-model="datos.adm_recusos_publicos">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="ejerce_poder_publico" class="form-label">¿Ejerce algún grado de poder?</label>
        <select id="ejerce_poder_publico" class="form-select" @change="guardarDatos" v-model="datos.ejerce_poder_publico">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="reconocimiento_publico" class="form-label">¿Goza de reconocimiento público?</label>
        <select id="reconocimiento_publico" class="form-select" @change="guardarDatos" v-model="datos.reconocimiento_publico">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="operacion_moneda_extranjera" class="form-label">¿Realiza operacion con moneda extrangera?</label>
        <select id="operacion_moneda_extranjera" class="form-select" @change="guardarDatos" v-model="datos.operacion_moneda_extranjera">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="cuentas_moneda_extranjera" class="form-label">¿Posee cuentas en moneda extranjera?</label>
        <select id="cuentas_moneda_extranjera" class="form-select" @change="guardarDatos" v-model="datos.cuentas_monedas_extranjera">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="banco" class="form-label">Banco</label>
        <input type="text" class="form-control" id="banco" placeholder="" @change="guardarDatos" v-model="datos.banco">
      </div>


      <div class="col-md-3">
        <label for="cuentas_monedas_extranjera" class="form-label">N° de cuenta</label>
        <input type="number" class="form-control" id="cuentas_monedas_extranjera" @change="guardarDatos" v-model="datos.cuentas_monedas_extranjera">
      </div>

      <div class="col-md-2">
        <label for="moneda" class="form-label">Moneda</label>
        <input type="text" class="form-control" id="moneda" @change="guardarDatos" v-model="datos.moneda" >
      </div>

      <div class="col-md-3">
        <label for="ciudad_banco" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad_banco" placeholder="" @change="guardarDatos" v-model="datos.ciudad_banco">
      </div>

      <div class="col-md-3">
        <label for="pais_banco" class="form-label">Pais</label>
        <input type="text" class="form-control" id="pais_banco" placeholder="" @change="guardarDatos" v-model="datos.pais_banco">
      </div>

      <div class="col-md-4">
        <label for="tipo_operacion_moneda_extrangera" class="form-label">Tipo de operaciones con moneda extrangera</label>
        <select id="tipo_operacion_moneda_extrangera" class="form-select" @change="guardarDatos" v-model="datos.tipo_operacion_moneda_extrangera">
          <option value="Exportación">Exportación</option>
          <option value="Importación">Importación</option>
          <option value="Giros Prestamos en M/C">Giros Prestamos en M/C</option>
          <option value="Inversiones">Inversiones</option>
        </select>
      </div>

      <div class="col-md-7">
        <label for="familia_labora_sector_publico" class="form-label">¿Tiene familias que laboran en el sector público o administran recursos públicos?</label>
        <select id="familia_labora_sector_publico" class="form-select" @change="guardarDatos" v-model="datos.familia_labora_sector_publico">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>


      <div class="col-md-5">
        <label for="familia_vinculados" class="form-label">¿Tiene familias vinculados a nuestra cooperativa?</label>
        <select id="familia_vinculados" class="form-select" @change="guardarDatos" v-model="datos.familia_vinculados">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <hr>

      <div class="col-md-3">
        <label for="nombre_familia_PEP_vinculado_1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_familia_PEP_vinculado_1" placeholder="" @change="guardarDatos" v-model="datos.nombre_familia_PEP_vinculado_1">
      </div>

      <div class="col-md-3">
        <label for="cedula_familia_PEP_vinculado_1" class="form-label">Cedula</label>
        <input type="text" class="form-control" id="cedula_familia_PEP_vinculado_1" @change="guardarDatos" v-model="datos.cedula_familia_PEP_vinculado_1">
      </div>

      <div class="col-md-3">
        <label for="telefono_familia_PEP_vinculado_1" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono_familia_PEP_vinculado_1" @change="guardarDatos" v-model="datos.telefono_familia_PEP_vinculado_1">
      </div>

      <div class="col-md-3">
        <label for="parantesco_familia_PEP_vinculado_1" class="form-label">Parentesco</label>
        <input type="text" class="form-control" id="parantesco_familia_PEP_vinculado_1" @change="guardarDatos" v-model="datos.parantesco_familia_PEP_vinculado_1">
      </div>

      <div class="col-md-3">
        <label for="nombre_familia_PEP_vinculado_2" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_familia_PEP_vinculado_2" placeholder="" @change="guardarDatos" v-model="datos.nombre_familia_PEP_vinculado_2">
      </div>

      <div class="col-md-3">
        <label for="cedula_familia_PEP_vinculado_2" class="form-label">Cedula</label>
        <input type="text" class="form-control" id="cedula_familia_PEP_vinculado_2" @change="guardarDatos" v-model="datos.cedula_familia_PEP_vinculado_2">
      </div>

      <div class="col-md-3">
        <label for="telefono_familia_PEP_vinculado_2" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono_familia_PEP_vinculado_2" @change="guardarDatos" v-model="datos.telefono_familia_PEP_vinculado_2">
      </div>

      <div class="col-md-3">
        <label for="parantesco_familia_PEP_vinculado_2" class="form-label">Parentesco</label>
        <input type="text" class="form-control" id="parantesco_familia_PEP_vinculado_2" @change="guardarDatos" v-model="datos.parantesco_familia_PEP_vinculado_2">
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <router-link class="btn btn-primary me-md-2"  :to="{ name: 'Localizacion' } ">
            <ion-icon name="caret-back-outline"></ion-icon> Anterior
        </router-link>
        <router-link class="btn btn-primary"  :to="{ name: 'Financiero' } ">
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
