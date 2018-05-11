@extends('layouts.student')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Student Register</div>

                <div class="panel-body">
              <!--        @if(count($errors)> 0 )
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $e)
        <li style=" list-style-type:none;">{{ $e }}</li>
        @endforeach
    </ul>
    </div>
    @endif
   
-->

  @if(Session::has('studentsuccess'))
<div class="alert alert-success">
   {{ Session::get('studentsuccess') }}
</div>
@endif
  
    <form method="POST" action="public/supdate" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off" onpaste="return false" >
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       
       
       
               <h5>  Phone Number</h5>
    
       <div class="form-group">
           <input type="text" name="phone" class="form-control title" placeholder="Country name.." >
       </div>
      @if($errors->has('phone)) 
         <div class='alert alert-danger'>{{$errors->first('phone')}}</div>

   
   @endif
        
  
  
          <h5>  Address</h5>
    
       <div class="form-group">
           <textarea name="address" class="form-control title" placeholder="Address.." rows=5 ></textarea>
       </div>
      @if($errors->has('address')) 
         <div class='alert alert-danger'>{{$errors->first('address')}}</div>

   
   @endif
        
  
  
          <h5>  Suburb</h5>
    
       <div class="form-group">
           <input type="text" name="suburb" class="form-control title" placeholder="Suburb name.." >
       </div>
      @if($errors->has('suburb')) 
         <div class='alert alert-danger'>{{$errors->first('suburb')}}</div>

   
   @endif
        
  
       
   
       <h5>  City</h5>
    
       <div class="form-group">
           <input type="text" name="city" class="form-control title" placeholder="Country name.." >
       </div>
      @if($errors->has('city')) 
         <div class='alert alert-danger'>{{$errors->first('city')}}</div>

   
   @endif
        
          <h5>  State</h5>
    
       <div class="form-group">
           <input type="text" name="state" class="form-control title" placeholder="Country name.." >
       </div>
      @if($errors->has('state')) 
         <div class='alert alert-danger'>{{$errors->first('state')}}</div>

   
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
