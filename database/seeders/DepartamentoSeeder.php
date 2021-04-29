<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert(['code' => 5,  'name' => 'ANTIOQUIA ']);
        DB::table('departamentos')->insert(['code' => 8,  'name' => 'ATLÁNTICO ']);
        DB::table('departamentos')->insert(['code' => 9,  'name' => 'BARRANQUILLA D.E']);
        DB::table('departamentos')->insert(['code' => 11, 'name' => 'SANTA FE DE BOGOTÁ D.C.']);
        DB::table('departamentos')->insert(['code' => 13, 'name' => 'BOLÍVAR ']);
        DB::table('departamentos')->insert(['code' => 14, 'name' => 'CARTAGENA D.E.']);
        DB::table('departamentos')->insert(['code' => 15, 'name' => 'BOYACA ']);
        DB::table('departamentos')->insert(['code' => 17, 'name' => 'CALDAS ']);
        DB::table('departamentos')->insert(['code' => 18, 'name' => 'CAQUETÁ ']);
        DB::table('departamentos')->insert(['code' => 19, 'name' => 'CAUCA ']);
        DB::table('departamentos')->insert(['code' => 20, 'name' => 'CESAR ']);
        DB::table('departamentos')->insert(['code' => 23, 'name' => 'CÓRDOVA ']);
        DB::table('departamentos')->insert(['code' => 25, 'name' => 'CUNDINAMARCA ']);
        DB::table('departamentos')->insert(['code' => 27, 'name' => 'CHOCÓ ']);
        DB::table('departamentos')->insert(['code' => 41, 'name' => 'HUILA ']);
        DB::table('departamentos')->insert(['code' => 44, 'name' => 'LA GUAJIRA']);
        DB::table('departamentos')->insert(['code' => 47, 'name' => 'MAGDALENA']);
        DB::table('departamentos')->insert(['code' => 48, 'name' => 'SANTAMARTA D.E']);
        DB::table('departamentos')->insert(['code' => 50, 'name' => 'META']);
        DB::table('departamentos')->insert(['code' => 52, 'name' => 'NARIÑO']);
        DB::table('departamentos')->insert(['code' => 54, 'name' => 'NORTE DE SANTANDER']);
        DB::table('departamentos')->insert(['code' => 63, 'name' => 'QUINDIO']);
        DB::table('departamentos')->insert(['code' => 66, 'name' => 'RISARALDA']);
        DB::table('departamentos')->insert(['code' => 68, 'name' => 'SANTANDER']);
        DB::table('departamentos')->insert(['code' => 70, 'name' => 'SUCRE']);
        DB::table('departamentos')->insert(['code' => 73, 'name' => 'TOLIMA']);
        DB::table('departamentos')->insert(['code' => 76, 'name' => 'VALLE']);
        DB::table('departamentos')->insert(['code' => 81, 'name' => 'ARAUCA']);
        DB::table('departamentos')->insert(['code' => 85, 'name' => 'CASANARE']);
        DB::table('departamentos')->insert(['code' => 86, 'name' => 'PUTUMAYO']);
        DB::table('departamentos')->insert(['code' => 88, 'name' => 'SAN ANDRÉS']);
        DB::table('departamentos')->insert(['code' => 91, 'name' => 'AMAZONAS']);
        DB::table('departamentos')->insert(['code' => 94, 'name' => 'GUAINÍA']);
        DB::table('departamentos')->insert(['code' => 95, 'name' => 'GUAVIARE']);
        DB::table('departamentos')->insert(['code' => 97, 'name' => 'VAUPÉS']);
        DB::table('departamentos')->insert(['code' => 99, 'name' => 'VICHADA']);
    }
}
