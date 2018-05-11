@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Department</div>

                <div class="panel-body">
                 
  @if(Session::has('success'))
<div class="alert alert-success">
   {{ Session::get('success') }}
</div>
@endif
  <form method="POST" action="public/deptr" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       <h5> Department Number</h5>
       <div class="form-group">
           <input type="text" name="dnumber" class="form-control title" placeholder="Department Number">
       </div>
         @if($errors->has('dnumber')) 
         <div class='alert alert-danger'>{{$errors->first('dnumber')}}</div>

   
   @endif
    
              <h5> Department Name</h5>
    
           <div class="form-group">
           <input type="text" name="dname" class="form-control title" placeholder="Department Name">
       </div>
        @if($errors->has('dname')) 
         <div class='alert alert-danger'>{{$errors->first('dname')}}</div>

   
   @endif
    

       
       
           <div class="form-group">
             &nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" name="submit" class="btn btn-warning" value="Submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="reset" name="clear" class="btn btn-primary" value="Clear">
           </div>
       </div>
    </form>
  
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
