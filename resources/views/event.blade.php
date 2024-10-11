@extends('template.template')

@section('layout_content')


<div class="px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20 gap-x-10 gap-y-20 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($events as $index => $event)
            <div class="max-w-sm bg-white border border-white rounded-lg shadow">
                <a href="/eventDetail/{{$event->id}}" class="w-0 p-0 m-0">
                <img class="rounded-t-lg h-60 w-full object-cover" src="https://www.suarasurabaya.net/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-18-at-21.56.22-840x493.jpeg.webp" alt="" />
                </a>
                <a href="/eventDetail/{{$event->id}}" class="w-0 p-0 m-0">
                    <div class="p-5">
                        <!-- Nama event dengan underline -->
                        <h5 class="mb-4 text-2xl font-bold tracking-tight text-black underline">{{ $event->title }}</h5>

                        <!-- Informasi dengan teks tebal -->
                        <div class="mt-4">
                            <p class="font-bold text-black mb-2">{{ $event->venue }}</p> <!-- Jalan -->
                            <p class="font-bold text-black mb-2">{{ $event->event_category->name}}</p> <!-- Jenis event -->
                            <p class="font-bold text-black mb-2">{{ $event->date }}</p> <!-- Tanggal event -->
                            <p class="font-bold text-black mb-4">{{ $event->organizer->name }}</p> <!-- Organizer -->
                        </div>

                        <!-- Deskripsi tanpa kotak -->
                        <div class="mt-4">
                            <p class="font-normal text-black">{{ $event->description }}</p>
                        </div>

                        <br>
                        <!-- Kotak hanya untuk tag -->
                        <p class="font-normal text-black">
                            <mark class="bg-green-500 text-white px-2 py-1 rounded-lg">#{{ $event->tags }}</mark>
                        </p>
                        <br>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
