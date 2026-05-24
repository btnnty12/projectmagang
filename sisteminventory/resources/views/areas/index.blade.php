<h1>Data Area</h1>

<a href="{{ route('areas.create') }}">
    Tambah Area
</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Area</th>
        <th>Kota</th>
        <th>Provinsi</th>
        <th>Aksi</th>
    </tr>

    @foreach($areas as $area)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $area->area_name }}</td>
        <td>{{ $area->city }}</td>
        <td>{{ $area->province }}</td>
        <td>
            <a href="{{ route('areas.edit', $area->id) }}">
                Edit
            </a>

            <form action="{{ route('areas.destroy', $area->id) }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>