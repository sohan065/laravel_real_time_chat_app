<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;
use App\Http\Requests\SendMessageRequest;

class ChatController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendMessage(SendMessageRequest $request)
    {
        $validated = $request->only(['username', 'message']);

        event(new Message($validated['username'], $validated['message']));
    }
}
