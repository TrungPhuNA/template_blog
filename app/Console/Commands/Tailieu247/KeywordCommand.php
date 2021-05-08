<?php

namespace App\Console\Commands\Tailieu247;

use App\Models\Blog\Keyword;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class KeywordCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tailieu247:merge-keyword';

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
     * @return int
     */
    public function handle()
    {
        $keywords = Keyword::all();
        foreach ($keywords as $item) {
            $this->info("[slug: ] " . $item->k_slug);
            try {
                DB::connection('tailieu247')->table('keywords')->insert([
                    'id'            => $item->id,
                    'k_name'        => $item->k_name,
                    'k_slug'        => $item->k_slug,
                    'k_description' => $item->k_description_seo,
                    'created_at'    => $item->created_at
                ]);
            } catch (\Exception $exception) {
                $this->error("-- Error ID ". $item->id);
            }
        }
    }
}
