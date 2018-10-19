<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;
use App\Model\About;
use App\Model\Students;
use App\Model\Messages;
use App\Model\Contact;
use App\Model\Events;
use Mail;
use App\Model\News;
use App\Model\Join;

use Illuminate\Support\Facades\Auth;//kullanıcı bilgilerini almak için
use Illuminate\Support\Facades\Redirect;
class getController extends Controller
{
	public function index(){

		return view("frontEnd.index");
	}
	public function about(){
		$data = About::where('id',1)->get()->first();
		return view("frontEnd.about")->with('data',$data);
	}
	public function profile($id){

		$where = array('school_id' =>$id);

		$count =Students::where($where)->count();
		if ($count > 0) {
			$user =	Students::where($where)->get();
			$count =Join::where('user_id',$user[0]->identity_id)->get()->count();
			return view('frontEnd.userprofile')->with(['user'=>$user,'count'=>$count]);
		}
		else{
			return back()->withInput();
		}

	}
	public function single_profile(){
		$count =Join::where('user_id',Auth::user()->identity_id)->get()->count();
		return view('frontEnd.single_profile')->with('count',$count);

	}
	public function register(){
		return redirect('register');
	}
	public function register_continue(){
		return view('auth.register_continue');
	}
	public function a(){
		return view('a');
	}
	public function newsroom(){
		$data = News::get();
		return view('frontEnd.newsroom')->with('data',$data);
	}
	public function news($id){
		$data = News::where('id',$id)->get()->first();
		return view('frontEnd.news')->with('data',$data);
	}
	public function events(){
		$data = Events::get();
		return view('frontEnd.events')->with('data',$data);
	}
	public function post_event($id){
		$count = Events::where('id',$id)->get()->count();
		if($count > 0){
			$data = Events::where('id',$id)->get()->first();
			return view('frontEnd.post-event')->with('data',$data);
		}
		else{
			return back();
		}


	}
	public function graduates(){
		$users = Students::all();

		return view('frontEnd.graduates')->with('users',$users);
	}
	public function contact(){
		$data  = Contact::where('id',1)->get()->first();
		return view('frontEnd.contact')->with('data',$data);
	}
	public function edit_profile(){

		$maps =	Students::where('identity_id',Auth::user()->identity_id)->get()->first();
		return view('frontEnd.edit_profile')->with('maps',$maps);
	}

	public function messages(){
		$data = Messages::where('receiver',Auth::user()->identity_id)->get();
		return view('frontEnd.messages')->with('data',$data);

	}
	public function look_message($id){
		$count = Messages::where(['id'=>$id,'receiver'=>Auth::user()->identity_id])->get()->count();
		if($count > 0){
			$data = Messages::where('id',$id)->get()->first();
			return view('frontEnd.look-message')->with('data',$data);
		}
		else{
			return back();
		}


	}
	public function send_message($id){
		$data = Users::where("identity_id",$id)->get()->first();
		return view('frontEnd.send-message')->with('data',$data);

	}
	public function membership(){
		$data = Users::get();
		return view('frontEnd.membership')->with('data',$data);

	}
	
	public function join_event($id){
		$count = Join::where(['event_id'=>$id,'user_id'=>Auth::user()->identity_id])->get()->count();
		if($count > 0){
			 return Redirect::back()->withErrors(['title'=>'Fail','content'=>'You already joined','error'=>'error']);
		}
		else{
			$event = Events::where('id',$id)->get()->first();
			$data =['title'=>'Joinned event','to'=>'cyprus international university','body'=>$event->content,'date'=>$event->datetime];
			Join::create(['event_id'=>$id,'user_id'=>Auth::user()->identity_id]);
			//text=mail //mail dosyamızın yolu
			Mail::send('mail.addevent',$data,function($message) {
			//gidecek maili alta yazıyoruz
			$message->to(Auth::user()->email,'TO cİu')->subject('Joined event');//tEXT EMAİL İSE mailde gözükecek title
			$message->from('ennur2828@gmail.com','Ciu');
		});
			$msg='You joined event check your mail '.Auth::user()->email;
			 return Redirect::back()->withErrors(['title'=>'Successful','content'=>$msg,'error'=>'success']);
		}

	}


}
