<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Alltakiler database lerimiz
use App\Model\About;
use App\Model\Events;
use App\Model\Students;
use App\Model\Contact;
use App\Model\News;
use App\Model\Users;
use App\Model\Messages;
use Illuminate\Support\Facades\Auth;//kullanıcı bilgilerini almak için
class getAdminController extends Controller
{
	public function index(){
		return view('backEnd.index');
	}
	public function about(){
		$data = About::where('id',1)->get();
		return view('backEnd.about')->with('data',$data);
	}
	public function events(){
		$data =Events::get();
		return view('backEnd.events')->with('data',$data);
	}
	public function edit_events($id){
		$events =Events::where('id',$id)->get()->count();
		if($events > 0){
			$events =Events::where('id',$id)->first();
			return view('backEnd.edit-events')->with('events',$events);
		}
		else{
			return back();
		}
		
	}
	public function add_events(){
		return view('backEnd.add-new-events');
	}
	public function graduates(){
		$students = Students::get();
		return view('backEnd.graduates')->with('students',$students);
	}
	public function edit_student($id){
		$students =Students::where('identity_id',$id)->get()->count();
		if($students > 0){
			$students =Students::where('identity_id',$id)->first();
			return view('backEnd.edit-student')->with('students',$students);
		}
		else{
			return back();
		}
		
	}
	public function contact()
	{
		$contact = Contact::where('id',1)->get()->first();
		return view('backEnd.contact')->with('contact',$contact);
	}
	public  function news()
	{
		$news = News::get();
		return view('backEnd.news')->with('data',$news);
	}
	public  function add_news()
	{
		return view('backEnd.news-add');
	}
	public function edit_news($id){
		$news =News::where('id',$id)->get()->count();
		if($news > 0){
			$news =News::where('id',$id)->first();
			return view('backEnd.edit-news')->with('news',$news);
		}
		else{
			return back();
		}
		
	}
	public function membership(){
		$data = Users::get();
		return view('backEnd.membership')->with('data',$data);

	}
	public function send_message($id){
		$data = Users::where("identity_id",$id)->get()->first();
		return view('backEnd.send-message')->with('data',$data);

	}
	public function messages(){
		$data = Messages::where('receiver',Auth::user()->identity_id)->get();
		return view('backEnd.messages')->with('data',$data);

	}
	public function look_message($id){
		$count = Messages::where(['id'=>$id,'receiver'=>Auth::user()->identity_id])->get()->count();
		if($count > 0){
			$data = Messages::where('id',$id)->get()->first();
			return view('backEnd.look-message')->with('data',$data);
		}
		else{
			return back();
		}


	}
}
