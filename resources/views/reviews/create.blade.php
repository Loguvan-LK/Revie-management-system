@extends('layouts.app')

@section('content')
<h3>Log Review</h3>
<form action="{{ route('reviews.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="card_id" class="form-label">Card</label>
        <select class="form-control" name="card_id" required>
            <option value="">Select a Card</option>
            @foreach($cards as $card)
            <option value="{{ $card->id }}">{{ $card->name }} - {{ $card->status }}</option>
            @endforeach
        </select>

    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" name="date" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="time" class="form-label">Time</label>
        <input type="time" name="time" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" name="location" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection