<?php

use App\Models\Story;
use Illuminate\Database\Seeder;

class storyseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include base_path().'/database/seeds/thatslife.php';
        $storys = $story;
        DB::table('story')->delete();
        foreach($storys as $s){
            Story::create($s);
        }
    }
}
