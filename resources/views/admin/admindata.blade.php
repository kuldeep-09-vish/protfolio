@extends('layouts.master')
@section('content')
@foreach($admins as $admin)
<div class="p- w-full bg-gray-100 min-h-screen">
    <div class="max-w-xxl mx-auto bg-white shadow-lg rounded-xl p-8">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h2 class="text-3xl font-bold text-indigo-600">Admin Profile</h2>
            <a href="{{ route('admindata.update.form', $admin->id) }}"
                class="mt-4 md:mt-0 inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2.5 rounded-lg shadow hover:from-indigo-700 hover:to-purple-700 transition">
                <i class="bi bi-pencil-square"></i> Update Profile
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" 
             x-show="show" x-transition.duration.500ms 
             class="flex justify-center mb-8">
            <div class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg text-sm font-semibold relative">
                <span>{{ session('success') }}</span>
                
            </div>
        </div>
        @endif

        <!-- Personal Info -->
        <div class="mb-6 bg-indigo-50 p-6 rounded-lg shadow-inner">
            <h3 class="text-xl font-semibold mb-4 text-indigo-700">Personal Info</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                <p><strong>Name:</strong> {{ $admin->name }}</p>
                <p><strong>Position:</strong> {{ $admin->position }}</p>
                <p><strong>Birthday:</strong> {{ $admin->birthday }}</p>
                <p><strong>Age:</strong> {{ $admin->age }}</p>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="mb-6 bg-green-50 p-6 rounded-lg shadow-inner">
            <h3 class="text-xl font-semibold mb-4 text-green-700">Contact Info</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                <p><strong>Phone:</strong> {{ $admin->phone }}</p>
                <p><strong>Email:</strong> {{ $admin->email }}</p>
                <p><strong>Website:</strong> {{ $admin->website }}</p>
                <p><strong>Degree:</strong> {{ $admin->degree }}</p>
                <p><strong>City:</strong> {{ $admin->city }}</p>
            </div>
        </div>

        <!-- Freelance -->
        <div class="mb-6 bg-yellow-50 p-6 rounded-lg shadow-inner">
            <h3 class="text-xl font-semibold mb-4 text-yellow-700">Freelance Availability</h3>
            @if($admin->freelance == 'available')
            <span class="px-4 py-2 rounded-full text-white bg-green-500 text-sm">Available</span>
            @else
            <span class="px-4 py-2 rounded-full text-white bg-red-500 text-sm">Not Available</span>
            @endif
        </div>

        <!-- Social Links -->
        <div class="bg-purple-50 p-6 rounded-lg shadow-inner">
            <h3 class="text-xl font-semibold mb-6 text-purple-700">Social Links</h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                @if($admin->fb)
                <a href="{{ $admin->fb }}" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl border border-blue-200 bg-white shadow hover:shadow-lg hover:bg-blue-50 transition">
                    <div class="text-blue-600 text-2xl">
                        <i class="bi bi-facebook"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">Facebook</span>
                        <span class="text-sm text-gray-500 truncate">{{ $admin->fb }}</span>
                    </div>
                </a>
                @endif

                @if($admin->insta)
                <a href="{{ $admin->insta }}" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl border border-pink-200 bg-white shadow hover:shadow-lg hover:bg-pink-50 transition">
                    <div class="text-pink-500 text-2xl">
                        <i class="bi bi-instagram"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">Instagram</span>
                        <span class="text-sm text-gray-500 truncate">{{ $admin->insta }}</span>
                    </div>
                </a>
                @endif

                @if($admin->skype)
                <a href="skype:{{ $admin->skype }}?chat"
                    class="flex items-center gap-3 p-4 rounded-xl border border-sky-200 bg-white shadow hover:shadow-lg hover:bg-sky-50 transition">
                    <div class="text-sky-600 text-2xl">
                        <i class="bi bi-skype"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">Skype</span>
                        <span class="text-sm text-gray-500 truncate">{{ $admin->skype }}</span>
                    </div>
                </a>
                @endif

                @if($admin->linkedin)
                <a href="{{ $admin->linkedin }}" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl border border-blue-300 bg-white shadow hover:shadow-lg hover:bg-blue-50 transition">
                    <div class="text-blue-700 text-2xl">
                        <i class="bi bi-linkedin"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">LinkedIn</span>
                        <span class="text-sm text-gray-500 truncate">{{ $admin->linkedin }}</span>
                    </div>
                </a>
                @endif

                @if($admin->twitter)
                <a href="{{ $admin->twitter }}" target="_blank"
                    class="flex items-center gap-3 p-4 rounded-xl border border-sky-300 bg-white shadow hover:shadow-lg hover:bg-sky-50 transition">
                    <div class="text-sky-500 text-2xl">
                        <i class="bi bi-twitter"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">Twitter</span>
                        <span class="text-sm text-gray-500 truncate">{{ $admin->twitter }}</span>
                    </div>
                </a>
                @endif

            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
