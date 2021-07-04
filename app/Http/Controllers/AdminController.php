<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
// thành công hay thất bại dùng redirect
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }
        else{
            return Redirect::to('/admin')->send();
        }
        
    }

    public function admin_login()
    {
        return view('admin.admin_login');
    }
    public function admin_dashboard()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }


    public function dashboard(Request $request)
    {
        // $this->AuthLogin();
        $data = $request->validate([
            //validation laravel 
        'admin_email' => 'required',
        'admin_password' => 'required',

        ]);

        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);
        $login = Admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($login){
                $login_count = $login->count();
                if($login_count>0){
                    session()->put('admin_name',$login->admin_name);
                    session()->put('admin_id',$login->admin_id);
                    return Redirect::to('/dashboard');
                }
            }
            else{
                session()->put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
                return Redirect::to('/admin');
            }
    }
    public function admin_logout(){
        // $this->AuthLogin();
        // session()->put('admin_name',null);
        // session()->put('admin_id',null);
        // session()->put('login_normal',null);
        // return Redirect::to('/admin');
        session()->put('admin_name',null);
        session()->put('admin_id',null);
        return Redirect::to('/admin');
    }

    public function all_admin(){
        $this->AuthLogin();
        $all_admin = Admin::paginate(5);
        return view('admin.all_admin')->with(compact('all_admin'));;
    }

    public function add_admin(){
        $this->AuthLogin();
        $add_admin = Admin::all();
        return view('admin.add_admin')->with(compact('add_admin'));;
    }

    public function insert_admin(){
        $data = request()->validate([
            'admin_name'=>'required',
            'admin_email'=>'required',
            'admin_phone'=>'required',
            'admin_password'=>'required'
        ]);

        $admin_info = new Admin();
        $admin_info->admin_name = $data['admin_name'];
        $admin_info->admin_email = $data['admin_email'];
        $admin_info->admin_phone = $data['admin_phone'];
        $admin_info->admin_password = md5($data['admin_password']);

        $admin_info->save();
       
    	return redirect('/all-admin')->with('success','Thêm admin thành công');
    }



    public function edit_admin($admin_id){
        $this->AuthLogin();
        $admin_info = Admin::all();
        $admin_edit = Admin::find($admin_id);
    	return view('admin.edit_admin')->with(compact('admin_info','admin_edit'));
    }

    public function update_admin($admin_id){
        $this->AuthLogin();
        $data = request()->validate([
            'admin_name'=>'required',
            'admin_email'=>'required',
            'admin_phone'=>'required',
            'admin_password'=>'required'
        ]);

        $admin_info = Admin::find($admin_id);
        $admin_info->admin_name = $data['admin_name'];
        $admin_info->admin_email = $data['admin_email'];
        $admin_info->admin_phone = $data['admin_phone'];
        $admin_info->admin_password = md5($data['admin_password']);

        $admin_info->save();
       
    	return redirect('/all-admin')->with('success','cập nhật admin thành công');
    }
    public function delete_admin($admin_id){
        $del_admin = Admin::find($admin_id);
        $del_admin->delete();
        return redirect('/all-admin')->with('success','xoá admin thành công');

    }




}
