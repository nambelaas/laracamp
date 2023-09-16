<?php

namespace Database\Seeders;

use App\Models\Camps;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                "title" => "Gila Belajar",
                "slug" => "gila-belajar",
                "price" => 280,
                "created_at" => date('Y-m-d', time()),
                "updated_at" => date('Y-m-d H:i:s', time()),
            ],
            [
                "title" => "Baru Mulai",
                "slug" => "baru-mulai",
                "price" => 140,
                "created_at" => date('Y-m-d', time()),
                "updated_at" => date('Y-m-d H:i:s', time()),
            ],
        ];

        // Notes: Jika ingin menggunakan create bisa hapus created_at & updated_at pada isi data
        foreach ($camps as $key => $camp) {
            Camps::create($camp);
        }
    }
}
