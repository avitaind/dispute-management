<?php

namespace Database\Seeders;
use App\Models\Company;
use Illuminate\Database\Seeder;

class CreateCompanyTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $company = [
            [
               'name'=>'ABC Pvt Ltd',
               'desc' => 'This is a demo company',
               
            ],
            [
                'name'=>'XYZ Pvt Ltd',
                'desc' => 'This is a demo company',
                
             ],
        ];
        

        foreach ($company as $key => $value) {
            Company::create($value);
        }
    }
}
