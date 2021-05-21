<form action="{{$url}}" method="POST" class="text-2xl text-red-light hover:text-red transition all transform cursor-pointer">
    @method('DELETE')
    @csrf
    <button>
        <i class="far fa-trash-alt"></i>
    </button>
</form>