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
                        {{-- <td> content </td> --}}
                        <td>{{$project->slug}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>