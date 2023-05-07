<?php

namespace Database\Seeders;

use App\Models\Coupons;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupons::create([
            "name" => "September Gembira",
            "code" => "SPTZU30",
            "margin" => "30",
            "product_id" => 1
        ]);
        Coupons::create([
            "name" => "Tahun Baru Islam",
            "code" => "TBISZU50",
            "margin" => "50",
            "product_id" => 2
        ]);
    }
}
