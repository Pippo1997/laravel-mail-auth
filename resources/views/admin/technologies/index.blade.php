@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>Elenco Technologies</h2>
                </div>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                </thead>
                <tbody>
                    @foreach($technologies as $technology)
                    <tr>
                        <td>{{$technology->id}}</td>
                        <td>{{$technology->name}}</td>
                        <td>{{$technology->slug}}</td>
                        {{-- <td>
                            <a href="{{ route('admin.technologies.show', $technology->slug)}}" title="Visualizza technologies" class="btn btn-sm btn-square btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.technologies.edit', $technology->slug)}}" title="Modifica technologies" class="btn btn-sm btn-square btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.technologies.destroy', $technology->slug) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-square btn-danger" type="submit" title="Cancella technologies">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection