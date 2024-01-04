<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Facility::factory(10)->create();
        $facilities = [
            [
                'name' => 'TULT',
                'slug' => 'tult',
                'description' => 'Gedung perkuliahan "TULT" merupakan tempat yang ideal untuk berbagai kegiatan akademis dan non-akademis.
                Kelas-kelas di gedung ini dirancang untuk memfasilitasi pembelajaran yang efektif dan suasana yang kondusif.
                Setiap ruangan dilengkapi dengan peralatan modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif.',
                'category_id' => 1,
                'price' => 150000,
                'image' => 'Fasilitas/TULT-1.jpg, Fasilitas/TULT-2.jpg'
            ],
            [
                'name' => 'GKU',
                'slug' => 'gku',
                'description' => 'Gedung perkuliahan "GKU" menyediakan fasilitas kelas yang dapat disewa untuk berbagai keperluan.
                Setiap kelas didesain dengan perhatian khusus untuk menciptakan lingkungan belajar yang optimal.
                Fasilitas modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif, tersedia untuk mendukung
                kegiatan pembelajaran yang efektif.',
                'category_id' => 1,
                'price' => 100000,
                'image' => 'Fasilitas/GKU-1.jpg, Fasilitas/GKU-2.jpg'
            ],
            [
                'name' => 'Gedung Damar',
                'slug' => 'gedung-damar',
                'description' => 'Gedung perkuliahan "Damar" menyediakan fasilitas kelas yang dapat disewa untuk berbagai keperluan.
                Setiap kelas didesain dengan perhatian khusus untuk menciptakan lingkungan belajar yang optimal.
                Fasilitas modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif, tersedia untuk mendukung
                kegiatan pembelajaran yang efektif.',
                'category_id' => 1,
                'price' => 200000,
                'image' => 'Fasilitas/gedung-damar-1.jpg, Fasilitas/gedung-damar-2.jpg'
            ],
            [
                'name' => 'Lapangan Tennis',
                'slug' => 'lapangan-tenis',
                'description' => 'Lapangan tennis universitas adalah fasilitas olahraga yang luar biasa dan dapat dijadikan tempat yang ideal untuk berbagai kegiatan yang melibatkan aktivitas fisik dan rekreasi.
                Lapangan tennis di universitas kami memiliki ciri khas yang membuatnya menjadi pilihan yang tepat untuk disewa.',
                'category_id' => 3,
                'price' => 200000,
                'image' => 'Fasilitas/lapangan-tenis-1.jpg, Fasilitas/lapangan-tenis-2.jpg'
            ],
            [
                'name' => 'Lapangan Basket',
                'slug' => 'lapangan-basket',
                'description' => 'Lapangan basket universitas kami adalah tempat yang dinamis dan energik yang dapat disewa untuk berbagai kegiatan.
                Dirancang untuk memenuhi standar tertinggi, lapangan basket ini menjadi pilihan ideal untuk melibatkan komunitas dalam olahraga, rekreasi,
                dan kegiatan sosial.',
                'category_id' => 3,
                'price' => 150000,
                'image' => 'Fasilitas/lapangan-basket-1.jpg, Fasilitas/lapangan-basket-2.jpg'
            ],
            [
                'name' => 'Gedung Serba Guna (GSG)',
                'slug' => 'gedung-serba-guna',
                'description' => 'Gedung perkuliahan "GSG" merupakan tempat yang ideal untuk berbagai kegiatan akademis dan non-akademis.
                Kelas-kelas di gedung ini dirancang untuk memfasilitasi pembelajaran yang efektif dan suasana yang kondusif.
                Setiap ruangan dilengkapi dengan peralatan modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif.',
                'category_id' => 2,
                'price' => 250000,
                'image' => 'Fasilitas/gedung-serba-guna-1.jpg, Fasilitas/gedung-serba-guna-2.jpg'
            ],
        ];
        DB::table('facilities')->insert($facilities);
    }
}
