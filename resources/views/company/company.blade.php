
@extends('layouts.app')

@section('home')
<div class="container my-5">

    @foreach(auth()->user()->companies()->get() as $company)
    {{$company->name}}
    <br>
</div>
@endforeach
@endsection

