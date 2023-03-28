@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @if ($message = Session::get('massage'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Set limite Referal Commission</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Setting.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">User Minimum Widthraw</label>
                                    <input type="number" name="minimum_amount" class="form-control"
                                        placeholder="Enter User Referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">User Maximum Widthraw</label>
                                    <input type="number" name="maximun_amount" class="form-control"
                                        placeholder="Enter User Referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">First Commission</label>
                                    <input type="number" name="first_refer" class="form-control"
                                        placeholder="Enter User First referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">Second Commission</label>
                                    <input type="number" name="second_refer" class="form-control"
                                        placeholder="Enter User Second Referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">Referal Commission</label>
                                    <input type="number" name="third_refer" class="form-control"
                                        placeholder="Enter User Third Referal commission">
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- applied limete --}}

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
                                            <th>Minimum Widthraw</th>
                                            <th>Maximum Widthraw</th>
                                            <th>First Commission</th>
                                            <th>Second Commission</th>
                                            <th>Third Commission</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    @foreach ($settings as $setting)
                                    <tr>
                                        <td>{{ $setting->minimum_amount }}</td>
                                        <td>{{ $setting->maximun_amount }}</td>
                                        <td>{{ $setting->first_refer }}</td>
                                        <td>{{ $setting->second_refer }}</td>
                                        <td>{{ $setting->third_refer }}</td>
                                        <td>
                                            <a href="{{ route('Admin.Setting.edit', $setting->id) }}" class="btn btn-primary">Edit</a>
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
