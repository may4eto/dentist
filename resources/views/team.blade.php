<x-layout>

    <x-miniheader />

    @foreach ($team as $member)
    <x-section
    image="{{$member['image']}}"
    name="{{$member['name']}}"
    surname="{{$member['surname']}}"
    title="{{$member['title']}}"
    services="{{$member['services']}}"
    description="{{$member['description']}}"
        />
    @endforeach

</x-layout>