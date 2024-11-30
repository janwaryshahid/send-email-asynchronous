<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $data;
    public function __construct($data)
    {
        $this->data =$data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            \Mail::send('emails.test', $this->data, function ($message) {
                
                $message->to($this->data['email']);
                $message->subject('asynchronous email');
            });
            Log::info("Email sent to: {$this->email}");
        } catch (\Exception $e) {
            Log::error("Error sending email: {$e->getMessage()}");
        }    
        
    }
}
