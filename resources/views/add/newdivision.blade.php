@extends('template')

@section('title')
    <title>Добавить подразделение</title>
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="add-division">

                <form action="{{ route('create') }}" method="post" class="add-division-item">
                    @csrf
                    <div class="add-item">
                        <label class="add-division-title">Название подразделения</label>
                        <input name="division_name" type="text" class="add-input-form" placeholder="Сборочный цех" required>
                    </div>
                    <div class="add-item">
                        <label class="add-division-title">Вид подразделения</label>
                        <input name="division_type" type="text" class="add-input-form" placeholder="Производственный отдел" required>
                    </div>
                    <button type="submit" class="button-submit">Добавить</button>
                </form>

                <a class="button-reset">Удалить</a>
            </div>
        </div>
    </main>
@endsection
