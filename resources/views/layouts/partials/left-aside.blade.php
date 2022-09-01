  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">รบบสารสนเทศ กสศ.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}} {{auth()->user()->lastname}} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ (Route::currentRouteName() === 'dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                แดชบอร์ด
              </p>
            </a>
          </li>
          {{-- @foreach (auth()->user()->active_role->active_menu_module->sortBy('order') as $module)
              <li class="nav-item {{ starts_with(Route::currentRouteName(),'dashboard.'.$module->code ) ? 'menu-open' : '' }}">
                <a href="" class="nav-link {{ starts_with(Route::currentRouteName(),'dashboard.'.$module->code ) ? 'active' : '' }}">
                  <i class="nav-icon fas {{ $module->menu_icon }}"></i>
                  <p>
                    {{$module->name}}
                    @if ($module->tasks->count() > 0) <i class="right fas fa-angle-left"></i> @endif
                  </p>
                </a>
                @if ($module->tasks->where('is_active',1)->count() > 0)
                  <ul class="nav nav-treeview">
                    @foreach ($module->tasks->where('is_active',1)->sortBy('order') as $task)
                      <li class="nav-item">
                        <a href="{{ route('dashboard.'.$module->code.'.'.$task->code) }}" class="nav-link {{ (Route::currentRouteName() === 'dashboard.'.$module->code.'.'.$task->code ? 'active' : '') }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p style="font-size: 15px">{{ $task->name }}</p>
                        </a>
                      </li>
                    @endforeach	
                  </ul>
                @endif
              </li>
          @endforeach --}}
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit()" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  ออกจากระบบ
                </p>
              </a>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>