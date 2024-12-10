<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAccount extends Controller
{
    //form login - get
    public function plmLogin(){
        return view('plm-login');
    }
    //form kogin - post
    public function plmLoginSubmit(Request $request)
    {
        $validation = $request->validation([
            'plmEmail' => 'required|email',
            'plmPass' => 'required|min:6'
        ]);
        $plmEmail = $request->input('plmEmail');
        $plmPass = $request->input('plmPass');
        $plmLoginSession = [
            'plmEmail'=>$plmEmail,
            'plmPass'=>$plmPass
        ];
        
        $plm_json = json_encode($plmLoginSession);
        
        if($plmEmail == 'plm@gmail.com' && $plmPass == '123456a@'){
            $request->session()->put('k23cnt3-phamlemanh',$plmEmail);
            return redirect('/');
        }
        return Redirect()->back()->withErrors(['plm-error' => 'Loi dang nhap']);

}
}