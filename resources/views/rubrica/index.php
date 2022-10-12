@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="card card-default"></div>
<div class="card-header"></div>
<div class="card">
<div class="card-body">
  
    <h5 class="card-title"></h5>
    <table class="table">
            <thead>
            <th>Nome e Cognome</th>
            <th>E-mail</th>
              <th>Phone/Mobile</th>
              <th>Actions</th>
            </thead>
                <tbody>
                <tr>
                    <td>
                       {{$rubrica->name}} {{$rubrica->surname}}
                    </td> 
                    <td>
                       {{$rubrica->email}}
                    </td>
                    <td>
                        {{$rubrica->phone}}
                    </td>  
                       <td>
                            <a href="{{route('users.rubrica.show',$rubrica->id)}}" class="btn btn-success btn-sm">Details</a>
                           
                            <a href="{{route('rubrica.index')}}" class="btn btn-primary btn-sm">Indietro</a>
                         </td>      
                    </tbody>
  
</table>
        </div>
</div>

            </div>
        </div>
    </div>
</div>

@endsection

