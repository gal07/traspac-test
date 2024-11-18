<table align="left" cellpadding="0" cellspacing="0" style="margin-left:-24px;page-break-inside: avoid;" width="100%" class="table table-bordered">

    <thead>

        <tr>
            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">No</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">NIP</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Nama</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Tempat Lahir</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Alamat</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Tgl Lahir</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">L/P</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Gol</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Eselon</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Jabatan</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Tempat Tugas</th>

            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Agama</th>
            
            <th style="color:white;width: 25px;font-size:10px;background-color:#00245e;">Unit Kerja</th>

            <th width="10" style="color:white;width: 15px;font-size:10px;background-color:#00245e;">No. HP</th>

            <th width="10" style="color:white;width: 25px;font-size:10px;background-color:#00245e;">NPWP</th>


        </tr>

    </thead>

    <tbody>
        <?php $i = 1; ?>
        @foreach($data as $user)

        <tr>
        
            <td style="font-size:10px;page-break-inside: avoid;">{{ $i }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->nip }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->name }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->born_place }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->address }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->born_date }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->gender }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->group }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->formation }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->position }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->placed_job }}</td>

            <td width="10" style="font-size:10px;page-break-inside: avoid;">{{ $user->religion }}</td>

            <td style="font-size:10px;page-break-inside: avoid;">{{ $user->work_unit }}</td>

            <td width="10" style="font-size:10px;page-break-inside: avoid;">{{ $user->phone_number }}</td>

            <td width="10" style="font-size:10px;page-break-inside: avoid;">{{ $user->tax_number }}</td>


        </tr>
        <?php $i++; ?>
        @endforeach

    </tbody>

</table>