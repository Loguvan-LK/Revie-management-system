@extends('layouts.app')

@section('content')
<h1>Edit Review</h1>

<form action="{{ route('reviews.update', $review) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="card_id">Card</label>
        <select name="card_id" id="card_id" class="form-control" required>
            @foreach($cards as $card)
            <option value="{{ $card->id }}" {{ $review->card_id == $card->id ? 'selected' : '' }}>
                {{ $card->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" class="form-control" value="{{ $review->date }}" required>
    </div>

    <div class="form-group">
        <label for="time">Time</label>
        <input type="text" name="time" id="time" class="form-control" value="{{ $review->time }}" required>
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" class="form-control" value="{{ $review->location }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Review</button>
</form>
@endsection