<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Field;
use App\Models\Booking;
use App\Models\Team;
use App\Models\UserInfo;
use App\Models\BookingDetails;
use App\Models\FieldType;
use App\Models\FieldPrice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class BookingController extends Controller
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
    public function booking(){
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);

        $field_type = FieldType::all();
        $field_price = FieldPrice::all();

        return view('pages.booking.booking')->with(compact('field_count','user_count','team_count','field_type','field_price'));

    }
    public function booking_price(){
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);

        $field_type = FieldType::all();
        $field_price = FieldPrice::all();
        return view('pages.booking.booking_price')->with(compact('field_count','user_count','team_count','field_type','field_price'));

    }
    
    public function field_info_5(){
        $field_booking_info5 = Booking::join('users','users.id','=','tbl_booking.user_id')
        ->join('tbl_field','tbl_field.field_id','=','tbl_booking.field_id')
        ->join('tbl_field_type','tbl_field_type.field_type_id','=','tbl_field.field_type_id')
        ->where('tbl_field_type.field_type_id','1')
        ->where('tbl_booking.booking_start', '>=', date("Y-m-d"))
        ->orderby('tbl_booking.booking_start','asc')
        ->paginate(4);

        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.FieldInfo.field_info5')->with(compact('field_booking_info5','field_count','user_count','team_count'));
    }
    public function field_info_7(){
        $field_booking_info7 = Booking::join('users','users.id','=','tbl_booking.user_id')
        ->join('tbl_field','tbl_field.field_id','=','tbl_booking.field_id')
        ->join('tbl_field_type','tbl_field_type.field_type_id','=','tbl_field.field_type_id')
        ->where('tbl_field_type.field_type_id','2')
        ->where('tbl_booking.booking_start', '>=', date("Y-m-d"))
        ->orderby('tbl_booking.booking_start','asc')
        ->paginate(4);
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.FieldInfo.field_info7')->with(compact('field_booking_info7','field_count','user_count','team_count'));
    }
    public function field_info_11(){
        $field_booking_info11 = Booking::join('users','users.id','=','tbl_booking.user_id')
        ->join('tbl_field','tbl_field.field_id','=','tbl_booking.field_id')
        ->join('tbl_field_type','tbl_field_type.field_type_id','=','tbl_field.field_type_id')
        ->where('tbl_field_type.field_type_id','3')
        ->where('tbl_booking.booking_start', '>=', date("Y-m-d"))
        ->orderby('tbl_booking.booking_start','asc')
        ->paginate(4);
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.FieldInfo.field_info11')->with(compact('field_booking_info11','field_count','user_count','team_count'));
    }
    public function field_info_futsal(){
        $field_booking_info = Booking::join('users','users.id','=','tbl_booking.user_id')
        ->join('tbl_field','tbl_field.field_id','=','tbl_booking.field_id')
        ->join('tbl_field_type','tbl_field_type.field_type_id','=','tbl_field.field_type_id')
        ->where('tbl_field_type.field_type_id','4')
        ->where('tbl_booking.booking_start', '>=', date("Y-m-d"))
        ->orderby('tbl_booking.booking_start','asc')
        ->paginate(4);
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.FieldInfo.field_info_futsal')->with(compact('field_booking_info','field_count','user_count','team_count'));
    }


    public function create_booking(){

        $data = request()->validate([
            'user_id'=>'required',
            'field_id'=>'required',
            'booking_details_date'=>'required',
            'booking_details_start'=>'required',
            'booking_details_end'=>'required',
            'booking_details_phone'=>'required',
            'booking_details_status'=>'required',

            // 'user_id', 'field_id', 'booking_details_date','booking_details_end','booking_details_time','booking_details_phone','booking_details_status'


        ]);

        $booking_details = new BookingDetails();
        $booking_details->user_id = $data['user_id'];
        $booking_details->field_id = $data['field_id'];
        $booking_details->booking_details_date = $data['booking_details_date'];
        $booking_details->booking_details_start = $data['booking_details_start'];
        $booking_details->booking_details_end = $data['booking_details_end'];
        $booking_details->booking_details_phone = $data['booking_details_phone'];
        $booking_details->booking_details_status = $data['booking_details_status'];

        $booking_details->save();
       
    	return redirect('/history-booking')->with('success','Tạo phiếu đặt sân thành công, sẽ có người gọi tới để xác nhận đặt sân xin chờ máy');

    } 


    public function history_booking(){
        
        $booking_history = BookingDetails::join('tbl_field','tbl_field.field_id','=','booking_details.field_id')
        ->join('users','users.id','=','booking_details.user_id')
        ->where('booking_details.user_id', '=', Auth::user()->id)
        ->where('booking_details.booking_details_date', '>=', date("m/d/Y"))
        ->orderby('booking_details.booking_details_id','desc')->paginate(2);
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.booking.history_booking')->with(compact('booking_history','field_count','user_count','team_count'));
    }




    public function booking_7(){
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.booking.booking')->with(compact('field_count','user_count','team_count'));

    } 
    public function booking_11(){
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.booking.booking')->with(compact('field_count','user_count','team_count'));

    } 
    public function booking_futsal(){
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        return view('pages.booking.booking')->with(compact('field_count','user_count','team_count'));

    } 


    // backend
    public function booking_admin(){
        $this->AuthLogin();
        $user_info =  User::all();
        return view('admin.booking.bookingadmin')->with(compact('user_info'));
    }
    public function revenue(){
        $this->AuthLogin();
        return view('admin.booking.revenue');
    }



    public function all_booking_details(){
        $this->AuthLogin();
        $booking_details_info = BookingDetails::join('tbl_field','tbl_field.field_id','=','booking_details.field_id')
        ->join('tbl_field_type','tbl_field_type.field_type_id','=','tbl_field.field_type_id')
        ->join('users','users.id','=','booking_details.user_id')
        ->orderby('booking_details.booking_details_date','asc')->paginate(7);
        return view('admin.booking.all_booking_details')->with(compact('booking_details_info'));
    }
    public function delete_booking_details($booking_details_id){
        $booking_details_info = BookingDetails::find($booking_details_id);
        $booking_details_info->delete();
        return redirect('/all-booking-card')->with('success','xoá phiếu đặt sân thành công');

    }

    public function accept_booking($booking_details_id){
        BookingDetails::where('booking_details_id',$booking_details_id)->update(['booking_details_status'=>1]);
        return redirect('/all-booking-card')->with('success','Đã chuyển trạng thái thành công');
        
    }
    public function waiting_for_booking($booking_details_id){
        BookingDetails::where('booking_details_id',$booking_details_id)->update(['booking_details_status'=>0]);
        return redirect('/all-booking-card')->with('success','Đã chuyển trạng thái thành công');
    }

    public function all_booking(){
        $this->AuthLogin();
        $booking_info = Booking::join('users','tbl_booking.user_id','=','users.id')
        ->join('tbl_field','tbl_booking.field_id','=','tbl_field.field_id')
        ->join('tbl_field_type','tbl_field_type.field_type_id','=','tbl_field.field_type_id')
        ->orderby('tbl_booking.booking_status','asc')
        ->orderby('tbl_booking.booking_start','asc')->paginate(4);
        return view('admin.booking.all_booking')->with(compact('booking_info'));
    }

    public function delete_booking($booking_id){
        $booking_info = Booking::find($booking_id);
        $booking_info->delete();
        return redirect('/all-booking')->with('success','xoá đặt sân thành công');

    }
}
