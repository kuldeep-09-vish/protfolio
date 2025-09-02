@extends('layouts.master')

@section('content')
<div class="p-0 w-full bg-gradient-to-br from-gray-100 via-indigo-50 to-purple-50 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-xxl bg-white/80 backdrop-blur-xl shadow-2xl rounded-3xl overflow-hidden border border-gray-200">

        <!-- Header -->
        <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 p-12 text-center">
            <h2 class="text-4xl font-extrabold text-white flex items-center justify-center gap-3 drop-shadow-lg">
                <i class="bi bi-pencil-square text-3xl"></i> Update Admin Data
            </h2>
            <p class="text-indigo-100 mt-3">Keep your profile updated with the latest information ✨</p>
        </div>

        <!-- Body -->
        <div class="p-12">

            <!-- Success Message -->
            @if(session('success'))
                <div class="mb-8 p-4 text-green-800 bg-green-100 border border-green-300 rounded-xl text-center font-semibold animate-bounce">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Start -->
            <form action="{{ route('admindata.update.submit', $admin->id) }}" method="POST" class="space-y-12">
                @csrf
                @method('PUT')
            
                <!-- Personal Info -->
                <div class="bg-white/90 rounded-2xl shadow-lg p-10 border border-indigo-100 hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-indigo-600 mb-8 flex items-center gap-2">
                        <i class="bi bi-person-lines-fill"></i> Personal Information
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Name -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Name</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-person"></i></span>
                            <input type="text" name="name" value="{{ old('name', $admin->name) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 ease-in-out @error('name') border-red-500 @enderror">
                            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Position -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Position</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-briefcase"></i></span>
                            <input type="text" name="position" value="{{ old('position', $admin->position) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out @error('position') border-red-500 @enderror">
                            @error('position') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Birthday -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Birthday</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-calendar-event"></i></span>
                            <input type="date" name="birthday" value="{{ old('birthday', $admin->birthday) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out @error('birthday') border-red-500 @enderror">
                            @error('birthday') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Phone -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Phone</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-telephone"></i></span>
                            <input type="text" name="phone" value="{{ old('phone', $admin->phone) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out @error('phone') border-red-500 @enderror">
                            @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Email -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" value="{{ old('email', $admin->email) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out @error('email') border-red-500 @enderror">
                            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Age -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Age</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-hourglass-split"></i></span>
                            <input type="number" name="age" value="{{ old('age', $admin->age) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out @error('age') border-red-500 @enderror">
                            @error('age') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Website -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Website</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-globe"></i></span>
                            <input type="url" name="website" value="{{ old('website', $admin->website) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out">
                        </div>

                        <!-- Degree -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Degree</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-award"></i></span>
                            <input type="text" name="degree" value="{{ old('degree', $admin->degree) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out">
                        </div>

                        <!-- City -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">City</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" name="city" value="{{ old('city', $admin->city) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 ease-in-out">
                        </div>

                        <!-- Freelance -->
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">Freelance</label>
                            <select name="freelance"
                                class="w-full p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 ease-in-out">
                                <option value="available" {{ old('freelance', $admin->freelance) == 'available' ? 'selected' : '' }}>Available</option>
                                <option value="not available" {{ old('freelance', $admin->freelance) == 'not available' ? 'selected' : '' }}>Not Available</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="bg-white/90 rounded-2xl shadow-lg p-10 border border-purple-100 hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-indigo-600 mb-8 flex items-center gap-2">🌐 Social Links</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @php
                            $socials = [
                                ['label' => 'Facebook', 'name' => 'fb', 'icon' => 'bi-facebook'],
                                ['label' => 'Instagram', 'name' => 'insta', 'icon' => 'bi-instagram'],
                                ['label' => 'Skype', 'name' => 'skype', 'icon' => 'bi-skype'],
                                ['label' => 'LinkedIn', 'name' => 'linkedin', 'icon' => 'bi-linkedin'],
                                ['label' => 'Twitter', 'name' => 'twitter', 'icon' => 'bi-twitter'],
                            ];
                        @endphp
                        @foreach($socials as $social)
                        <div class="relative">
                            <label class="block text-gray-700 font-semibold mb-2">{{ $social['label'] }}</label>
                            <span class="absolute pl-3 text-gray-400 top-10"><i class="bi {{ $social['icon'] }}"></i></span>
                            <input type="text" name="{{ $social['name'] }}" value="{{ old($social['name'], $admin->{$social['name']}) }}"
                                class="w-full pl-10 p-3 border rounded-xl shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200 ease-in-out">
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-12 flex justify-end">
                    <button type="submit"
                        class="w-full sm:w-auto px-14 py-4 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white rounded-2xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transform transition duration-300 ease-in-out">
                        <i class="bi bi-check2-circle mr-2"></i> Update Data
                    </button>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </div>
</div>
@endsection
