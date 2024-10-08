<div class="card pc-user-card">
  <div class="card-body">
    <div class="d-flex align-items-center">
      <div class="flex-shrink-0">
        <img src="{{asset('dist/assets/images/user/avatar-1.jpg')}}" alt="user-image" class="user-avtar wid-45 rounded-circle" />
      </div>
      <div class="flex-grow-1 ms-3">
        <div class="dropdown">
          <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1 me-2">
                <h6 class="mb-0">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                <small class="text-body">Vendor</small>
              </div>
              <div class="flex-shrink-0">
                <div class="btn btn-icon btn-link-secondary avtar">
                  <i class="ph-duotone ph-windows-logo"></i>
                </div>
              </div>
            </div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li>
                <a href="{{ route('vendor.profile.index') }}" class="pc-user-links">
                  <i class="ph-duotone ph-user"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li
                ><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="pc-user-links">
                  <i class="ph-duotone ph-power"></i>
                  <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
