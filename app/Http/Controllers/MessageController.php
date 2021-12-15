<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditMessageRequest;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    public function update(EditMessageRequest $request, Message $message): RedirectResponse
    {
        $validatedData = $request->validated();

        $message->update([
            'message' => $validatedData['message'],
        ]);

        return redirect()->back();
    }
}
