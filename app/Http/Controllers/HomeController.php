<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Team;
use App\Models\MatchInfo;
use App\Models\Field;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    //  đá về trang login nếu chưa đăng nhập thì k đc vào trang khác
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $my_team_id = Team::all();
        $field_booking = Booking::join('users','users.id','=','tbl_booking.user_id')
        // ->join('tbl_team','tbl_team.user_id','=','users.id')
        ->join('tbl_field','tbl_field.field_id','=','tbl_booking.field_id')
        ->join('tbl_field_type','tbl_field_type.field_type_id','=','tbl_field.field_type_id')
        ->where('tbl_booking.booking_start', '>=', date("Y-m-d"))
        ->orderby('tbl_booking.booking_start','asc')
        ->orderby('tbl_field.field_name','asc')
        ->paginate(5);


        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        // $field_count = $field_list->count();


        return view('home')->with(compact('field_booking','my_team_id','field_count','user_count','team_count'));
    }
    // error_page
    public function error_page(){
        return view('errors.404');
    }

    public function search(Request $request){
        $keywords = $request->keywords_submit;
        $team = Team::all();
        $match_info = MatchInfo::join('tbl_team','tbl_team.team_id','=','tbl_match.team_id')->where('match_status','0')
        ->orderby('tbl_match.match_time','asc')->get();
        $search = MatchInfo::join('tbl_team','tbl_team.team_id','=','tbl_match.team_id')->where('match_status','0')
        ->where('match_time','like','%'.$keywords.'%')->get();
        $field_count = Field::orderby('field_id')->paginate(1);
        $user_count = UserInfo::orderby('id')->paginate(1);
        $team_count = Team::orderby('team_id')->paginate(1);
        // return view('pages.Team.search')->with('category',$cate_Team)->with('brand',$brand_Team)->with('search_Team',$search_Team);
        return view('pages.search')->with(compact('match_info','search','team','field_count','user_count','team_count'));
    }
}
