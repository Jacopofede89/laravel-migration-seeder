<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SongSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(AlbumSeeder::class);
    }
}
