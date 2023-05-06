<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
        	[
	        	'titulo' => 'Harry Potter',
	        	'descripcion' => 'Serie de novelas fantasticas J K Rowling'
        	],
        	[
        		'titulo' => 'Spider Man',
				'descripcion' => 'Es un personaje creado por Stan Lee y Steve Ditko'
        	],
        ]);
    }
}
