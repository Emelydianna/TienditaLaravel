<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre'=>'Andrea Michelle',
            'edad'=>20,
            'categoria'=> 1,
            'created_at'=>Carbon::now()
            ],[
            'nombre'=>'Michelle Sarai',
            'edad'=>18,
            'categoria'=> 1,
            'created_at'=>Carbon::now()
            ],[
            'nombre'=>'Emely Diana',
            'edad'=>18,
            'categoria'=> 2,
                'created_at'=>Carbon::now()
            ],[
            'nombre'=>'Victor Andres',
            'edad'=>25,
            'categoria'=> 2,
                'created_at'=>Carbon::now()
            ],[
                'nombre'=>'Hector Eduardo',
                'edad'=>35,
                'categoria'=> 3,
                    'created_at'=>Carbon::now()
            ],
            [
                'nombre'=>'Jonathan Heriberto',
                'edad'=>15,
                'categoria'=> 3,
                    'created_at'=>Carbon::now()
            ],
            [
                'nombre'=>'Cristian Alexander',
                'edad'=>18,
                'categoria'=> 3,
                    'created_at'=>Carbon::now()
            ],
            [
                'nombre'=>'Elias Enrique',
                'edad'=>27,
                'categoria'=> 4,
                    'created_at'=>Carbon::now()
            ],
            [
                'nombre'=>'Kimberly Calderon',
                'edad'=>20,
                'categoria'=> 4,
                    'created_at'=>Carbon::now()
            ],[
                'nombre'=>'Alisson Gabriela',
                'edad'=>20,
                'categoria'=> 4,
                    'created_at'=>Carbon::now()
            ],[
                'nombre'=>'Brenda Isela',
                'edad'=>45,
                'categoria'=> 4,
                    'created_at'=>Carbon::now()
            ],[
                'nombre'=>'Kevin Samuel',
                'edad'=>35,
                'categoria'=> 4,
                    'created_at'=>Carbon::now()
                    ]
        );
        DB::table('clientes')->insert($data);
    }
}
