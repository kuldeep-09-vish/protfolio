@extends('layouts.master')

@section('content')
<div class="max-w-6xl mx-auto mt-12 bg-white p-8 rounded-2xl shadow-lg">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 md:mb-0">All Skills</h2>
        <a href="{{ route('admin.skill.create') }}"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow">
            + Add New Skill
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
    <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    <!-- Skills Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-sm rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr class="text-left text-gray-600 uppercase text-sm tracking-wider">
                    <th class="px-6 py-3 border-b">#</th>
                    <th class="px-6 py-3 border-b">Skill Name</th>
                    <th class="px-6 py-3 border-b">Percent</th>
                    <th class="px-6 py-3 border-b">Rank</th>
                    <th class="px-6 py-3 border-b text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($skills as $skill)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 border-b">{{ $skill->id }}</td>
                    <td class="px-6 py-4 border-b">{{ $skill->skill_name }}</td>
                    <td class="px-6 py-4 border-b">
                        <span
                            class="inline-block bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm font-semibold">
                            {{ $skill->skill_percent }}%
                        </span>
                    </td>
                    <td class="px-6 py-4 border-b">
                        <span
                            class="inline-block bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-semibold">
                            {{ $skill->skill_rank }}%
                        </span>
                    </td>
                    <td class="px-6 py-4 border-b text-center flex justify-center gap-2">
                        <form action="{{ route('admin.skill.delete', $skill->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this skill?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg shadow-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">No skills found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection