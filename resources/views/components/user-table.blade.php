<table class="w-full border border-gray-200 rounded-lg overflow-hidden">
  <thead class="bg-gray-800 text-white">
    <tr>
      <th class="px-4 py-2 text-left">ID</th>
      <th class="px-4 py-2 text-left">Nama</th>
      <th class="px-4 py-2 text-left">NPM</th>
      <th class="px-4 py-2 text-left">Kelas</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr class="odd:bg-gray-100 even:bg-white hover:bg-gray-200">
      <td class="px-4 py-2">{{ $user->id }}</td>
      <td class="px-4 py-2">{{ $user->nama }}</td>
      <td class="px-4 py-2">{{ $user->nim }}</td>
      <td class="px-4 py-2">{{ $user->nama_kelas }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
