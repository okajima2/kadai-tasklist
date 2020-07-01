@extends('layouts.app')

@section('content')

@if (Auth::check())
    <h1>タスク一覧</h1>

    <table class="table table-striped">
        
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{!! link_to_route('tasks.show', $task->content, ['task' => $task->id]) !!}</td>
                    <td>{!! link_to_route('tasks.show', $task->status, ['task' => $task->id]) !!}</td>
                </tr>
                @endforeach
            </tbody>

    </table>
    
    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'btn btn-primary']) !!}
    
@else
    {{-- ユーザ登録ページへのリンク --}}
    {!! link_to_route('signup.get', 'Signup', [], ['class' => 'btn btn-primary']) !!}
    
    {{-- ログインページへのリンク --}}
    {!! link_to_route('login', 'Login', [], ['class' => 'btn btn-primary']) !!}
@endif

@endsection