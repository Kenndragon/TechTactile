<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
           
            [
                'name'=>'VortexSeries GT65',
                "price"=>"950000",
                "description"=>"VortexSeries GT65 merupakan mechanical keyboard yang sudah Full Hotswappable Universal 5 Pin Switch South Facing PCB. Keyboard ini sudah dilengkapi gasket mount dan sudah memiliki 3 jenis koneksi, yaitu bluetooth 5.0, wireless dongle 2.4GHz, dan kabel.",
                "brand"=>"VortexSeries",
                "gallery"=>"https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//98/MTA-82963420/vortex_vortex_series_gt65_-_gt-65_rgb_hotswap_wireless_mechanical_keyboard_full08_u3e4llfe.jpg"
            ],
            [
                'name'=>'Logitech G512 Keyboard Gaming',
                "price"=>"1350000",
                "description"=>"G512 adalah gaming keyboard berkinerja tinggi yang dilengkapi pilihan switch mechanical GX terbaik. Teknologi gaming terbaik dan bodi aluminum-alloy menjadikan G512 sebagai keyboard yang sederhana, awet, dan berfitur lengkap.",
                "brand"=>"Logitech",
                "gallery"=>"https://resource.logitechg.com/w_692,c_lpad,ar_4:3,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/non-braid/flying-v-mx-g512/g512-keyboard-gallery-2-2x-nb.png?v=1"
            ],
            [
                'name'=>'Razer BlackWidow V3',
                "price"=>"1500000",
                "description"=>"Razer BlackWidow Elite adalah keyboard gaming yang dirancang untuk performa prima, dilengkapi Razer Mechanical Switches untuk aktuasi lebih cepat, dan masa pakai 80 juta penekanan tombol yang tahan lama.",
                "brand"=>"Razer",
                "gallery"=>"https://dl.razerzone.com/src/3828-1-EN-v1.png"
            ],
            [
                'name'=>'Noir N1 Pro',
                "price"=>"1200000",
                "description"=>"Noir N1 Pro dirancang dengan tata letak 68 tombol, kesederhanaan di tangan Anda. Menggunakan switch dari Gateron, memberikan rasa nyaman setiap kali Anda mengetik atau bermain game, memberi Anda suasana dan suasana hati yang membuat Anda merasa nyaman.",
                "brand"=>"Noir",
                "gallery"=>"https://www.noirgear.com/cdn/shop/files/N1Pro_Grey_1_1024x1024@2x.jpg?v=1691638521"
            ],
            [
                'name'=>'VOYAGER68 Lightyear Edition',
                "price"=>"1000000",
                "description"=>"VOYAGER68 Lightyear Edition CNC Aluminium Keyboard Mekanik south facing PCB. Terinspirasi oleh estetika ruang retro tahun 80an dan 90an, keycaps berdesain orisinal oleh Press Play, dan body berkualitas tertinggi serta dibuat dalam keyboard mekanis.",
                "brand"=>"Press Play",
                "gallery"=>"https://thumbor.sirclocdn.com/unsafe/900x/filters:quality(90):format(webp)/https://storage.googleapis.com/sirclo-prod-storefront/products/a025db5f-9ce9-466f-9054-e1809f6ab757-photo-4-1.jpg"
                ],
            [
                'name'=>'Keychron K8',
                "price"=>"1600000",
                "description"=>"Keychron K8 adalah keyboard mekanis nirkabel tenkeyless (TKL) serbaguna dengan opsi hot-swappable. K8 dapat dihubungkan melalui Bluetooth 5.1 terbaru dengan maksimal 3 perangkat. Koneksi kabel USB Type-c juga tersedia.",
                "brand"=>"Keychron",
                "gallery"=>"https://techjioblog.com/wp-content/uploads/2020/08/Keychron-K8_cover.jpg"
            ]
        ]);
    }
}
