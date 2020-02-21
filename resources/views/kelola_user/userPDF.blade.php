@php
$ar_judul = ['No','NIP/NIS','Nama','Email','Password','Role','Foto ']; 
$no = 1;    
@endphp
<h3 align="center">Data User Ruang Baca | YBM PLN</h3>
<table align="center" width="100%" cellspacing="0" cellpadding="10" border="1">
          <thead>
            <tr>
            @foreach($ar_judul as $jdl)    
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
        @foreach ($ar_kelolauser as $user)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $user->nip_nis }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->role }}</td>
                @if(!empty($user->foto))
                <td><center><img src="img/user/{{ $user->foto }}" width="70px"></center></td>
                @else
                <td><center><img src="img/user/nofoto.png" width="70px"></center></td>
                @endif
            </tr>

          @endforeach    
          </tbody>    
          
        </table>