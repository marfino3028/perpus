@php
$ar_judul = ['No','NIP','Nama','Alamat','Tempat Lahir','Tanggal Lahir','foto']; 
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
        @foreach ($ar_pengurus as $pengurus)
            <tr>
                <td>{{ $no++ }}</td>
                  <td>{{ $pengurus->nip }}</td>
                  <td>{{ $pengurus->nama }}</td>
                  <td>{{ $pengurus->alamat }}</td>
                  <td>{{ $pengurus->tmp_lahir }}</td>
                  <td>{{ $pengurus->tgl_lahir }}</td>
                   @if(!empty($pengurus->foto))
                <td><img src="img/{{ $pengurus->foto }}" width="70px"></td>
                @else
                <td><img src="img/nofoto.png" width="70px"></td>
                @endif
            </tr>

          @endforeach    
          </tbody>    
          
        </table>