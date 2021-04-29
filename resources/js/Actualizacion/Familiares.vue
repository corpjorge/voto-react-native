<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">
    <h3>Datos familiares</h3>
    </header>
    <div class="row g-3">

      <div class="col-md-3">
        <label for="tipo_doc_familiar_1" class="form-label">Tipo de documento</label>
        <select id="tipo_doc_familiar_1" class="form-select" @change="guardarDatos" v-model="datos.tipo_doc_familiar_1">
            <option value="R">REGISTRO CIVIL</option>
            <option value="U">NUIP</option>
            <option value="P">PASAPORTE</option>
            <option value="C">CEDULA</option>
            <option value="A">NIT</option>
            <option value="T">TARJETA DE IDENTIDAD</option>
            <option value="O">OTROS</option>
            <option value="E">CEDULA DE EXTRANJERIA</option>
            <option value="S">TARJETA SEGURO SOCIAL</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="doc_familiar_1" class="form-label">Numero de identificación</label>
        <input type="text" class="form-control" id="doc_familiar_1" @change="guardarDatos" v-model="datos.doc_familiar_1">
      </div>

      <div class="col-md-3">
        <label for="nombre_familiar_1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_familiar_1" @change="guardarDatos" v-model="datos.nombre_familiar_1">
      </div>

      <div class="col-md-3">
          <label for="parentesco_familiar_1" class="form-label">Parentesco</label>
          <select id="parentesco_familiar_1" class="form-select" @change="guardarDatos" v-model="datos.parentesco_familiar_1">
              <option value="V">TERCERO BENEFICIARIO</option>
              <option value="W">NIÑERA</option>
              <option value="H">HIJO</option>
              <option value="R">PRIMO</option>
              <option value="U">CUÑADO</option>
              <option value="P">PADRE</option>
              <option value="M">MADRE</option>
              <option value="C">CONYUGE</option>
              <option value="T">TIO</option>
              <option value="B">SOBRINO</option>
              <option value="A">ABUELO</option>
              <option value="5">PADRASTRO</option>
              <option value="J">HIJO ADOPTIVO</option>
              <option value="O">OTROS</option>
              <option value="N">NIETO</option>
              <option value="Z">COMPAÑERO PERMANENTE</option>
              <option value="E">HERMANO</option>
              <option value="S">SUEGRO</option>
              <option value="2">HIJASTRO</option>
              <option value="4">PADRE DE CRIANZA</option>
              <option value="L">MADRE ADOPTANTE</option>
              <option value="F">PADRE ADOPTANTE</option>
          </select>
      </div>


      <div class="col-md-3">
        <label for="tipo_doc_familiar_2" class="form-label">Tipo de documento</label>
        <select id="tipo_doc_familiar_2" class="form-select" @change="guardarDatos" v-model="datos.tipo_doc_familiar_2">
            <option value="R">REGISTRO CIVIL</option>
            <option value="U">NUIP</option>
            <option value="P">PASAPORTE</option>
            <option value="C">CEDULA</option>
            <option value="A">NIT</option>
            <option value="T">TARJETA DE IDENTIDAD</option>
            <option value="O">OTROS</option>
            <option value="E">CEDULA DE EXTRANJERIA</option>
            <option value="S">TARJETA SEGURO SOCIAL</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="doc_familiar_2" class="form-label">Numero de identificación</label>
        <input type="text" class="form-control" id="doc_familiar_2" @change="guardarDatos" v-model="datos.doc_familiar_2">
      </div>

      <div class="col-md-3">
        <label for="nombre_familiar_2" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_familiar_2" @change="guardarDatos" v-model="datos.nombre_familiar_2">
      </div>

      <div class="col-md-3">
          <label for="parentesco_familiar_2" class="form-label">Parentesco</label>
          <select id="parentesco_familiar_2" class="form-select" @change="guardarDatos" v-model="datos.parentesco_familiar_2">
              <option value="V">TERCERO BENEFICIARIO</option>
              <option value="W">NIÑERA</option>
              <option value="H">HIJO</option>
              <option value="R">PRIMO</option>
              <option value="U">CUÑADO</option>
              <option value="P">PADRE</option>
              <option value="M">MADRE</option>
              <option value="C">CONYUGE</option>
              <option value="T">TIO</option>
              <option value="B">SOBRINO</option>
              <option value="A">ABUELO</option>
              <option value="5">PADRASTRO</option>
              <option value="J">HIJO ADOPTIVO</option>
              <option value="O">OTROS</option>
              <option value="N">NIETO</option>
              <option value="Z">COMPAÑERO PERMANENTE</option>
              <option value="E">HERMANO</option>
              <option value="S">SUEGRO</option>
              <option value="2">HIJASTRO</option>
              <option value="4">PADRE DE CRIANZA</option>
              <option value="L">MADRE ADOPTANTE</option>
              <option value="F">PADRE ADOPTANTE</option>
          </select>
      </div>


      <div class="col-md-3">
        <label for="tipo_doc_familiar_3" class="form-label">Tipo de documento</label>
        <select id="tipo_doc_familiar_3" class="form-select" @change="guardarDatos" v-model="datos.tipo_doc_familiar_3">
            <option value="R">REGISTRO CIVIL</option>
            <option value="U">NUIP</option>
            <option value="P">PASAPORTE</option>
            <option value="C">CEDULA</option>
            <option value="A">NIT</option>
            <option value="T">TARJETA DE IDENTIDAD</option>
            <option value="O">OTROS</option>
            <option value="E">CEDULA DE EXTRANJERIA</option>
            <option value="S">TARJETA SEGURO SOCIAL</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="doc_familiar_3" class="form-label">Numero de identificación</label>
        <input type="text" class="form-control" id="doc_familiar_3" @change="guardarDatos" v-model="datos.doc_familiar_3">
      </div>

      <div class="col-md-3">
        <label for="nombre_familiar_3" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_familiar_3" @change="guardarDatos" v-model="datos.nombre_familiar_3">
      </div>

      <div class="col-md-3">
          <label for="parentesco_familiar_3" class="form-label">Parentesco</label>
          <select id="parentesco_familiar_3" class="form-select" @change="guardarDatos" v-model="datos.parentesco_familiar_3">
              <option value="V">TERCERO BENEFICIARIO</option>
              <option value="W">NIÑERA</option>
              <option value="H">HIJO</option>
              <option value="R">PRIMO</option>
              <option value="U">CUÑADO</option>
              <option value="P">PADRE</option>
              <option value="M">MADRE</option>
              <option value="C">CONYUGE</option>
              <option value="T">TIO</option>
              <option value="B">SOBRINO</option>
              <option value="A">ABUELO</option>
              <option value="5">PADRASTRO</option>
              <option value="J">HIJO ADOPTIVO</option>
              <option value="O">OTROS</option>
              <option value="N">NIETO</option>
              <option value="Z">COMPAÑERO PERMANENTE</option>
              <option value="E">HERMANO</option>
              <option value="S">SUEGRO</option>
              <option value="2">HIJASTRO</option>
              <option value="4">PADRE DE CRIANZA</option>
              <option value="L">MADRE ADOPTANTE</option>
              <option value="F">PADRE ADOPTANTE</option>
          </select>
      </div>

      <div class="col-md-3">
        <label for="tipo_doc_familiar_4" class="form-label">Tipo de documento</label>
        <select id="tipo_doc_familiar_4" class="form-select" @change="guardarDatos" v-model="datos.tipo_doc_familiar_4">
            <option value="R">REGISTRO CIVIL</option>
            <option value="U">NUIP</option>
            <option value="P">PASAPORTE</option>
            <option value="C">CEDULA</option>
            <option value="A">NIT</option>
            <option value="T">TARJETA DE IDENTIDAD</option>
            <option value="O">OTROS</option>
            <option value="E">CEDULA DE EXTRANJERIA</option>
            <option value="S">TARJETA SEGURO SOCIAL</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="doc_familiar_4" class="form-label">Numero de identificación</label>
        <input type="text" class="form-control" id="doc_familiar_4" @change="guardarDatos" v-model="datos.doc_familiar_4">
      </div>

      <div class="col-md-3">
        <label for="nombre_familiar_4" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_familiar_4" @change="guardarDatos" v-model="datos.nombre_familiar_4">
      </div>

      <div class="col-md-3">
        <label for="parentesco_familiar_4" class="form-label">Parentesco</label>
          <select id="parentesco_familiar_4" class="form-select" @change="guardarDatos" v-model="datos.parentesco_familiar_4">
              <option value="V">TERCERO BENEFICIARIO</option>
              <option value="W">NIÑERA</option>
              <option value="H">HIJO</option>
              <option value="R">PRIMO</option>
              <option value="U">CUÑADO</option>
              <option value="P">PADRE</option>
              <option value="M">MADRE</option>
              <option value="C">CONYUGE</option>
              <option value="T">TIO</option>
              <option value="B">SOBRINO</option>
              <option value="A">ABUELO</option>
              <option value="5">PADRASTRO</option>
              <option value="J">HIJO ADOPTIVO</option>
              <option value="O">OTROS</option>
              <option value="N">NIETO</option>
              <option value="Z">COMPAÑERO PERMANENTE</option>
              <option value="E">HERMANO</option>
              <option value="S">SUEGRO</option>
              <option value="2">HIJASTRO</option>
              <option value="4">PADRE DE CRIANZA</option>
              <option value="L">MADRE ADOPTANTE</option>
              <option value="F">PADRE ADOPTANTE</option>
          </select>
      </div>



      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <router-link class="btn btn-primary me-md-2"  :to="{ name: 'Financiero' } ">
            <ion-icon name="caret-back-outline"></ion-icon> Anterior
        </router-link>
        <router-link class="btn btn-primary"  :to="{ name: 'Finalizar' } ">
             Siguiente <ion-icon name="caret-forward-outline"></ion-icon>
        </router-link>
      </div>

    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'Familiares',
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
