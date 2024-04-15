@extends('layouts.app')

@section('home')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    Tus empresas:
                    <br>


                    @foreach(auth()->user()->companies()->get() as $company)
                        {{$company->name}}
                        <br>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
