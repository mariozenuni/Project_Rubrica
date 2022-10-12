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
          <a href="{{route('rubrica.create')}}"  class="btn btn-success float-end">Add User</a><br><br>
    <table  id="selectedColumn" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <th class="th-sm">Nome  Cognome</th>
            <th class="th-sm">E-mail</th>
              <th class="th-sm">Phone/Mobile</th>
              <th class="text-justify th-sm">Actions</th>
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
                            <a href="{{route('rubrica.profile.edit',$rubrica->id)}}" class="btn btn-info " id="modifica">Modifica</i></a><br>
                              <form action="{{route('rubrica.profile.delete',$rubrica->id)}}" method="post">
                                @method('DELETE')
                                 @csrf
                             <a href="{{ route('rubrica.profile.delete',$rubrica->id) }}" class="btn btn-danger " id="elimina">Elimina</a>
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
 <script src="js/jquery.dataTables.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $('#selectedColumn').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>



<style>

    #modifica
    {
    margin-left: 86px;
    position: relative;
    left: -74px;
   
    }

    #elimina
    {
    margin-top  : 1px;
     position: relative;
       top: -37px;
       right: -102px;
    }

table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
    
</style>

