<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Type;

use function PHPSTORM_META\type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['FrontEnd', 'BackEnd', 'Fullstack', 'Design', 'DevOps'];

        foreach($types as $type){
            $newType = new Type();

            $newType->name = $type;
            $newType->slug = Str::slug($newType->name, '-');

            $newType->save();
        }
    }
}
