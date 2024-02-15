<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\User;
use Carbon\Carbon;

class HomepageController extends Controller
{
    //
    public function home(){
        return view('home')->with('galleries',Gallery::all());
    }

    //
    public function instruction(){
        return view('instruction');
    }
    //
    public function registration(){
        return view('registration');
    }
    //
    public function confirmemail(){
        return view('confirmemail');
    }
    //
    public function resendconfirmemail(){
        return view('resendconfirmemail');
    }
    public function thankyou(){
        return view('thankyou');
    }

    //save email

    public function confirmemailsave(Request $request){
        $this->validate($request,[
            
             'email' => ['required','string','email']
             
           //   'recaptcha' => ['required']
          ]);
         // if ($request->hiddenrecaptcha != $request->recaptcha) {
          //    return back()->with('error', 'Sorry Invalid Recaptcha Code');
        //  }else {
               User::create([
               
               'email' => $request->email,
               'ver_code' => verificationCode(6),
               'ver_code_send_at' => Carbon::now(),
            
               'status' => '0'

           ]);
         /*  $message = $request->name." just Volunteer via the Website";
             Mail::send('mailsend.mail',[
          'msg' => $message
          ],function($sendvolun)use($request){
             $sendvolun->from($request->email,$request->name);
             $sendvolun->to('info@goalprime.org');
             $sendvolun->subject('New Volunteer');
          }); */
  
          
          return view('resendconfirmemail');
  
         // }




         /*
protected function checkCodeValidity($user,$addMin = 2)
    {
        if (!$user->ver_code_send_at){
            return false;
        }
        if ($user->ver_code_send_at->addMinutes($addMin) < Carbon::now()) {
            return false;
        }
        return true;
    }

    public function authorizeForm()
    {
        $user = auth()->user();
        if (!$user->status) {
            $pageTitle = 'Banned';
            $type = 'ban';
        }elseif(!$user->ev) {
            $type = 'email';
            $pageTitle = 'Verify Email';
            $notifyTemplate = 'EVER_CODE';
        }elseif (!$user->sv) {
            $type = 'sms';
            $pageTitle = 'Verify Mobile Number';
            $notifyTemplate = 'SVER_CODE';
        }elseif (!$user->tv) {
            $pageTitle = '2FA Verification';
            $type = '2fa';
        }else{
            return to_route('user.home');
        }

        if (!$this->checkCodeValidity($user) && ($type != '2fa') && ($type != 'ban')) {
            $user->ver_code = verificationCode(6);
            $user->ver_code_send_at = Carbon::now();
            $user->save();
            notify($user, $notifyTemplate, [
                'code' => $user->ver_code
            ],[$type]);
        }

        return view($this->activeTemplate.'user.auth.authorization.'.$type, compact('user', 'pageTitle'));

    }

    public function sendVerifyCode($type)
    {
        $user = auth()->user();

        if ($this->checkCodeValidity($user)) {
            $targetTime = $user->ver_code_send_at->addMinutes(2)->timestamp;
            $delay = $targetTime - time();
            throw ValidationException::withMessages(['resend' => 'Please try after ' . $delay . ' seconds']);
        }

        $user->ver_code = verificationCode(6);
        $user->ver_code_send_at = Carbon::now();
        $user->save();

        if ($type == 'email') {
            $type = 'email';
            $notifyTemplate = 'EVER_CODE';
        } else {
            $type = 'sms';
            $notifyTemplate = 'SVER_CODE';
        }

        notify($user, $notifyTemplate, [
            'code' => $user->ver_code
        ],[$type]);

        $notify[] = ['success', 'Verification code sent successfully'];
        return back()->withNotify($notify);
    }

    public function emailVerification(Request $request)
    {
        $request->validate([
            'code'=>'required'
        ]);

        $user = auth()->user();

        if ($user->ver_code == $request->code) {
            $user->ev = 1;
            $user->ver_code = null;
            $user->ver_code_send_at = null;
            $user->save();
            return to_route('user.home');
        }
        throw ValidationException::withMessages(['code' => 'Verification code didn\'t match!']);
    }


         */
    }

    public function emailVerification(Request $request)
    {
        $request->validate([
            'code'=>'required'
        ]);

        $user = auth()->user();

        if ($user->ver_code == $request->code) {
            $user->ev = 1;
            $user->ver_code = null;
            $user->ver_code_send_at = null;
            $user->save();
            return to_route('user.home');
        }
        throw ValidationException::withMessages(['code' => 'Verification code didn\'t match!']);
    }
}
