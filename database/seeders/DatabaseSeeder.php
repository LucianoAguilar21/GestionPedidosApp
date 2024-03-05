<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Company;
use App\Models\CompanyOrder;
use App\Models\CompanyUser;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Luciano Aguilar',
            'email' => 'lucianodavidaguilar21@gmail.com',
            'password' => Hash::make('123123asd'),
        ]);
        Company::create([
            'name'=> 'Pastas',
            'password'=> Hash::make('123123asd'),
            'created_by'=> '1',
        ]);

        Order::create([
            'description'=> 'canelones pedido',
            'client'=> 'Messi',
            'paid'=>false,
            'status'=> 'new',
            'delivery'=> false,
            'address'=> '',
            'delivery_cost' => null,
            'total'=> 1000,
            'created_by' => 1,
            'company_id' => 1

        ]);

        Product::create([
            'name'=> 'canelones',
            'prize'=> 1000,
            'company_id'=>1
        ]);

        CompanyUser::create([
            'company_id'=> 1,
            'user_id'=>1
        ]);

        CompanyOrder::create([
            'company_id' =>1,
            'order_id'=>1
        ]);

        Comment::create([
            'comment'=>'falta pagar',
            'comment_by'=>1,
            'order_id'=>1,
            'created_at'=>now()
        ]);

        OrderProduct::create([
            'order_id'=>1,
            'product_id'=>1
        ]);
      
    }
}
