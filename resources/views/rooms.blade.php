@extends('template')

@section('title')
    <title>Помещения</title>
@endsection

@section('content')
    <main>
        <div class="container">

            @can('create-all')
            <div class="create-wrap">
                <a class="create" href="{{ route('add.newroom') }}">Создать</a>
            </div>
            @endcan

            <div class="main-items-wrap">
                <div class="main-item-title">

                    <div class="list-wrap">
                        <div class="list-item-title">
                            <h3 class="main-title">Номер помещения</h3>
                            <h3 class="main-title">Тип помещения</h3>
                            <h3 class="main-title">Подразделение</h3>
                        </div>
                        @foreach($rooms as $room)
                            <div class="list-item">
                                <a href="{{ route('modify', $room->id) }}" class="list">{{ $room->room_number }}</a>
                                <a href="{{ route('modify', $room->id) }}" class="list">{{ $room->room_type }}</a>
                                <a class="list">{{ $room->division->division_name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
