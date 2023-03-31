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
                                    <div class="card bg-success">
                                        <div class="card-header">
                                            <div class="col-md-12 text-center">
                                                <h3 style="color:white">Are you looking to online job work at home?</h3>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-white">Work at your part time / full time and earn money from
                                                online job,Data entry jobs,Form
                                                filling jobs.Wrok from your PC,Laptop or Mobile.So you are at right place as
                                                we are offering remote jobs work in your comfort.</p>
                                            <h4 class="text-center" style="color:white">Typing Jobs</h4>
                                            <p class="text-white">Complete Typing assignments without errors on the fields
                                                provided.Search for typing assignments and get started.</p>

                                            <h4 class="text-white">Benifits of Working at home</h4>
                                            <ul class="text-white">
                                                <li>Better Work-Life Balance.</li>
                                                <li>Less Commute Stress.</li>
                                                <li>Location Independence.</li>
                                                <li>Improved Inclusivity.</li>
                                                <li>Money Savings.</li>
                                                <li>Positive Environmental Impact.</li>
                                                <li>Impact on Sustainability.</li>
                                                <li>A Customizable Office.</li>
                                            </ul>

                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="{{ route('User.Work') }}" class="btn btn-white text-success">Daily
                                                Work</a>
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
