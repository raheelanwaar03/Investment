@extends('user.layout.app')


@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">{{ auth()->user()->name }} Welcome to User Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum itaque quam doloribus.
                                                Accusamus, iste voluptates! Odit, incidunt? Voluptas distinctio vitae doloribus ipsa atque sit,
                                                eveniet pariatur beatae adipisci nihil earum dicta aspernatur molestias eligendi dolorem nostrum
                                                voluptatum. Mollitia minus deserunt delectus. Deleniti esse sapiente provident minima. Error
                                                itaque placeat libero!</p>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="{{ route('User.Work') }}" class="btn btn-primary">Daily Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
