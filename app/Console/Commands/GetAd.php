<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetAd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:save-ad';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'save-ad';

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
        $data = \App\Models\GetAd::orderBy('id', 'asc')->where('status', 0)->first();
        \App\Models\AdData::updateOrCreate(['ad_id' => $data->ad_id], $data->toArray());
        \App\Models\GetAd::where('id', $data->id)->update(['status' => 1]);
        return 0;
    }
}
