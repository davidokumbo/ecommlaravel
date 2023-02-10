<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "LG mobile",
            "price" => "200",
            "description" => "A smartphone with 4gb ram with much more features",
            "category" => "mobile",
            "gallary"=>"https://images.unsplash.com/photo-1559650656-5d1d361ad10e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=348&q=80"
            ],
            [
                "name" => "smart tv",
            "price" => "300",
            "description" => "A smartphone with 4gb ram with much more features",
            "category" => "mobile",
            "gallary"=>"https://media.gettyimages.com/id/471392499/photo/blue-screen-on-flat-hd-tv-with-remote-control.jpg?s=612x612&w=gi&k=20&c=s_6gGv7KkXxDuwhdQnPKHeSVaaDnj0Cs4kyz4vM1Nz8="
            ],
            [
                "name" => "solar",
            "price" => "250",
            "description" => "A smartphone with 4gb ram with much more features",
            "category" => "mobile",
            "gallary"=>"https://images.unsplash.com/photo-1521618755572-156ae0cdd74d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80"
            ],
            [
                "name" => "nokia mobile",
            "price" => "270",
            "description" => "A smartphone with 4gb ram with much more features",
            "category" => "mobile",
            "gallary"=>"https://images.unsplash.com/photo-1580910051074-3eb694886505?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80"
            ]

        ]);
    }
}
