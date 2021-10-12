@extends('template.layout')

@section('content')
    <h1>Alterar usuário</h1>

    <form method="post" action="{{ route('crud.update', $user->id) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" value="{{ $user->email }}" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Nova senha</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
@endsection
