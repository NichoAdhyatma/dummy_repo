<x-guest-layout>
    <div class="mt-32">
        <p><a class="text-black" href="{{route('pengumuman.index')}}">Pengumuman</a> / <a href="">Pengumuman Kelulusan</a></p>

        <p>Pengumuman Kelulusan Program Tahfidz</p>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs uppercase bg-primary-app text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fakultas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$s->santri->user->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$s->santri->major->faculty->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$s->penguji_done == '1' && $s->panitia_done == '1' ? 'Lulus' : 'Tidak Lulus'}}
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
</x-guest-layout>
