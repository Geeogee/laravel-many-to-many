@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <ul class="employee-list">
                @foreach ($employees as $employee)
                    <li class="employee">
                        <div class="employee-infos">
                            {{ $employee -> firstname }}
                            {{ $employee -> lastname }}
                        </div>
                        <ul class="employee-location">
                            <li>
                                <h4 class="employee-title">Location:</h4>
                            </li>
                            <li>
                                {{-- There's no need to use foreach, because an employee 
                                can only have one location --}}
                                {{ $employee -> location -> address }}
                                {{ $employee -> location -> state }}
                            </li>
                        </ul>

                        <ul class="employee-tasks">
                            <li class="tasks-count">
                                <h4 class="employee-title">Tasks ({{ $employee -> tasks -> count() }}):</h4>
                                <ol>
                                    @foreach ($employee -> tasks as $task)
                                        <li>
                                            {{ $task -> name }}
                                        </li>
                                    @endforeach
                                </ol>
                            </li>
                            
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection