@extends('layouts.app')

@section('content')
<h1>Edit Card</h1>

<form action="{{ route('cards.update', $card) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            <option value="active" {{ $card->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $card->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <div class="form-group">
        <label for="user_id">Assign to User (Optional)</label>
        <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $card->user_id }}">
    </div>

    <button type="submit" class="btn btn-warning">Update</button>
</form>
@endsection