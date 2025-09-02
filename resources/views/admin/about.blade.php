@extends('layouts.master')
@section('content')

<div class="min-h-screen bg-gray-100 py-12 px-6">
    <div class="max-w-5xl mx-auto">

        

        <div class="bg-white shadow-lg rounded-2xl overflow-hidden mb-10">

            <!-- Header + Update Button -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between p-6 border-b border-gray-200">
                <h2 class="text-3xl font-bold text-indigo-600">{{ $about->about_heading }}</h2>
                <a href="{{ route('admin.about.update.form', $about->id) }}"
                   class="mt-4 md:mt-0 inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2.5 rounded-lg shadow hover:from-indigo-700 hover:to-purple-700 transition">
                   <i class="bi bi-pencil-square"></i> Update
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">

                <!-- Left Image -->
                <div class="flex justify-center items-center bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl p-6">
                    <img src="{{ asset('uploads/about_images/' . $about->about_image) }}" 
                         alt="Developer photo"
                         class="w-48 h-48 md:w-56 md:h-56 object-cover rounded-2xl shadow-xl border-4 border-white transition-transform hover:rotate-2 duration-500" />
                </div>

                <!-- Right Content -->
                <div class="md:col-span-2 flex flex-col justify-center space-y-4">
                    <p class="text-gray-700 text-lg"><span class="font-semibold">About:</span> {{ $about->about_desc }}</p>
                    <p class="text-gray-700 text-lg"><span class="font-semibold">Developer:</span> {{ $about->dev_heading }}</p>
                    <p class="text-gray-700 text-lg"><span class="font-semibold">Role:</span> {{ $about->dev_desc }}</p>
                    <p class="text-gray-700 text-lg"><span class="font-semibold">Expertise:</span> {{ $about->expertise }}</p>
                    <p class="text-gray-600 leading-relaxed">{{ $about->last_desc }}</p>
                    <p class="text-gray-600 leading-relaxed">{{ $about->extra_info }}</p>
                </div>

            </div>
        </div>

       

    </div>
</div>

@endsection
