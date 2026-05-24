<h1>Data Vendor</h1>

<a href="{{ route('vendors.create') }}">
    Tambah Vendor
</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Vendor</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Aksi</th>
    </tr>

    @foreach($vendors as $vendor)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $vendor->vendor_name }}</td>
        <td>{{ $vendor->phone }}</td>
        <td>{{ $vendor->address }}</td>

        <td>
            <a href="{{ route('vendors.edit', $vendor->id) }}">
                Edit
            </a>

            <form action="{{ route('vendors.destroy', $vendor->id) }}"
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