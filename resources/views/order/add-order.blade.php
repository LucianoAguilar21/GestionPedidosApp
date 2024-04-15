@extends('layouts.app')

@section('home')
    <div class="container my-5">

            
         
                        <form action="">
                            @csrf
                            <input type="text" class="form-control mb-2" placeholder="Descripción:">
                            <input type="text" class="form-control mb-2"placeholder="Nombre del cliente:">

                            <label for="" class="form-label">¿Pagó?: </label>
                            <select class="form-select mb-2" aria-label="Default select example">
                                <option selected>Pagó</option>
                                <option value="1">No pagó</option>
                            </select>

                            <label for="" class="form-label mb-2">¿Delivery?: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" checked type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="enableAddress()">
                                <label class="form-check-label" for="inlineRadio1">Si</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input"  type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick="disableAddress()">
                                <label class="form-check-label" for="inlineRadio2" >No</label>
                              </div>

                              <input id="addressInput" type="text" class="form-control mb-2" placeholder="Dirección:">
                              <input id="deliveryPrice" type="number" class="form-control mb-2" placeholder="Precio delivery:">

                              <label for="" class="form-label">Para: </label>
                              <select class="form-select mb-2" aria-label="Default select example">
                                    @foreach (auth()->user()->companies()->get() as $company)
                                    <option >{{$company->name}}</option>
                                    @endforeach
                               
                              </select>
                        </form>
                


@endsection

<script>
    function enableAddress() {
        document.getElementById("addressInput").disabled = false;
        document.getElementById("deliveryPrice").disabled = false;
    }

    function disableAddress() {
        document.getElementById("addressInput").disabled = true;
        document.getElementById("deliveryPrice").disabled = true;
    }
</script>
