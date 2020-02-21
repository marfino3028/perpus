@php
$ar_judul = ['No','Gambar','Nama Buku','Penerbit','Jenis Buku','Tanggal Terbit','Penanggung Jawab Buku']; 
 
$no = 1;    
@endphp
<h3 align="center">Daftar Buku Ruang Baca | YBM PLN</h3>
<table align="center" width="100%" cellspacing="0" cellpadding="10" border="1">
          <thead>
            <tr>
            @foreach($ar_judul as $jdl)    
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
        @foreach ($ar_buku as $buku)
            <tr>
                <td>{{ $no++ }}</td>
                @if(!empty($buku->gambar))
                <td><center><img src="img/{{ $buku->gambar }}" width="70px"></center></td>
                @else
                <td><center><img src="img/nofoto.png" width="70px"></center></td>
                @endif
                <td>{{ $buku->nama }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->jenis }}</td>
                <td>{{ $buku->tgl_terbit }}</td>
                <td>{{ $buku->namapengurus }}</td>
            </tr>

          @endforeach    
          </tbody>    
          
        </table>