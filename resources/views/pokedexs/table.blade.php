<h1>Pokedex Lists</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>species</th>
            <th>height</th>
            <th>weight</th>
            <th>hp</th>
            <th>attack</th>
            <th>defense</th>
            <th>image</th>
            <th>action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pokedexs as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->species }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->attack }}</td>
                <td>{{ $item->defense }}</td>
                <td>
                    <img src="{{ $item->image_url }}" width="80">
                </td>
                <td>
                    <a class="btn btn-warning btn-sm"
                       href="{{ url('/pokedexs/' . $item->id . '/edit') }}">
                        แก้ไข
                    </a>

                    <form action="{{ url('/pokedexs/' . $item->id) }}"
                          method="POST"
                          style="display:inline"
                          onsubmit="return confirm('คุณต้องการลบจริงหรือไม่?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            ลบ
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
