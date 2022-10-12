@extends('layouts.app')

@section('content')

<div class="card card-default"></div>
<div class="card-header">{{(!empty($rubrica))? "Profilo utente: $rubrica->name $rubrica->surname " : 'Create il tuo profilo'}}
</div>
<div class="card">
<div class="card-body">
<form action="{{isset($rubrica)
                ?route('rubrica.profile.update',$rubrica->id):
                route('rubrica.profile.store')}}" 
                method="POST" enctype="multipart/form-data">
        @csrf

        @if(isset($rubrica))
         @method('PUT')
        @endif 


<div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" value="{{(isset($rubrica))?$rubrica->name :''}}">
        @error('name')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>
<div class="form-group">
        <label for="surname">Cognome</label>
        <input type="text" class="form-control @error('surname') is-invalid @enderror"  name="surname" id="surname" value="{{(isset($rubrica))?$rubrica->surname :''}}">
        @error('surname')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>

<div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" value="{{(isset($rubrica))?$rubrica->email :''}}">
        @error('email')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>

<div class="form-group">
        <label for="phone">Telefono/Cellulare</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror"  name="phone" id="phone" value="{{(isset($rubrica))?$rubrica->phone :''}}">
        @error('phone')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>

<button type="submit" class="btn btn-success btn-sm  my-3" > {{ (isset($rubrica))?'Modifica profilo' : 'Salva Profilo'}}</button>
<a href="{{route('rubrica.index')}}" class="btn btn-primary btn-sm">Indietro</a>
</div>

</form>


@endsection


