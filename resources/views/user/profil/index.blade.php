@extends('user.layouts.app')

@section('title')
    Profil -
@endsection

@section('content')
    <section class="container py-20">
        <div class="d-flex flex-row align-items-stretch gap-4">
            <div class="bg-navy w-7px rounded-top rounded-bottom">&nbsp;</div>
            <h2 class="fs-2x m-0 my-1">Profil {{ $profil->name }}</h2>
        </div>

        <form action="{{ route('user.profil.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card border-0 shadow-sm mt-6">
                <div class="card-body">
                    <div class="d-flex flex-row gap-6">
                        <div class="flex-grow-1">
                            <input type="hidden" name="latitude" id="input_latitude" value="{{ $profil->latitude ?? '' }}">
                            <input type="hidden" name="longitude" id="input_longitude"
                                value="{{ $profil->longitude ?? '' }}">
                            <x-metronic-input name="name" caption="nama" :value="$profil->name ?? ''" />
                            <x-metronic-select name="jenis_kelamin" caption="Jenis Kelamin" :options="gender()"
                                :value="$profil->jenis_kelamin ?? ''" />
                            <x-metronic-input name="tanggal_lahir" caption="Tanggal Lahir" class="datepicker"
                                :value="format_date($profil->tanggal_lahir ?? '')" />
                            <x-metronic-input name="notelp" caption="No.Telp/Whatsapp" class="only-numeric"
                                :value="$profil->notelp ?? ''" />
                            <x-metronic-textarea name="alamat" caption="Alamat Lengkap" :value="$profil->alamat ?? ''" />
                            <x-metronic-select name="provinsi" caption="Provinsi" :value="$profil->provinsi ?? ''" />
                            <x-metronic-select name="kabupaten" caption="Kabupaten" :value="$profil->kabupaten ?? ''" />
                            <x-metronic-select name="kecamatan" caption="Kecamatan" :value="$profil->kecamatan ?? ''" />
                            <x-metronic-select name="desa" caption="Desa" :value="$profil->desa ?? ''" />
                            <x-metronic-input name="email" caption="Email" :value="$profil->user->email ?? ''" />
                        </div>
                        <div class="w-lg-200px w-100">
                            <div class="alert alert-danger d-flex align-items-center p-5 mt-5 d-none w-100"
                                @error('file_foto') style="display: block!important;" @enderror id="file_foto_error">
                                <div class="d-flex flex-column align-items-start" id="file_foto_error_content">
                                    @error('file_foto')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-none"><x-input type="file" name="file_foto" alert="0" /><x-input
                                    name="delete_foto" alert="0" /></div>
                            <img src="{{ $profil->photo ? Storage::url($profil->photo) : asset('images/user_menubar.jpg') }}"
                                id="preview_foto" alt="Foto Profil"
                                class="w-100 h-auto object-fit-cover shadow-xs rounded-1" />
                            <button class="btn btn-secondary btn-sm py-4 fs-8 mt-3 w-100" type="button"
                                onclick="open_file('file_foto', 'preview_foto')">Ubah Foto (jpg/png/jpeg)</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end py-6">
                    <button type="submit" class="btn btn-primary">Simpan Profil</button>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
    <script>
        init_form_element();

        // --- Elemen Lokasi ---
        const $provinsi = $('#provinsi');
        const $kabupaten = $('#kabupaten');
        const $kecamatan = $('#kecamatan');
        const $desa = $('#desa');

        // Inisialisasi dan logic dropdown lokasi Anda
        get_location($provinsi, 1, '', '{{ $profil->provinsi ?? '' }}');
        $provinsi.change(() => {
            const id = $provinsi.find('option:selected').attr('data-id');
            get_location($kabupaten, 2, id, '{{ $profil->kabupaten ?? '' }}');
        });
        $kabupaten.change(() => {
            const id = $kabupaten.find('option:selected').attr('data-id');
            get_location($kecamatan, 3, id, '{{ $profil->kecamatan ?? '' }}');
        });
        $kecamatan.change(() => {
            const id = $kecamatan.find('option:selected').attr('data-id');
            get_location($desa, 4, id, '{{ $profil->desa ?? '' }}');
        });
    </script>
@endpush