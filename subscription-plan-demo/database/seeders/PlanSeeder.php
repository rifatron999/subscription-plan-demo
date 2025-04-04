<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            ['name'=> 'Starter' , 'stripe_plan_id' => 'prod_S4KQDPJ74P2oFb', 'stripe_price_id' => 'price_1RABlYIsfzV02fg1KLx2KziK'],
            ['name'=> 'Company' , 'stripe_plan_id' => 'prod_S4KQg9GUN7kO4A', 'stripe_price_id' => 'price_1RABllIsfzV02fg1vdGNgT1G'],
            ['name'=> 'Enterprise' , 'stripe_plan_id' => 'prod_S4KQu27PXI61CK', 'stripe_price_id' => 'price_1RABm7IsfzV02fg1WeihVnGr'],
            ['name'=> 'Ultra' , 'stripe_plan_id' => 'prod_S4KQu27PXI61CK', 'stripe_price_id' => 'price_1RABm7IsfzV02fg1WeihVnGr']
        ];

        foreach($plans as $plan){
            Plan::create($plan);
        }
    }
}
