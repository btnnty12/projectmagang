<h1>Tambah Vendor</h1>

<form action="{{ route('vendors.store') }}" method="POST">
    @csrf

    <div>
        <label>Nama Vendor</label>
        <input type="text" name="vendor_name">
    </div>

    <br>

    <div>
        <label>Phone</label>
        <input type="text" name="phone">
    </div>

    <br>

    <div>
        <label>Address</label>
        <textarea name="address"></textarea>
    </div>

    <br>

    <button type="submit">
        Simpan
    </button>
</form>