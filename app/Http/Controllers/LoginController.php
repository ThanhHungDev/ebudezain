<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Http\Requests\VALIDATE_ADMIN_LOGIN;


class LoginController extends Controller
{
    private $LOGIN_ADMIN_SUCCESS = 'LOGIN_ADMIN_SUCCESS';
    private $LOGIN_CLIENT_SUCCESS = 'LOGIN_CLIENT_SUCCESS';
    private $LOGIN_ERROR = 'LOGIN_ERROR';

    public function getLogin(){
        if (Auth::check()){

            return redirect()->route('ADMIN_DASHBOARD');
        }
        return view('admin.login');
    }
    public function postLogin(VALIDATE_ADMIN_LOGIN $request){
        
        $dataLogin = array(
            'email' => strtolower($request->input('email')), 
            'password' => $request->input('password') 
        );
        /// luôn ghi nhớ password trong session
        if (Auth::attempt( $dataLogin, true ))
        {
            ///login thành công
            if (Gate::allows('IS_ADMIN')) {
                $request->session()->flash($this->LOGIN_ADMIN_SUCCESS, true);
                return redirect()->route("ADMIN_DASHBOARD");
            }else {
                $request->session()->flash($this->LOGIN_CLIENT_SUCCESS, true);
                return redirect()->route("CLIENT_HOME");
            }
        }else {
            return redirect()->back()->with($this->LOGIN_ERROR, 'đăng nhập thất bại!!! ');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('ADMIN_LOGIN');
    }
    public function get_register(){
        return view('register');
    }
    public function post_register(Request $request){
        ///lấy model user -> add new
        $rules = [
            'email' =>'required|email',
            'password' => 'required|confirmed|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'password.confirmed' => 'xác nhận mật khẩu chưa chính xác'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = new User();
            $user->name = $request->input('username');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->idQuyen = 2;
            try{
                $create = $user->save();
            }catch (\Exception $e){
                return redirect()->back()->with('errors_register', 1);
            }
        }
    }
}
