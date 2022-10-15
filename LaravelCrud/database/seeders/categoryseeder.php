<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Category;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'cname' => 'Samsung X',
            'is_active' => 1,
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
        Category::create([
            'cname' => 'Huawey',
            'is_active' => 1,
        ]);

    }
}
