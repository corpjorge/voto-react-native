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
        <label for="total_gastos" class="form-label">Total gastos mensuales</label>
        <input type="text" class="form-control" id="total_gastos" placeholder="" @change="guardarDatos" v-model="datos.total_gastos">
      </div>

      <h5>Descripcíon activos bienes muebles</h5>

      <div class="col-md-3">
        <label for="tipo_bienes_1" class="form-label">Tipo vivienda</label>
        <select id="tipo_bienes_1" class="form-select" @change="guardarDatos" v-model="datos.tipo_bienes_1">
            <option value="P">PROPIA</option>
            <option value="F">FAMILIAR</option>
            <option value="A">ARRIENDO</option>
            <option value="I">INMUEBLE CON HIPOTECA</option>
            <option value="O">OTRA</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="direccion_bienes_1" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion_bienes_1" data-bs-toggle="modal" data-bs-target="#exampleModal" @change="guardarDatos" v-model="datos.direccion_bienes_1" readonly>
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
                                        <select v-model="direccionBienes1.address_main_str" class="form-control custom-select" required="">
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
                                        <input type="number" min="1" max="999" v-model="direccionBienes1.address_main_num1" class="form-control" placeholder="Número" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccionBienes1.address_main_letr1" class="form-control custom-select">
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
                                        <select v-model="direccionBienes1.address_main_crdpnt1" class="form-control custom-select">
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
                                            <input type="number" min="1" max="999" v-model="direccionBienes1.address_main_num2" class="form-control" placeholder="Puerta" required="">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccionBienes1.address_main_letr2" class="form-control custom-select">
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
                                        <select v-model="direccionBienes1.address_main_crdpnt2" class="form-control" placeholder="NORTE">
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
                                            <input type="number" min="1" max="999" v-model="direccionBienes1.address_main_num3" class="form-control" placeholder="Intersección" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>Complementos</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccionBienes1.address_compl_compl1" class="form-control custom-select">
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
                                        <input type="text" v-model="direccionBienes1.address_compl_compl2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccionBienes1.address_compl_compl21" class="form-control custom-select">
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
                                        <input type="text" v-model="direccionBienes1.address_compl_compl22" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccionBienes1.address_compl_compl31" class="form-control custom-select">
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
                                        <input type="text" v-model="direccionBienes1.address_compl_compl32" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <label>Resultado</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{ direccionBienes1.address_main_str }}
                                        {{ direccionBienes1.address_main_num1 }}
                                        {{ direccionBienes1.address_main_letr1 }}
                                        {{ direccionBienes1.address_main_crdpnt1 }}
                                        {{ direccionBienes1.address_main_num2 }}
                                        {{ direccionBienes1.address_main_letr2 }}
                                        {{ direccionBienes1.address_main_crdpnt2 }}
                                        {{ direccionBienes1.address_main_num3 }}
                                        {{ direccionBienes1.address_compl_compl1 }}
                                        {{ direccionBienes1.address_compl_compl2 }}
                                        {{ direccionBienes1.address_compl_compl21 }}
                                        {{ direccionBienes1.address_compl_compl22 }}
                                        {{ direccionBienes1.address_compl_compl31 }}
                                        {{ direccionBienes1.address_compl_compl32 }}
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

      <div class="col-md-3">
        <label for="ciudad_bienes_1" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad_bienes_1" @change="guardarDatos" v-model="datos.ciudad_bienes_1" >
      </div>

      <div class="col-md-3">
        <label for="valor_bienes_1" class="form-label">Valor comercial</label>
        <input type="text" class="form-control" id="valor_bienes_1" @change="guardarDatos" v-model="datos.valor_bienes_1">
      </div>

      <div class="col-md-3">
        <label for="tipo_bienes_2" class="form-label">Tipo vivienda</label>
        <select id="tipo_bienes_2" class="form-select" @change="guardarDatos" v-model="datos.tipo_bienes_2">
            <option value="P">PROPIA</option>
            <option value="F">FAMILIAR</option>
            <option value="A">ARRIENDO</option>
            <option value="I">INMUEBLE CON HIPOTECA</option>
            <option value="O">OTRA</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="direccion_bienes_2" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion_bienes_2" data-bs-toggle="modal" data-bs-target="#Modal2" @change="guardarDatos" v-model="datos.direccion_bienes_2" readonly>
      </div>

        <!-- Modal -->
        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Modal2Label">Dirección</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="address_formh">
                            <label>Sección principal</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccionBienes2.address_main_str" class="form-control custom-select" required="">
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
                                        <input type="number" min="1" max="999" v-model="direccionBienes2.address_main_num1" class="form-control" placeholder="Número" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccionBienes2.address_main_letr1" class="form-control custom-select">
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
                                        <select v-model="direccionBienes2.address_main_crdpnt1" class="form-control custom-select">
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
                                            <input type="number" min="1" max="999" v-model="direccionBienes2.address_main_num2" class="form-control" placeholder="Puerta" required="">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select v-model="direccionBienes2.address_main_letr2" class="form-control custom-select">
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
                                        <select v-model="direccionBienes2.address_main_crdpnt2" class="form-control" placeholder="NORTE">
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
                                            <input type="number" min="1" max="999" v-model="direccionBienes2.address_main_num3" class="form-control" placeholder="Intersección" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>Complementos</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccionBienes2.address_compl_compl1" class="form-control custom-select">
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
                                        <input type="text" v-model="direccionBienes2.address_compl_compl2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccionBienes2.address_compl_compl21" class="form-control custom-select">
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
                                        <input type="text" v-model="direccionBienes2.address_compl_compl22" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select v-model="direccionBienes2.address_compl_compl31" class="form-control custom-select">
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
                                        <input type="text" v-model="direccionBienes2.address_compl_compl32" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <label>Resultado</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{ direccionBienes2.address_main_str }}
                                        {{ direccionBienes2.address_main_num1 }}
                                        {{ direccionBienes2.address_main_letr1 }}
                                        {{ direccionBienes2.address_main_crdpnt1 }}
                                        {{ direccionBienes2.address_main_num2 }}
                                        {{ direccionBienes2.address_main_letr2 }}
                                        {{ direccionBienes2.address_main_crdpnt2 }}
                                        {{ direccionBienes2.address_main_num3 }}
                                        {{ direccionBienes2.address_compl_compl1 }}
                                        {{ direccionBienes2.address_compl_compl2 }}
                                        {{ direccionBienes2.address_compl_compl21 }}
                                        {{ direccionBienes2.address_compl_compl22 }}
                                        {{ direccionBienes2.address_compl_compl31 }}
                                        {{ direccionBienes2.address_compl_compl32 }}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="direccion2Guardar">Guardar</button>
                    </div>
                </div>
            </div>
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
            direccionBienes1: {},
            direccionBienes2: {}
        }
    },
	mounted() {
		this.obtenerDatos()
        window.scrollTo(0, 0);
	},
	methods: {
        direccionGuardar(){
           let address_main_str = this.direccionBienes1.address_main_str ? this.direccionBienes1.address_main_str : '' ;
           let address_main_num1 = this.direccionBienes1.address_main_num1 ? this.direccionBienes1.address_main_num1 : '';
           let address_main_letr1 = this.direccionBienes1.address_main_letr1 ? this.direccionBienes1.address_main_letr1 : '';
           let address_main_crdpnt1 = this.direccionBienes1.address_main_crdpnt1 ? this.direccionBienes1.address_main_crdpnt1 : '';
           let address_main_num2 = this.direccionBienes1.address_main_num2 ? this.direccionBienes1.address_main_num2 : '';
           let address_main_letr2 = this.direccionBienes1.address_main_letr2 ? this.direccionBienes1.address_main_letr2 : '';
           let address_main_crdpnt2 = this.direccionBienes1.address_main_crdpnt2 ? this.direccionBienes1.address_main_crdpnt2 : '';
           let address_main_num3 = this.direccionBienes1.address_main_num3 ? this.direccionBienes1.address_main_num3 : '';
           let address_compl_compl1 = this.direccionBienes1.address_compl_compl1 ? this.direccionBienes1.address_compl_compl1 : '';
           let address_compl_compl2 = this.direccionBienes1.address_compl_compl2 ? this.direccionBienes1.address_compl_compl2 : '';
           let address_compl_compl21 = this.direccionBienes1.address_compl_compl21 ? this.direccionBienes1.address_compl_compl21 : '';
           let address_compl_compl22 = this.direccionBienes1.address_compl_compl22 ? this.direccionBienes1.address_compl_compl22 : '';
           let address_compl_compl31 = this.direccionBienes1.address_compl_compl31 ? this.direccionBienes1.address_compl_compl31 : '';
           let address_compl_compl32 = this.direccionBienes1.address_compl_compl32 ? this.direccionBienes1.address_compl_compl32 : '';

            this.datos.direccion_bienes_1 =
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
        direccion2Guardar(){
            let address_main_str = this.direccionBienes2.address_main_str ? this.direccionBienes2.address_main_str : '' ;
            let address_main_num1 = this.direccionBienes2.address_main_num1 ? this.direccionBienes2.address_main_num1 : '';
            let address_main_letr1 = this.direccionBienes2.address_main_letr1 ? this.direccionBienes2.address_main_letr1 : '';
            let address_main_crdpnt1 = this.direccionBienes2.address_main_crdpnt1 ? this.direccionBienes2.address_main_crdpnt1 : '';
            let address_main_num2 = this.direccionBienes2.address_main_num2 ? this.direccionBienes2.address_main_num2 : '';
            let address_main_letr2 = this.direccionBienes2.address_main_letr2 ? this.direccionBienes2.address_main_letr2 : '';
            let address_main_crdpnt2 = this.direccionBienes2.address_main_crdpnt2 ? this.direccionBienes2.address_main_crdpnt2 : '';
            let address_main_num3 = this.direccionBienes2.address_main_num3 ? this.direccionBienes2.address_main_num3 : '';
            let address_compl_compl1 = this.direccionBienes2.address_compl_compl1 ? this.direccionBienes2.address_compl_compl1 : '';
            let address_compl_compl2 = this.direccionBienes2.address_compl_compl2 ? this.direccionBienes2.address_compl_compl2 : '';
            let address_compl_compl21 = this.direccionBienes2.address_compl_compl21 ? this.direccionBienes2.address_compl_compl21 : '';
            let address_compl_compl22 = this.direccionBienes2.address_compl_compl22 ? this.direccionBienes2.address_compl_compl22 : '';
            let address_compl_compl31 = this.direccionBienes2.address_compl_compl31 ? this.direccionBienes2.address_compl_compl31 : '';
            let address_compl_compl32 = this.direccionBienes2.address_compl_compl32 ? this.direccionBienes2.address_compl_compl32 : '';

            this.datos.direccion_bienes_2 =
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
        async obtenerDatos(){ await axios.get('datos').then(response => { this.datos = response.data; this.paginacion = response.data;}) },
        async guardarDatos(){ await axios.post('/actualizacion', this.datos ) }
	}
};
</script>
