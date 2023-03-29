@extends('user.layout.app')


@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">{{ auth()->user()->name }} Welcome to Data Entry Jobs</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-12 text-center">
                                                <h3>Are you looking to online job work at home?</h3>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Work at your part time / full time and earn money from online job,Data entry jobs,Form
                                                filling jobs.Wrok from your PC,Laptop or Mobile.So you are at right place as we are offering remote jobs work in your comfort.</p>
                                                <h4 class="text-center">Typing Jobs</h4>
                                                <p>Complete Typing assignments without errors on the fields provided.Search for typing assignments and get started.</p>
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
