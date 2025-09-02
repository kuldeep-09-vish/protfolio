@extends('layouts.master')

@section('content')


<div class="p-6 w-full bg-gradient-to-br from-gray-100 via-indigo-50 to-purple-50 min-h-screen">
    <div class="w-full bg-white/90 backdrop-blur-lg shadow-2xl rounded-2xl overflow-hidden border border-gray-200">

        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 p-8 text-center">
            <h2 class="text-3xl font-bold text-white">Update About Section</h2>
            <p class="text-indigo-100 mt-2">Modify the details and update this record</p>
        </div>

        <!-- Form -->
        <form action="{{ route('about.data.update.submit', $adminAbout->id) }}" method="POST"
            class="p-8 space-y-8 w-full" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- About Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">About Heading</label>
                    <input type="text" name="about_heading"
                        value="{{ $adminAbout->about_heading }}"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">About Description</label>
                    <textarea name="about_desc" rows="3"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>{{  $adminAbout->about_desc }}</textarea>
                </div>
            </div>

            <!-- Developer Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">Developer Heading</label>
                    <input type="text" name="dev_heading" value="{{  $adminAbout->dev_heading }}"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">Developer Description</label>
                    <textarea name="dev_desc" rows="3"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>{{ $adminAbout->dev_desc }}</textarea>
                </div>
            </div>

            <!-- Last Description -->
            <div class="w-full">
                <label class="block text-gray-700 font-semibold">Last Description</label>
                <textarea name="last_desc" rows="3"
                    class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                    required>{{ $adminAbout->last_desc }}</textarea>
            </div>

            <!-- Numbers Section -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 w-full">
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">Happy Clients</label>
                    <input type="number" name="happy_clients"
                        value="{{ $adminAbout->happy_clients }}"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">Projects</label>
                    <input type="number" name="projects" value="{{ $adminAbout->projects }}"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">Reviews</label>
                    <input type="number" name="reviews" value="{{ $adminAbout->reviews }}"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div class="w-full">
                    <label class="block text-gray-700 font-semibold">Skills</label>
                    <input type="number" name="skills" value="{{ $adminAbout->skills }}"
                        class="mt-2 w-full px-4 py-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
            </div>

            <!-- Image Upload -->
            <div class="w-full">
                <label class="block text-gray-700 font-semibold">About Image</label>
                @if($adminAbout->about_image)
                <div class="mb-2">
                    <img src="{{ asset('uploads/about_images/' . $adminAbout->about_image) }}" alt="Current About Image"
                        class="w-48 h-auto rounded-md shadow">
                </div>
                @endif
                <input type="file" name="about_image" accept="image/*"
                    class="mt-2 w-full px-4 py-2 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500">
                <p class="text-gray-500 text-sm mt-1">Select a new image to replace the existing one.</p>
            </div>

            <!-- Submit Button -->
            <div class="pt-6 text-center">
                <button type="submit"
                    class="px-10 py-3 bg-indigo-600 text-white font-semibold rounded-xl shadow-md hover:bg-indigo-700 transition duration-300">
                    Update Data
                </button>
            </div>
        </form>

    </div>
</div>


@endsection