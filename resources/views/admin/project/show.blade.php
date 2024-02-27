@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h2>{{ $project->name }}</h2>
                <div class="logo">
                    @if ($project->logo != null)
                        <img src="{{ asset('/storage/' . $project->logo) }}" alt="{{ $project->name }}">
                    @else
                        <img src="{{ asset('/placeholder/logo.jpeg') }}" alt="{{ $project->name }}">
                    @endif
                </div>
                <div class="my-3">
                    Inizio Progetto: {{ $project->start_project }}
                    <p>{{ $project->finish_project ? 'Fine Progetto: ' . $project->finish_project : '' }}</p>
                </div>
                <p>{{ $project->description }}</p>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-sm btn-primary"><a href="{{ route('admin.project.index') }}"
                            class="text-light text-decoration-none">
                            < Indietro </a>
                    </button>

                    <button class="btn btn-sm btn-primary mx-1"><a
                            href="{{ route('admin.project.edit', ['project' => $project]) }}"
                            class="text-light text-decoration-none">
                            Modifica</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
