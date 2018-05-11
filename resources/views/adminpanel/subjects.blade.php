@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Subject</div>

                <div class="panel-body">
                     @if(Session::has('success'))
<div class="alert alert-success">
   {{ Session::get('success') }}
</div>
@endif
 
                   <form method="POST" action="public/subr" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       <h5> Subject Name</h5>
       <div class="form-group">
           <input type="text" name="subname" class="form-control title" placeholder="Subject name..">
       </div>
            @if($errors->has('subname')) 
         <div class='alert alert-danger'>{{$errors->first('subname')}}</div>

   
   @endif
    
              <h5> Subject Description </h5>
    
           <div class="form-group">
           <input type="text" name="subdes" class="form-control title" placeholder="Subject Description">
       </div>
            @if($errors->has('subdes')) 
         <div class='alert alert-danger'>{{$errors->first('subdes')}}</div>

   
   @endif
    
       
       
              <h5> Subject Number</h5>
    
           <div class="form-group">
           <input type="text" name="sid" class="form-control title" placeholder="Course Number">
       </div>
       
            @if($errors->has('sid')) 
         <div class='alert alert-danger'>{{$errors->first('sid')}}</div>

   
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
