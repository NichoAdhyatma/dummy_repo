<x-guest-layout>
    <div class="mt-32">
        <p><a class="text-black" href="{{ route('home') }}">Beranda</a> / <a href="">Pengumuman</a></p>

        <p class="text-2xl font-bold">Pengumuman</p>
        <p>Kumpulan informasi terupdate seputar UKM Tahfidz Universitas Airlangga</p>

        <div class="bg-white shadow-md p-8 rounded-lg border w-full">
            <div class="text-lg font-bold mb-2">
               Pengumuman Lolos Beasiswa Tahfidz
            </div>
            <p>Beasiswa Tahfidz untuk periode semester genap segera dibuka. Yuk segera daftarkan diri anda dan
                persiapkan diri segera mungkin!! Pendaftaran dapat dilakukan di bagian menu program tahfidz. </p>

            <div class="flex w-full justify-end">
                <a href="{{ route('pengumuman.kelulusan') }}"><button
                        class=" text-primary-app hover:underline">Selengkapnya</button></a>
            </div>

        </div>
    </div>
</x-guest-layout>
