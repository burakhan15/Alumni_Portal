<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Validator;
use Mail;
use App\User;
use App\Model\Users;
use App\Model\Students;
use App\Model\Messages;
use Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;//kullanıcı bilgilerini almak için
class postController extends Controller
{
	public function register(Request $Request){
		//dc ve school id girmişmi diye kontrol ediyoruz
		if (!isset($Request->school_id) || !isset($Request->identity_id)) {
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'Please enter Identity id and School id'));
		}
		//***

		//veritabanı kontrolü yapıyoruz email varmı yokmu 
		$Rdata = array('school_id' => $Request->school_id,'identity_id'=>$Request->identify_id);

		$where=['school_id' => $Request->school_id, 'identity_id' => $Request->identity_id];
		$count=Students::where($where)->count();
 	    //***

 	    //eğer countumuz yanı veritabanındaki veri ile eşleşirse kullanıcıya kayıt olma sayfasına yönlendiriyoruz
		if($count > 0){

			$count=Users::where($where)->count();
		 	    //***

		 	    //üsteki şekildeki gibi yine kontrol ediyoruz ama bu sefer sadece kayıt olanlar arasında kayıt varmı yokmu 
			if($count == 0){

				$count=Students::where($where)->get();
				return view('auth.register_continue')->with('Rdata',$count);

			}
			else{

				$data=Users::where($where)->select()->get();

				return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'Student is registered .Email is '.$data[0]['email']));
			}
				//***
		}
		else{
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'Check your information. Does not match a record'));

		}
		//***



		//gelen değerlerin sayımı değilmi kontrolünü yapıyoruz
		if (!is_numeric($Request->identify_id) || !is_numeric($Request->school_id)) {
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'You should enter number '));

		}
		//***



	}

	public function registerControl(Request $request)
	{
		//eğer kullanıcı register sayfasından direk acarsa bu sayfayı dıye kontrol ediyoruz
		if(empty($request->identity_id) || empty($request->school_id)){
			return redirect()->route('register')->withErrors(['msg', 'The Message']);
		}//***

		$data = array('email' => $request->email,'identity_id' => $request->identity_id,'school_id' => $request->school_id );
		$count = User::orwhere($data)->count();

		if($count>0){
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' => 'This mail is used Or There is this account'));
		}



		$user = array(
			'name' => $request->name,
			'sur_name' => $request->sur_name,
			'email' => $request->email,
			'birth_date' => $request->birth_date,
			'start_date' => $request->start_date,
			'graduated_date' => $request->graduated_date,
			'department' => $request->department,
			'country' => $request->country,
			'school_id' => $request->school_id,
			'identity_id' => $request->identity_id,
			'password' => $request->password,
		);
		$rules = array(
			'name' => 'required',
			'sur_name' => 'required',
			'email' => 'email',
			'birth_date' => 'required',
			'start_date' => 'required',
			'graduated_date' => 'required',
			'department' => 'required',
			'country' => 'required',
			'school_id' => 'required',
			'identity_id' => 'required',
			'password' => 'required'
		);

                // HATA MESAJLARINI OLUŞTURALIM
		$messages = array(
			'name' => 'required',
			'sur_name' => 'required',
			'email' => 'required',
			'birth_date' => 'required',
			'start_date' => 'required',
			'graduated_date' => 'required',
			'department' => 'required',
			'country' => 'required',
			'school_id' => 'required',
			'identity_id' => 'required',
			'password' => 'required'
		);

                // KONTROL (VALIDATION) İŞLEMİNİ GERÇEKLEŞTİRELİM
		$validator = Validator::make($user, $rules, $messages);

		if($validator->fails())
		{
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' =>'Please fill true in all fields'));
		}
		
		$validator = Validator::make($request->all(), ['password' => 'min:6']);

		if($validator->fails())
		{
			return Redirect::back()->withInput(Input::all())->withErrors(array('title' =>'Pasport should be minimum 6 character'));
		}
		$provier="";$provier_id="";$image="no-image.png";
		User::create([
			'name' => $request->name,
			'sur_name' => $request->sur_name,
			'email' => $request->email,
			'birth_date' => $request->birth_date,
			'start_date' => $request->start_date,
			'graduated_date' => $request->graduated_date,
			'school_id' => $request->school_id,
			'identity_id' => $request->identity_id,
			'department' => $request->department,
			'country' => $request->country,
			'auth' => 3,
			'password' => Hash::make($request->password),
			'provider' => $provier,
			'provider_id' => $provier_id,
			'image'=>$image,
		]);

		return Redirect::to('login')->withErrors(array('title' => 'You can enter with your mail and password'));
		
	}
	public function edit_profile(Request $request)
	{ 
		$image = $request->file('image');
		$destinationPath = public_path('/images');
		Students::where('identity_id',Auth::user()->identity_id)->update(['maps'=>$request->maps]);
		if (empty( $image)) {
			if (empty($request->password) && empty($request->password1)) {
				if($request->has('checkbox')){
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>1,'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
				else{
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>0,'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
			}//password varsa diye
			else{
				$validator = Validator::make($request->all(), ['password' => 'required|min:6','password1' => 'required|min:6|same:password']);
				if ($validator->fails()) {
					return Redirect::back()->withInput(Input::all())->withErrors(['title' =>'Pasport should be min 6 characters or not empty','error'=>'error']);
				}
				if($request->has('checkbox')){
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>1,'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
				else{
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>0,'password'=>bcrypt($request->password),'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
			}

		}
		else{
			$imagename = Auth::user()->identity_id.'-'.$image->getClientOriginalName();
			if (empty($request->password) && empty($request->password1)) {
				if($request->has('checkbox')){
					$image->move($destinationPath, $imagename);
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>1,'image'=>$imagename,'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
				else{
					$image->move($destinationPath, $imagename);
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>0,'image'=>$imagename,'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
			}//password varsa diye
			else{
				$validator = Validator::make($request->all(), ['password' => 'required|min:6','password1' => 'required|min:6|same:password']);
				if ($validator->fails()) {
					return Redirect::back()->withInput(Input::all())->withErrors(['title' =>'Pasport should be min 6 characters or not empty','error'=>'error']);
				}
				if($request->has('checkbox')){
					$image->move($destinationPath, $imagename);
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>1,'image'=>$imagename,'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
				else{
					$image->move($destinationPath, $imagename);
					$update = Users::where('id',Auth::user()->id)->update(['show_image'=>0,'image'=>$imagename,'password'=>bcrypt($request->password),'email'=>$request->email]);
					return Redirect::back()->withErrors(['title'=>'Successful update your information','error'=>'success']);
				}
			}
		}


		
	}
	public function a(Request $request){
		if($request->name==1){
			return redirect()->route('login');
		}
		return Redirect::back()->withInput(Input::all())->withErrors(['msg', 'The Message']);
	}
	public function mail(Request $request)
	{

		

	}
	public function add_message(Request $request)
	{
		Messages::create(['headline'=>$request->headline,'content'=>$request->content,'sender'=>Auth::user()->identity_id,'receiver'=>$request->receiver]);
		return Redirect::to('membership')->withErrors(array('title' => 'You should enter number '));
	}
	public function del_message($id)
	{
		Messages::where('id',$id)->delete();
		return Redirect::to('messages')->withErrors(['title'=>'Deleted Messages','error'=>'success']);

	}

}
