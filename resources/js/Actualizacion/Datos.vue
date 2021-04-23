<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">
    <h3>Datos personales</h3>
    </header>
    <div class="row g-3">
      <div class="col-md-3">
        <label for="primer_apellido" class="form-label">Primer apellido</label>
        <input type="text" class="form-control" id="primer_apellido" @change="guardarDatos" v-model="datos.primer_apellido">
      </div>
      <div class="col-md-3">
        <label for="segundo_apellido" class="form-label">Segundo apellido</label>
        <input type="text" class="form-control" id="segundo_apellido" @change="guardarDatos" v-model="datos.segundo_apellido">
      </div>
      <div class="col-md-3">
        <label for="primer_nombre" class="form-label">Primer nombre</label>
        <input type="text" class="form-control" id="primer_nombre" @change="guardarDatos" v-model="datos.primer_nombre">
      </div>
      <div class="col-md-3">
        <label for="segundo_nombre" class="form-label">Segundo nombre</label>
        <input type="text" class="form-control" id="segundo_nombre" @change="guardarDatos" v-model="datos.segundo_nombre">
      </div>

      <div class="col-md-1">
        <label for="dia_nacimiento" class="form-label">Fecha</label>
        <input type="number" class="form-control" id="dia_nacimiento" placeholder="Dia" @change="validarDia" v-model="datos.dia_nacimiento" min="1" max="31">
        <small v-if="errores.dia_nacimiento" style="color: red;">  {{errores.dia_nacimiento}}  </small>
      </div>
      <div class="col-md-1">
        <label for="mes_nacimiento" class="form-label">de</label>
        <input type="number" class="form-control" id="mes_nacimiento" placeholder="Mes" @change="validarMes" v-model="datos.mes_nacimiento">
        <small v-if="errores.mes_nacimiento" style="color: red;">  {{errores.mes_nacimiento}}  </small>
      </div>
      <div class="col-md-1">
        <label for="año_nacimiento" class="form-label">nacimiento</label>
        <input type="number" class="form-control" id="año_nacimiento" placeholder="Año" @change="validarYear" v-model="datos.año_nacimiento">
          <small v-if="errores.año_nacimiento" style="color: red;">  {{errores.año_nacimiento}}  </small>
      </div>


      <div class="col-md-4">
        <label for="tipo_documento" class="form-label">Tipo de documento</label>
        <select id="tipo_documento" class="form-select" @change="guardarDatos" v-model="datos.tipo_documento">
          <option value="C.C">C.C</option>
          <option value="C.E">C.E</option>
          <option value="T.I">T.I</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="documento_numero" class="form-label">Numero de identificacion</label>
        <input type="number" class="form-control" id="documento_numero" @change="guardarDatos" v-model="datos.documento_numero">
      </div>

      <div class="col-md-2">
        <label for="nacionalidad" class="form-label">Nacionalidad</label>
        <input type="text" class="form-control" id="nacionalidad" @change="guardarDatos" v-model="datos.nacionalidad" >
      </div>

      <div class="col-md-1">
        <label for="dia_expedicion_doc" class="form-label">Fecha</label>
        <input type="number" class="form-control" id="dia_expedicion_doc" placeholder="Dia" @change="validarDia" v-model="datos.dia_expedicion_doc" min="1" max="31">
          <small v-if="errores.dia_expedicion_doc" style="color: red;">
             {{errores.dia_expedicion_doc}}
          </small>
      </div>
      <div class="col-md-1">
        <label for="mes_expedicion_doc" class="form-label">de</label>
        <input type="number" class="form-control" id="mes_expedicion_doc" placeholder="Mes" @change="validarMes" v-model="datos.mes_expedicion_doc">
          <small v-if="errores.mes_expedicion_doc" style="color: red;">  {{errores.mes_expedicion_doc}}  </small>
      </div>
      <div class="col-md-1">
        <label for="año_expedicion_doc" class="form-label">expedición</label>
        <input type="number" class="form-control" id="año_expedicion_doc" placeholder="Año" @change="validarYear" v-model="datos.año_expedicion_doc">
          <small v-if="errores.año_expedicion_doc" style="color: red;">  {{errores.año_expedicion_doc}}  </small>
      </div>

      <div class="col-md-2">
        <label for="lugar_expedicion_doc" class="form-label">Lugar de Expedicion</label>
        <input type="text" class="form-control" id="lugar_expedicion_doc" @change="guardarDatos" v-model="datos.lugar_expedicion_doc">
      </div>

      <div class="col-md-1">
        <label for="genero" class="form-label">Genero</label>
        <select id="genero" class="form-select" @change="guardarDatos" v-model="datos.genero">
          <option value="M">M</option>
          <option value="F">F</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="cabeza_familia" class="form-label">Mujer cabeza de familia</label>
        <select id="cabeza_familia" class="form-select" @change="guardarDatos" v-model="datos.cabeza_familia">
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="profesion" class="form-label">Profesión</label>
        <input type="text" class="form-control" id="profesion" @change="guardarDatos" v-model="datos.profesion">
      </div>

      <div class="col-md-3">
        <label for="estado_civil" class="form-label">Estado civil</label>
        <select id="estado_civil" class="form-select" @change="guardarDatos" v-model="datos.estado_civil">
          <option value="Soltero">Soltero</option>
          <option value="Union libre">Union libre</option>
          <option value="Casado">Casado</option>
          <option value="Separado">Separado</option>
          <option value="Viudo">Viudo</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="nivel_estudios" class="form-label">Nivel de estudios</label>
        <select id="nivel_estudios" class="form-select" @change="guardarDatos" v-model="datos.nivel_estudios">
          <option value="Bachillerato">Bachillerato</option>
          <option value="Técnico">Técnico</option>
          <option value="Universitario">Universitario</option>
          <option value="Post grado">Post grado</option>
          <option value="Viudo">Viudo</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="ocupacion" class="form-label">Ocupación</label>
        <select id="ocupacion" class="form-select" @change="guardarDatos" v-model="datos.ocupacion">
          <option value="Empleado">Empleado</option>
          <option value="Independiente">Independiente</option>
          <option value="Pensionado">Pensionado</option>
          <option value="Estudiante">Estudiante</option>
          <option value="Dependiente">Dependiente</option>
        </select>
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <router-link class="btn btn-primary"  :to="{ name: 'Localizacion' } ">
             Siguiente <ion-icon name="caret-forward-outline"></ion-icon>
        </router-link>
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
          datos: {},
          errores: {}
        }
    },
	mounted() {
		this.obtenerDatos()
        window.scrollTo(0, 0);
	},
	methods: {
        validarDia() {

            if (Number(this.datos.dia_nacimiento) < 1) {
                return this.errores.dia_nacimiento = 'Valor invalido'
            }

            if (Number(this.datos.dia_expedicion_doc) < 1) {
                return this.errores.dia_expedicion_doc = 'Valor invalido'
            }

            if (Number(this.datos.dia_nacimiento) > 31) {
                return this.errores.dia_nacimiento = 'Valor invalido'
            }

            if (Number(this.datos.dia_expedicion_doc) > 31) {
                return this.errores.dia_expedicion_doc = 'Valor invalido'
            }

            this.errores.dia_nacimiento = null
            this.errores.dia_expedicion_doc = null

            this.guardarDatos();
        },
        validarMes() {

            if (Number(this.datos.mes_nacimiento) < 1) {
                return this.errores.mes_nacimiento = 'Valor invalido'
            }

            if (Number(this.datos.mes_expedicion_doc) < 1) {
                return this.errores.mes_expedicion_doc = 'Valor invalido'
            }

            if (Number(this.datos.mes_nacimiento) > 12) {
                return this.errores.mes_nacimiento = 'Valor invalido'
            }

            if (Number(this.datos.mes_expedicion_doc) > 12) {
                return this.errores.mes_expedicion_doc = 'Valor invalido'
            }

            this.errores.mes_nacimiento = null
            this.errores.mes_expedicion_doc = null

            this.guardarDatos();
        },
        validarYear() {

            if (Number(this.datos.año_nacimiento) < 1) {
                return this.errores.año_nacimiento = 'Valor invalido'
            }

            if (Number(this.datos.año_expedicion_doc) < 1) {
                return this.errores.año_expedicion_doc = 'Valor invalido'
            }

            this.errores.año_nacimiento = null
            this.errores.año_expedicion_doc = null

            this.guardarDatos();
        },

        async obtenerDatos(){ await axios.get('datos').then(response => { this.datos = response.data; this.paginacion = response.data;}) },
        async guardarDatos(){ await axios.post('/actualizacion', this.datos ) }
	}
};
</script>
