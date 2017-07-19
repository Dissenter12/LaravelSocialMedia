<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Friend;
use Auth;

class FriendsController extends Controller
{
    function showFriends(){
    	$friends = User::all();
    	return view('pages/friends', compact('friends'));
    }

    function profileFriend($id){
		$friend = User::find($id);
		return view('pages/user_profile', compact('friend'));
	}

	function myProfile($id){
		$friend = User::find($id);
		$frequests = Friend::where('to',$friend -> email)->get();
		$srequests = Friend::where('from',$friend -> email)->get();
		return view('pages/my_profile', compact('friend','frequests','srequests'));


	}

	function saveNewRequest(Request $request, $id){
		// dd($request);
		$user = User::find($id);
		$new_request = new Friend();
		$new_request->from = Auth::user()->email;
		$new_request->to = $user->email;
		$new_request->status = 'pending';
		// dd($new_request);
		$new_request->save();

		$request->session()->flash('message','Friend request sent!');

		return back();
	}

}