@extends("layouts.app")

@section("title","Clientes")

@section("content")

<table class="table">
    <tr class="">
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Telefono</th>
        <th>Estado</th>
        <th>create</th>
        <th>Editar</th>
        
    </tr>
    @foreach($clientes as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->Nombre}}</td>
            <td>{{$client->Telefono}}</td>
            <td>{{$client->Email}}</td>
            <td>{{$client->Estado}}</td>
            <td>{{$client->created_at}}</td>
            <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$client->id}}" data-whatever="@fat">Editar</button></td>
        </tr>
        
<div class="modal fade" id="{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="editar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('clientes.update', $client->id) }}"method="post">
          @csrf
          {{ method_field('PUT') }}
          <div class="form-group">
            <p>Id: {{$client->id}}</p>
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" value="{{$client->Nombre}}" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">Email</label>
              <input type="text" class="form-control" value="{{$client->Email}}" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">telefono</label>
              <input type="text" class="form-control" value="{{$client->Telefono}}" id="phone" name="phone">
            </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Direccion</label>
              <input type="text" class="form-control" value="{{$client->Direccion}}" id="direccion" name="direccion">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Estado</label>
              <select class="form-select" name="estado" id="estado">
                  @if($client->Estado== "Activo")
                  <option value="Activo" selected>{{$client->Estado}}</option>
                  <option value="Inactivo">Inactivo</option>
                 @else
                 <option value="Activo" >Activo</option>
                  <option value="Inactivo" selected>{{$client->Estado}}</option>
                @endif
              </select>
            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
    @endforeach
</table>




<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Agregar Clientes</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">telefono</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Estado</label>
                <select class="form-select" name="estado" id="estado">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Enviar">
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>




@endsection