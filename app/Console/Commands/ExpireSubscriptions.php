<?php

namespace App\Console\Commands;

use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ExpireSubscriptions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscriptions:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire subscriptions whose expiry date is today';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Subscription::whereDate('end_date', '<=', today())
            ->update(['status' => 'ended']);
            Log::info('status updated : ' . now());

    }
}
