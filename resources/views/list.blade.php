@extends('template')

@section('title')
    <title>Абоненты</title>
@endsection

@section('content')
<main>
    <div class="container">

        @can('create-all')
        <div class="create-wrap">
            <a class="create" href="{{ route('add.newabonent') }}">Создать</a>
        </div>
        @endcan

        <div class="main-items-wrap">
            <div class="main-item-title">

                <div class="list-wrap">
                    <div class="list-item-title">
                        <h3 class="main-title">Фамилия</h3>
                        <h3 class="main-title">Имя</h3>
                        <h3 class="main-title">Отчество</h3>
                        <h3 class="main-title">Дата рождения</h3>
                        <h3 class="main-title">Телефон</h3>
                        <h3 class="main-title">Подразделение</h3>
                    </div>
                    @foreach($abonents as $abonent)
                        <div class="list-item">
                            <a href="{{ route('edit', $abonent->id) }}" class="list">{{ $abonent->surname }}</a>
                            <a href="{{ route('edit', $abonent->id) }}" class="list">{{ $abonent->name }}</a>
                            <a href="{{ route('edit', $abonent->id) }}" class="list">{{ $abonent->patronym }}</a>
                            <a href="{{ route('edit', $abonent->id) }}" class="list">{{ $abonent->birth_date }}</a>
                            <a href="{{ route('edit', $abonent->id) }}" class="list">{{ $abonent->phone }}</a>
                            <p class="list">{{ $abonent->division->division_name }}</p>
                        </div>

                    @endforeach

                </div>

            </div>
        </div>

    </div>
</main>
@endsection
