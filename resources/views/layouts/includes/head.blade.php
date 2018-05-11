<!-- Right Side Of Navbar -->
                <ul >
                 <li style="background-color:#ffff00;">  <img src="https://learning.wintec.ac.nz/pluginfile.php/1/core_admin/logocompact/0x70/1524795119/wintec-logo.png">
                    <!-- Authentication Links -->
                    @if (Session::has('wintecuser'))
                   <li><a href="{{ url('/sapplyeoi') }}">Apply EOI</a></li>
               <!--       <li><a href="{{ url('/scalender') }}">Calender</a></li>-->
                        <li><a href="{{ url('/sdashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('/smessage') }}">Messages</a></li>
                    <li><a href="{{ url('/sstatus') }}">Proposal</a></li>
                            <!--    <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa fa-user"></i>Profile</a></li>
                          -->            <li><a href="{{ url('/cpass') }}"><i class="fa fa-btn fa-lock"></i>&nbsp;Change Password</a></li>
                          
                                      <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp;Logout</a></li>
                              <li >
                            <a href="#" style="background-color:#ffff00;color:#000000;float:right;">
              @if (Session::has('wintecuser1'))        {{ Session::get('wintecuser1') }} @endif
                            </a></li>
                    
                    @else
                      
                         <li><a href="{{ url('/login') }}">Log In</a></a></li>
                 
                 
                    @endif
                </ul>
                
                
                