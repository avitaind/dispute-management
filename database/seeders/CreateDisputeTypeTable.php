<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Database\Seeder;

class CreateDisputeTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            [
               'name'=>'Accounts',
               'desc' => 'This is a demo type',
               
            ],
            [
                'name'=>'Finance',
                'desc' => 'This is a demo type',
                
             ],
        ];
        

        foreach ($type as $key => $value) {
            Type::create($value);
        }
    }


}
