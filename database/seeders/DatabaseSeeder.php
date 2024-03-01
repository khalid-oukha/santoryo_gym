<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            ManagerSeeder::class,
            CoachSeeder::class,
            CategoriesSeeder::class,
            OfferSeeder::class,
            SubscriptionSeeder::class,
            LessonSeeder::class,
            LessonUserSeeder::class,
            EmployeeSeeder::class,
            TransactionSeeder::class,




        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
