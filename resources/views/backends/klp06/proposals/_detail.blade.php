



<div class="row">

<div class="col-md-6">
<!-- Static Field for title di tabel internships -->
<div class="form-group">
    <div class="form-label">Judul KP : {{ $internships->title }}</div>
    <div></div>
</div>
</div>

<div class="col-md-6">
        <!-- Static Field for name di tabel insternship_agencies -->
        <div class="form-group">
            <div class='form-label'>Nama Instansi :</div>
            <div>{{ $internships->proposal->agency->name }}</div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <!-- Static Field for start_at di tabel internship_proposals -->
        <div class="form-group">
            <div class='form-label'> Periode Dimulai :</div>
            <div>{{ $internships->proposal->start_at }}</div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Static Field for end_at di tabel internship_proposals -->
        <div class="form-group">
            <div class='form-label'>Periode Berakhir :</div>
            <div>{{ $internships->proposal->end_at }}</div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <!-- Static Field for address di tabel insternship_agencies -->
        <div class="form-group">
            <div class='form-label'>Alamat Instansi :</div>
            <div>{{ $internships->proposal->agency->address }}</div>
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

    </div>
    <br>
    <div class="row">

    <div class="col-md-6">
    <strong>List Mahasiswa :</strong>
    </div>

    </div>

</div>


