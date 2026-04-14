<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;
use App\Models\destination as ModelsDestination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' =>"Asia Heritage",
            'description' =>"Asia Heritage adalah destinasi wisata tematik populer di Rumbai, Pekanbaru, Riau, yang menawarkan pengalaman keliling 4 negara Asia (Jepang, Korea, Cina, Indonesia)",
            'location'=>"Jl. Yos Sudarso No.KM.12, RW.05, Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau, Indonesia.",
            'working_days' =>"ALL DAYS",
            'working_hours' =>"07.00Am-10.00Pm",
            'ticket_price' =>"30000",
        ]);

         Destination::create([
            'name' =>"Puncak Anai",
            'description' =>"Puncak Anai (sering disebut Dempo Anailand) adalah objek wisata alam dan keluarga di Padang Pariaman, Sumatera Barat, berlokasi di kaki Gunung Tandikat pada ketinggian >>",
            'location'=>"Jalan Raya Padang - Bukittinggi.",
            'working_days' =>"ALL DAYS",
            'working_hours' =>"08.00Am-18.00Pm",
            'ticket_price' =>"15000",
        ]);

         Destination::create([
            'name' =>"Banda Neira",
            'description' =>"Banda Neira adalah pulau bersejarah di Kepulauan Banda, Maluku Tengah, yang terkenal sebagai pusat perdagangan pala dunia pada masa kolonial, surga selam, dan tempat pengasingan tokoh nasional seperti Hatta. Tempat ini menawarkan perpaduan pemandangan alam memukau (Gunung Api Banda) dan situs bersejarah seperti Benteng Belgica.",
            'location'=>"Terletak di Kecamatan Banda, Kabupaten Maluku Tengah, Provinsi Maluku",
            'working_days' =>"WEEKDAY",
            'working_hours' =>"24",
            'ticket_price' =>"8000000",
        ]);

         Destination::create([
            'name' =>"Raja Ampat",
            'description' =>"Raja Ampat adalah kabupaten kepulauan di Papua Barat Daya, Indonesia, yang terkenal sebagai pusat keanekaragaman hayati laut terkaya di dunia. Sering dijuluki Surga Bawah Laut Dunia atau Surga Tersembunyi, kawasan ini mencakup ribuan pulau, terutama Misool, Salawati, Batanta, dan Waigeo. Terkenal untuk wisata menyelam, snorkeling, dan keindahan gugusan pulau karang.>",
            'location'=>"Provinsi Papua Barat Daya, Indonesia.",
            'working_days' =>"ALL DAYS",
            'working_hours' =>"10.00am-17.00am",
            'ticket_price' =>"300000",
        ]);

         Destination::create([
            'name' =>"Pulau Komodo",
            'description' =>"Pulau Komodo, bagian dari Taman Nasional Komodo di Nusa Tenggara Timur, merupakan situs warisan dunia UNESCO dan habitat asli kadal terbesar di dunia, komodo (Varanus komodoensis). Destinasi ikonik ini menawarkan trekking melihat komodo, pemandangan sabana, serta wisata bahari ke Pink Beach dan tempat menyelam berkelas dunia.",
            'location'=>"Kabupaten Manggarai Barat, NTT",
            'working_days' =>"ALL DAYS",
            'working_hours' =>"06.00am-18.00pm",
            'ticket_price' =>"250000",
        ]);

         Destination::create([
            'name' =>"Candi Borobudur",
            'description' =>"Candi Buddha terbesar di dunia dan warisan UNESCO dengan relief bersejarah>",
            'location'=>"Magelang, Jawa Tengah",
            'working_days' =>"ALL DAYS",
            'working_hours' =>"06.30pm-17.00pm",
            'ticket_price' =>"75000",
        ]);

         Destination::create([
            'name' =>"Kawah Putih",
            'description' =>"Danau kawah dengan warna air unik putih kehijauan",
            'location'=>"Ciwidey, Jawa Barat",
            'working_days' =>"ALL DAYS",
            'working_hours' =>"07.00 – 17.00",
            'ticket_price' =>"30000",
        ]);

        for ($i = 0; $i <= 1; $i++) {
            Destination::create([
                'name' => fake("id_ID")->name(),
                'description' =>fake("id_ID")->sentence(),
                'location' =>fake("id_ID")->address().",Pekanbaru,Riau",
                'working_days' =>"Everday",
                'working_hours' =>"8 am - 5pm",
                'ticket_price' => rand(10000, 50000),
            ]);
        }
    }
}
