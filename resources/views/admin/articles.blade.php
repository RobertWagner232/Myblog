@extends('admin.layouts.admin')

@section('title','Менеджер Статей')

@push('css')
    <link rel="stylesheet" href="<?php echo asset('css/admin/articles/allArticles.css')?>">
@endpush

@section('content')
    @if(session('status'))
        <p><div class="alert alert-secondary alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div></p>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Категория</th>
            <th scope="col">Описание</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($arts as $a)
            <tr>
                <th scope="row">{{ $a['id']}}</th>
                <td>{{ $a['title']}}</td>
                <td>{{ $a['category']}}</td>
                <td>{{ $a['description']}}</td>
                <td>
                    <a href="{{ route('showUpdateArticle', ['id'=>$a['id']])}}" class="btn  btn-outline-primary" role="button">Обновить</a>
                    <a href="{{ route('deleteArticle', ['id'=>$a['id']])}}" class="btn  btn-outline-danger" role="button">Удалить</a>
                </td>
            </tr>
        @endforeach
          
        </tbody>
    </table>
    {{ $arts->links() }}

    <div class="tools">
        <a href="{{ route('showCreateArticle') }}" class="btn  btn-outline-primary" role="button">Написать статью</a>
    </div>
@endsection