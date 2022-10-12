@extends('layouts.app')

@section('content')
  
                            
<div class="container">
    <div class="row justify-content-center">
    <div class="card card-default"></div>
<div class="card-header"></div>
<div class="card">
<div class="card-body">
 
    <h5 class="card-title"></h5>
     <input  id="myInput" type="text" placeholder="Cerca profilo..">   
          <a href="{{route('rubrica.create')}}"  class="btn btn-success float-end">Add User</a>
    <table class="table table-striped">
            <thead>
            <th>Nome  Cognome</th>
            <th>E-mail</th>
              <th>Phone/Mobile</th>
              <th class="text-justify">Actions</th>
            </thead>
                <tbody id="myTable">
                  @foreach($rubricas as $rubrica)
                <tr>
                    <td>
                        {{ $rubrica->name }} {{ $rubrica->surname }}
                    </td> 
                    <td>
                         {{ $rubrica->email }}
                    </td>
                    <td>
                          {{ $rubrica->phone }} 
                    </td>
                         <td>
                            <a href="{{route('rubrica.profile.edit',$rubrica->id)}}" class="btn btn-info btn-sm">Modifica</i></a><br>
                              <form action="{{route('rubrica.profile.delete',$rubrica->id)}}" method="post">
                                @method('DELETE')
                                 @csrf
                             <a href="{{ route('rubrica.profile.delete',$rubrica->id) }}" class="btn btn-danger btn-sm">Elimina</a>
                             </form>
                         </td> 

                           @endforeach   
                            
                    </tbody>
                  
           </table>
        
            
        </div>
</div>

            </div>
        </div>
    </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

