@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if ($message = Session::get('massage'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">Edit level Setting</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Level.Setting',$level->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Level 1 </label>
                                    <input type="text" name="level1" value="{{ $level->level1 }}" placeholder="Enter level 1 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 2 </label>
                                    <input type="text" name="level2" value="{{ $level->level2 }}" placeholder="Enter level 2 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 3 </label>
                                    <input type="text" name="level3" value="{{ $level->level3 }}" placeholder="Enter level 3 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 4 </label>
                                    <input type="text" name="level4" value="{{ $level->level4 }}" placeholder="Enter level 4 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 5 </label>
                                    <input type="text" name="level5" value="{{ $level->level5 }}" placeholder="Enter level 5 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 6 </label>
                                    <input type="text" name="level6" value="{{ $level->level6 }}" placeholder="Enter level 6 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 7 </label>
                                    <input type="text" name="level7" value="{{ $level->level7 }}" placeholder="Enter level 7 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 8 </label>
                                    <input type="text" name="level8" value="{{ $level->level8 }}" placeholder="Enter level 8 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 9 </label>
                                    <input type="text" name="level9" value="{{ $level->level9 }}" placeholder="Enter level 9 after how many user"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 10 </label>
                                    <input type="text" name="level10" value="{{ $level->level10 }}" placeholder="Enter level 10 after how many user"
                                        class="form-control">
                                </div>
                                <button class="btn btn-primary mt-3">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
