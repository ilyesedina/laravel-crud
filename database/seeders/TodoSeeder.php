<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = new \App\Models\Todo([
            'name' => 'Todo #1',
            'detail' => 'Todo #1 details'
        ]);
        $todo->save();


        $todo = new \App\Models\Todo([
            'name' => 'Todo #2',
            'detail' => 'Todo #2 details'
        ]);
        $todo->save();


        $todo = new \App\Models\Todo([
            'name' => 'Todo #3',
            'detail' => 'Todo #3 details'
        ]);
        $todo->save();


        $todo = new \App\Models\Todo([
            'name' => 'Todo #4',
            'detail' => 'Todo #4 details'
        ]);
        $todo->save();


        $todo = new \App\Models\Todo([
            'name' => 'Todo #5',
            'detail' => 'Todo #5 details'
        ]);
        $todo->save();


        $todo = new \App\Models\Todo([
            'name' => 'Todo #6',
            'detail' => 'Todo #6 details'
        ]);
        $todo->save();


        $todo = new \App\Models\Todo([
            'name' => 'Todo #7',
            'detail' => 'Todo #7 details'
        ]);
        $todo->save();
    }
}
