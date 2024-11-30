<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Queue;
class HomeController extends Controller
{
  
    public function send_email()
    {
        $data=[
                'email'=>'youremail@example.com',
                'name'=>'your name here'
        ];
        try {
                dispatch(new SendEmailJob($data));
        
            return response()->json(['message' => 'Email dispatch has been triggered!']);
        } catch (\Exception $ex) {
            // If there's an exception, return the error message
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
    

}
