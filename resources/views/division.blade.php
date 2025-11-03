@extends('template')

@section('title')
     <title>Подразделения</title>
@endsection

@section('add-button')

@endsection

@section('content')
    <main>
        <div class="container">
            <div>
{{--                <select name="sort" id="sort-list">--}}
{{--                    <option value="">Сортировка</option>--}}
{{--                    <option value="by-division">по подразделениям</option>--}}
{{--                    <option value="by-birth">по дате рождения</option>--}}
{{--                    <option value="by-id">по ID</option>--}}
{{--                </select>--}}
                <div class="create-wrap">
                    <a class="create" href="{{ route('add.newdivision') }}">Создать</a>
                </div>
            </div>


            <div class="main-items-wrap">
                <div class="main-item-title">

                    <div class="list-wrap">
                        <div class="list-item-title">
                            <h3 class="main-title">Вид подразделения</h3>
                            <h3 class="main-title">Название</h3>
                        </div>
                    @foreach($divisions as $division)
                        <div class="list-item">
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
