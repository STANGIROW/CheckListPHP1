@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Список задач</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Добавить задачу</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Статус</th>
                    <th>Дедлайн</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status->name }}</td>
                        <td>{{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d.m.Y H:i') : 'Не указан' }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Редактировать</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection 