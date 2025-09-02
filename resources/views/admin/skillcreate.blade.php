@extends('layouts.master')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Add New Skill</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.skill.submit') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Skill Name</label>
            <input type="text" name="skill_name" value="{{ old('skill_name') }}" 
                   class="w-full border px-3 py-2 rounded" />
            @error('skill_name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Skill Percent (0-100)</label>
            <input type="number" name="skill_percent" value="{{ old('skill_percent') }}" 
                   class="w-full border px-3 py-2 rounded" min="0" max="100" />
            @error('skill_percent')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Conform Skill Percent (0-100)</label>
            <input type="number" name="skill_rank" value="{{ old('skill_rank') }}" 
                   class="w-full border px-3 py-2 rounded" min="0" max="100" />
            @error('skill_rank')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Add Skill</button>
    </form>
</div>
@endsection
