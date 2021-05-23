<form action="{{$url}}" method="POST" class="px-2 inline-block text-2xl text-red-light hover:text-red transition all transform cursor-pointer hover:scale-120">
    @method('DELETE')
    @csrf
    <button>
        <i class="fas fa-trash-alt"></i>
    </button>
</form>
