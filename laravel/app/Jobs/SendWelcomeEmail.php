<?php
namespace App\Jobs;
use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        // Mail::to($this->user->email)->send(new WelcomeMail($this->user));

    try {
        Mail::to($this->user->email)->send(new WelcomeMail($this->user));
        Log::info("SendWelcomeEmail Job Completed Successfully for User ID: " . $this->user->id);
    } catch (\Exception $e) {
        Log::error("Error Sending Email: " . $e->getMessage());
    }
    }
}