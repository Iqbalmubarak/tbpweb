<div class="row">

    <div class="col-md-6">
        <!-- Static Field for Pengusul -->
        <div class="form-group">
            <div class='form-label' style="text-align:center">Pengusul </div>
        </div>
    </div>

    <div class="col-md-6">
    <div class="form-group">
    <div class="col-sm" style="align:right">
        <a href="" class="btn btn-primary">Surat Tugas KP</a>
        <a href="" class="btn btn-info">Surat Permohonan KP</a>
</div>
        </div>
    </div>

</div>

<div class="row">

   

    <div class="col-md-6">
        <!-- Static Field for nim di tabel students -->
        <div class="form-group">
            <div class='form-label'>Nama Mahasiswa :</div>
            <div>
            @foreach($internships->proposal->members as $member)
                                <div>
                                    {{ $member->student->name }} <br>
                                </div>
                            @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Static Field for nim di tabel students -->
        <div class="form-group">
            <div class='form-label'>NIM :</div>
            <div>
            @foreach($internships->proposal->members as $member)
                                <div>
                                   
                                    <small>{{ $member->student->nim }}</small>
                                </div>
                            @endforeach
            </div>
        </div>
    </div>

</div>

<!-- Static Field for title di tabel internships -->
<div class="form-group">
    <div class="form-label">Judul KP :</div>
    <div>{{ $internships->title }}</div>
</div>

<div class="row">

    <div class="col-md-6">
        <!-- Static Field for Periode -->
        <div class="form-group">
            <div class='form-label' style="text-align:center">Periode </div>
        </div>
    </div>
        

</div>

<div class="row">

    <div class="col-md-6">
        <!-- Static Field for start_at di tabel internship_proposals -->
        <div class="form-group">
            <div class='form-label'> Start :</div>
            <div>{{ $internships->proposal->start_at }}</div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Static Field for end_at di tabel internship_proposals -->
        <div class="form-group">
            <div class='form-label'>End :</div>
            <div>{{ $internships->proposal->end_at }}</div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <!-- Static Field for name di tabel insternship_agencies -->
        <div class="form-group">
            <div class='form-label'>Nama Instansi :</div>
            <div>{{ $internships->proposal->agency->name }}</div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Static Field for address di tabel insternship_agencies -->
        <div class="form-group">
            <div class='form-label'>Alamat Instansi :</div>
            <div>{{ $internships->proposal->agency->address }}</div>
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-6">
        <!-- Static Field for background di tabel internship_proposals -->
        <div class="form-group">
            <div class='form-label'>Background :</div>
            <div>{{ $internships->proposal->background }}</div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Static Field for plan di tabel internship_proposals -->
        <div class="form-group">
            <div class='form-label'>Plan :</div>
            <div>{{ $internships->proposal->agency->plan }}</div>
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-6">
        <!-- Static Field for seminar_date di tabel internship -->
        <div class="form-group">
            <div class='form-label'>Tanggal Seminar :</div>
            <div>{{ $internships->seminar_date }}</div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Static Field for seminar_time di tabel internship -->
        <div class="form-group">
            <div class='form-label'>Waktu Seminar :</div>
            <div>{{ $internships->seminar_time }}</div>
        </div>
    </div>

</div>

<!-- Static Field for status di tabel internship -->
<div class="form-group">
    <div class="form-label">Status :</div>
    <div>{{ $internships->status }}</div>
</div>
