<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
    <a href="{{route('index')}}">

            <img class="img-fluid w-50 mt-3 mb-1" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png">

        </a>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="{{route('tutor.index')}}">
                    <i class="fa fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ (request()->is('admin/create')) ? 'active' : '' }}">
                <a href="{{route('tutor.myprofile')}}">
                    <i class="fa fa-user"></i>
                    <p>My Profile</p>
                </a>
            </li>
            <li class="{{ (request()->is('admins/create-course')) ? 'active' : '' }}">
                <a href="{{route('admin.create-course')}}">
                    <i class="fa fa-book"></i>
                    <p>My Courses</p>
                </a>
            </li>
              <li class="{{ (request()->is('admins/view-admins')) ? 'active' : '' }}">
                <a href="{{route('admin.view-admins')}}">
                    <i class="fa fa-users"></i>
                    <p>Reviews</p>
                </a>
            </li>
            <li class="{{ (request()->is('admins/view-courses')) ? 'active' : '' }}">
                <a href="{{route('admin.view-courses')}}">
                    <i class="fa fa-book"></i>
                    <p>Assignments</p>
                </a>
            </li>
            <li class="{{ (request()->is('admins/view-tutors')) ? 'active' : '' }}">
                <a href="{{route('admin.view-tutors')}}">
                    <i class="fa fa-users"></i>
                    <p>View All Tutors</p>
                </a>
            </li>
            <li class="{{ (request()->is('admins/view-students')) ? 'active' : '' }}">
                <a href="{{route('admin.view-students')}}">
                    <i class="fa fa-users"></i>
                    <p>View All My Students</p>
                </a>
            </li>
            <!--<li>
                <a href="upload-resource.html">
                    <i class="fa fa-file"></i>
                    <p>Upload Resource</p>
                </a>
            </li>-->

        </ul>
    </div>
</div>