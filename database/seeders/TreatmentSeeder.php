<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['ถอนฟัน', 500, 'ถอนฟัน', 'รักษาฟัน', '1'],
            ['รักษารากฟัน', 1000, 'รักษารากฟัน', 'รักษาฟัน', '2'],
            ['อุดฟัน', 700, 'อุดฟัน', 'รักษาฟัน', '3'],
            ['ขูดหินปูน', 600, 'ขูดหินปูน', 'รักษาฟัน', '4'],
        );

        for($i=0; $i<count($data); $i++) {
            DB::table('treatments')->insert([
                'treatment_name' => $data[0],
                'price' => $data[1],
                'description' => $data[2],
                'sub_category' => $data[3],
                'priority' => $data[4],
                'status' => 'active',
                'deleted' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
