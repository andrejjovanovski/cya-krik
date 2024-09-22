@extends('layouts.app')

@section('title', 'Product showcase')

@section('content')
<div class="container mx-auto my-20 text-center font-heading">
    <h1 class="text-4xl font-bold">Проекти</h1>
</div>

<div class="mx-auto my-20 max-w-7xl">
    <h2 class="text-xl font-semibold tracking-wide text-gray-800">Галерија Со Активности</h2>
    <div class="grid grid-cols-4 gap-4 mt-6">
        <!-- First Project: Takes up 2 columns and 2 rows -->
        <div class="col-span-2 row-span-2 overflow-hidden rounded-2xl">
            <div class="relative">
                <img src="{{ asset('images/centar krikni 2 3.png') }}" class="object-cover w-full h-full">
                <div class="absolute inset-x-0 top-0 flex items-center justify-center bg-black h-1/4 rounded-t-2xl">
                    <span class="text-xl font-bold text-white">Project Name 1</span>
                </div>
            </div>
        </div>

        <!-- Second Project: Takes up 2 columns and 1 row -->
        <div class="col-span-2 overflow-hidden rounded-2xl">
            <div class="relative">
                <img src="{{ asset('images/Rectangle 11.png') }}" class="object-cover w-full h-auto">
                <div class="absolute inset-x-0 top-0 flex items-center justify-center bg-black h-1/4 rounded-t-2xl">
                    <span class="text-xl font-bold text-white">Project Name 2</span>
                </div>
            </div>
        </div>

        <!-- Remaining Projects: Takes up 1 column each -->
        <div class="overflow-hidden rounded-2xl">
            <div class="relative">
                <img src="{{ asset('images/Rectangle 21.png') }}" class="object-cover w-full h-auto">
                <div class="absolute inset-x-0 top-0 flex items-center justify-center bg-black h-1/4 rounded-t-2xl">
                    <span class="text-xl font-bold text-white">Project Name 3</span>
                </div>
            </div>
        </div>

        <div class="overflow-hidden rounded-2xl">
            <div class="relative">
                <img src="{{ asset('images/Rectangle 22.png') }}" class="object-cover w-full h-auto">
                <div class="absolute inset-x-0 top-0 flex items-center justify-center bg-black h-1/4 rounded-t-2xl">
                    <span class="text-xl font-bold text-white">Project Name 4</span>
                </div>
            </div>
        </div>

        <div class="overflow-hidden rounded-2xl">
            <div class="relative">
                <img src="{{ asset('images/Rectangle 23.png') }}" class="object-cover w-full h-auto">
                <div class="absolute inset-x-0 top-0 flex items-center justify-center bg-black h-1/4 rounded-t-2xl">
                    <span class="text-xl font-bold text-white">Project Name 5</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
