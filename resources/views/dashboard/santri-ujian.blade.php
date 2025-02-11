<x-app-layout>
    <section id="dashboard" class="mt-5 pb-0">
        <div class="container">

            <p><a class="text-black" href={{ route('dashboard.santri.ujian.index') }}>Beranda</a> / <a href="">Nilai Hasil Ujian</a>
            </p>

            <div class="section-title mt-5">
                <h2>Nilai Ujian</h2>
                <p>Halaman ini menampilkan detail nilai ujian yang telah dilakukan oleh santri bersama penguji.</p>
            </div>


            <div class="asesmen mb-4">
                <div class="row">
                    <div class="col my-auto">
                        Penguji : {{ $ujian->penguji->user->name }}
                    </div>
                    <div class="col">
                        <div class="float-end tgl">
                            Tanggal ujian : {{ $ujian->tanggal_ujian }}
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="background: #CCCF95; width: 5%;">No</th>
                        <th class="text-center" style="background: #CCCF95; width: 90%;">Komponen Penilaian</th>
                        <th class="text-center" style="background: #CCCF95; width: 5%;">Nilai</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($ujian->nilais as $s)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $s->name }}</td>
                            <td class="text-center">{{ $s->pivot->nilai }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="font-bold text-xl text-end">
                Nilai Rata-rata : {{ $ujian->nilai }}
            </div>

        </div>
    </section>
</x-app-layout>
