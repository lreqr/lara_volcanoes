<x-layout>

    <div class="row">
        @foreach($volcanoes as $volcano)
            <x-volcano-card :volcano="$volcano">
            </x-volcano-card>
        @endforeach
    </div>
</x-layout>
