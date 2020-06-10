
    <div class="card">

        <div class="card-header">
        </div>
        <div>
        <div class="col-md-12">
        <!-- Static Field for nim di tabel students -->
        <div class="form-group">
        <br>
            <h5 style="text-align:center"><b><u>SURAT TUGAS KERJA PRAKTEK</u></b></h5> <br><br>
            <p><i>Assalamu'alaikum warahmatullahi wabarakaatuh</i></p>
            
            <p>Dengan Hormat, <br> Yang bertanda tangan dibawah ini kami Pimpinan Jurusan SI Teknik {{ $internships->student->department->name }} Fakultas {{ $internships->student->department->faculty->name }} Universitas
            <br>Universitas Andalas menugaskan kepada :</p>
            <table class="col-md-6" style="margin:5px 50px 30px 50px">
                        <tbody>
                            <tr>
                                <td>Nama Mahasiswa</td>
                                <td>:</td>
                                <td>{{ $internships->student->name }}</td>
                            </tr>
                            <tr>
                                <td>Nomor Mahasiswa</td>
                                <td>:</td>
                                <td>{{ $internships->student->nim }}</td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>:</td>
                                <td>{{ $internships->student->department->faculty->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="col-md-6" style="margin:5px 50px 30px 10px">
                        <tbody>
                            <tr>
                                <td>Untuk melaksanakan Kerja Praktek pada proyek</td>
                                <td>:</td>
                                <td>{{ $internships->proposal->background }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="col-md-6" style="margin:10px 50px 30px 10px">
                        <tbody>
                            <tr>
                                <td>Mulai tanggal</td>
                                <td>:</td>
                                <td>{{ $internships->proposal->start_at }}</td>
                            </tr>
                            <tr>
                                <td>Dengan Dosen Pembimbing</td>
                                <td>:</td>
                                <td>{{ $internships->field_advisor_name}}</td>
                            </tr>
                        </tbody>
                    </table>

                <p>Demikian surat Tugas ini dibuat untuk dipergunakan sebagaimana mestinya, atas perhatian dan kerjasamanya
                <br>diucapkan terima kasih.</p>
                <p><i>Wassalamu'alaikum warahmatullahi wabarakaatuh</i></p>
            
                <div class="col-md-12" style="text-align:center; margin:">
                <p>Padang,</p>
                <p>Ketua Program Studi</p> <br><br>
                </div>

            </div>
        </div>
    </div>
      
       

        <div class="card-body">
        
           
        </div>

      

    </div>


