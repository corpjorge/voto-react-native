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
          <select id="profesion" class="form-select" @change="guardarDatos" v-model="datos.profesion">
              <option value="318">TECNICO PROFESIONAL EN PRE-IMPRESION</option>
              <option value="327">INGENIERIA DE ELECTRONICA Y TELECOMUNICACIONES</option>
              <option value="336">LICENCIADA EN FILOLOGIA E IDIOMA ESPAÑOL - INGLES</option>
              <option value="337">TECNICO EN VENTAS DE PRODUCTOS Y SERVICIOS</option>
              <option value="338">MAESTRO EN ARTES ESCENICAS CON ENFASIS EN DIRECCION</option>
              <option value="339">LICENC. EN EDUC. BASICA CON ENFASIS EN INFORMÀTICA  EDUCATIV</option>
              <option value="340">ADMINISTRACION DE NEGOCIOS CON ENFACIS EN FINAZAS Y SEGUROS</option>
              <option value="341">TECNOLOGÍA EN AUTOMATIZACIÓN INDUSTRIAL</option>
              <option value="342">PUBLICIDAD INTERNACIONAL</option>
              <option value="343">TECNOLOGO EN MANTENIMIENTO MECANICO INDUSTRIAL</option>
              <option value="344">TEOLOGIA</option>
              <option value="345">TECNOLOGO EN GESTION DOCUMENTAL</option>
              <option value="346">ADMINISTRADOR DE COMERCIO EXTERIOR</option>
              <option value="347">TECNOLOGO EN DISEÑO E INTEGRACIÓN DE AUTOMATISMOS MECATRONIC</option>
              <option value="348">CONTROLADOR DE TRANSITO AEREO V.F.R.</option>
              <option value="349">PROFESIONAL EN ADMINISTRACIÓN Y GESTIÓN AMBIENTAL</option>
              <option value="350">TECNOLOGIA EN COSTOS Y AUDITORIA</option>
              <option value="351">TECNOLOGO EN REGERENCIA DE FARMACIA</option>
              <option value="353">TECNÓLOGO EN PRODUCCIÓN DE SONIDO Y MUSICALIZACIÓN</option>
              <option value="352">ADMINISTRADOR FINANCIERO</option>
              <option value="354">INGENIERIA EN RECURSOS HIDRICOS Y GESTION AMBIENTAL</option>
              <option value="355">MAGISTER EN SANEAMIENTO Y DESARROLLO AMBIENTAL</option>
              <option value="356">TECNOLOGO EN COMUNICACIONES AERONAUITCAS</option>
              <option value="357">INTERNACIONALSITA</option>
              <option value="358">TECNOLOGO EN GESTIÓN DE SERVICIOS PARA AEROLINEAS</option>
              <option value="359">TECNOLOGIA EN ACTIVIDAD FISICA</option>
              <option value="360">PROFESIONAL  FISICO</option>
              <option value="361">TECNICO EN BANCA Y SERVICIOS FINANCIEROS</option>
              <option value="362">ADMINISTRACION EDUCATIVA</option>
              <option value="363">ADMINISTRACION Y CONSTRUCCION ARQUITECTONICA</option>
              <option value="364">LICENCIATURA EN LENGUA CASTELLANA, INGLES Y FRANCES</option>
              <option value="365">TECNOLOGÍA EN COCINA</option>
              <option value="366">MAESTRÍA EN MÚSICA</option>
              <option value="367">TECNOLOGO EN DESARROLLO GRAFICO DE PROYECTOS DE ARQUITECTURA</option>
              <option value="368">LICENCIATURA EN ADMINISTRACION Y SUPERVISION EDUCATIVA</option>
              <option value="369">LICENCIATURA EN FILOLOGIA E IDIOMAS</option>
              <option value="370">LICENC. EN EDUC. ARTISTICA CON ENFASIS EN DANZAS Y TEATRO</option>
              <option value="371">MERCADOLOGÍA</option>
              <option value="372">LICENCIADO EN EDUCACIÓN BÁSICA Y PROMOCIÓN DE LA COMUNIDAD</option>
              <option value="373">LICENCIATURA EN ELECTRONICA</option>
              <option value="374">TECNOLOGIA EN INVESTIGACION CRIMINAL</option>
              <option value="375">INGENIERIA EN PRODUCCION ACUICOLA</option>
              <option value="376">LICEN. EN EDUC  BS CON ENFASIS EN ED.FISICA,RECREACION Y DPT</option>
              <option value="377">INGENIERIA EN SEGURIDAD Y SALUD PARA EL TRABAJO</option>
              <option value="104">ANESTESIOLOGIA</option>
              <option value="105">CARDIOLOGIA</option>
              <option value="106">CIRUGIA PLASTICA</option>
              <option value="107">INSTRUMENTACION QUIRURGICA</option>
              <option value="108">MERCADEO</option>
              <option value="109">MERCADOTECNIA</option>
              <option value="110">NUTRICION Y DIETETICA</option>
              <option value="111">ODONTOLOGIA</option>
              <option value="112">OPTOMETRIA</option>
              <option value="113">OFTALMOLOGIA</option>
              <option value="114">PEDIATRIA</option>
              <option value="115">PSIQUIATRIA</option>
              <option value="116">TERAPIA OCUPACIONAL</option>
              <option value="117">ZOOTECNIA</option>
              <option value="118">TERAPIA DEL LENGUAJE</option>
              <option value="119">INGENIERIA FINANCIERA</option>
              <option value="120">INGENIERIA FORESTAL</option>
              <option value="121">INGENIERIA TOPOGRAFICA</option>
              <option value="122">INGENIERIA AERONAUTICA</option>
              <option value="123">INGENIERIA DE TRANSPORTES Y VIAS</option>
              <option value="124">INGENIERIA GEOLOGICA</option>
              <option value="125">ESPOSO(A) DE ASOCIADO(A)</option>
              <option value="126">HIJO(A) DE ASOCIADO(A)</option>
              <option value="131">INGENIERIA SANITARIA</option>
              <option value="136">INGENIERIA MECATRONICA</option>
              <option value="146">TECNICO EN CONTABILIDAD</option>
              <option value="147">TECNICO EN ADMIN. DE EMPRESAS</option>
              <option value="154">TECNOLOGO EN SECRETARIADO COMERCIAL BILINGUE</option>
              <option value="157">LICENCIATURA EN PEDAGOGIA REEDUCATIVA</option>
              <option value="163">PROFESIONAL EN SALUD OCUPACIONAL</option>
              <option value="164">LICENCIATURA EN LENGUAS MODERNAS</option>
              <option value="165">LICENCIADO EN ADMINISTRACION EDUCATIVA</option>
              <option value="166">LICENCIADO EN DISEÑO TECNOLOGICO</option>
              <option value="185">TECNOLOGO EN ADMINISTRACION TURISTICA Y HOTELERA</option>
              <option value="188">TECNOLOGO EN GESTION LOGISTICA</option>
              <option value="191">TECNICO PROFESIONAL EN GESTION CONTABLE Y FINANCIERA</option>
              <option value="195">TECNICO PROFESIONAL EN ARCHIVISTICA</option>
              <option value="197">PROFESIONAL EN FINANZAS Y NEGOCIOS INTERNALES.</option>
              <option value="200">PROFESIONAL EN GOBIERNO Y RELAC. INTERNACIONALES</option>
              <option value="208">EXPERTA EN DIBUJO ARQUITECTONICO Y DECORACION</option>
              <option value="213">TECNOLOGO EN  INFORMATICA</option>
              <option value="216">PROFESIONAL EN LENGUAS MODERNAS</option>
              <option value="219">TECNOLOGO EN MERCADOTECNIA</option>
              <option value="230">TECNICO PROFESIONAL EN AUXILIAR SERVICIOS FARMACEUTICOS</option>
              <option value="231">TECNICO PROFESIONAL EN ESTETICA Y COSMETOLOGIA</option>
              <option value="232">TECNICO EN SECRETARIADO GENERAL</option>
              <option value="233">TECNOLOGO EN INGENIERIA INDUSTRIAL</option>
              <option value="248">TECNOLOGO EMPRESARIAL</option>
              <option value="255">TECNICO EN ADMINISTRACION DE ECONOMIA SOLIDARIA</option>
              <option value="257">TECNICO EN DIRECCION DE VENTAS</option>
              <option value="260">TECNICO LABORAL EN AUXILIAR DE ENFERMERIA</option>
              <option value="291">LICENCIATURA EN CIENCIAS DE LA ENFERMERIA</option>
              <option value="280">TECNOL. EN COORD. DEL PROC. PARA DISEÑO DE MEDIOS IMPRESOS</option>
              <option value="282">INGENIERO GEOGRAFO</option>
              <option value="292">INGENIERIA DE MERCADOS</option>
              <option value="294">TECNICO EN OPERACIONES COMERCIALES</option>
              <option value="299">INGENIERO AERONAUTICO</option>
              <option value="306">MAESTRIA EN BELLAS ARTES</option>
              <option value="312">TECNICO PROFRESIONAL EN AUXILIAR ADMINISTRATIVO EN SALUD</option>
              <option value="128">TECN. EN ELECTRICIDAD INDUSTRIAL</option>
              <option value="134">TECNOL. EN CONSTRUCCION</option>
              <option value="135">TECNOL. EN PERIODISMO</option>
              <option value="152">TECNOLOGO EN ADMINISTRACION FINANCIERA</option>
              <option value="148">TECNOLOGO EN SALUD OCUPACIONAL</option>
              <option value="150">TECNOLOGO EN NEGOCIOS INTERNACIONALES</option>
              <option value="155">TECNOLOGO EN ADMON. DE AEROLINEAS Y AGENCIAS DE VIAJE</option>
              <option value="161">TECNICO EN DISEÑO DE INTERIORES</option>
              <option value="176">SECRETARIADO AUXILIAR CONTABLE</option>
              <option value="177">TECNICO PROFESIONAL EN ADMON. DE SERV. PARA AEROLINEAS</option>
              <option value="178">ADMINISTRADORA COMERCIAL</option>
              <option value="179">TECNOLOGIA EN ASISTENCIA GERENCIAL</option>
              <option value="193">LICENCIATURA EN COMERCIO Y CONTADURIA</option>
              <option value="203">TECNICO EN GUIANZA TURISTICA</option>
              <option value="207">TECNOLOGO EN ELECTRONICA</option>
              <option value="209">ADMON DE RECURSOS HUMANOS</option>
              <option value="214">TECNOLOGO EN ENTRENAMIENTO Y GESTION MILITAR</option>
              <option value="220">TECNICO PROFESIONAL EN TECNICAS FORESTALES</option>
              <option value="234">INGENIERO COMERCIAL</option>
              <option value="236">HISTORIADOR</option>
              <option value="238">PROFICIENCIA EN INGLES</option>
              <option value="243">ADMINISTRACION SERVICIOS EN SALUD</option>
              <option value="244">TECNICO ESPEC. EN ESTRUCTURAS METALICAS Y MATERIALES COMP.</option>
              <option value="245">TECNICO EN ADMINISTRACIÓN JUDICIAL</option>
              <option value="246">TECNICO PROF. EN PLANEA Y EJECUC. DE PROC. DE FUND. Y MOLDEO</option>
              <option value="251">ECOLOGIA</option>
              <option value="259">TECNOLOGO EN INGENIERIA MECATRONICA</option>
              <option value="262">PROFESIONAL EN QUIMICA INDUSTRIAL</option>
              <option value="275">TECNOLOGO EN SANEAMIENTO AMBIENTAL</option>
              <option value="277">TECNOLOGÍA EN REALIZACIÓN DE AUDIOVISUALES Y MULTIMEDIA</option>
              <option value="278">INGENIERO DE SONIDO</option>
              <option value="281">LICENCIATURA EN FILOSOFIA Y LETRAS</option>
              <option value="286">NORMALISTA SUPERIOR CON ENFASIS EN EDUC. ARTISTICA</option>
              <option value="290">MAESTRA EN ARTES ESCENICAS CON ENFASIS EN ACTUACION</option>
              <option value="296">TECNOLOGO EN INSTALACIONES HIDRAULICAS SANITARIAS Y DE GAS</option>
              <option value="310">INGENIERIA AGROFORESTAL</option>
              <option value="311">PROFESIONAL EN NEGOCIOS INTERNACIONALES</option>
              <option value="315">ESPECIALISTA EN LUDICA EDUCATIVA</option>
              <option value="129">INGENIERO DE DISEÑO Y AUTOM. ELECTRONICA</option>
              <option value="138">TECNICO MECANICO</option>
              <option value="139">CIENCIAS MILITARES Y LOGISTICA</option>
              <option value="143">BELLAS ARTES ESPECIALIZACION ESCULTURA</option>
              <option value="144">INGENIERIA MERCANTE</option>
              <option value="145">ADMINISTRADOR DE SISTEMAS DE INFORMACION</option>
              <option value="151">LICENCIADO EN MUSICA</option>
              <option value="153">ADMINISTRADOR AMBIENTAL Y DE LOS RECURSOS NATURALES</option>
              <option value="174">ADMINISTRADOR FINANCIERO Y DE SISTEMAS</option>
              <option value="158">TECNICO PROFESIONAL EN ADMON. DE TALENTO HUMANO</option>
              <option value="170">ESTADISTICA</option>
              <option value="175">TECNICA PROFESIONAL DE ARTE Y DECORACION</option>
              <option value="180">LICENCIATURA EN PSICOLOGIA Y PEDAGOGIA</option>
              <option value="183">TECNOLOGIA EN HIGIENE ORAL</option>
              <option value="184">TECNICO PROF. EN PLANIFIC. PARA CREACION Y GESTION DE EMPRE.</option>
              <option value="186">TECNOLOGO EN GESTION DE LA PRODUCCION INDUSTRIAL</option>
              <option value="187">TECNOLOGO EN GESTION BANCARIA Y FINANCIERA</option>
              <option value="189">TECNOLOGO EN ADMON. DE EMPRESAS AGROPECUARIAS</option>
              <option value="190">PROFESIONAL EN MEDIOS AUDIOVISUALES</option>
              <option value="196">TECNICO PROFESIONAL EN DESARROLLO EMPRESARIAL</option>
              <option value="202">TECNICO EN DOCUMENTACION Y REGISTRO DE OPERAC. CONTABLES</option>
              <option value="211">TECNOLOGO EN GESTION COMERCIAL Y DE NEGOCIOS</option>
              <option value="215">TECNICO PROFESIONAL EN ADMINISTRACION EN SALUD</option>
              <option value="217">TECNOLOGO EN CONTABILIDAD Y FINANZAS</option>
              <option value="218">TECNOLOGO EN ADMINISTRACION DE EMPRESAS</option>
              <option value="224">SUBOFICIAL POLICIA NACIONAL</option>
              <option value="225">ADMINISTRACION DE COMERCIO INTERNACIONAL</option>
              <option value="227">TECNICO OPERADOR DE PLANTAS DE REFINACION Y PETROQUIMICA</option>
              <option value="228">MADRE DE ASOCIADO</option>
              <option value="229">PADRE DE ASOCIADO</option>
              <option value="237">RELACIONES ECONOMICAS INTERNACIONALES</option>
              <option value="249">TECNICO SUPERIOR EN ADMINISTRACIÓN EDUCATIVA</option>
              <option value="250">TECNOLOGO EN ENTRENAMIENTO DEPORTIVO</option>
              <option value="261">TECNICO EN INVESTIGACION JUDICIAL</option>
              <option value="263">TECNOLOGO EN CINE Y FOTOGRAFIA</option>
              <option value="285">ADMINISTRADOR DE MERCADEO Y LOGISTICA INTERNAL.</option>
              <option value="287">TECNOLOGIA EN GESTION ADMINISTRATIVA</option>
              <option value="289">TECNOLOGO EN MERCADEO Y VENTAS</option>
              <option value="293">TECNICO PROFESIONAL EN MANTENIMIENTO INDUSTRIAL</option>
              <option value="295">TECNOLOGO ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION</option>
              <option value="298">TECNICO ELECTRICISTA</option>
              <option value="300">PROF. EN ADMINISTRACION DE EMPRESAS TURISTICAS Y HOTELERAS</option>
              <option value="313">TECNICO PROFESIONAL EN PROCEDIMIENTOS JUDICIALES</option>
              <option value="D">DESCONOCIDA</option>
              <option value="001">ACUICULTURA</option>
              <option value="002">ADMON AERONAUTICA</option>
              <option value="003">ADMON AGROPECUARIA</option>
              <option value="004">ADMON DE AEROLINEAS</option>
              <option value="005">ADMON DE BIENES RAICES</option>
              <option value="006">ADMON DE EMPRESAS</option>
              <option value="007">ADMON DE NEGOCIOS</option>
              <option value="008">ADMON DE SERVICIOS</option>
              <option value="009">ADMON FINANCIERA</option>
              <option value="010">ADMON HOSPITALARIA</option>
              <option value="011">ADMON INDUSTRIAL</option>
              <option value="012">ADMON OBRAS CIVILES</option>
              <option value="013">ADMON PERSONAL</option>
              <option value="014">ADMON PUBLICA</option>
              <option value="015">ADMON SEGUROS</option>
              <option value="016">ADMON TRANSPORTE</option>
              <option value="017">ADMON TRIBUTARIA</option>
              <option value="018">ADMON TURISTICA</option>
              <option value="019">ADMON TURISTICA HOTELERA</option>
              <option value="020">AGROLOGIA</option>
              <option value="021">AGRONOMIA</option>
              <option value="022">ANTROPOLOGIA</option>
              <option value="023">ARQUEOLOGIA</option>
              <option value="024">ARQUITECTURA</option>
              <option value="025">ARTE Y DECORACION</option>
              <option value="026">ARTES PLASTICAS</option>
              <option value="027">BACTERIOLOGIA</option>
              <option value="028">BIBLIOTECOLOGIA</option>
              <option value="029">BIOLOGIA</option>
              <option value="030">BIOLOGIA MARINA</option>
              <option value="031">CIENCIAS POLITICAS</option>
              <option value="032">COM. SOCIAL Y PERIODISMO</option>
              <option value="033">COMERCIO INTERNACIONAL</option>
              <option value="034">CONTADURIA</option>
              <option value="035">DERECHO (ABOGADO)</option>
              <option value="036">DISEÑO DE INTERIORES</option>
              <option value="037">DISEÑO DE MODAS Y PATRONAJE</option>
              <option value="038">DISEÑO GRAFICO</option>
              <option value="039">DISEÑO INDUSTRIAL</option>
              <option value="040">DISEÑO TEXTIL</option>
              <option value="041">ECONOMIA</option>
              <option value="042">ENFERMERIA</option>
              <option value="043">ENTOMOLOGIA</option>
              <option value="044">FILOSOFIA</option>
              <option value="045">FINANZAS Y RELAC. INTERNALS</option>
              <option value="046">FISICA</option>
              <option value="047">FISIOTERAPIA</option>
              <option value="048">FITOMEJORAMIENTO</option>
              <option value="049">FITOPATOLOGIA</option>
              <option value="050">FONOAUDIOLOGIA</option>
              <option value="051">GEOGRAFIA</option>
              <option value="052">GEOLOGIA</option>
              <option value="053">HOTELERIA Y TURISMO</option>
              <option value="054">IDIOMAS/ LENGUAS MODERNAS</option>
              <option value="055">ING. ADMINISTRATIVA</option>
              <option value="056">ING. AMBIENTAL/FORESTAL</option>
              <option value="057">ING. CATASTRAL/GEODESIA</option>
              <option value="058">ING. PROD. Y AGROINDUST.</option>
              <option value="059">ING. SISTEMAS / COMPUTACIÓN</option>
              <option value="060">INGENIERIA AGRONOMA</option>
              <option value="061">INGENIERIA CIVIL</option>
              <option value="062">INGENIERIA DE ALIMENTOS</option>
              <option value="063">INGENIERIA DE PETROLEOS</option>
              <option value="064">INGENIERÍA DE TELECOMUNICACIONES</option>
              <option value="065">INGENIERIA ELECTRICA</option>
              <option value="066">INGENIERIA ELECTRONICA</option>
              <option value="067">INGENIERIA INDUSTRIAL</option>
              <option value="068">INGENIERIA MECANICA</option>
              <option value="069">INGENIERIA METALURGICA</option>
              <option value="070">INGENIERIA MINAS</option>
              <option value="071">INGENIERIA QUIMICA</option>
              <option value="072">MATEMATICAS</option>
              <option value="073">MEDICINA</option>
              <option value="074">MEDICINA VETERINARIA</option>
              <option value="075">MICROBIOLOGIA</option>
              <option value="076">MUSICA</option>
              <option value="077">NUTRICION Y DIETETICA</option>
              <option value="078">OCEANOGRAFIA</option>
              <option value="079">ODONTOLOGIA</option>
              <option value="080">OPTOMETRIA</option>
              <option value="081">PREESCOLAR</option>
              <option value="082">PROD. CINE/TELEVISION</option>
              <option value="083">PSICOLOGIA</option>
              <option value="084">PUBLICIDAD Y MERCADEO</option>
              <option value="085">QUIMICA</option>
              <option value="086">QUIMICA FARMACEUTICA</option>
              <option value="087">SECRETARIADO</option>
              <option value="088">SOCIOLOGIA</option>
              <option value="089">TECN. ADMON DE PERSONAL</option>
              <option value="090">TECN. EN SEGUROS</option>
              <option value="091">TECN. QUIMICA</option>
              <option value="092">TECN. REGENCIA FARMACIA</option>
              <option value="093">TECN. RELS INDUSTRIALES</option>
              <option value="094">TECN. SEG. INDUSTRIAL</option>
              <option value="095">TECN.SISTEMAS / COMPUTACION</option>
              <option value="096">TECNOLOGIA DE ALIMENTOS</option>
              <option value="097">TERAPIA RESPIRATORIA</option>
              <option value="098">TRABAJO SOCIAL</option>
              <option value="099">VETERINARIA</option>
              <option value="100">CULTURA FISICA DEPORTE Y RECREACION</option>
              <option value="101">TECN. PROF. EN COMERCIO EXTERIOR</option>
              <option value="102">TECN. ELECTROMECANICO</option>
              <option value="132">PILOTO</option>
              <option value="133">LICENCIATURA EN EDUCACION</option>
              <option value="137">TECNOL EN RADIOLOGIA E IMAGENES DIAGNOSTICAS</option>
              <option value="141">CONSERVACION Y RESTAURACUON DE BIENES MUEBLES</option>
              <option value="149">LICENCIATURA EN BIOLOGIA Y QUIMICA</option>
              <option value="159">DOCENTE</option>
              <option value="168">INGENIERIA  BIOMEDICA</option>
              <option value="169">INGENIERO EN  AUTOM. INDUSTRIAL</option>
              <option value="171">LICENCIATURA EN PEDAGOGIA INFANTIL</option>
              <option value="173">TECNOLOGO EN DISEÑO Y PRODUCCION GRAFICA</option>
              <option value="181">PROFESIONAL EN COMERCIO INTERNACIONAL</option>
              <option value="194">RELACIONES INTERNACIONALES Y ESTUDIOS POLITICOS</option>
              <option value="206">LENGUAJES Y ESTUDIOS SOCIO CULTURALES</option>
              <option value="210">TECNICO ADMINISTRADOR EN INDUSTRIA ANIMAL</option>
              <option value="223">LICENCIATURA EN NUTRICION Y DIETETICA</option>
              <option value="240">DELINEANTE DE ARQUITECTURA E INGENIERIA</option>
              <option value="242">TECNICO HOMEOPATA</option>
              <option value="247">TECNOLOGO EN ADMINISTRACION DE EMPRESAS TURISTICAS</option>
              <option value="252">LICENCIATURA EN ARTE Y DECORACION ARQUITECTONICA</option>
              <option value="253">TECNICO PROFESIONAL EN ADMINISTRACION HOTELERA</option>
              <option value="256">POLITOLOGO</option>
              <option value="264">TECNOLOGO EN PUBLICIDAD Y COMUNICACION VISUAL</option>
              <option value="266">LICENCIATURA EN CIENCIAS SOCIALES</option>
              <option value="270">LICENCIATURA EN EDUCACION FISICA</option>
              <option value="271">MEDICINA ALTERNATIVA</option>
              <option value="272">BIOMEDICINA</option>
              <option value="273">PRODUCCION MUSICAL</option>
              <option value="274">BIOQUIMICA</option>
              <option value="279">TECNICO EN MANTENIMIENTO DE MOTORES GASOLINA Y GAS</option>
              <option value="307">TECNOLOGIA EN ADMINISTRACION HOSPITALARIA</option>
              <option value="103">FILOLOGIA E IDIOMAS</option>
              <option value="127">ESTUDIANTE</option>
              <option value="130">TECN. EN FLORICULTURA Y JARDINERIA</option>
              <option value="140">TECNICO PROFESIONAL EN CINE, TELEV. Y VIDEOS</option>
              <option value="142">TECNOLOGO PROFESIONAL EN ADMON. DE TALENTO HUMANO</option>
              <option value="156">TECNICO EN DIBUJO ARQUITECTONICO SUPERIOR</option>
              <option value="160">TECNICO EN DROGUERIA</option>
              <option value="162">TECNICO PROFESIONAL EN ELECTROMEDICINA</option>
              <option value="167">LICENCIATURA EN SOCIALES</option>
              <option value="172">ADMINISTRADOR POLICIAL</option>
              <option value="182">TECNICO EN IDIOMAS Y NEGOCIOS INTERNACIONALES</option>
              <option value="192">LINGUISTA</option>
              <option value="198">TECNOLOGIA EN SISTEMATIZACION DE DATOS</option>
              <option value="199">TECNOLOGO EN CITOHISTOLOGIA</option>
              <option value="201">ING. AMBIENTAL Y SANITARIA</option>
              <option value="204">INGENIERIA AMBIENTAL</option>
              <option value="205">TECNOLOGO EN IMPLEMEN. DE SERV. DE TELEC. POR REDES CABLEAD.</option>
              <option value="212">TECNICO EN COCINA</option>
              <option value="221">PROFESIONAL EN CIENCIAS MILITARES</option>
              <option value="222">INGENIERIA TELEMATICA</option>
              <option value="226">TECNICO PROFESIONAL EN SALUD PUBLICA</option>
              <option value="235">PROFESIONAL EN ESTUDIOS LITERARIOS</option>
              <option value="239">TECNICO EN TELECOMUNICACIONES</option>
              <option value="241">ARTESANO</option>
              <option value="254">LICENCIATURA EN LINGUISTICA Y LITERATURA</option>
              <option value="258">PROF. EN CIENCIAS DE INF. , BIBLIOTECOLOGIA Y ARCHIVISTICA</option>
              <option value="265">INGENIERIA EN RECURSOS HIDRICOS Y GESTION AMBIENTAL</option>
              <option value="267">SACERDOTE</option>
              <option value="268">TECNICO PROFESIONAL EN DISEÑO TEXTIL</option>
              <option value="269">TECNOLOGO EN GESTION DE PROCESOS DE CALIDAD</option>
              <option value="276">TECNOLOGO EN GESTION AMBIENTAL Y SERVICIOS PUBLICOS</option>
              <option value="283">TECNOLOGO EN GESTION DE EMPRESAS DE LA SALUD</option>
              <option value="284">TECNOLOGO EN ADMINIST COMERCIAL Y FINANC.</option>
              <option value="288">AUXILIAR EN RECURSOS HUMANOS Y BIENESTAR COMUNITARIO</option>
              <option value="297">TECNICO EN ARTES GRAFICAS</option>
              <option value="301">TECNOLOGIA EN ADMINISTRACION DE SISTEMAS</option>
              <option value="302">TECNICO PROFESIONAL EN PROCESAMIENTO DE ALIMENTOS</option>
              <option value="303">PROF. ADMINISTRADOR DE SISTEMAS</option>
              <option value="304">PROF. ADMINISTRADOR DE EMPRESAS</option>
              <option value="305">PROF. EN LENGUAJES Y ESTUDIOS SOCIOCULTURALES</option>
              <option value="308">TECNOLOGO EN GESTION CONTABLE Y FINANCIERA</option>
              <option value="309">TECNICO EN ASISTENCIA ADMINISTRATIVA</option>
              <option value="314">ADMINISTRADOR LOGISTICO</option>
              <option value="316">MAESTRO EN ARTES VISUALES</option>
              <option value="317">LICENCIATURA EN FILOSOFIA Y CIENCIAS RELIGIOSAS</option>
              <option value="319">TECNOLOGO EN PROCEDIMIENTOS JUDICIALES</option>
              <option value="320">INGENIERO AGRONOMO</option>
              <option value="321">TÉCNICO PROFESIONAL EN SEGURIDAD E HIGÍENE INDUSTRIAL</option>
              <option value="322">LICENCIATURA EN FISICA</option>
              <option value="323">TECNICO PROFESIONAL DISEÑO DE ALTA COSTURA</option>
              <option value="326">ESPECIALISTA EN GESTION PUBLICA</option>
              <option value="324">PROFESIONAL EN CIENCIAS NAVALES</option>
              <option value="325">TECNICO PROF. EN GESTION DE SISTEMAS DE MANEJO AMBIENTAL</option>
              <option value="328">TECNOLOGÍA EN ADMINISTRACIÓN DE INSTITUCIONES DE SERVICIO</option>
              <option value="329">TECNOLOGO EN ADMINISTRACION DE REDES DE COMPUTADORES</option>
              <option value="330">TECNICO EN INST. PARA SUMINIS. DE GAS COMBUSTIBLE  EN EDIFIC</option>
              <option value="331">TECNICO EN MANTENIMIENTO DE HARDWARE</option>
              <option value="332">TECNOLOGÍA EN MANTENIMIENTO MECATRONICO DE AUTOMOTORES</option>
              <option value="333">TÉCNICO EN PELUQUERÍA</option>
              <option value="334">OFICIAL DEL EJERCITO  DE SUBTENIENTE</option>
              <option value="335">GERONTOLOGO</option>
          </select>
      </div>

      <div class="col-md-3">
        <label for="estado_civil" class="form-label">Estado civil</label>
        <select id="estado_civil" class="form-select" @change="guardarDatos" v-model="datos.estado_civil">
            <option value="C">CASADO</option>
            <option value="D">DIVORCIADO</option>
            <option value="S">SOLTERO</option>
            <option value="U">UNION LIBRE</option>
            <option value="V">VIUDO</option>
            <option value="O">OTRO</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="nivel_estudios" class="form-label">Nivel de estudios</label>
        <select id="nivel_estudios" class="form-select" @change="guardarDatos" v-model="datos.nivel_estudios">
            <option value="A">ANALFABETISMO</option>
            <option value="E">ESPECIALIZACION</option>
            <option value="D">DOCTORADO</option>
            <option value="I">MAESTRIA</option>
            <option value="M">MAGISTER</option>
            <option value="P">PRIMARIA</option>
            <option value="S">SECUNDARIA</option>
            <option value="T">TECNICA</option>
            <option value="U">UNIVERSITARIA</option>
            <option value="V">TECNOLOGICA</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="ocupacion" class="form-label">Ocupación</label>
        <select id="ocupacion" class="form-select" @change="guardarDatos" v-model="datos.ocupacion">
            <option value="RE">RENTAS DE CAPITAL</option>
            <option value="PE">PENSIONADO</option>
            <option value="NM">NEGOCIO O MICROEMPRESA</option>
            <option value="NN">DESCONOCIDA</option>
            <option value="EM">EMPLEADO</option>
            <option value="PI">PROFESIONAL INDEPENDIENTE</option>
            <option value="DO">DEPENDE ECONOMICAMENTE</option>
            <option value="ES">ESTUDIANTE</option>
            <option value="HO">HOGAR</option>
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
