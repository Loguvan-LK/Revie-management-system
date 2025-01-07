@extends('layouts.app')

@section('content')
<h1>Create Card</h1>

<form method="POST" action="{{ route('cards.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Card Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="user_id">Assign User</label>
        <select name="user_id" id="user_id" class="form-control">
            <option value="">None</option>
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create Card</button>
</form>
@endsection