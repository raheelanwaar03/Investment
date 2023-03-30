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
                        <div class="col-md-12">
                            <div class="card border-black shadow-lg w-100 mb-3">
                                <div class="card-title">
                                    <h2 class="text-center mt-3">Reset Password</h2>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                        @csrf
                                        @method('put')
                                        <div>
                                            <x-input-label for="current_password" :value="__('Current Password')" />
                                            <x-text-input id="current_password" name="current_password" type="password"
                                                class="mt-1 block w-full form-control" autocomplete="current-password" />
                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="password" :value="__('New Password')" />
                                            <x-text-input id="password" name="password" type="password"
                                                class="mt-1 block w-full form-control" autocomplete="new-password" />
                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                            <x-text-input id="password_confirmation" name="password_confirmation"
                                                type="password" class="mt-1 block w-full form-control"
                                                autocomplete="new-password" />
                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="flex items-center gap-4">
                                            <x-primary-button class='btn btn-success mt-3'>{{ __('Save') }}
                                            </x-primary-button>

                                            @if (session('status') === 'password-updated')
                                                <p x-data="{ show: true }" x-show="show" x-transition
                                                    x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                                    {{ __('Saved.') }}</p>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <h3 class="text-center">
                                        <a href="{{ route('User.Dashboard') }}"
                                            class="btn btn-outline-success">Dashboard</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
