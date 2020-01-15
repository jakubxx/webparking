<?php
use Illuminate\Database\Seeder;
class ParkingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 Parking
        factory(App\Parking::class, 20)->create();
    }
}
