<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title'=>'RSS Solutions for Restaurants','link'=>'http://www.feedforall.com/restaurant.htm','category' => 'Computers/Software/Internet/Site Management/Content Management'],
            ['title'=>'RSS Solutions for Schools and Colleges','link'=>'http://www.feedforall.com/schools.htm','category' => 'Computers/Software/Internet/Site Management/Content Management'],
            ['title'=>'RSS Solutions for Computer Service Companies','link'=>'http://www.feedforall.com/computer-service.htm','category' => 'Computers/Software/Internet/Site Management/Content Management'],
            ['title'=>'RSS Solutions for Governments','link'=>'http://www.feedforall.com/government.htm','category' => 'Computers/Software/Internet/Site Management/Content Management'],
            ['title'=>'RSS Solutions for Politicians','link'=>'http://www.feedforall.com/politics.htm','category' => 'Computers/Software/Internet/Site Management/Content Management']
        ]);
    }
}
