

    <div class="card">

        <div class="card-header">
            <center><strong> Surat Permohonan Kerja Praktek </strong></center>
        </div>
        <div>
        <div class="col-md-12">
        <!-- Static Field for nim di tabel students -->
        <div class="form-group">
        <br>
            <p>Kepada Yth, <br> Ketua Jurusan {{ $internships->student->department->name }} <br> Universitas Andalas <br> Di Tempat</p>
            <p>Dengan Hormat,</p>
            <p>Saya yang bertanda tangan dibawah ini :</p>
            <table class="col-md-6" style="margin:5px 50px 30px 50px">
                        <tbody>
                            <tr>
                                <td>Nama Mahasiswa</td>
                                <td>:</td>
                                <td>{{ $internships->student->name }}</td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td>{{ $internships->student->nim }}</td>
                            </tr>
                            <tr>
                                <td>Program Studi</td>
                                <td>:</td>
                                <td>{{ $internships->student->department->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                <p>Dengan ini saya mengajukan Permohonan kepada Bapak/Ibu agar sudi kiranya memberi izin
                <br> kepada saya untuk dapat melaksanakan Kerja Praktek pada {{ $internships->proposal->agency->name }}. Dengan tinjauan
                <br> {{ $internships->proposal->background }}</p>
                <p>Demikian Surat ini saya buat, atas perhatian dan bantuan Bapak/Ibu saya ucapkan banyak
                <br> terima kasih</p>
                <div class="col-md-12" style="text-align:center; margin:">
                <p>Padang, {{ $internships->updated_at }}</p>
                <p>Pemohon</p> <br><br>
                <br>{{ $internships->student->name }}
                </div>

            </div>
        </div>
    </div>
      
       

        <div class="card-body">
        
           
        </div>

      

    </div>

