<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type ;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_types=[
            'PHP',
            'JS',  
            'VUE', 
            'Laravel', 
            'HTML', 
            'CSS', 

        ];

        foreach ($_types as $_type) {
            $type = new Type();
            $type->lable = $_type;
            $type->save();

    };
}
}