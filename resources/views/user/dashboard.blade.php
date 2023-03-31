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
                                                <h2 style="color:white">Are you looking to online job work at home?</h2>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="text-white">Work at your part time / full time and earn money from
                                                online job,Data entry jobs,Form
                                                filling jobs.Wrok from your PC,Laptop or Mobile.So you are at right place as
                                                we are offering remote jobs work in your comfort.</h5>
                                            <h4 class="text-center" style="color:white">Typing Jobs</h4>
                                            <h5 class="text-white">Complete Typing assignments without errors on the fields
                                                provided.Search for typing assignments and get started.This blog has posts
                                                and articles from numerous authors detailing how you can earn money whilst
                                                working from home. It caters specifically towards women who want to find a
                                                remote career. It’s one of the most well known blogs and was founded by
                                                Holly Reisem Hanna. Whilst being a stay-at-home mom, she felt the need to
                                                try something different from the usual 9-5. She now blogs for a living,
                                                collating articles, tips and tricks for others who would also like to work
                                                from home.
                                                <ul>
                                                    <li>Verifying and correcting inaccurate data</li>
                                                    <li>
                                                        Digitizing data using software like word processors and spreadsheets
                                                    </li>
                                                    <li>
                                                        Ensuring consistent formatting of organized data
                                                    </li>
                                                    <li>
                                                        Analyzing data sets and compiling reports
                                                    </li>
                                                    <li>
                                                        Retrieving missing information whenever necessary
                                                    </li>
                                                    <li>
                                                        Observe data cleanliness and security standards
                                                    </li>
                                                </ul>
                                            </h5>
                                            <h3>Becoming a Specialist</h3>
                                            <h5>
                                                Like virtual assistants, data entry specialists also wear many hats. It all
                                                depends on their employer’s requirements and business goals. They could be
                                                data researchers by day, eagle-eyed fact-checkers by night. Below are some
                                                of the responsibilities that data entry specialists may take on
                                            </h5>

                                            <h3 class="text-white">Benifits of Working at home</h3>
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
