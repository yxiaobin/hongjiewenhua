<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function  MemberIndex(){
        $members = Member::all();
        $tab = 1;
        return view('Member.index',compact('members','tab'));
    }
    public function  MemberStore(Request $request){
        $this->validate($request,[
            'usr_name'=>'required',
            'name'=>'required|min:4|max:15',
            'password'=>'confirmed|min:4|max:15'
        ]);
        $member = new Member();
        $member->usr_name = $request->input('usr_name');
        $member->name = $request->input('name');
        $member->password = encrypt($request->input('password'));
        $member->save();
        return redirect('member');
    }
    public  function  MemberDelete(Member $id){
        $id->delete();
        return redirect('member');
    }
}
