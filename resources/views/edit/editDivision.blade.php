@extends('template')


@section('content')
    <main>
        <div class="container">
            <div class="add-division">

                <form action="{{ route('reverse', $division->id) }}" method="post" class="add-division-item">
                    @csrf
                    @method('PUT')
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

            </div>
        </div>
    </main>
@endsection
