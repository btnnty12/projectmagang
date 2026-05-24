<h1>Edit Vendor</h1>

<form action="{{ route('vendors.update', $vendor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Vendor</label>
        <input type="text"
               name="vendor_name"
               value="{{ $vendor->vendor_name }}">
    </div>

    <br>

    <div>
        <label>Phone</label>
        <input type="text"
               name="phone"
               value="{{ $vendor->phone }}">
    </div>

    <br>

    <div>
        <label>Address</label>
        <textarea name="address">{{ $vendor->address }}</textarea>
    </div>

    <br>

    <button type="submit">
        Update
    </button>
</form>