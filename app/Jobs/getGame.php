<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class getGame implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $param;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($param = '')
    {
        $this->param = $param;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $url = 'https://apps.bytesfield.com/customer/api/app/package?package_name='.$this->param;
        $response = Http::get($url);
    }
}
