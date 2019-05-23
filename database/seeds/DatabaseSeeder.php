<?php
use Illuminate\Database\Seeder;
use App\Ad;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Ad::class, 11)->create();
    }
}
