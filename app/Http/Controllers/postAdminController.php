<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//kullanıcı bilgilerini almak için
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

//alttakiler veri tabanlarımız
use App\Model\Students;
use App\Model\Contact;
use App\Model\News;
use App\Model\About;
use App\Model\Events;
use App\Model\Users;
use App\Model\Messages;
class postAdminController extends Controller
{
	public function index(){
		return view('backEnd.index');
	}
	public function logout(){
		Auth::logout();
		return Redirect::to('admin/login');
	}
	public function about(Request $request){
		About::where('id',1)->update(['content'=>$request->content]);
		return back()->withInput();
	}
	public function events(Request $request){
		return view('backEnd.events');
	}
	public function add_events(Request $request){
		$name=['headline'=>$request->headline,
		'address'=>$request->address,
		'datetime'=>$request->datetime,
		'description'=>$request->description,
		'content'=>$request->content
	];
	$rule=['headline'=>'required',
	'address'=>'required',
	'datetime'=>'required',
	'description'=>'required',
	'content'=>'required'
];
$message=['headline.required'=>"Please fill headline",
'address.required'=>'Please fill address',
'datetime.required'=>'Please fill datetime',
'description.required'=>'Please fill description',
'content.required'=>'Please fill content'
];
$validate = Validator::make($name,$rule,$message);
if ($validate->fails()) {
	return Redirect::back()->withInput(Input::all())->withErrors($validate);
}
Events::create($request->all());
return Redirect::to('admin/events')->withErrors(['title'=>'Successful add new event','error'=>'success']);
}
public function edit_events(Request $request){
	$name=['headline'=>$request->headline,
	'address'=>$request->address,
	'datetime'=>$request->datetime,
	'description'=>$request->description,
	'content'=>$request->content
];
$rule=['headline'=>'required',
'address'=>'required',
'datetime'=>'required',
'description'=>'required',
'content'=>'required'
];
$message=['headline.required'=>"Please fill headline",
'address.required'=>'Please fill address',
'datetime.required'=>'Please fill datetime',
'description.required'=>'Please fill description',
'content.required'=>'Please fill content'
];
$validate = Validator::make($name,$rule,$message);
if ($validate->fails()) {
	return Redirect::back()->withInput(Input::all())->withErrors($validate);
}
Events::where('id',$request->id)->update(['headline'=> $request->headline,'description'=> $request->description,'address'=> $request->address,'datetime'=> $request->datetime,'content' => $request->content]);
return Redirect::to('admin/events')->withErrors(['title'=>'Successful updated event','error'=>'success']);
}
public function edit_student(Request $request){
	$name=['name'=>$request->name,
	'sur_name'=>$request->sur_name,
	'birth_date'=>$request->birth_date,
	'country'=>$request->country,
	'department'=>$request->department,
	'start_date'=>$request->start_date,
	'graduation'=>$request->graduation,
	'school_id'=>$request->school_id,
	'gender'=>$request->gender,
];
$rule=['name'=>'required',
'sur_name'=>'required',
'birth_date'=>'required',
'country'=>'required',
'department'=>'required',
'start_date'=>'required',
'graduation'=>'required',
'school_id'=>'required',
'gender'=>'required',
];
$message=['name'=>'fill in the blank'];
$validate = Validator::make($name,$rule,$message);
if ($validate->fails()) {
	return Redirect::back()->withInput(Input::all())->withErrors($validate);
}
Students::where('identity_id',$request->identity_id)->update(['name'=> $request->name,
	'sur_name'=> $request->sur_name,
	'birth_date'=> $request->birth_date,
	'country'=> $request->country,
	'department' => $request->department,
	'start_date' => $request->start_date,
	'graduation'=> $request->graduation,
	'school_id'=> $request->school_id,
	'gender' => $request->gender,
]);
return Redirect::to('admin/graduates')->withErrors(['title'=>'Successful updated student','error'=>'success']);
}
public function del_student($id)
{
	Students::where('identity_id',$id)->delete();
	return Redirect::to('admin/graduates')->withErrors(['title'=>'Deleted student','error'=>'success']);
}
public function del_event($id)
{
	Events::where('id',$id)->delete();
	return Redirect::to('admin/events')->withErrors(['title'=>'Deleted student','error'=>'success']);
}
public function contact(Request $request){
	Contact::where('id',1)->update(['content'=>$request->content]);
	return back()->withInput();
}
public function add_news(Request $request){
	$image = $request->file('image');
	if(!empty($image)){
		$imagename = str_random(15).'-'.$image->getClientOriginalName();
		$destinationPath = public_path('/images');
		$image->move($destinationPath, $imagename);
		News::create(['headline'=> $request->headline,
			'content'=> $request->content,
			'description'=> $request->description,
			'image'=> $imagename
		]);
	}


	$name=['headline'=>$request->headline,
	'content'=>$request->content,
	'description'=>$request->description
];
$rule=['headline'=>'required',
'content'=>'required',
'description'=>'required'

];
$message=['name'=>'fill in the blank'];
$validate = Validator::make($name,$rule,$message);
if ($validate->fails()) {
	return Redirect::back()->withInput(Input::all())->withErrors($validate);
}
News::create(['headline'=> $request->headline,
	'content'=> $request->content,
	'description'=> $request->description,
]);
return Redirect::to('admin/news')->withErrors(['title'=>'Successful updated student','error'=>'success']);
}
public function del_news($id)
{
	News::where('id',$id)->delete();
	return Redirect::to('admin/news')->withErrors(['title'=>'Deleted student','error'=>'success']);
	
}
public function edit_news(Request $request){
	$image = $request->file('image');
	if(isset($image)){
		$imagename = str_random(15).'-'.$image->getClientOriginalName();
		$destinationPath = public_path('/images');
		$image->move($destinationPath, $imagename);
		News::where('id',$request->id)->update(['headline'=> $request->headline,
			'description'=> $request->description,
			'content'=> $request->content,
			'image'=> $imagename
		]);
	}
	else{

		News::where('id',$request->id)->update(['headline'=> $request->headline,
			'description'=> $request->description,
			'content'=> $request->content,
		]);
	}

	return Redirect::to('admin/news')->withErrors(['title'=>'Successful updated student','error'=>'success']);
}
public function del_user($id)
{
	Users::where('identity_id',$id)->delete();
	return Redirect::to('admin/membership')->withErrors(['title'=>'Deleted student','error'=>'success']);
	
}
public function add_message(Request $request)
{
	Messages::create(['headline'=>$request->headline,'content'=>$request->content,'sender'=>Auth::user()->identity_id,'receiver'=>$request->receiver]);
	return Redirect::to('admin/membership')->withErrors(array('title' => 'You should enter number '));
}
public function del_message($id)
{
	Messages::where('id',$id)->delete();
	return Redirect::to('admin/messages')->withErrors(['title'=>'Deleted Messages','error'=>'success']);
	
}
public function messages(){
	$data = Messages::where('receiver',Auth::user()->identity_id)->get();
	return view('frontEnd.messages')->with('data',$data);

}
}

