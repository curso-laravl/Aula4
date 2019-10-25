@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-header">HEROIS</div>

                <div class="card-body">
                    <!--form action="/heroi/salva-novo" method="POST"-->
                <form action="{{route('herois.salvanovo')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label>nome</label>
                    <div class="input-group mb-3">
                         <input type="text" class="form-control" name="nome">
                    </div>
                    <label >Identidade secreta</label>
                    <div class="input-group mb-3">
                         <input type="text" class="form-control" name="identidade_secreta">
                    </div>
                    
                    <label >origem</label>
                    <div class="input-group mb-3">
                            <input type="text" class="form-control" name="origem">
                    </div>
                    <label >forca</label>
                    <div class="input-group mb-3">
                            <select class="custom-select" name="forca" id="inputGroupSelect01">
                                    <option selected></option>
                                    <option value="forte">forte</option>
                                    <option value="media">média</option>
                                    <option value="fraca">fraca</option>
                                  </select>
                    </div>
                    <label >terraqueo?</label>
                    <div class="input-group mb-3">
                            <input type="checkbox" name="terraqueo">
                    </div>
                    <label >pode voar?</label>
                    <div class="input-group mb-3">
                            <input type="checkbox" name="pode_voar">
                    </div>
                    <label >foto</label>
                    <div class="input-group mb-3">
                            <input type="file" name="foto" id="foto">
                    </div>
                    
                            <input type="submit" value="Salvar!"/>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
