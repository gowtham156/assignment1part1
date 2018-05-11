@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Staff</div>

                <div class="panel-body">
                   @if(Session::has('success'))
<div class="alert alert-success">
   {{ Session::get('success') }}
</div>
@endif
             @if(Session::has('flop'))
<div class="alert alert-success">
   {{ Session::get('flop') }}
</div>
@endif
 
                   <form method="POST" action="public/staffr" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       
         <h5> Staff Identification Number</h5>
       <div class="form-group">
           <input type='text' name='id' value="<?php
           if(count($sid)>0)
           {
               
                 $combin = $sid->staff_id;
               $com = explode("-",$combin);
               $add = $com[1]+1;
               $p =$com[0];
               $value=$p."-00".$add;
               echo $value;
      
           }
           else  
           {
                            
               $id = "Staff-001";
                     echo $id;
      
           }
           
           ?>" class='form-control'  onkeypress="return false">
           
         
       </div>
     
       <h5> Staff First Name</h5>
       <div class="form-group">
           <input type="text" name="fname" class="form-control title" placeholder=" Staff First Name" onkeypress="return isChar(event);">
       </div>
            @if($errors->has('fname')) 
         <div class='alert alert-danger'>{{$errors->first('fname')}}</div>

   
   @endif
    
              <h5>Staff  Last Name</h5>
    
           <div class="form-group">
           <input type="text" name="lname" class="form-control title" placeholder=" Staff Last Name"  onkeypress="return isChar1(event);">
       </div>
            @if($errors->has('fname')) 
         <div class='alert alert-danger'>{{$errors->first('lname')}}</div>

   
   @endif
    
       
          <h5> Department Name</h5>
    
           <div class="form-group">
           <input type="text" name="dname" class="form-control title" placeholder="Department Name">
       </div>
               @if($errors->has('dname')) 
         <div class='alert alert-danger'>{{$errors->first('dname')}}</div>

   
   @endif
    
       <h5>  Date of Birth</h5>
    
       <div class="form-group">
           <input type="date" name="dob" class="form-control title" placeholder="Date of Birth">
       </div>
            @if($errors->has('dob')) 
         <div class='alert alert-danger'>{{$errors->first('dob')}}</div>

   
   @endif
    
          <h5>  Email Address</h5>
    
       <div class="form-group">
           <input type="email" name="email" class="form-control title" placeholder="student@example.com">
       </div>
            @if($errors->has('email')) 
         <div class='alert alert-danger'>{{$errors->first('email')}}</div>

   
   @endif
    
          <h5>  Gender</h5>
    
       <div class="form-group">
           
         &nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" class="flat" value="male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="radio" name="gender" class="flat" value="female">Female
       </div>
            @if($errors->has('gender')) 
         <div class='alert alert-danger'>{{$errors->first('gender')}}</div>

   
   @endif
    
       
             <h5> Contact Number</h5>
    
           <div class="form-group">
           <input type="tel" name="cno" class="form-control title" placeholder="Contact Number" onkeypress="return isDecimal(event);">
       </div>
            @if($errors->has('cno')) 
         <div class='alert alert-danger'>{{$errors->first('cno')}}</div>

   
   @endif
    
             <h5> Address</h5>
    
           <div class="form-group">
           <textarea name="address" rows="5" class="form-control title" placeholder="Address...." ></textarea>
       </div>
            @if($errors->has('address')) 
         <div class='alert alert-danger'>{{$errors->first('address')}}</div>

   
   @endif
    
         <h5>  City</h5>
    
       <div class="form-group">
           <input type="text" name="city" class="form-control title" placeholder="City name..">
       </div>
       
            @if($errors->has('city')) 
         <div class='alert alert-danger'>{{$errors->first('city')}}</div>

   
   @endif
    
       
          <h5>  Ethnicity</h5>
    
       <div class="form-group">
           <input type="text" name="country" class="form-control title" placeholder="Country name..">
       </div>
            @if($errors->has('country')) 
         <div class='alert alert-danger'>{{$errors->first('country')}}</div>

   
   @endif
    
       
       
         <h5>  Role</h5>
    
        <div class="form-group">
         
          <select name="role" class="form-control">
                  <option value="" selected="selected">Select</option>
  <?php
                if (count($posts) >0)    
                {foreach ($posts as $value) {
                               $id = $value->rolename;
                               echo "<option value='".$id."'>".$id."</option>";
                }
                }
                else {
                    
                        echo "<option value=''>Add Role in Staff Role</option>";
                        }
              
              ?>  
             </select>
             
         </div>  
            @if($errors->has('role')) 
         <div class='alert alert-danger'>{{$errors->first('role')}}</div>

   
   @endif
    
       
           <div class="form-group">
             &nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" name="submit" class="btn btn-warning" value="Register"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="reset" name="clear" class="btn btn-primary" value="Clear">
           </div>
       </div>
    </form>
  
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
