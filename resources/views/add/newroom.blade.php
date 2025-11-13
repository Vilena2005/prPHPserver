@extends('template')

@section('content')
    <main>
        <div class="container">
            <div class="add-room">
                <form action="{{ route('make') }}" method="post" class="form-wrap">
                    @csrf
                    <div class="add-phone-item">
                        <label class="add-phone-title">Номер помещения</label>
                        <input name="room_number" type="text" class="add-phone-input-form" placeholder="100B" required>
                    </div>

                    <div class="add-phone-item">
                        <label class="add-phone-title">Тип помещения</label>
                        <input name="room_type" type="text" class="add-phone-input-form" placeholder="Лаборатория" required>
                    </div>

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
