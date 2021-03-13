<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        $conversation = $reply->conversation;
        $this->authorize($conversation);

        $conversation->setBestReply($reply);

        return back();
    }
}
