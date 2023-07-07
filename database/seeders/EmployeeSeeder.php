<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('employees')->insert([
        //     [
        //         'firstname' => 'Dia Ayu',
        //         'lastname' => 'Wulansari',
        //         'email'=> 'diaayuwulansari@gamil.com',
        //         'age' => 20,
        //         'position_id' => 1
        //     ],

        //     [
        //         'firstname' => 'Rifqi',
        //         'lastname' => 'Abiyya ',
        //         'email'=> 'rifqiabiyya@gmail.com',
        //         'age' => 21,
        //         'position_id' => 2
        //     ],

        //     [
        //         'firstname' => 'Shakila',
        //         'lastname' => 'Orlin',
        //         'email'=> 'shakilaorlin@gmail.com',
        //         'age' => 21,
        //         'position_id' => 3
        //     ],
        // ]);

        Employee::factory()->count(10)->create();
    }
}

?>