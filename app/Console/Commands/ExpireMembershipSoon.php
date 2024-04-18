<?php

namespace App\Console\Commands;

use App\Mail\SubscriptionExpiringSoon;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ExpireMembershipSoon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $emails = Subscription::where('expires_at', '>=', now()->rem)->pluck('email');
        $subscriptions = Subscription::with('user')
        ->whereDate('end_date', Carbon::tomorrow())
        ->get();

        $emails = $subscriptions->pluck('user.email');

        foreach ($emails as $email) {
            Mail::to($email)->send(new SubscriptionExpiringSoon($subscriptions->first()));
        }

        $this->info('Membership expiring soon emails sent');


    }
}
