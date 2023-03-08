@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>Elenco Projects</h2>
                </div>
                <div>
                    <a href="{{route('admin.projects.create')}}" class="btn btn-success">Aggiungi Projects</a>
                </div>
            </div>
        </div>
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Slug</th>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->slug}}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->slug)}}" title="Visualizza projects" class="btn btn-sm btn-square btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.projects.edit', $project->slug)}}" title="Modifica projects" class="btn btn-sm btn-square btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project->slug) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-square btn-danger" type="submit" title="Cancella projects">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection