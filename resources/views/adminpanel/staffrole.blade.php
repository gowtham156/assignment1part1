@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Staff Role</div>

                <div class="panel-body">
                     @if(Session::has('success'))
<div class="alert alert-success">
   {{ Session::get('success') }}
</div>
@endif
 
                   <form method="POST" action="public/staffroler" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       <h5> Role Name</h5>
       <div class="form-group">
           <input type="text" name="rolename" class="form-control title" placeholder="Role name..">
       </div>
            @if($errors->has('rolename')) 
         <div class='alert alert-danger'>{{$errors->first('rolename')}}</div>

   
   @endif
    
    
              <h5> Role Description </h5>
    
           <div class="form-group">
           <input type="text" name="roledes" class="form-control title" placeholder="Role Description">
       </div>
            @if($errors->has('roledes')) 
         <div class='alert alert-danger'>{{$errors->first('roledes')}}</div>

   
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
