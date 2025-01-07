@extends('layouts.app')

@section('content')
<h1>All Cards</h1>
<a href="{{ route('cards.create') }}" class="btn btn-primary">Create Card</a>
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
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Users</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cards as $card)
        <tr>
            <td>{{ $card->id }}</td>
            <td>{{ $card->name }}</td>
            <td>{{ $card->status }}</td>
            <td>
                <form action="{{ route('cards.assign', $card) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <div class="form-control">
                        <select class="form-control" name="user_id" required>
                            <option value="">Assign User</option>
                            @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $card->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-info">Assign</button>
                    </div>
                </form>
            </td>

            <td>
                <form action="{{ route('cards.activate', $card) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success" {{ $card->status == 'active' ? 'disabled' : '' }}>Activate</button>
                </form>

                <form action="{{ route('cards.deactivate', $card) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning" {{ $card->status == 'inactive' ? 'disabled' : '' }}>Deactivate</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="pagination-container">
    @if ($cards->hasPages())
    <div class="pagination">
        <a href="{{ $cards->previousPageUrl() }}" class="prev {{ $cards->onFirstPage() ? 'disabled' : '' }}"
            @if($cards->onFirstPage()) style="pointer-events: none;" @endif>Previous</a>

        @foreach ($cards->getUrlRange(1, $cards->lastPage()) as $page => $url)
        <a href="{{ $url }}" class="{{ $page == $cards->currentPage() ? 'active' : '' }}"
            @if($page==$cards->currentPage()) style="pointer-events: none;" @endif>{{ $page }}</a>
        @endforeach
        <a href="{{ $cards->nextPageUrl() }}" class="next {{ $cards->hasMorePages() ? '' : 'disabled' }}"
            @if(!$cards->hasMorePages()) style="pointer-events: none;" @endif>Next</a>
    </div>
    @endif
</div>
@endsection