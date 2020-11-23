<x-layout>

    <x-miniheader />

    @foreach ($services as $service)
    <x-section
    image="{{$service['image']}}"
    name="{{$service['name']}}"
    description="{{$service['description']}}"
    dentists="{{$service['dentists']}}"
        />
    @endforeach

</x-layout>