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
                'photo' => 'kolam_renang.jpg',
            ],
            [
                'name' => 'GKU',
                'slug' => 'gku',
                'description' => 'Gedung perkuliahan "GKU" menyediakan fasilitas kelas yang dapat disewa untuk berbagai keperluan.
                Setiap kelas didesain dengan perhatian khusus untuk menciptakan lingkungan belajar yang optimal.
                Fasilitas modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif, tersedia untuk mendukung
                kegiatan pembelajaran yang efektif.',
                'photo' => 'ruang_pertemuan.jpg',
            ],
            [
                'name' => 'Gedung Damar',
                'slug' => 'gedung-damar',
                'description' => 'Gedung perkuliahan "Damar" menyediakan fasilitas kelas yang dapat disewa untuk berbagai keperluan.
                Setiap kelas didesain dengan perhatian khusus untuk menciptakan lingkungan belajar yang optimal.
                Fasilitas modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif, tersedia untuk mendukung
                kegiatan pembelajaran yang efektif.',
                'photo' => 'ruang_pertemuan.jpg',
            ],
            [
                'name' => 'Lapangan Tennis',
                'slug' => 'lapangan-tenis',
                'description' => 'Lapangan tennis universitas adalah fasilitas olahraga yang luar biasa dan dapat dijadikan tempat yang ideal untuk berbagai kegiatan yang melibatkan aktivitas fisik dan rekreasi.
                Lapangan tennis di universitas kami memiliki ciri khas yang membuatnya menjadi pilihan yang tepat untuk disewa.',
                'photo' => 'ruang_pertemuan.jpg',
            ],
            [
                'name' => 'Lapangan Basket',
                'slug' => 'lapangan-basket',
                'description' => 'Lapangan basket universitas kami adalah tempat yang dinamis dan energik yang dapat disewa untuk berbagai kegiatan.
                Dirancang untuk memenuhi standar tertinggi, lapangan basket ini menjadi pilihan ideal untuk melibatkan komunitas dalam olahraga, rekreasi,
                dan kegiatan sosial.',
                'photo' => 'ruang_pertemuan.jpg',
            ],
        ];
        DB::table('facilities')->insert($facilities);
    }
}
