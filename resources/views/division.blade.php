@extends('template')

@section('title')
     <title>Подразделения</title>
@endsection

@section('content')
    <main>
        <div class="container">
            @can('create-all')
                <div>
                    <div class="create-wrap">
                        <a class="create" href="{{ route('add.newdivision') }}">Создать</a>

                    </div>
                </div>
            @endcan


            <div class="main-items-wrap">
                <div class="main-item-title">

                    <div class="list-wrap">
                        <div class="list-item-title">
                            <h3 class="main-title">Вид подразделения</h3>
                            <h3 class="main-title">Название</h3>
                        </div>
                    @foreach($divisions as $division)
                        <div class="list-item">
{{--                            <a href="{{ route('transform', $division->id) }}" class="list">{{ $division->division_name }}</a>--}}
                            <p class="list">{{ $division->division_name }}</p>
                            <p class="list">{{ $division->division_type }}</p>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
