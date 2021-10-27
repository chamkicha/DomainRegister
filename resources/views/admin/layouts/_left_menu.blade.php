<ul id="menu" class="page-sidebar-menu">

    <li {!! (Request::is('admin/index1') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/index1') }}">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
            Dashboard
        </a>
    </li>

    
    <li {!! (Request::is('admin/clientsservice/clientServices') || Request::is('admin/clientsservice/clientServices/create')  ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Clients Service</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/clientsservice/clientServices') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/clientsservice/clientServices') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Client Service List
                </a>
            </li>
            <li {!! (Request::is('admin/clientsservice/clientServices/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/clientsservice/clientServices/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Create Order
                </a>
            </li>
        </ul>
    </li>

    
    <li {!! (Request::is('admin/client/clients') || Request::is('admin/client/clients/create')  ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Client</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/client/clients') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/client/clients') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Client List
                </a>
            </li>
            <li {!! (Request::is('admin/client/clients/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/client/clients/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Create Client
                </a>
            </li>
        </ul>
    </li>

    
    <li {!! (Request::is('admin/services/services') || Request::is('admin/services/services/create')  ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Service</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/services/services') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/services/services') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Service List
                </a>
            </li>
            <li {!! (Request::is('admin/services/services/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/services/services/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Create Service
                </a>
            </li>
        </ul>
    </li>

    <li {!! (Request::is('admin/generator_builder') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL('admin/generator_builder') }}">
            <i class="livicon" data-name="shield" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            CRUD Generator
        </a>
    </li>
 
   
    
    <li {!! (Request::is('admin/users') || Request::is('admin/bulk_import_users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li {!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) || Request::is('admin/user_profile') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/roles') || Request::is('admin/roles/create') || Request::is('admin/roles/*') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Roles</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/roles') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Roles List
                </a>
            </li>
            <li {!! (Request::is('admin/roles/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Role
                </a>
            </li>
        </ul>
    </li>


 
    <!-- Menus generated by CRUD generator -->
    @include('admin/layouts/menu')
</ul>
