<h1>Tambah Area</h1>

<form action="{{ route('areas.store') }}" method="POST">
    @csrf

    <div>
        <label>Nama Area</label>
        <input type="text" name="area_name">
    </div>

    <div>
        <label>Kota</label>
        <input type="text" name="city">
    </div>

    <div>
        <label>Provinsi</label>
        <input type="text" name="province">
    </div>

    <button type="submit">
        Simpan
    </button>
</form>