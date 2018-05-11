<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\StaffRole;
use App\St;
use App\Dept;
use App\Course;
use Session;
use Carbon\Carbon;
use App\Proposal;
use App\Subject;
class StaffRoleController extends Controller
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
    
    
    
    public function staffrolestore(Request $request){
        $this->validate($request, [
        'rolename' => 'required|min:3|unique:staffroles,rolename',
        'roledes' =>'required|min:3,max:500'
        ]);
        $post = new StaffRole;
        $post->rolename = $request->rolename;
        $post->role_description = $request->roledes;
        
        $post->save();
        Session::flash('success', 'Role created successfully.');
        return redirect('Staffrole');
        
    }
    
  
  
    public function deptr(Request $request){
        $this->validate($request, [
        'dnumber' => 'required|min:3|unique:department,dept_number',
        'dname' =>'required|min:3|unique:department,dept_name'
        ]);
        $post = new Dept;
        $post->dept_number = $request->dnumber;
        $post->dept_name = $request->dname;
        
        $post->save();
        Session::flash('success', 'Department added successfully.');
        return redirect('Department');
        
    }
    
  
   public function courser(Request $request){
        $this->validate($request, [
        'cnumber' => 'required|min:3|unique:course,cnumber',
        'cname' =>'required|min:3|unique:course,cname',
        'dept'=>'required|unique:course,dept'
        ]);
        $post = new Course;
        $post->cnumber = $request->cnumber;
        $post->cname = $request->cname;
        $post->dept = $request->dept;
        
        $post->save();
        Session::flash('success', 'Course  added successfully.');
        return redirect('Course');
        
    }
    
    public function subjectr(Request $request){
        $this->validate($request, [
        'subname' => 'required|min:3|unique:subjects,subname',
        'subdes' =>'required|min:3|unique:subjects,subdes',
        'sid'=>'required|unique:subjects,sub_id'
        ]);
        $post = new Subject;
        $post->subname = $request->subname;
        $post->subdes = $request->subdes;
        $post->sub_id = $request->sid;
        
        $post->save();
        Session::flash('success', 'Subject added successfully.');
        return redirect('Subject');
        
    }
    
  
  
    public function proposalr(Request $request){
        $this->validate($request, [
        'proposal' =>'required|min:3unique:proposal,student_number',
        ]);
        $post = new Proposal;
        $id = Session::get('wintecuser');
        $post->student_number = $id;
        $post->proposal = $request->proposal;
        
        $post->save();
        Session::flash('success', 'Proposal added successfully.');
        return redirect('sstatus');
        
    }
   
      
    
    
}
