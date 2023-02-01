@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
      <a href="" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Type</th>
                <th scope="col">Comandi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $index)
                <tr>
                    <td>{{ $index->id }}</td>
                    <td>{{ $index->name }}</td>
                    <td>{{ $index->cover_image }}</td>
                    <td>{{ $index->type}}</td>
                    <td>
                      <a href="" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                      <a href="" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                      <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr> 
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection