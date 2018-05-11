{"filter":false,"title":"staffrole.blade.php","tooltip":"/resources/views/adminpanel/staffrole.blade.php","undoManager":{"mark":15,"position":15,"stack":[[{"start":{"row":0,"column":0},"end":{"row":38,"column":0},"action":"insert","lines":["@extends('layouts.dash')","","@section('content')","<div class=\"container\">","    <div class=\"row\">","        <div class=\"col-md-10 col-md-offset-1\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">Staff Role</div>","","                <div class=\"panel-body\">","                   <form method=\"POST\" action=\"public/staffroler\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\" autocomplete=\"off\">","       {{ csrf_field() }}\t\t<!—To protect your application from CSRF attacks-->","       <h5> Role Name</h5>","       <div class=\"form-group\">","           <input type=\"text\" name=\"rolename\" class=\"form-control title\" placeholder=\"Role name..\">","       </div>","       ","              <h5> Role Description </h5>","    ","           <div class=\"form-group\">","           <input type=\"text\" name=\"roledes\" class=\"form-control title\" placeholder=\"Role Description\">","       </div>","       ","       ","       ","           <div class=\"form-group\">","             &nbsp;&nbsp;&nbsp;&nbsp;  <input type=\"submit\" name=\"submit\" class=\"btn btn-warning\" value=\"Register\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type=\"reset\" name=\"clear\" class=\"btn btn-primary\" value=\"Clear\">","           </div>","       </div>","    </form>","  ","  ","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":1}],[{"start":{"row":22,"column":7},"end":{"row":28,"column":4},"action":"insert","lines":["     @if($errors->has('dnumber')) ","         <div class='alert alert-danger'>{{$errors->first('dnumber')}}</div>","","   ","   @endif","    ","    "],"id":2}],[{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"remove","lines":["r"],"id":3},{"start":{"row":22,"column":35},"end":{"row":22,"column":36},"action":"remove","lines":["e"]},{"start":{"row":22,"column":34},"end":{"row":22,"column":35},"action":"remove","lines":["b"]},{"start":{"row":22,"column":33},"end":{"row":22,"column":34},"action":"remove","lines":["m"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"remove","lines":["u"]},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"remove","lines":["n"]},{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"remove","lines":["d"]}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["r"],"id":4},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"insert","lines":["o"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"insert","lines":["l"]}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":33},"action":"remove","lines":["rol"],"id":5},{"start":{"row":22,"column":30},"end":{"row":22,"column":37},"action":"insert","lines":["roledes"]}],[{"start":{"row":23,"column":65},"end":{"row":23,"column":66},"action":"remove","lines":["r"],"id":6},{"start":{"row":23,"column":64},"end":{"row":23,"column":65},"action":"remove","lines":["e"]},{"start":{"row":23,"column":63},"end":{"row":23,"column":64},"action":"remove","lines":["b"]},{"start":{"row":23,"column":62},"end":{"row":23,"column":63},"action":"remove","lines":["m"]},{"start":{"row":23,"column":61},"end":{"row":23,"column":62},"action":"remove","lines":["u"]},{"start":{"row":23,"column":60},"end":{"row":23,"column":61},"action":"remove","lines":["n"]},{"start":{"row":23,"column":59},"end":{"row":23,"column":60},"action":"remove","lines":["d"]}],[{"start":{"row":23,"column":59},"end":{"row":23,"column":60},"action":"insert","lines":["r"],"id":7},{"start":{"row":23,"column":60},"end":{"row":23,"column":61},"action":"insert","lines":["o"]},{"start":{"row":23,"column":61},"end":{"row":23,"column":62},"action":"insert","lines":["l"]},{"start":{"row":23,"column":62},"end":{"row":23,"column":63},"action":"insert","lines":["e"]},{"start":{"row":23,"column":63},"end":{"row":23,"column":64},"action":"insert","lines":["d"]},{"start":{"row":23,"column":64},"end":{"row":23,"column":65},"action":"insert","lines":["e"]},{"start":{"row":23,"column":65},"end":{"row":23,"column":66},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":7},"end":{"row":22,"column":4},"action":"insert","lines":["     @if($errors->has('dnumber')) ","         <div class='alert alert-danger'>{{$errors->first('dnumber')}}</div>","","   ","   @endif","    ","    "],"id":8}],[{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"remove","lines":["r"],"id":9},{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"remove","lines":["e"]},{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"remove","lines":["b"]},{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"remove","lines":["m"]},{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"remove","lines":["u"]},{"start":{"row":16,"column":31},"end":{"row":16,"column":32},"action":"remove","lines":["n"]},{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"remove","lines":["d"]}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["r"],"id":10},{"start":{"row":16,"column":31},"end":{"row":16,"column":32},"action":"insert","lines":["o"]},{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"insert","lines":["l"]}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":33},"action":"remove","lines":["rol"],"id":11},{"start":{"row":16,"column":30},"end":{"row":16,"column":38},"action":"insert","lines":["rolename"]}],[{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"remove","lines":["r"],"id":12},{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"remove","lines":["e"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"remove","lines":["b"]},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"remove","lines":["m"]},{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"remove","lines":["u"]},{"start":{"row":17,"column":60},"end":{"row":17,"column":61},"action":"remove","lines":["n"]},{"start":{"row":17,"column":59},"end":{"row":17,"column":60},"action":"remove","lines":["d"]}],[{"start":{"row":17,"column":59},"end":{"row":17,"column":60},"action":"insert","lines":["r"],"id":13},{"start":{"row":17,"column":60},"end":{"row":17,"column":61},"action":"insert","lines":["o"]},{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"insert","lines":["l"]}],[{"start":{"row":17,"column":59},"end":{"row":17,"column":62},"action":"remove","lines":["rol"],"id":14},{"start":{"row":17,"column":59},"end":{"row":17,"column":67},"action":"insert","lines":["rolename"]}],[{"start":{"row":9,"column":40},"end":{"row":10,"column":20},"action":"insert","lines":["","                    "],"id":15}],[{"start":{"row":10,"column":20},"end":{"row":15,"column":1},"action":"insert","lines":[" @if(Session::has('success'))","<div class=\"alert alert-success\">","   {{ Session::get('success') }}","</div>","@endif"," "],"id":16}]]},"ace":{"folds":[],"scrolltop":138.5,"scrollleft":0,"selection":{"start":{"row":15,"column":1},"end":{"row":15,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":83,"mode":"ace/mode/php"}},"timestamp":1525687495843,"hash":"573e2b8f7e60757e4eb20e13287bd9de60d87d21"}