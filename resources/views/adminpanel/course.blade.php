@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course Details</div>

                <div class="panel-body">
                      @if(Session::has('success'))
<div class="alert alert-success">
   {{ Session::get('success') }}
</div>
@endif

                   <form method="POST" action="public/courser" accept-charset="UTF-8" enctype="multipart/form-data">
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       <h5>  Course Number</h5>
       <div class="form-group">
           <input type="text" name="cnumber" class="form-control title" placeholder="Course Number">
       </div>
            @if($errors->has('cnumber')) 
         <div class='alert alert-danger'>{{$errors->first('cnumber')}}</div>

   
   @endif
    
    
              <h5>  Course Name</h5>
    
           <div class="form-group">
           <input type="text" name="cname" class="form-control title" placeholder="Course Name">
       </div>
            @if($errors->has('cname')) 
         <div class='alert alert-danger'>{{$errors->first('cname')}}</div>

   
   @endif
    
    
           <h5>  Department</h5>
    
        <div class="form-group">
         
          <select name="dept" class="form-control">
                  <option value="" selected="selected">Select</option>
  <?php
                if (count($staffs) >0)    
                {foreach ($staffs as $value) {
                               $id = $value->dept_name;
                               echo "<option value='".$id."'>".$id."</option>";
                }
                }
                else {
                    
                        echo "<option value=''>Add Department in the Department Tab</option>";
                        }
              
              ?>  
             </select>
             
         </div>  
     
            @if($errors->has('dept')) 
         <div class='alert alert-danger'>{{$errors->first('dept')}}</div>

   
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
