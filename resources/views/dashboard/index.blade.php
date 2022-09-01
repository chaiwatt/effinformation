<x-app-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">แดชบอร์ด</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">แดชบอร์ด</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          {{-- {{auth()->user()->active_role->modules->count()}} --}}
          {{-- @foreach (auth()->user()->active_role->active_menu_module->sortBy('order') as $module)
           
             @if ($module->pivot->task->function_type_id == 1 && $module->pivot->task->is_active == 1)
              <div class="col-lg-3 col-6">
                  @livewire($module->pivot->task->componentName($module->code,$module->pivot->task->code), ['task' => $module->pivot->task, 'module' => $module]) 
              </div>
             @endif
          @endforeach --}}
        
            {{-- @foreach (auth()->user()->active_role->active_menu_module->sortBy('order') as $module)
                @if ($module->tasks->where('function_type_id',1)->where('is_active',1)->count() > 0)
                    @foreach ($module->tasks->where('function_type_id',1)->where('is_active',1)->sortBy('order') as $task)
                        <div class="col-lg-3 col-6">
                            @livewire($task->componentName($module->code,$task->code), ['task' => $task, 'module' => $module]) 
                        </div>
                    @endforeach	
                @endif
            @endforeach --}}
        </div>
      </div><!-- /.container-fluid -->
    </div>
  </x-app-layout>