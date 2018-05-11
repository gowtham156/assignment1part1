@extends('layouts.student')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Subject</div>

                <div class="panel-body">
                   <form method="POST" action="public/sregister" accept-charset="UTF-8" enctype="multipart/form-data">
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       <h5> Subject Name</h5>
       <div class="form-group">
           <input type="text" name="subjectname" class="form-control title" placeholder="Subject name..">
       </div>
       
              <h5> Subject Description </h5>
    
           <div class="form-group">
           <input type="text" name="subdes" class="form-control title" placeholder="Subject Description">
       </div>
       
       
              <h5> Course Number</h5>
    
           <div class="form-group">
           <input type="text" name="cnumber" class="form-control title" placeholder="Course Number">
       </div>
       
       
       
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
