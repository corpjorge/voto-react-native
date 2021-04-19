<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualizacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->text('primer_apellido');
            $table->text('segundo_apellido');
            $table->text('primer_nombre');
            $table->text('segundo_nombre');
            $table->text('dia_nacimiento');
            $table->text('mes_nacimiento');
            $table->text('año_nacimiento');
            $table->text('tipo_documento');
            $table->text('documento_numero');             
            $table->text('dia_expedicion_doc');
            $table->text('mes_expedicion_doc');
            $table->text('año_expedicion_doc');
            $table->text('lugar_expedicion_doc');
            $table->text('nacionalidad');
            $table->text('genero');
            $table->text('cabeza_familia');
            $table->text('profesion');
            $table->text('estado_civil');
            $table->text('nivel_estudios');
            $table->text('ocupacion');
            $table->text('direccion_residencia');
            $table->text('barrio');
            $table->text('ciudad');
            $table->text('departamento');
            $table->text('estrato');
            $table->text('tipo_vivienda');
            $table->text('telefono_fijo');
            $table->text('telefono_celular');
            $table->text('actividad_economica');
            $table->text('actividad_especifica');
            $table->text('declara_renta');
            $table->text('nombre_empresa');
            $table->text('cargo');
            $table->text('dia_vinculacion');
            $table->text('mes_vinculacion');
            $table->text('año_vinculacion');
            $table->text('direccion_empresa');
            $table->text('barrio_empresa');
            $table->text('telefono_fijo_empresa');
            $table->text('tipo_contrato');
            $table->text('funcionario_publico');
            $table->text('adm_recusos_publicos');
            $table->text('ejerce_poder_publico');
            $table->text('reconocimiento_publico');
            $table->text('operacion_moneda_extranjera');
            $table->text('cuentas_monedas_extranjera');
            $table->text('banco');
            $table->text('numero_cuenta');
            $table->text('moneda');
            $table->text('ciudad_banco');
            $table->text('pais_banco');
            $table->text('tipo_operacion_moneda_extrangera');
            $table->text('familia_labora_sector_publico');
            $table->text('familia_vinculados');
            $table->text('nombre_familia_PEP_vinculado_1');
            $table->text('cedula_familia_PEP_vinculado_1');
            $table->text('telefono_familia_PEP_vinculado_1');
            $table->text('parantesco_familia_PEP_vinculado_1');          
            $table->text('nombre_familia_PEP_vinculado_2');
            $table->text('cedula_familia_PEP_vinculado_2');         
            $table->text('telefono_familia_PEP_vinculado_2');
            $table->text('parantesco_familia_PEP_vinculado_2');
            $table->text('ingreso_mensual');
            $table->text('otros_ingresos');
            $table->text('concepto_otros_ingresos');
            $table->text('total_ingresos');
            $table->text('gastos_personales');
            $table->text('cuotas_creditos');
            $table->text('otros_gastos');
            $table->text('tipo_bienes_1');
            $table->text('direccion_bienes_1');
            $table->text('ciudad_bienes_1');
            $table->text('valor_bienes_1');
            $table->text('tipo_bienes_2');
            $table->text('direccion_bienes_2');
            $table->text('ciudad_bienes_2');
            $table->text('valor_bienes_2');
            $table->text('tipo_vehiculo_1');
            $table->text('marca__vehiculo_1');
            $table->text('modelo_vehiculo_1');
            $table->text('placa_vehiculo_1');
            $table->text('valor_vehiculo_1');
            $table->text('tipo_vehiculo_2');
            $table->text('marca__vehiculo_2');
            $table->text('modelo_vehiculo_2');
            $table->text('placa_vehiculo_2');
            $table->text('valor_vehiculo_2');
            $table->text('otros_activos');
            $table->text('total_activos');
            $table->text('total_pasivos');
            $table->text('total_patrimonio');
            $table->text('tipo_doc_familiar_1');
            $table->text('doc_familiar_1');
            $table->text('nombre_familiar_1');
            $table->text('parentesco_familiar_1');
            $table->text('tipo_doc_familiar_2');
            $table->text('doc_familiar_2');
            $table->text('nombre_familiar_2');
            $table->text('parentesco_familiar_2');
            $table->text('tipo_doc_familiar_3');
            $table->text('doc_familiar_3');
            $table->text('nombre_familiar_3');
            $table->text('parentesco_familiar_3');
            $table->text('tipo_doc_familiar_4');
            $table->text('doc_familiar_4');
            $table->text('nombre_familiar_4');
            $table->text('parentesco_familiar_4'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualizacions');
    }
}
