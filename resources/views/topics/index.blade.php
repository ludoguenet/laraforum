@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="list-group">
            @foreach ($topics as $topic)
            <div class="list-group-item mb-2">
                <h4><a href="{{ route('topics.show', $topic) }}">{{ $topic->title }}</a></h4>
                <p>{{ $topic->content }}</p>
                <div class="d-flex flex-column">
                <small>Posté le {{ $topic->created_at->format('d/m/Y') }} par <span class="badge badge-primary">{{ $topic->user->name }}</span></small>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{ $topics->links() }}
        </div>
    </div>
@endsection
