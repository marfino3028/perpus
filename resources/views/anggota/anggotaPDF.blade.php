@php
$ar_judul = ['No','NIS','Nama','Alamat','Tempat Lahir','Tanggal Lahir','foto','Buku Favorit']; 
 
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
        @foreach ($ar_anggota as $anggota)
            <tr>
                <td>{{ $no++ }}</td>
                  <td>{{ $anggota->nis }}</td>
                  <td>{{ $anggota->nama }}</td>
                  <td>{{ $anggota->alamat }}</td>
                  <td>{{ $anggota->tmp_lahir }}</td>
                  <td>{{ $anggota->tgl_lahir }}</td>
                   @if(!empty($anggota->foto))
                <td><img src="img/{{ $anggota->foto }}" width="70px"></td>
                @else
                <td><img src="img/nofoto.png" width="70px"></td>
                @endif
                <td>{{ $anggota->namabuku }}</td>
            </tr>

          @endforeach    
          </tbody>    
          
        </table>