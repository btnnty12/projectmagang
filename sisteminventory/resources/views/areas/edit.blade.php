<h1>Edit Area</h1>

<form action="{{ route('areas.update', $area->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Area</label>
        <input type="text"
               name="area_name"
               value="{{ $area->area_name }}">
    </div>

    <div>
        <label>Kota</label>
        <input type="text"
               name="city"
               value="{{ $area->city }}">
    </div>

    <div>
        <label>Provinsi</label>
        <input type="text"
               name="province"
               value="{{ $area->province }}">
    </div>

    <button type="submit">
        Update
    </button>
</form>