<div class="card-body">  
                        <table class="table table-outline table-hover">
                            <thead class="thead-light">
                                 <tr>
                                    <th>Nama Mahasiswa</th>
                                    <th>NIM</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($internships->proposal->members as $member)
                            <tr>
                                <td>{{ $member->student->name }}</td>
                                <td>{{ $member->student->nim }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
    