<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
use Session;
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

    //admin login
    public function adminlogin(){
        return view('admin.login');
    }

       //admin dashboard
       public function admindashboard(){
        return view('admin.dashboard');
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
    //thank you page
    public function thankyou(){
        return view('thankyou');
    }

    //registered applicants
    public function registered(){
        return view('admin.registered')->with('allusers',User::orderBy('created_at','DESC')->get());
    }

    //save email

    public function confirmemailsave(Request $request){
        $this->validate($request,[
            
             'email' => ['required','string','email']
             
           //   'recaptcha' => ['required']
          ]);
          $useremail = User::where('email', $request->email)->first();
         if ($useremail != null) {
            //return back()->with('error', 'Sorry Invalid Recaptcha Code');
            $request->session()->flash('error', 'Error! Email already exist');
            return view('confirmemail');

        }else {
               User::create([
               
               'email' => $request->email,
               'ver_code' => verificationCode(6),
               'ver_code_send_at' => Carbon::now(),
            
               'status' => '0'

           ]);
           Session::put('email', $request->email);
           $user = session()->get('email');
            $useremail = User::where('email', $user)->first();
                 
           $code = $useremail->ver_code;
           $to_name = $request->email;
           $to_email = $request->email;
           $data = array('name'=>'$code (sender_name)', "body" => $code);
           Mail::send('mailsend.mail', $data, function($message) use($to_name, $to_email) {
           $message->to($to_email, $to_name)->subject('POWERHOUSE Email Verification Code');
           $message->from('***@goalprime.org','Verification Code');
           });

          return view('resendconfirmemail');
  
          }




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
        $user = session()->get('email');
        if ($user) {
            $useremail = User::where('email', $user)->first();
        } else {
            $useremail = null;
        }
        $request->validate([
            'code'=>'required'
        ]);

       // $user2 = auth()->user();
       //$useremail->ver_code 
        if ( $useremail->ver_code == $request->code) {
          /*  $useremail->ev = 1;
            $useremail->ver_code = null;
            $useremail->ver_code_send_at = null;
            $useremail->save();*/
            return view('registration'); 
        }
        $request->session()->flash('success', 'Error! Code not correct');
       return view('resendconfirmemail')->with('success', 'Code not correct');
        //return view('esendconfirmemailr');
    }

    public function registrationsave(Request $request)
    {
        $user = session()->get('email');
        if ($user) {
            $useremail = User::where('email', $user)->first();
        } else {
            $useremail = null;
        }
        $request->validate([
            'fname'=>'required',
            'lname'=>'required'
        ]);

      
            $useremail->fname = $request->fname;
            $useremail->lname = $request->fname;
            $useremail->othername = $request->othername;
            $useremail->nickname = $request->nickname;
            $useremail->gender = $request->gender;
            $useremail->phone = $request->phone;
            $useremail->country = $request->country;
            $useremail->state = $request->state;
            $useremail->lga = $request->lga;
            $useremail->occupation = $request->dobirth;
            $useremail->relationship = $request->relationship;
            $useremail->dobirth = $request->dobirth;
            $useremail->noking = $request->noking;
            $useremail->bio = $request->bio;
            $useremail->identification = $request->identifiation;
            $useremail->id_upload = $request->id_upload;
            $useremail->video_upload = $request->video_upload;
            $useremail->status = 1;
            $useremail->save();
      
        //$request->session()->flash('success', 'Error! Code not correct');
       return view('thankyou')->with('success', 'Completed');
        //return view('esendconfirmemailr');
    }

    public function logout(){
      //  HomepageController::logout();
        Session::flush();
        return to_route('instruction'); 
    }
}
