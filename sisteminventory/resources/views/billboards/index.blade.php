<h1>Data Billboard</h1>

<a href="{{ route('billboards.create') }}">
    Tambah Billboard
</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">

    <tr>
        <th>No</th>
        <th>Lokasi</th>
        <th>Area</th>
        <th>Vendor</th>
        <th>Ukuran</th>
        <th>Traffic</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    @foreach($billboards as $billboard)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>
            {{ $billboard->location_description }}
        </td>

        <td>
            {{ $billboard->area->area_name }}
        </td>

        <td>
            {{ $billboard->vendor->vendor_name }}
        </td>

        <td>
            {{ $billboard->length }} x
            {{ $billboard->height }} m
        </td>

        <td>
            {{ $billboard->traffic_volume }}
        </td>

        <td>

            @if($billboard->photo)

                <img
                    src="{{ asset('storage/' . $billboard->photo) }}"
                    width="120">

            @endif

        </td>

        <td>

            <a href="{{ route('billboards.edit', $billboard->id) }}">
                Edit
            </a>

            <form
                action="{{ route('billboards.destroy', $billboard->id) }}"
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