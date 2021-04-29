<template>
  <div class="col-lg-12 mx-auto p-3 py-md-5">
    <header class="d-flex align-items-center mb-2 border-bottom">
    <h3>Datos de localizacion</h3>
    </header>
    <div class="row g-3">
      <div class="col-md-3">
        <label for="direccion_residencia" class="form-label">Dirección de residencia</label>
        <input type="text" class="form-control" id="direccion_residencia" data-bs-toggle="modal" data-bs-target="#exampleModal"  @change="guardarDatos" v-model="datos.direccion_residencia" readonly>
      </div>
      <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Dirección</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="address_form">
                            <label>Sección principal</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccion.address_main_str" class="form-control custom-select" required="">
                                            <option value="AC">Avenida Calle</option>
                                            <option value="AD">Administración</option>
                                            <option value="AGN">Agrupación</option>
                                            <option value="AK">Avenida Carrera</option>
                                            <option value="AL">Altillo</option>
                                            <option value="APTO">Apartamento</option>
                                            <option value="AS">Apartamento Sótano</option>
                                            <option value="AUTOP">Autopista</option>
                                            <option value="AV">Avenida</option>
                                            <option value="BG">Bodega</option>
                                            <option value="BL">Bloque</option>
                                            <option value="BR">Barrio</option>
                                            <option value="CA">Casa</option>
                                            <option value="CAS">Caserío</option>
                                            <option value="CCV">Circunvalar</option>
                                            <option value="CDM">Condominio</option>
                                            <option value="CE">Centro</option>
                                            <option value="CECO">Centro Comercial</option>
                                            <option value="CEL">Célula</option>
                                            <option value="CEUR">Centro Urbano</option>
                                            <option value="CIR">Circular</option>
                                            <option value="CL">Calle</option>
                                            <option value="CLJ">Callejón</option>
                                            <option value="CM">Cabecera Municipal</option>
                                            <option value="CN">Camino</option>
                                            <option value="CO">Corregimiento</option>
                                            <option value="CONJ">Conjunto</option>
                                            <option value="CS">Consultorio</option>
                                            <option value="CT">Carretera</option>
                                            <option value="DG">Diagonal</option>
                                            <option value="DP">Depósito</option>
                                            <option value="DS">Depósito Sótano</option>
                                            <option value="ED">Edificio</option>
                                            <option value="EN">Entrada</option>
                                            <option value="ESQ">Esquina</option>
                                            <option value="ESTE">Este</option>
                                            <option value="ET">Etapa</option>
                                            <option value="FCA">Finca</option>
                                            <option value="GJ">Garaje</option>
                                            <option value="GR">Grada</option>
                                            <option value="GS">Garaje Sótano</option>
                                            <option value="IN">Interior</option>
                                            <option value="INF">Inferior</option>
                                            <option value="IP">Inspección de Policía</option>
                                            <option value="KM">Kilómetro</option>
                                            <option value="KR">Carrera</option>
                                            <option value="LC">Local</option>
                                            <option value="LM">Local Mezzanine</option>
                                            <option value="LS">Local Sótano</option>
                                            <option value="LT">Lote</option>
                                            <option value="MD">Módulo</option>
                                            <option value="MJ">Mejora</option>
                                            <option value="MN">Mezzanine</option>
                                            <option value="MUN">Municipio</option>
                                            <option value="MZ">Manzana</option>
                                            <option value="MZTA">Manzanita</option>
                                            <option value="NCO">Núcleo</option>
                                            <option value="NORTE">Norte</option>
                                            <option value="OCC">Occidente</option>
                                            <option value="OESTE">Oeste</option>
                                            <option value="OF">Oficina</option>
                                            <option value="OS">Oficina Sótano</option>
                                            <option value="PA">Parcela</option>
                                            <option value="PCN">Parcelación</option>
                                            <option value="PD">Predio</option>
                                            <option value="PH">Penthouse</option>
                                            <option value="PI">Piso</option>
                                            <option value="PN">Puente</option>
                                            <option value="PPAL">Principal</option>
                                            <option value="PSJ">Pasaje</option>
                                            <option value="PT">Portería</option>
                                            <option value="QDA">Quebrada</option>
                                            <option value="SA">Salón</option>
                                            <option value="SEC">Sector</option>
                                            <option value="SMZ">Supermanzana</option>
                                            <option value="SS">Semisótano</option>
                                            <option value="SU">Suite</option>
                                            <option value="SUR">Sur</option>
                                            <option value="TO">Torre</option>
                                            <option value="TRL">Troncal</option>
                                            <option value="TV">Transversal</option>
                                            <option value="TZ">Terraza</option>
                                            <option value="UN">Unidad</option>
                                            <option value="URB">Urbanización</option>
                                            <option value="VDA">Vereda</option>
                                            <option value="VIA">Vía</option>
                                            <option value="ZN">Zona</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="number" min="1" max="999" v-model="direccion.address_main_num1" class="form-control" placeholder="Número" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccion.address_main_letr1" class="form-control custom-select">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="AA">AA</option>
                                            <option value="B">B</option>
                                            <option value="BB">BB</option>
                                            <option value="C">C</option>
                                            <option value="CC">CC</option>
                                            <option value="D">D</option>
                                            <option value="DD">DD</option>
                                            <option value="E">E</option>
                                            <option value="EE">EE</option>
                                            <option value="F">F</option>
                                            <option value="FF">FF</option>
                                            <option value="G">G</option>
                                            <option value="GG">GG</option>
                                            <option value="H">H</option>
                                            <option value="HH">HH</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccion.address_main_crdpnt1" class="form-control custom-select">
                                            <option value=""></option>
                                            <option value="NORTE">NORTE</option>
                                            <option value="ORIENTE">ORIENTE</option>
                                            <option value="SUR">SUR</option>
                                            <option value="OCCIDENTE">OCCIDENTE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" min="1" max="999" v-model="direccion.address_main_num2" class="form-control" placeholder="Puerta" required="">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccion.address_main_letr2" class="form-control custom-select">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="AA">AA</option>
                                            <option value="B">B</option>
                                            <option value="BB">BB</option>
                                            <option value="C">C</option>
                                            <option value="CC">CC</option>
                                            <option value="D">D</option>
                                            <option value="DD">DD</option>
                                            <option value="E">E</option>
                                            <option value="EE">EE</option>
                                            <option value="F">F</option>
                                            <option value="FF">FF</option>
                                            <option value="G">G</option>
                                            <option value="GG">GG</option>
                                            <option value="H">H</option>
                                            <option value="HH">HH</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccion.address_main_crdpnt2" class="form-control" placeholder="NORTE">
                                            <option value=""></option>
                                            <option value="NORTE">NORTE</option>
                                            <option value="ORIENTE">ORIENTE</option>
                                            <option value="SUR">SUR</option>
                                            <option value="OCCIDENTE">OCCIDENTE</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" min="1" max="999" v-model="direccion.address_main_num3" class="form-control" placeholder="Intersección" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>Complementos</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccion.address_compl_compl1" class="form-control custom-select">
                                            <option value=""></option>
                                            <option value="CA">CASA</option>
                                            <option value="APTO">APARTAMENTO</option>
                                            <option value="CONJ">CONJUNTO RESIDENCIAL</option>
                                            <option value="CC">CENTRO COMERCIAL</option>
                                            <option value="CRT">CARRETERA</option>
                                            <option value="CS">CONSULTORIO</option>
                                            <option value="DPTO">DEPARTAMENTO</option>
                                            <option value="ED">EDIFICIO</option>
                                            <option value="EN">ENTRADA</option>
                                            <option value="ET">ETAPA</option>
                                            <option value="FCA">FINCA</option>
                                            <option value="HC">HACIENDA</option>
                                            <option value="IN">INTERIOR</option>
                                            <option value="KM">KILOMETRO</option>
                                            <option value="LC">LOCAL</option>
                                            <option value="LT">LOTE</option>
                                            <option value="OF">OFICINA</option>
                                            <option value="P">PISO</option>
                                            <option value="PD">PREDIO</option>
                                            <option value="PH">PENTHOUSE</option>
                                            <option value="PL">PLANTA</option>
                                            <option value="PT">PUESTO</option>
                                            <option value="SA">SALON</option>
                                            <option value="SD">SALIDA</option>
                                            <option value="SEC">SECTOR</option>
                                            <option value="SL">SOLAR</option>
                                            <option value="ST">SOTANO</option>
                                            <option value="SUITE">SUITE</option>
                                            <option value="TER">TERMINAL</option>
                                            <option value="TZ">TERRAZA</option>
                                            <option value="TO">TORRE</option>
                                            <option value="UN">UNIDAD</option>
                                            <option value="UR">UNIDAD RESIDENCIAL</option>
                                            <option value="URB">URBANIZACION</option>
                                            <option value="VRD">VEREDA</option>
                                            <option value="Z">ZONA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" v-model="direccion.address_compl_compl2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccion.address_compl_compl21" class="form-control custom-select">
                                            <option value=""></option>
                                            <option value="CA">CASA</option>
                                            <option value="APTO">APARTAMENTO</option>
                                            <option value="CONJ">CONJUNTO RESIDENCIAL</option>
                                            <option value="CC">CENTRO COMERCIAL</option>
                                            <option value="CRT">CARRETERA</option>
                                            <option value="CS">CONSULTORIO</option>
                                            <option value="DPTO">DEPARTAMENTO</option>
                                            <option value="ED">EDIFICIO</option>
                                            <option value="EN">ENTRADA</option>
                                            <option value="ET">ETAPA</option>
                                            <option value="FCA">FINCA</option>
                                            <option value="HC">HACIENDA</option>
                                            <option value="IN">INTERIOR</option>
                                            <option value="KM">KILOMETRO</option>
                                            <option value="LC">LOCAL</option>
                                            <option value="LT">LOTE</option>
                                            <option value="OF">OFICINA</option>
                                            <option value="P">PISO</option>
                                            <option value="PD">PREDIO</option>
                                            <option value="PH">PENTHOUSE</option>
                                            <option value="PL">PLANTA</option>
                                            <option value="PT">PUESTO</option>
                                            <option value="SA">SALON</option>
                                            <option value="SD">SALIDA</option>
                                            <option value="SEC">SECTOR</option>
                                            <option value="SL">SOLAR</option>
                                            <option value="ST">SOTANO</option>
                                            <option value="SUITE">SUITE</option>
                                            <option value="TER">TERMINAL</option>
                                            <option value="TZ">TERRAZA</option>
                                            <option value="TO">TORRE</option>
                                            <option value="UN">UNIDAD</option>
                                            <option value="UR">UNIDAD RESIDENCIAL</option>
                                            <option value="URB">URBANIZACION</option>
                                            <option value="VRD">VEREDA</option>
                                            <option value="Z">ZONA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" v-model="direccion.address_compl_compl22" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccion.address_compl_compl31" class="form-control custom-select">
                                            <option value=""></option>
                                            <option value="CA">CASA</option>
                                            <option value="APTO">APARTAMENTO</option>
                                            <option value="CONJ">CONJUNTO RESIDENCIAL</option>
                                            <option value="CC">CENTRO COMERCIAL</option>
                                            <option value="CRT">CARRETERA</option>
                                            <option value="CS">CONSULTORIO</option>
                                            <option value="DPTO">DEPARTAMENTO</option>
                                            <option value="ED">EDIFICIO</option>
                                            <option value="EN">ENTRADA</option>
                                            <option value="ET">ETAPA</option>
                                            <option value="FCA">FINCA</option>
                                            <option value="HC">HACIENDA</option>
                                            <option value="IN">INTERIOR</option>
                                            <option value="KM">KILOMETRO</option>
                                            <option value="LC">LOCAL</option>
                                            <option value="LT">LOTE</option>
                                            <option value="OF">OFICINA</option>
                                            <option value="P">PISO</option>
                                            <option value="PD">PREDIO</option>
                                            <option value="PH">PENTHOUSE</option>
                                            <option value="PL">PLANTA</option>
                                            <option value="PT">PUESTO</option>
                                            <option value="SA">SALON</option>
                                            <option value="SD">SALIDA</option>
                                            <option value="SEC">SECTOR</option>
                                            <option value="SL">SOLAR</option>
                                            <option value="ST">SOTANO</option>
                                            <option value="SUITE">SUITE</option>
                                            <option value="TER">TERMINAL</option>
                                            <option value="TZ">TERRAZA</option>
                                            <option value="TO">TORRE</option>
                                            <option value="UN">UNIDAD</option>
                                            <option value="UR">UNIDAD RESIDENCIAL</option>
                                            <option value="URB">URBANIZACION</option>
                                            <option value="VRD">VEREDA</option>
                                            <option value="Z">ZONA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" v-model="direccion.address_compl_compl32" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <label>Resultado</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{ direccion.address_main_str }}
                                        {{ direccion.address_main_num1 }}
                                        {{ direccion.address_main_letr1 }}
                                        {{ direccion.address_main_crdpnt1 }}
                                        {{ direccion.address_main_num2 }}
                                        {{ direccion.address_main_letr2 }}
                                        {{ direccion.address_main_crdpnt2 }}
                                        {{ direccion.address_main_num3 }}
                                        {{ direccion.address_compl_compl1 }}
                                        {{ direccion.address_compl_compl2 }}
                                        {{ direccion.address_compl_compl21 }}
                                        {{ direccion.address_compl_compl22 }}
                                        {{ direccion.address_compl_compl31 }}
                                        {{ direccion.address_compl_compl32 }}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="direccionGuardar">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fin Modal -->


      <div class="col-md-3">
        <label for="barrio" class="form-label">Barrio</label>
        <input type="text" class="form-control" id="barrio" @change="guardarDatos" v-model="datos.barrio">
      </div>

        <div class="col-md-3">
            <label for="departamento" class="form-label">Departamento</label>
            <select id="departamento" class="form-select" @change="buscarCiudad" v-model="datos.departamento">
                <option v-for="departento in departentos" :key="departento.code" :value="departento.code">{{ departento.name }}</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="ciudad" class="form-label">Cuidad</label>
            <select id="ciudad" class="form-select" @change="guardarDatos" v-model="datos.ciudad">
                <option v-for="municipio in ciudades" :key="municipio.code_dep_id" :value="municipio.code_dep_id">{{ municipio.name }}</option>
            </select>
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
            <option value="P">PROPIA</option>
            <option value="F">FAMILIAR</option>
            <option value="A">ARRIENDO</option>
            <option value="I">INMUEBLE CON HIPOTECA</option>
            <option value="O">OTRA</option>
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
            direccion: {},
            departentos: {},
            ciudades: {}
        }
    },
	mounted() {
		this.obtenerDatos()
        this.departamentosGet()
        window.scrollTo(0, 0);
	},
    methods: {
        async buscarCiudad(){
            await axios.get('/ciudades-lista/'+this.datos.departamento).then(response => { this.ciudades = response.data;})
        },
        direccionGuardar(){
            let address_main_str = this.direccion.address_main_str ? this.direccion.address_main_str : '' ;
            let address_main_num1 = this.direccion.address_main_num1 ? this.direccion.address_main_num1 : '';
            let address_main_letr1 = this.direccion.address_main_letr1 ? this.direccion.address_main_letr1 : '';
            let address_main_crdpnt1 = this.direccion.address_main_crdpnt1 ? this.direccion.address_main_crdpnt1 : '';
            let address_main_num2 = this.direccion.address_main_num2 ? this.direccion.address_main_num2 : '';
            let address_main_letr2 = this.direccion.address_main_letr2 ? this.direccion.address_main_letr2 : '';
            let address_main_crdpnt2 = this.direccion.address_main_crdpnt2 ? this.direccion.address_main_crdpnt2 : '';
            let address_main_num3 = this.direccion.address_main_num3 ? this.direccion.address_main_num3 : '';
            let address_compl_compl1 = this.direccion.address_compl_compl1 ? this.direccion.address_compl_compl1 : '';
            let address_compl_compl2 = this.direccion.address_compl_compl2 ? this.direccion.address_compl_compl2 : '';
            let address_compl_compl21 = this.direccion.address_compl_compl21 ? this.direccion.address_compl_compl21 : '';
            let address_compl_compl22 = this.direccion.address_compl_compl22 ? this.direccion.address_compl_compl22 : '';
            let address_compl_compl31 = this.direccion.address_compl_compl31 ? this.direccion.address_compl_compl31 : '';
            let address_compl_compl32 = this.direccion.address_compl_compl32 ? this.direccion.address_compl_compl32 : '';

            this.datos.direccion_residencia =
                address_main_str+' '+
                address_main_num1+' '+
                address_main_letr1+' '+
                address_main_crdpnt1+' '+
                address_main_num2+' '+
                address_main_letr2+' '+
                address_main_crdpnt2+' '+
                address_main_num3+' '+
                address_compl_compl1+' '+
                address_compl_compl2+' '+
                address_compl_compl21+' '+
                address_compl_compl22+' '+
                address_compl_compl31+' '+
                address_compl_compl32;

            this.guardarDatos();
        },
        async departamentosGet(){ await axios.get('/departamentos-lista').then(response => { this.departentos = response.data;}) },
        async obtenerDatos(){ await axios.get('datos').then(response => { this.datos = response.data; this.paginacion = response.data;}) },
        async guardarDatos(){ await axios.post('/actualizacion', this.datos ) }
	}
};
</script>
