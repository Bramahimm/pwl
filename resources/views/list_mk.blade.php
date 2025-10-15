@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 py-10">
    <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden border border-purple-200">
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white text-center py-5">
            <h1 class="text-3xl font-bold tracking-wide">📘 Daftar Mata Kuliah</h1>
            <p class="text-sm opacity-90 mt-1">Kelola daftar mata kuliah dengan mudah</p>
        </div>

        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg text-gray-600 font-semibold">List Mata Kuliah</h2>
                <a href="{{ route('matakuliah.create') }}"
                    class="px-4 py-2 bg-gradient-to-r from-green-400 to-emerald-500 text-white rounded-lg shadow hover:scale-105 transform transition">
                    ➕ Tambah Mata Kuliah
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">ID</th>
                            <th class="py-3 px-4 text-left">Nama Mata Kuliah</th>
                            <th class="py-3 px-4 text-center">SKS</th>
                            <th class="py-3 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 bg-white">
                        @forelse ($mks as $mk)
                        <tr class="hover:bg-purple-50 transition">
                            <td class="py-3 px-4 font-semibold text-gray-700">{{ $mk->id }}</td>
                            <td class="py-3 px-4">{{ $mk->nama_mk }}</td>
                            <td class="py-3 px-4 text-center">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full font-semibold">{{ $mk->sks }}</span>
                            </td>
                            <td class="py-3 px-4 text-center space-x-2">
                                <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                    class="px-3 py-1 bg-yellow-400 text-yellow-900 font-semibold rounded-md shadow hover:bg-yellow-500 transition">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}"
                                    method="POST" class="inline-block"
                                    onsubmit="return confirm('⚠️ Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-500 text-white font-semibold rounded-md shadow hover:bg-red-600 transition">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-6 text-center text-gray-500 italic">
                                Belum ada data mata kuliah 📭
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-gray-100 text-center py-3 text-sm text-gray-500">
            ✨ Sistem Akademik Laravel — {{ date('Y') }} ✨
        </div>
    </div>
</div>
@endsection