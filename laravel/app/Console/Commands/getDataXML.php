<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;


class getDataXML extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:getDataXML {urls}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $urls = $this->argument('urls');
        $xml = simplexml_load_file($urls);

        foreach($xml->channel->item as $item){
            DB::table('posts')->insert([
                'title'     => $item->title,
                'link'      => $item->link,
                'category'  => $item->category
            ]); 
        }
    }
}
