<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coupons = [
            ['code' => 'SUMMER2020', 'amount' =>'100'],
            ['code' => 'WINTER2020', 'amount' =>'200'],
            ['code' => 'FIRST2020', 'amount' =>'500'],

        ];
            foreach ($coupons as $coupon) {
                Coupon::create($coupon);
            }
       
    }
}
