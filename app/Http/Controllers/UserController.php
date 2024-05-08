<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Social; //sử dụng model Social
use App\Models\Login; //sử dụng model Login

class UserController extends Controller
{
    public function show(){
        return view('users.register');
    }

    public function homeuser(){
        return view('users.homeuser');
    }
    public function homeorder(){
        return view('users.homeorder');
    }
    

    public function store(Request $request){
        if ($request->isMethod('post')){
            $validator = Validator::make($request->all(),[
                'name'=>'required',
                //'password'=>'required|confirmed|min:8|max:30',
                'email'=>'required|email:rfc,dns',
                'phone'=>'required|numeric|min:10',
                'warehouse_id'=>'required',
                'referral'=>'',
                'type'=>'required',
            ]);
        if ($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $user = DB::table('users')->where('email',$request->email)->first();
        if (!$user){
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->password = $request->password;
            $newUser->email = $request->email;
            $newUser->phone = $request->phone;
            $newUser->warehouse_id = $request->warehouse_id;
            $newUser->referral = $request->referral;
            $newUser->type = $request->type;
            $newUser->save();
            return redirect()->route('users.showlogin')->with('massage', 'bạn đã tạo tài khoản thành công, mời đăng nhập.');
        }else{
            return redirect()->route('users.showlogin')->with('massage', 'tài khoản này đã tồn tại, mời đăng nhập.');
        }
        }
    }

    public function showlogin(){
        return view('users.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:32'],[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email chưa đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu phải ít nhất 6 ký tự',
            'password.max'=>'Mật khẩu không được quá 32 ký tự',

        ]);
        
        $remember = $request->has('remember') ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password],$remember)){
            if(Auth::user()->status!=1){
                return redirect()->route('users.show')->with('massage','Tài khoản này đã bị khoá');
            }
            
                return redirect('/');
            
        }else{
            return redirect()->back()->with('massage','Tài khoản hoặc mật khẩu chưa đúng!');
        }

    }

    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
            //login in vao trang quan tri  
            $account_name = Login::where('id',$account->user)->first();
            Session::put('name',$account_name->name);
            Session::put('id',$account_name->id);
            return redirect('/')->with('message', 'Đăng nhập thành công');
        }else{

            $truon = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Login::where('email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Login::create([
                    'name' => $provider->getName(),
                    'email' => $provider->getEmail(),
                    'password' => '',
                    'phone' => '',
                    'warehouse' => '',
                    'type' => '',
                    

                ]);
            }
            $truon->login()->associate($orang);
            $truon->save();

            $account_name = Login::where('user_id',$account->user)->first();

            Session::put('user_login',$account_name->user_name);
             Session::put('user_id',$account_name->user_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        } 
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function dashboard(){
        return view('users.dashboard');
    }

    public function addorder(){
        return view('users.addorder');
    }

    public function edit_user($id){
        $edit_user = DB::table('users')->where('id', $id)->get();
        $manager_user = view('users.edituser')->with('edit_user',$edit_user);
        return view('users.homeuser')->with('users.edituser',$manager_user);
    }

    public function update_user(Request $request,$id){
        $data = array();
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;
        $data['province'] = $request->province;
        $data['district'] = $request->district;
        $data['shippingtype'] = $request->type;
        Session::put('message','Cập nhật thành công!');
        DB::table('users')->where('id',$id)->update($data);
        return Redirect::to('edit-user-'.$id);
    }
    public function chose_warehouse1($id){
        DB::table('users')->where('id',$id)->update(['warehouse_id'=>1]);
        return Redirect::to('/user-dat-hang');
    }
    public function chose_warehouse2($id){
        DB::table('users')->where('id',$id)->update(['warehouse_id'=>2]);
        return Redirect::to('/user-dat-hang');
    }
    public function chose_warehouse3($id){
        DB::table('users')->where('id',$id)->update(['warehouse_id'=>3]);
        return Redirect::to('/user-dat-hang');
    }
    public function chose_warehouse4($id){
        DB::table('users')->where('id',$id)->update(['warehouse_id'=>4]);
        return Redirect::to('/user-dat-hang');
    }

}


