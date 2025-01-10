@extends('layouts.app')
@section('content')

    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Sejarah B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Bersama mengembangkan pendidikan Negeri
        </p>

        @if ($historys->isEmpty())
            <div class="text-sm font-medium text-center text-xneutral-300 font-montserrat sm:text-base">
                No Data Available
            </div>
        @else
            <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-12">
                @foreach ($historys as $history)
                    <div class="w-full h-[600px] sm:col-span-5 relative overflow-hidden rounded-[30px]">
                        <img src="{{ asset('storage/' . $history->image) }}" alt="Sejarah B-University"
                            class="absolute inset-0 w-full h-full object-contain object-center rounded-[30px]" />
                    </div>
                    <div
                        class="text-sm font-medium text-justify font-montserrat sm:text-base sm:col-span-7 text-xneutral-300">
                        {!! $history->content !!}
                    </div>
                @endforeach
            </div>
        @endif
    </article>

@endsection
