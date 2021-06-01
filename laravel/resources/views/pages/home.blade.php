@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <ul>
                @foreach ($employees as $employee)
                    <li>
                        {{ $employee -> firstname }}
                        {{ $employee -> lastname }}
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection