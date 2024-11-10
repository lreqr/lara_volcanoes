<x-layout>
    <div class="card mb-4 shadow-sm">
        <img src="{{ $volcano['volcano_image_url'] }}" class="card-img-top" alt="Volcano Image">
        <div class="card-body">
            <h2 class="card-title">{{ $volcano['title'] }}</h2>
            <p class="text-muted">ID: <span id="volcano_id">{{ $volcano['volcano_id'] }}</span></p>
            <p class="card-text" id="description">Description: {{ $volcano['description'] ?? 'empty' }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Latitude: <span id="latitude">{{ $volcano['latitude'] }}</span></li>
                <li class="list-group-item">Longitude: <span id="longitude">{{ $volcano['longitude'] }}</span></li>
                <li class="list-group-item">Elevation (meters): <span id="elevation_meters">{{ $volcano['elevation_meters'] }}</span></li>
            </ul>
            <div class="card-body">
                <a href="{{ $volcano['newest_notice_url'] }}" target="_blank" class="btn btn-primary">Latest Notice</a>
                <a href="{{ $volcano['volcano_url'] }}" target="_blank" class="btn btn-secondary">More Information</a>
            </div>
        </div>
    </div>
</x-layout>
