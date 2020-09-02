<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	
        // $m1 = new Student;
        // // mg mg
        // $m1->name = "Mg Mg";
        // $m1->email = "mgmg@gmail.com";
        // $m1->address = "Bahan";
        // $m1->save();

        // $s1 = new Student;
        // // su su
        // $s1->name = "Su Su";
        // $s1->email = "susu@gmail.com";
        // $s1->address = "Latha";
        // $s1->save();

        // $h1 = new Student;
        // // su su
        // $h1->name = "Hla Hla";
        // $h1->email = "hlahla@gmail.com";
        // $h1->address = "Latha";
        // $h1->save();
        factory(App\Student::class,10)->create();
    }
}
