<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include base_path().'/database/seeds/thatslife.php';
        $storyss = $admin;
        DB::table('admin')->delete();
        foreach($storyss as $a){
            Admin::create($a);
        }
    }
}
