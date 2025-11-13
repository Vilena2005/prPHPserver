@extends('template')

@section('content')
    <main>
        <div class="container">
            <div class="add-phone">

                <form action="{{ route('store') }}" method="post" class="form-wrap">
                    @csrf
                    <div class="add-phone-item">
                        <label class="add-phone-title">Фамилия</label>
                        <input name="surname" type="text" class="add-phone-input-form" placeholder="Алексеев" required>
                    </div>

                    <div class="add-phone-item">
                        <label class="add-phone-title">Имя</label>
                        <input name="name" type="text" class="add-phone-input-form" placeholder="Алексей" required>
                    </div>

                    <div class="add-phone-item">
                        <label class="add-phone-title">Отчество</label>
                        <input name="patronym" type="text" class="add-phone-input-form" placeholder="Алексеевич" required>
                    </div>

                    <div class="add-phone-item">
                        <label class="add-phone-title">Дата рождения</label>
                        <input name="birth_date" type="date" class="add-phone-input-form" placeholder="01.01.2000" required>
                    </div>

                    <div class="add-phone-item">
                        <label class="add-phone-title">Телефон</label>
                        <input name="phone" type="number" class="add-phone-input-form" placeholder="79008001100" required>
                    </div>
                    @error('phone')
                        <p>Неправильный номер телефона</p>
                    @enderror
                    <div class="add-phone-item">
                        <label class="add-phone-title">Подразделение</label>
                        <select name="division_id" class="form-select" id="sort-list" required>
                            <option value="">Выберите подразделение</option>
                            @foreach($divisions as $division)
                                <option value="{{ $division->id }}">
                                    {{ $division->division_name }} ({{ $division->division_type }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="button-submit">Добавить</button>
                </form>

            </div>
        </div>
    </main>
@endsection
