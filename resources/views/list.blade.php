@extends('template')

@section('title')
    <title>Абоненты</title>
@endsection

@section('content')
<main>
    <div class="container">
{{--        <select name="sort" id="sort-list">--}}
{{--            <option value="">Сортировка</option>--}}
{{--            <option value="by-division">по подразделениям</option>--}}
{{--            <option value="by-birth">по дате рождения</option>--}}
{{--            <option value="by-id">по ID</option>--}}
{{--        </select>--}}
        <div class="create-wrap">
            <a class="create" href="{{ route('add.newabonent') }}">Создать</a>
        </div>

        <div class="main-items-wrap">
            <div class="main-item-title">

                <div class="list-wrap">
                    <div class="list-item-title">
                        <h3 class="main-title">Фамилия</h3>
                        <h3 class="main-title">Имя</h3>
                        <h3 class="main-title">Отчество</h3>
                        <h3 class="main-title">Дата рождения</h3>
                        <h3 class="main-title">Подразделение</h3>
                        <h3 class="main-title">Телефон</h3>
                    </div>
                    {{--                        @foreach($divisions as $division)--}}
                    {{--                            <div class="list-item">--}}
                    {{--                                <p class="list">{{ $division->division_name }}</p>--}}
                    {{--                                <p class="list">{{ $division->division_type }}</p>--}}
                    {{--                            </div>--}}
                    {{--                        @endforeach--}}
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
