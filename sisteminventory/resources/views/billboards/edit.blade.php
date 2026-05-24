
<h1>Edit Billboard</h1>

@if ($errors->any())

    <div>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action="{{ route('billboards.update', $billboard->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div>
        <label>Area</label>

        <select name="area_id">

            @foreach($areas as $area)

                <option value="{{ $area->id }}"
                    {{ $billboard->area_id == $area->id ? 'selected' : '' }}>

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

                <option value="{{ $vendor->id }}"
                    {{ $billboard->vendor_id == $vendor->id ? 'selected' : '' }}>

                    {{ $vendor->vendor_name }}

                </option>

            @endforeach

        </select>
    </div>

    <br>

    <div>
        <label>Location Description</label>

        <input type="text"
            name="location_description"
            value="{{ $billboard->location_description }}">
    </div>

    <br>

    <div>
        <label>View From</label>

        <input type="text"
               name="view_from"
               value="{{ $billboard->view_from }}">
    </div>

    <br>

    <div>
        <label>View To</label>

        <input type="text"
               name="view_to"
               value="{{ $billboard->view_to }}">
    </div>

    <br>

    <div>
        <label>Length</label>

        <input type="number"
                step="0.01"
                name="length"
                value="{{ $billboard->length }}">
    </div>

    <br>

    <div>
        <label>Height</label>

        <input type="number"
               step="0.01"
               name="height"
               value="{{ $billboard->height }}">
    </div>

    <br>

    <div>
        <label>Billboard Type</label>

        <input type="text"
               name="billboard_type"
               value="{{ $billboard->billboard_type }}">
    </div>

    <br>

    <div>
        <label>Orientation</label>

        <input type="text"
               name="orientation"
               value="{{ $billboard->orientation }}">
    </div>

    <br>

    <div>
        <label>Construction Side</label>

        <input type="number"
               name="construction_side"
               value="{{ $billboard->construction_side }}">
    </div>

    <br>

    <div>
        <label>Latitude</label>

        <input type="text"
               name="latitude"
               value="{{ $billboard->latitude }}">
    </div>

    <br>

    <div>
        <label>Longitude</label>

        <input type="text"
               name="longitude"
               value="{{ $billboard->longitude }}">
    </div>

    <br>

    <div>
        <label>Nearby POI</label>

        <textarea name="nearby_poi">
        {{ $billboard->nearby_poi }}
        </textarea>
    </div>

    <br>

    <div>
        <label>Traffic Volume</label>

        <input type="number"
               name="traffic_volume"
               value="{{ $billboard->traffic_volume }}">
    </div>

    <br>

    <div>
        <label>Total Population</label>

        <input type="number"
               name="total_population"
               value="{{ $billboard->total_population }}">
    </div>

    <br>

    <div>
        <label>External Score</label>

        <input type="number"
               step="0.01"
               name="external_score"
               value="{{ $billboard->external_score }}">
    </div>

    <br>

    <div>
        <label>Photo</label>

        <input type="file"
               name="photo">
    </div>

    <br>

    <button type="submit">
        Update Billboard
    </button>

    @if($billboard->photo)

        <img
            src="{{ asset('storage/' . $billboard->photo) }}"
            width="150">

    @endif
</form>