<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller {
    public function chat(Request $request, $id=null)
    {
        $messages = [];
        $otherUser = null;
        $user_id = Auth::id();
        if($id){
            $otherUser = User::findOrFail($id);
            $group_id = (Auth::id()>$id)?Auth::id().$id:$id.Auth::id();
            $messages = Chat::where('group_id', $group_id)->get()->toArray();
            Chat::where(['user_id'=>$id,'other_user_id'=>$user_id]);
        }
        $chatLists = User::where('id', '!=', Auth::id())->select('*',DB::raw("(SELECT count(id) from chats where chats.other_user_id=$user_id and chats.user_id=users.id and is_read=0) as unread_messages"))->get()->toArray();
        return view('chat', compact('chatLists', 'messages', 'otherUser', 'id'));
    }
}
