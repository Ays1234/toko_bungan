<div class="row border-bottom">
    <nav class="navbar navbar-static-top bg-white" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn" href="#"><i
                    class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    {{-- <input type="text" placeholder="Search for something..." class="form-control"
                        name="top-search" id="top-search"> --}}
                </div>
            </form>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <img alt="image" class="rounded-circle" src="{{ asset('assets/img/user.png') }}"  width="30px"/>
            </li>
            
           
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle align-self-center" href="#">
                    <span class="text-muted text-xl block">{{ auth()->guard('staff')->user()->name }}<b class="caret"></b></span>
                </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    {{-- <li><a class="dropdown-item" href="">Profile</a></li>
                    <li><a class="dropdown-item" href="">Contacts</a></li>
                    <li><a class="dropdown-item" href="">Mailbox</a></li>
                    <li class="dropdown-divider"></li> --}}
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </li>
        </ul>

    </nav>
</div>
