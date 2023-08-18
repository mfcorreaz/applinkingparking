<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->pluck('id')->toArray();
        $registros = DB::table('registros_entradas_salidas')->pluck('id')->toArray();

        $reviews = [
            [
                'id' => 1,
                'comentario' => 'Excelente servicio',
                'calificacion' => 5,
                'registro_id' => $registros[0],
                'tipo' => 'usuario',
            ],
            [
                'id' => 2,
                'comentario' => 'Muy buen trato',
                'calificacion' => 4,
                'registro_id' => $registros[1],
                'tipo' => 'usuario',
            ],
            
        ];



        DB::table('reviews')->insert($reviews);
    }
}
