@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 py-10 flex items-center justify-center">
  <div class="w-full max-w-lg bg-white rounded-2xl shadow-2xl border border-purple-200 overflow-hidden">
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center py-5">
      <h1 class="text-3xl font-bold tracking-wide">✏️ Edit Mata Kuliah</h1>
      <p class="text-sm opacity-90 mt-1">Perbarui informasi mata kuliah di bawah ini</p>
    </div>

    <div class="p-8">
      <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Input Nama Mata Kuliah -->
        <div>
          <label for="nama_mk" class="block text-gray-700 font-semibold mb-2">Nama Mata Kuliah</label>
          <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition">
        </div>

        <!-- Input SKS -->
        <div>
          <label for="sks" class="block text-gray-700 font-semibold mb-2">SKS</label>
          <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required min="1" max="6"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition">
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-between items-center pt-4">
          <a href="{{ route('matakuliah.index') }}"
            class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition font-semibold">
            ← Kembali
          </a>

          <button type="submit"
            class="px-6 py-2 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-lg shadow hover:scale-105 transform transition">
            💾 Update
          </button>
        </div>
      </form>
    </div>

    <div class="bg-gray-100 text-center py-3 text-sm text-gray-500">
      ✨ Sistem Akademik Laravel — {{ date('Y') }} ✨
    </div>
  </div>
</div>
@endsection