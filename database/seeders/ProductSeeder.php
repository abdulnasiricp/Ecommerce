<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
                "name" => "I phone 14",
                "category" => "Mobile",
                "description" => "Apple Card Monthly Installments (ACMI) is a 0% APR payment option that is only available if you select it at checkout in the U.S. for eligible products ..",
                "price" => "110000",
                "gallery" => "https://www.thenews.com.pk/assets/uploads/updates/2024-04-16/1179049_9816458_1111111111_updates.jpg",

            ],
            [
                "name" => "DELL Leptop",
                "category" => "LEPTOP",
                "description" => "The Dell Inspiron 3583 is a mid-range laptop featuring an 8th generation Intel Core i5 processor and a 15.6-inch HD display. It offers 8GB of DDR4 memory, 256GB SSD of storage, and integrated Intel UHD Graphics 620. The laptop runs on Windows 10 Home (64 bit) and comes with a 42WHr, 3-cell battery. It provides reliable performance and several useful features, but its lower-resolution display may not be suitable for some users.",
                "price" => "75000",
                "gallery" => "https://laptopmall.pk/storage/media/1z6ImW6ORO1mvkEZ9mn1gxKwyn7w2vR3w9pwU1ve.jpg",

            ],
            [
                "name" => "HP Leptop",
                "category" => "LEPTOP",
                "description" => "HP Stream 14 Laptop, Intel Celeron N4000, 4GB SDRAM, 32GB eMMC, Office 365 1 yr, Royal Blue",
                "price" => "85000",
                "gallery" => "https://i5.walmartimages.com/seo/HP-Stream-14-Laptop-Intel-Celeron-N4000-4GB-SDRAM-32GB-eMMC-Office-365-1-yr-Royal-Blue_4f941fe6-0cf3-42af-a06c-7532138492fc_2.cb8e85270e731cb1ef85d431e49f0bf2.jpeg",

            ],
            [
                "name" => "Sony TV",
                "category" => "TV",
                "description" => "https://www.shutterstock.com/search/sony-tv",
                "price" => "100000",
                "gallery" => "https://www.shutterstock.com/search/sony-tv",

            ],
        ]);
    }
}
