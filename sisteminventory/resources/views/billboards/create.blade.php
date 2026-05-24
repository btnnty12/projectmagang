<h1>Tambah Billboard</h1>

<form action="{{ route('billboards.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div>
        <label>Area</label>

        <select name="area_id">

            @foreach($areas as $area)

                <option value="{{ $area->id }}">
                    {{ $area->area_name }}
                </option>

            @endforeach

        </select>
    </div>

    <br>

    <div>
        <label>Vendor</label>

        <select name="vendor_id">

            @foreach($vendors as $vendor)

                <option value="{{ $vendor->id }}">
                    {{ $vendor->vendor_name }}
                </option>

            @endforeach

        </select>
    </div>

    <br>

    <div>
        <label>Location Description</label>

        <input type="text"
               name="location_description">
    </div>

    <br>

    <div>
        <label>View From</label>

        <input type="text"
               name="view_from">
    </div>

    <br>

    <div>
        <label>View To</label>

        <input type="text"
               name="view_to">
    </div>

    <br>

    <div>
        <label>Length</label>

        <input type="number"
               step="0.01"
               name="length">
    </div>

    <br>

    <div>
        <label>Height</label>

        <input type="number"
               step="0.01"
               name="height">
    </div>

    <br>

    <div>
        <label>Billboard Type</label>

        <input type="text"
               name="billboard_type">
    </div>

    <br>

    <div>
        <label>Orientation</label>

        <input type="text"
               name="orientation">
    </div>

    <br>

    <div>
        <label>Construction Side</label>

        <input type="number"
               name="construction_side">
    </div>

    <br>

    <div>
        <label>Latitude</label>

        <input type="text"
               name="latitude">
    </div>

    <br>

    <div>
        <label>Longitude</label>

        <input type="text"
               name="longitude">
    </div>

    <br>

    <div>
        <label>Nearby POI</label>

        <textarea name="nearby_poi"></textarea>
    </div>

    <br>

    <div>
        <label>Traffic Volume</label>

        <input type="number"
               name="traffic_volume">
    </div>

    <br>

    <div>
        <label>Total Population</label>

        <input type="number"
               name="total_population">
    </div>

    <br>

    <div>
        <label>External Score</label>

        <input type="number"
               step="0.01"
               name="external_score">
    </div>

    <br>

    <div>
        <label>Photo</label>

        <input type="file"
               name="photo">
    </div>

    <br>

    <button type="submit">
        Simpan Billboard
    </button>

</form>