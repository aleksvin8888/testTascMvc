<form action="{{ route('departments.destroy', $department) }}" method="post">
    <div class="modal-body text-center">
        @csrf
        @method('DELETE')

        @if($department->users_count > 0)
            <h3> Неможливо видалити у департаменті <br>
              закріплено  {{$department->users_count}} користувачів </h3>
            <p>Департамент <br> {{$department->title}}</p>

        @else
            <h3> !!! Видалення !!! </h3>
            <p>Департамент <br> {{$department->title}}</p>
        @endif



    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Скасувати</button>
        <button type="submit" class="btn btn-danger">Так, видалити!</button>
    </div>
</form>
