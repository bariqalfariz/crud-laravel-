<table border="1" style="background-color:#d9e3da">
    <tr>
      <th>Id</th>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
    </tr>
    <tr>
        <td>{{ $data -> id }}</td>
        <td>{{ $data -> judul }}</td>
        <td>{{ $data -> penerbit }}</td>
        <td>{{ $data -> tahun_terbit }}</td>
        <td>{{ $data -> pengarang }}</td>
    </tr>
</table>