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
                            <h4 class="card-title text-center">Set level according to referal friends</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Level.Store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Level 1 </label>
                                    <input type="text" name="level1" placeholder="Enter level 1 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 2 </label>
                                    <input type="text" name="level2" placeholder="Enter level 2 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 3 </label>
                                    <input type="text" name="level3" placeholder="Enter level 3 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 4 </label>
                                    <input type="text" name="level4" placeholder="Enter level 4 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 5 </label>
                                    <input type="text" name="level5" placeholder="Enter level 5 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 6 </label>
                                    <input type="text" name="level6" placeholder="Enter level 6 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 7 </label>
                                    <input type="text" name="level7" placeholder="Enter level 7 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 8 </label>
                                    <input type="text" name="level8" placeholder="Enter level 8 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 9 </label>
                                    <input type="text" name="level9" placeholder="Enter level 9 after how many user" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Level 10 </label>
                                    <input type="text" name="level10" placeholder="Enter level 10 after how many user" class="form-control">
                                </div>
                                <button class="btn btn-primary mt-3">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- all level accourding to thier refers --}}

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Applied Limite</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Level 1</th>
                                            <th>Level 2</th>
                                            <th>Level 3</th>
                                            <th>Level 4</th>
                                            <th>Level 5</th>
                                            <th>Level 6</th>
                                            <th>Level 7</th>
                                            <th>Level 8</th>
                                            <th>Level 9</th>
                                            <th>Level 10</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    @foreach ($levels as $level)
                                    <tr>
                                        <td>{{ $level->level1 }}</td>
                                        <td>{{ $level->level2 }}</td>
                                        <td>{{ $level->level3 }}</td>
                                        <td>{{ $level->level4 }}</td>
                                        <td>{{ $level->level5 }}</td>
                                        <td>{{ $level->level6 }}</td>
                                        <td>{{ $level->level7 }}</td>
                                        <td>{{ $level->level8 }}</td>
                                        <td>{{ $level->level9 }}</td>
                                        <td>{{ $level->level10 }}</td>
                                        <td>
                                            <a href="{{ route('Admin.Edit.Level.View',['id'=>$level->id]) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
