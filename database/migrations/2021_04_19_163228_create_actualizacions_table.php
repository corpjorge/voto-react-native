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
            $table->text('primer_apellido')->nullable();
            $table->text('segundo_apellido')->nullable();
            $table->text('primer_nombre')->nullable();
            $table->text('segundo_nombre')->nullable();
            $table->text('dia_nacimiento')->nullable();
            $table->text('mes_nacimiento')->nullable();
            $table->text('año_nacimiento')->nullable();
            $table->text('tipo_documento')->nullable();
            $table->text('documento_numero')->nullable();
            $table->text('dia_expedicion_doc')->nullable();
            $table->text('mes_expedicion_doc')->nullable();
            $table->text('año_expedicion_doc')->nullable();
            $table->text('lugar_expedicion_doc')->nullable();
            $table->text('nacionalidad')->nullable();
            $table->text('genero')->nullable();
            $table->text('cabeza_familia')->nullable();
            $table->text('profesion')->nullable();
            $table->text('estado_civil')->nullable();
            $table->text('nivel_estudios')->nullable();
            $table->text('ocupacion')->nullable();
            $table->text('direccion_residencia')->nullable();
            $table->text('barrio')->nullable();
            $table->text('ciudad')->nullable();
            $table->text('departamento')->nullable();
            $table->text('estrato')->nullable();
            $table->text('tipo_vivienda')->nullable();
            $table->text('telefono_fijo')->nullable();
            $table->text('telefono_celular')->nullable();
            $table->text('correo')->nullable();
            $table->text('actividad_economica')->nullable();
            $table->text('actividad_especifica')->nullable();
            $table->text('declara_renta')->nullable();
            $table->text('nombre_empresa')->nullable();
            $table->text('cargo')->nullable();
            $table->text('dia_vinculacion')->nullable();
            $table->text('mes_vinculacion')->nullable();
            $table->text('año_vinculacion')->nullable();
            $table->text('direccion_empresa')->nullable();
            $table->text('barrio_empresa')->nullable();
            $table->text('telefono_fijo_empresa')->nullable();
            $table->text('tipo_contrato')->nullable();
            $table->text('funcionario_publico')->nullable();
            $table->text('adm_recusos_publicos')->nullable();
            $table->text('ejerce_poder_publico')->nullable();
            $table->text('reconocimiento_publico')->nullable();
            $table->text('operacion_moneda_extranjera')->nullable();
            $table->text('cuentas_monedas_extranjera')->nullable();
            $table->text('banco')->nullable();
            $table->text('numero_cuenta')->nullable();
            $table->text('moneda')->nullable();
            $table->text('ciudad_banco')->nullable();
            $table->text('pais_banco')->nullable();
            $table->text('tipo_operacion_moneda_extrangera')->nullable();
            $table->text('familia_labora_sector_publico')->nullable();
            $table->text('familia_vinculados')->nullable();
            $table->text('nombre_familia_PEP_vinculado_1')->nullable();
            $table->text('cedula_familia_PEP_vinculado_1')->nullable();
            $table->text('telefono_familia_PEP_vinculado_1')->nullable();
            $table->text('parantesco_familia_PEP_vinculado_1')->nullable();
            $table->text('nombre_familia_PEP_vinculado_2')->nullable();
            $table->text('cedula_familia_PEP_vinculado_2')->nullable();
            $table->text('telefono_familia_PEP_vinculado_2')->nullable();
            $table->text('parantesco_familia_PEP_vinculado_2')->nullable();
            $table->text('ingreso_mensual')->nullable();
            $table->text('otros_ingresos')->nullable();
            $table->text('concepto_otros_ingresos')->nullable();
            $table->text('total_ingresos')->nullable();
            $table->text('gastos_personales')->nullable();
            $table->text('cuotas_creditos')->nullable();
            $table->text('otros_gastos')->nullable();
            $table->text('total_gastos')->nullable();
            $table->text('tipo_bienes_1')->nullable();
            $table->text('direccion_bienes_1')->nullable();
            $table->text('ciudad_bienes_1')->nullable();
            $table->text('valor_bienes_1')->nullable();
            $table->text('tipo_bienes_2')->nullable();
            $table->text('direccion_bienes_2')->nullable();
            $table->text('ciudad_bienes_2')->nullable();
            $table->text('valor_bienes_2')->nullable();
            $table->text('tipo_vehiculo_1')->nullable();
            $table->text('marca_vehiculo_1')->nullable();
            $table->text('modelo_vehiculo_1')->nullable();
            $table->text('placa_vehiculo_1')->nullable();
            $table->text('valor_vehiculo_1')->nullable();
            $table->text('tipo_vehiculo_2')->nullable();
            $table->text('marca_vehiculo_2')->nullable();
            $table->text('modelo_vehiculo_2')->nullable();
            $table->text('placa_vehiculo_2')->nullable();
            $table->text('valor_vehiculo_2')->nullable();
            $table->text('otros_activos')->nullable();
            $table->text('total_activos')->nullable();
            $table->text('total_pasivos')->nullable();
            $table->text('total_patrimonio')->nullable();
            $table->text('tipo_doc_familiar_1')->nullable();
            $table->text('doc_familiar_1')->nullable();
            $table->text('nombre_familiar_1')->nullable();
            $table->text('parentesco_familiar_1')->nullable();
            $table->text('tipo_doc_familiar_2')->nullable();
            $table->text('doc_familiar_2')->nullable();
            $table->text('nombre_familiar_2')->nullable();
            $table->text('parentesco_familiar_2')->nullable();
            $table->text('tipo_doc_familiar_3')->nullable();
            $table->text('doc_familiar_3')->nullable();
            $table->text('nombre_familiar_3')->nullable();
            $table->text('parentesco_familiar_3')->nullable();
            $table->text('tipo_doc_familiar_4')->nullable();
            $table->text('doc_familiar_4')->nullable();
            $table->text('nombre_familiar_4')->nullable();
            $table->text('parentesco_familiar_4')->nullable();
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
