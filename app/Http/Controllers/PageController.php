<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Register;
use App\StudentCom;
use App\StudentEmergency;
use App\Eoi;
use App\Eoi2;
use Session;
use App\St;
use App\Proposal;
use App\Activate;
use Carbon\Carbon;
use DateTime;
class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }
    
    public function home1(){
        return view('home');
    }
    
    public function about(){
                        
        return view('about');
    }
    
    public function login(){
        return view('login');
    }
    
    
    
    
    public function register(){
              $sid=DB::table('students')->orderBy('student_id', 'desc')->first();
        return view('register',compact('sid'));
    
      //  return view('register');
    }
    
    public function activate($id)
    {
        $idv = $id;
        
        $date = date('Y-m-d');
        $post = new Activate;
        $post->student_number=$idv;
        $post->status="notagreed";
        $post->today=$date;
        $post->save();
        $sid= DB::table('eoi')->get();
        return view('adminpanel.appliedeoi',compact('sid'));
    
    }
   
   
    public function accept($id,$today)
    {
        $idv = $id;
        $now = date('Y-m-d');
        $t= $today;
        
  $datetime1 = new DateTime($t);
$datetime2 = new DateTime($now);
$interval = $datetime1->diff($datetime2);
   $post = DB::table('activate')->where('student_number',$id)->get();
     
$days = $interval->format('%a');
$s = Session::get('wintecuser');
                   $sid=DB::table('students')->where('student_number',$s)->first();
  
        $ag="agreed";
       if ($days > 3)
       {
          return redirect('smessage')->with('acerror', 'Offer time Excided!');
 
       }
       else{ 
     $in =      DB::update('update tblactivate set status = ? where student_number = ?',[$ag,$s]);
 if($in)
 
  return redirect('smessage')->with('acsuccess', 'Offer Accepted');
 
 
      
 } 
  return redirect('smessage')->with('acsuccess', 'Offer Accepted');
 
 }
    
    
   
    
    public function cpassword(Request $request)
    {
        $idv = Session::get('wintecuser');
            $results =  DB::table('students')->where('student_number',$idv)->first();
  
  
      $id =Session::get('wintecuser');
                   $sid=DB::table('students')->where('student_number',$id)->first();
    
            $this->validate($request, [
        'op' => 'required|min:8',
        'np1' =>'required|min:8,max:16',
        'np2'=>'required|min:8,max:18',
        ]);
    
        $op = $request->op;
        $np1=$request->np1;
        $np2 = $request->np2;
        $dop=$results->password;
        
        if (($op  == $dop) && ($np1 == $np2))
        {
        $post = new Register;
        $post->password=$np1;
$in =      DB::update('update tblstudents set password = ? where student_number = ?',[$np1,$idv]);
 if($in)
 {Session::flash('cpasssuccess', 'password updated successfully.');
      
 }
    }
    
    else if ($op !=$dop)
    {
          Session::flash('cpasserror', 'Current Password is Incorrect.');
      
      
    }
    
    else if ($np1 !=$np2)
    {
          Session::flash('cpasserror', 'Password Mismatches.');
            
    }
      return view('studentpanel.cpass',compact('sid'));
    
}

    public function appliedeoi(){
             // $sid=DB::table('eoi')->get();
           $sid= DB::table('eoi')->get();
        return view('adminpanel.appliedeoi',compact('sid'));
    
      //  return view('register');
    }
    
    
    public function contact(){
        return view('contact');
    }
    
     public function dashboard(){
        return view('adminpanel.dashboard');
    }
  
  
     public function sdashboard(){
         $id =Session::get('wintecuser');
                   $sid=DB::table('students')->where('student_number',$id)->first();
    
        return view('studentpanel.dashboard',compact('sid'));
    }
   
   
   public function sapplyeoi(){
          $id =Session::get('wintecuser');
                   $sid=DB::table('students')->where('student_number',$id)->first();
    
        return view('studentpanel.applyeoi',compact('sid'));
    }
    
    
    
   public function supdate(){
        return view('studentpanel.update');
    }
    
    
    
    public function scalender(){
  return view('studentpanel.calender');
    }
    
    public function smessage(){
        $id = Session::get('wintecuser');
        $post = DB::table('activate')->where('student_number',$id)->where('status','notagreed')->get();
                $sid=DB::table('students')->where('student_number',$id)->first();
    
        return view('studentpanel.message', compact('post','sid'));
    }
    
    public function sstatus(){
           $id = Session::get('wintecuser');
                $sid=DB::table('students')->where('student_number',$id)->first();
          return view('studentpanel.status',compact('sid'));
    }
    
    public function course(){
         $staffs=DB::table('department')->get();
        return view('adminpanel.course',compact('staffs'));
    }
   
    public function sprofile(){
        return view('adminpanel.course');
    }
   
    
     public function department(){
         //   $staffs=DB::table('staffs')->get();
           
        return view('adminpanel.department');
    }
   
    public function staff(){
              $posts=DB::table('staffroles')->get();
               $sid=DB::table('staffs')->orderBy('id', 'desc')->first();
        
        return view('adminpanel.staff',compact('posts','sid'));
    }
   
   
    public function staffrole(){
        
        return view('adminpanel.staffrole');
    }
   
   
    public function alogin(){
        
        return view('alogin');
    }
   
   
    public function subject(){
        return view('adminpanel.subjects');
    }
    
    public function cv(){
           $id =Session::get('wintecuser');
                   $sid=DB::table('students')->where('student_number',$id)->first();
    
        return view('studentpanel.cv',compact('sid'));
    }
  
    public function cpass(){
           $id =Session::get('wintecuser');
                   $sid=DB::table('students')->where('student_number',$id)->first();
    
        return view('studentpanel.cpass',compact('sid'));
    }
    
    
    public function logout(){
        Session::forget('Wintecuser');
        Session::forget('Wintecuser1');
        Session::forget('Wintecadmin');
        Session::forget('Wintecadmin1');
        
        
        return view('home');
    }
   
   
     public function studentregister(Request $request){
   
$dt = new Carbon();
$fv = $dt->subYears(18)->format('Y-m-d');

        $this->validate($request, [
        'fname' => 'required|min:3|regex:/^[A-Za-z\s-_]+$/',
        'lname' =>'required|min:3|regex:/^[A-Za-z\s-_]+$/',
        'sname'=>'regex:/^[A-Za-z\s-_]+$/',
        'email'=>'required|email|unique:students',
        'country'=>'required|min:3',
        'gender'=>'required',
    'dob'=>'required|date|before:'.$fv,
    'password'=>'required|min:8,max:16',
    'upload'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        
        ],
        [
            'dob.before'=>'Under 18!!!']);
        
        $post = new Register;
        
        $com=new StudentCom;
        $em = new StudentEmergency;
        
        $post->student_number = $request->number;
        $post->student_fname = $request->fname;
        $post->student_lname = $request->lname;
        $post->student_sname = $request->sname;
        $post->dob = $request->dob;
        $post->gender = $request->gender;
        $post->ethnicity = $request->country;
        $post->email = $request->email;
        $post->password=$request->password;
        $posts = $request->file('upload');
        $post->photo = $posts->getClientOriginalName();
        $path = public_path() . '/uploads/students/';
        $posts->move($path, $posts->getClientOriginalName() );
        
        $com->student_number=$request->number;
        $com->student_email=$request->email;
        $com->student_phone="a";
        $com->student_addtess="a";
        $com->student_suburb="a";
        $com->student_city="a";
        $com->student_state="a";
        $com->student_country="a";
        
        
        $em->student_number=$request->number;
        $em->person_name="a";
        $em->person_phone="a";
        $em->person_email=$request->email;
        $em->person_address="a";
        $em->person_suburb="a";
        $em->person_city="a";
        $em->person_state="a";
        $em->person_country="a";
        
    $post->save();
      $com->save();
      $em->save();
        
        Session::flash('studentsuccess', 'Student registered successfully.');
        return redirect('register');
}

    
    
    
    
    
    
    
    
    
       public function seoi1(Request $request){
   
   
        $this->validate($request, [
        'name' => 'required|min:3|regex:/^[A-Za-z\s-_]+$/',
        'sid' =>'required|min:3|numeric',
        'caddress'=>'required',
        'phone'=>'required|numeric',
        'email'=>'required|email',
    'intent'=>'required',
    'outside'=>'required',
    'program'=>'required',
    'module'=>'required',
    'semester'=>'required',
    'eligibility'=>'required',
    'do1'=>'required|regex:/^[A-Za-z\s-_]+$/',
    'do2'=>'required|regex:/^[A-Za-z\s-_]+$/',
    'do3'=>'required|regex:/^[A-Za-z\s-_]+$/',
    'do4'=>'required|regex:/^[A-Za-z\s-_]+$/',
    'core'=>'required',
    'security'=>'required',
    'cvs'=>'required|regex:/^[A-Za-z\s-_]+$/',
    'agree'=>'required'
    
        
        ]);
        
        
        $post = new Eoi;
        $name = $request->name;
        $sid = $request->sid;
        $phone = $request->phone;
        $caddress = $request->caddress;
        $email = $request->email;
        $intent = $request->intent;
        $module = $request->module;
        $core = $request->core;
        $m = implode($module,",");
        $c = implode($core,",");
        $post->name=$name;
        $post->student_number=$sid;
        $post->address=$caddress;
        $post->phone=$phone;
        $post->email=$email;
        $post->intent=$intent;
        $post->outside=$request->outside;
        $post->program=$request->program;
        $post->module=$m;
        $post->semester=$request->semester;
        $post->eligibility=$request->eligibility;
        $post->do1=$request->do1;
        $post->do2=$request->do2;
        $post->do3=$request->do3;
        $post->do4=$request->do4;
        $post->core=$c;
        $post->security=$request->security;
        $post->cvs=$request->cvs;
        $post->agreed=$request->agree;
        
        $post->save();
                Session::flash('eoisuccess', 'Expression of Intrest has been applied  successfully.');
        return redirect('cv');
        
        
        
  
}



   public function seoi2(Request $request){
   
   
        $this->validate($request, [
        'cvs' => 'required|mimes:pdf,docx|max:2048'
     
        
        ]);
        
        
        $post = new Eoi2;
        
        $id = Session::get('wintecuser');
        if((($request->sname)==null) )
        {
            $v = "no";
            $v1=$request->no;
        
        }
        else if ( (($request->no)==null))
        {
            $v1 ="no";
            $v = $request->sname;
        }
       $post->student_number=$id;
        $post->sname=$v;
        $post->no=$v1;
         $posts = $request->file('cvs');
       
         $post->cvs = $posts->getClientOriginalName();
        $path = public_path() . '/uploads/students/cv/';
        $posts->move($path, $posts->getClientOriginalName() );
       
        $post->save();
                Session::flash('success', 'CV Uploaded Successfully.');
        return redirect('cv');
        
        
        
   
}









    public function studentlogin(Request $request){
   

        $this->validate($request, [
        'email'=>'required|email',
     'password'=>'required',
        
        ]);
        
        $post = new Register;
        
        $uname=$request->email;
        $pass = $request->password;
      $results =  DB::table('students')->where('email',$uname)->first();
         $sn = $results->student_number;
      $email = $results->email;
      $password=$results->password;
      $username=$results->student_fname;
      $userlname = $results->student_lname;
      $f = $username." ".$userlname;
   
   if (($uname == $email) && ($pass==$password))
{
    
    
        Session::put('wintecuser', $sn);
        Session::put('wintecuser1',$f);
        return redirect('sdashboard');
}


else  {
    
                Session::flash('studenterror', 'Incorrect Data.');
        return redirect('login');
  
}

}



   public function adminlogin(Request $request){
   

        $this->validate($request, [
        'email'=>'required|email',
     'password'=>'required',
        
        ]);
        
        $post = new Register;
        
        $uname=$request->email;
        $pass = $request->password;
      $results =  DB::table('students')->where('email',$uname)->first();
 //        $sn = $results->student_number;
      $email = "admin@wintec.ac.nz";
      $password="admin";
   
   if (($uname == $email) && ($pass==$password))
{
    
    
        Session::put('wintecadmin', $email);
        Session::put('wintecadmin1',$email);
        return redirect('dashboard');
}


else  {
    
                Session::flash('studenterror', 'Incorrect Data.');
        return redirect('alogin');
  
}

}


  public function staffregister(Request $request){
            $dt = new Carbon();
$fv = $dt->subYears(18)->format('Y-m-d');

        $this->validate($request, [
        'fname' => 'required',
        'lname' =>'required',
        'dname' => 'required',
        'dob' =>'required|date|before:'.$fv,
        'dept' => 'required',
        'email' =>'required|email',
        'gender'=>'required',
        'cno'=>'required',
        'address'=>'required',
        'city'=>'required',
        'country'=>'required',
        'role'=>'required'
        ]);
        $post = new St;
        $post->staff_id=$request->id;
        $post->staff_fname = $request->fname;
        $post->staff_lname = $request->lname;
        $post->staff_dept = $request->dname;
        $post->staff_dob = $request->dob;
        $post->staff_email = $request->email;
        $post->staff_gender = $request->gender;
        $post->staff_cno = $request->cno;
        $post->staff_address = $request->address;
        $post->staff_city = $request->city;
        $post->staff_country = $request->country;
        $post->staff_role = $request->role;
     
      
        
        $post->save();
        Session::flash('success', 'Staff Created  successfully.');
        return redirect('Staff');
        
        
    }
    
    
    
}
