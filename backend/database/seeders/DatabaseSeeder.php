<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Policies\UserMediaPolicy;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([UserSeeder::class]);
        $this->call([AboutUsSeeder::class]);
        $this->call([BlogSeeder::class]);
        $this->call([BlogCommentSeeder::class]);
        $this->call([FetishSeeder::class]);
        $this->call([KinkbnbMediaSeeder::class]);
        $this->call([KinkbnbObjectSeeder::class]);
        $this->call([KinkbnbTransactionSeeder::class]);
        $this->call([PartySeeder::class]);
        $this->call([PartyTransactionSeeder::class]);
        $this->call([ShopSeeder::class]);
        $this->call([UserFetishSeeder::class]);
        $this->call([UserMediaSeeder::class]);
        $this->call([UserRelationSeeder::class]);
        $this->call([LanguageSeeder::class]);
    }
}
