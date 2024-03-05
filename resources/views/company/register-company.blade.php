@extends('layouts.app')

@section('home')
<div class="container my-5"> 
    <form action="/registerCompany" method="POST">
        @csrf
        <div class="mb-3">
            <label for="companyName">Nombre:</label>
            <input name="companyName" id="companyName" type="text" class="form-control" placeholder="Nombre de tu empresa">
        </div>
        
        <div class="mb-3">  
            <label for="companyPassword">Contraseña:</label>
            <input name="companyPassword" type="password" id="companyPassword" class="form-control" placeholder="contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection