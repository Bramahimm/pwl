@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto bg-white shadow rounded-lg p-6 mt-6">
  <h1 class="text-2xl font-bold mb-4 text-gray-800">📋 Daftar Pengguna</h1>
  @include('components.user-table')
</div>
@endsection
