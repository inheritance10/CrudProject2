<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class course extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')
            ->insert([
               [
                   'courseTitle'=>'js',
                   'courseName'=>'JSJS',
                   'courseContent'=>'JAVASCRIPT'
               ],
                [
                    'courseTitle'=>'js',
                    'courseName'=>'JSJS',
                    'courseContent'=>'JAVASCRIPT'
                ],
            ]);
    }
}
