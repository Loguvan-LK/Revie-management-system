@extends('layouts.app')

@section('content')
<head>
<style>
    .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination a {
    padding: 8px 12px;
    margin: 0 4px;
    text-decoration: none;
    color: #007bff;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.pagination a.active {
    background-color: #007bff;
    color: white;
}

.pagination a.disabled {
    color: #aaa;
    pointer-events: none;
}

.pagination a:hover:not(.disabled) {
    background-color: #f1f1f1;
}

</style>
</head>
<div class="d-flex justify-content-between mb-3">
    <h3>Reviews</h3>
    <a href="{{ route('reviews.create') }}" class="btn btn-primary">Log Review</a>
</div>
<form class="mb-3" method="GET" action="{{ route('reviews.index') }}">
    <div class="row">
        <div class="col-md-4">
            <input type="text" name="card_id" class="form-control" placeholder="Card ID" value="{{ request('card_id') }}">
        </div>
        <div class="col-md-4">
            <input type="date" name="date" class="form-control" value="{{ request('date') }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-secondary">Filter</button>
        </div>
    </div>
</form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Card Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reviews as $review)
    <tr>
    <td>{{ $review->id }}</td>

        <td>{{ $review->card->name }}</td>
        <td>{{ $review->date }}</td>
        <td>{{ $review->time }}</td>
        <td>{{ $review->location }}</td>
        <td>
            <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

    </tbody>
</table>

@endsection