<table border="1" style="background-color:#d9e3da;text-align: justify">
    <tr>
      <th>Id</th>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
    </tr>
    @foreach($buku as $b)
    <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->judul}}</td>
        <td>{{$b->penerbit}}</td>
        <td>{{$b->tahun_terbit}}</td>
        <td>{{$b->pengarang}}</td>
        <td>
        <a href="/view/{{ $b -> id }}">View</a>
        <a href="/pegawai/edit/{{ $b->pegawai_id }}">Edit</a>
        <a href="/hapus/{{ $b->id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
</table>