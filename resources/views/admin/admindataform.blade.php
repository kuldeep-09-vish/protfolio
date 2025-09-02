@extends('layouts.master')
@section('content')

<div class="p-6 w-full bg-gray-100 min-h-screen">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-8">
        <h2 class="text-3xl font-bold mb-8 text-indigo-600 text-center md:text-left">Add Admin Data</h2>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admindata.submit') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Personal Info -->
            <div class="bg-indigo-50 p-6 rounded-lg shadow-inner">
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Personal Info</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block font-medium mb-1">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                    </div>
                    <div>
                        <label for="position" class="block font-medium mb-1">Position</label>
                        <input type="text" name="position" id="position" value="{{ old('position') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                    </div>
                    <div>
                        <label for="birthday" class="block font-medium mb-1">Birthday</label>
                        <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                    </div>
                    <div>
                        <label for="age" class="block font-medium mb-1">Age</label>
                        <input type="number" name="age" id="age" value="{{ old('age') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="bg-green-50 p-6 rounded-lg shadow-inner">
                <h3 class="text-xl font-semibold mb-4 text-green-700">Contact Info</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="phone" class="block font-medium mb-1">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none">
                    </div>
                    <div>
                        <label for="email" class="block font-medium mb-1">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none">
                    </div>
                    <div>
                        <label for="website" class="block font-medium mb-1">Website</label>
                        <input type="url" name="website" id="website" value="{{ old('website') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none">
                    </div>
                    <div>
                        <label for="degree" class="block font-medium mb-1">Degree</label>
                        <input type="text" name="degree" id="degree" value="{{ old('degree') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none">
                    </div>
                    <div>
                        <label for="city" class="block font-medium mb-1">City</label>
                        <input type="text" name="city" id="city" value="{{ old('city') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Freelance Availability -->
            <div class="bg-yellow-50 p-6 rounded-lg shadow-inner">
                <h3 class="text-xl font-semibold mb-4 text-yellow-700">Freelance Availability</h3>
                <select name="freelance" id="freelance"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    <option value="available" {{ old('freelance') == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="not available" {{ old('freelance') == 'not available' ? 'selected' : '' }}>Not Available</option>
                </select>
            </div>

            <!-- Social Links -->
            <div class="bg-purple-50 p-6 rounded-lg shadow-inner">
                <h3 class="text-xl font-semibold mb-4 text-purple-700">Social Links</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="fb" placeholder="Facebook URL" value="{{ old('fb') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                    <input type="text" name="insta" placeholder="Instagram URL" value="{{ old('insta') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                    <input type="text" name="skype" placeholder="Skype" value="{{ old('skype') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                    <input type="text" name="linkedin" placeholder="LinkedIn URL" value="{{ old('linkedin') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                    <input type="text" name="twitter" placeholder="Twitter URL" value="{{ old('twitter') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:outline-none">
                </div>
            </div>

            <div class="text-center md:text-left">
                <button type="submit"
                        class="bg-indigo-500 text-white px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-600 hover:shadow-xl transition-all font-semibold">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection