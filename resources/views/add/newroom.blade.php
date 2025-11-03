@extends('template')

@section('main')
    <main>
        <div class="container">
            <div class="add-room">
                <div class="add-room-item">
                    <p class="add-room-title">Номер помещения</p>
                    <form action="">
                        <input type="text" class="add-room-input-form" placeholder="101G" required>
                    </form>
                </div>
                <div class="add-room-item">
                    <p class="add-room-title">Вид помещения</p>
                    <form action="">
                        <input type="text" class="add-room-input-form" placeholder="Лаборатория" required>
                    </form>
                </div>
                <div class="add-room-item">
                    <p class="add-room-title">Вид подразделения</p>
                    <form action="">
                        <input type="text" class="add-room-input-form" placeholder="Производственный отдел" required>
                    </form>
                </div>

                <div class="buttons-wrap">
                    <form action="" class="buttons">
                        <input type="submit" value="Добавить" class="button-submit">
                        <input type="reset" value="Удалить" class="button-reset">
                    </form>
                </div>

            </div>
        </div>
    </main>
@endsection
