@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')
<div class="relative mt-10 contentContainer">
    <div class="relative w-full pt-20 pb-20 contentWrapper__dashboard">
        <div class="relative headerDB__items">
            <span class="block py-6 headerTitle">
                <h1>Wisata</h1>
                <p>Silahkan isi form berikut untuk ditampilkan pada halaman website.</p>
            </span>
            <form action="{{ route('wisata.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="itemsDB__dataWisatawrapper">
                    <span class="block py-4 dbText__header">
                        <h1>Tempat Wisata</h1>
                    </span>
                    <div class="grid grid-cols-3 gap-4 dbData__Wisataitems">
                        <div class="dbData__listWisata">
                            <span class="flex flex-col inputWisata__name">
                                <label for="wisata__name" class="flex items-center py-2 ">
                                    <h3>
                                        Nama Wisata
                                        <span class="labelRequire__infowisata">*</span>
                                    </h3>
                                </label>
                                <input type="text" id="inputNama" name="inputNama" class="rounded-lg inputSelection"
                                    placeholder="Wisata...">
                            </span>
                        </div>
                        <div class="dbData__listWisata">
                            <span class="flex flex-col inputWisata__name">
                                <label for="wisata__name" class="flex items-center py-2 ">
                                    <h3>
                                        Kota / Kabupaten
                                        <span class="labelRequire__infowisata">*</span>
                                    </h3>
                                </label>
                                <select name="inputKota" id="inputKota">
                                    <option value="" selected hidden>Pilih Kota</option>
                                    @foreach($kota as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </span>
                        </div>
                        <div class="dbData__listWisata">
                            <span class="flex flex-col inputWisata__name">
                                <label for="wisata__name" class="flex items-center py-2 ">
                                    <h3>
                                        Kecamatan
                                        <span class="labelRequire__infowisata">*</span>
                                    </h3>
                                </label>
                                <select name="inputKecamatan" id="inputKecamatan">
                                    <option value="" selected hidden>Pilih Kecamatan</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="relative mt-12 facilityContainer">
                        <span class="block py-4 dbText__header">
                            <h1>Fasilitas Tempat Wisata</h1>
                        </span>
                        <div class="grid grid-cols-3 gap-4 facilityWrapper dbData__Wisataitems">
                            <div class="col-span-2 dbData__listWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Fasilitas Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <div data-modal-target="modalFacility__list" data-modal-toggle="modalFacility__list"
                                        class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">
                                        Pilih Fasilitas Wisata
                                    </div>
                                    <span class="py-2 text-xs font-normal listingFacility__new">
                                        <i> Fasilitas Tempat Wisata Yang Dipilih :</i>
                                    </span>
                                    <div id="modalFacility__list" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-[70rem] max-h-full ">
                                            {{--
                                            <!-- Modal content --> --}}
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                {{--
                                                <!-- Modal header --> --}}
                                                <div
                                                    class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="modalFacility__list">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                {{--
                                                <!-- Modal body --> --}}
                                                <div class="p-6 space-y-6">
                                                    <div class="listCheck__facilityContainer">
                                                        <div
                                                            class="grid items-center w-full grid-flow-col grid-cols-4 gap-4 align-middle facilityList__content">
                                                            @foreach($fasilitas as $row)
                                                            <span class="relative block facilityCheck__items">
                                                                <label class="flex w-full gap-2 ">
                                                                    <input type="checkbox" name="checkFasilitas"
                                                                        value="{{ $row->id_kategori_fasilitas }}"
                                                                        data-nama="{{ $row->kategori_fasilitas }}">
                                                                    <h2
                                                                        class="block -mt-1 font-normal text-md textFacility">
                                                                        {{ $row->kategori_fasilitas }}
                                                                    </h2>
                                                                </label>
                                                            </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--
                                                <!-- Modal footer --> --}}
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- History List Wisata --}}
                                    <div class="listHistory__container ">
                                        <div class="flex flex-row flex-wrap w-full gap-2 py-4 whitespace-normal listHistory__content"
                                            id="fasilitasHistory">
                                        </div>
                                    </div>
                                    {{-- End History List Wisata --}}
                                </span>
                            </div>
                            <div class="dbData__listWisata">
                                <span class="relative flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Tambah Fasilitas Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <div class="relative flex flex-row add__Customdb--cta">
                                        <input type="text" id="inputExtFasilitas" class="w-[15rem]"
                                            name="wisataInput__Fasilityname" autocomplete="off"
                                            placeholder="Kolam Renang">
                                        <button type="button" id="tambahFasilitas"
                                            class="p-2 px-4 add__Customebtn--cta">Tambah</button>
                                    </div>
                                    <span class="py-2 text-xs font-normal listingFacility__new">
                                        <i>Penambahan Fasilitas :</i>
                                    </span>
                                    {{-- History List Wisata --}}
                                    <div class="flex flex-col listHistoryExt__container">
                                        <div class="flex flex-row flex-wrap gap-2 py-4 whitespace-normal listHistoryExt__content"
                                            id="fasilitasExt">
                                        </div>
                                    </div>
                                    {{-- End History List Wisata --}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="continer__selectionDiv grid grid-cols-2 w-full gap-4">
                        <div class="relative mt-12 activityContainer">
                            <span class="block py-4 dbText__header">
                                <h1>Kategori Tempat Wisata</h1>
                            </span>
                            <div class="activityWrapper">
                                <div class="dbData__listWisata">
                                    <span class="flex flex-col inputWisata__name">
                                        <label for="wisata__name" class="flex items-center py-2 ">
                                            <h3>
                                                Kategori Tempat Wisata
                                                <span class="labelRequire__infowisata">*</span>
                                            </h3>
                                        </label>
                                        <select name="wisataList__activity" id="activity">
                                            <option value hidden disabled selected>Silahkan Pilih List Kategori Wisata
                                            </option>
                                            <option value="">Wisata Alam</option>
                                            <option value="">Wisata Sejarah dan Budaya</option>
                                            <option value="">Wisata Petualangan</option>
                                            <option value="">Wisata Kuliner</option>
                                            <option value="">Wisata Religi</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- List Info Wisata --}}
                        <div class="listInfo__container mt-12">
                            <span class="block py-4 dbText__header">
                                <h1>Informasi Tempat Wisata</h1>
                            </span>
                            <div class="listInfo__content relative ">
                                <div class="dbData__listWisata">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Informasi Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <button data-modal-target="infoModal" data-modal-toggle="infoModal"
                                        class="block modalToogle text-white rounded-lg text-sm w-full px-5 py-2.5 text-center"
                                        type="button">
                                        Tambah Informasi Wisata
                                    </button>
                                    <div id="infoModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-4xl max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Tambah Informasi Wisata
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="infoModal">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <div class="p-6 kategoriInput__container">
                                                    <span class="block headWrapper">
                                                        <p class="headText">Silahkan tambah informasi wisata dengan
                                                            mengisi
                                                            form
                                                            dibawah!
                                                        </p>
                                                    </span>
                                                    <section class="infoWisata__Wrapper pt-6">
                                                        <label for="infoInput"
                                                            class="block text-sm labelInput font-medium text-gray-900 dark:text-white mb-3">Tambah
                                                            Informasi Wisata</label>
                                                        <span class="flex flex-row items-center gap-4 pb-4">
                                                            <div class="flexInput flex flex-col w-full">
                                                                <input type="text" id="informaisInput" required
                                                                    class="bg-gray-50 border border-gray-300 text-sm font-thin rounded-lg w-full p-2.5 inputFields"
                                                                    autocomplete="off" placeholder="Informasi Wisata"
                                                                    name="inputInformasi[]">
                                                            </div>
                                                            <span class="relative">
                                                                <button type="button" onclick="deleteInput(this)"
                                                                    disabled
                                                                    class="deleteCta__btn p-2 mt-0 px-4 py-10 rounded-lg"><i
                                                                        class="ri-delete-bin-7-fill"></i></button>
                                                            </span>
                                                        </span>
                                                    </section>
                                                    <section class="relative space-y-5 block moreSpace">
                                                        <button type="button"
                                                            class="inputCta__btn p-2 mt-3 py-10 rounded-lg"><i
                                                                class="ri-add-line"></i> Tambah informasi
                                                            wisata</button>
                                                    </section>

                                                </div>
                                                <div
                                                    class="flex justify-between items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="infoModal" type="submit" id=""
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center "><i
                                                            class="ri-save-fill"></i>
                                                        Simpan Informasi Wisata
                                                    </button>
                                                    <button data-modal-hide="infoModal" type="button" id=""
                                                        class="text-gray-500 btnCancel text-white rounded-lg text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tinyMce__container mt-[4rem] relative">
                        <span
                            class="tinyMce__infoheading inline-block py-3 px-3 rounded-md text-white whitespace-wrap w-[75rem]"><i
                                class="ri-information-fill text-lg"></i>
                            Silahkan masukkan informasi mengenai tempat wisata yang akan anda upload kedalam website !
                        </span>
                        <section class="tinyText__controlarea w-full py-3">
                            <textarea name="artikel"></textarea>
                        </section>
                    </div>
                    {{-- Thumbnail Wisata --}}
                    <div class="thumbnailContainer">
                        <div class="relative mt-12 thumbnail__wrapperContent">
                            <span class="block py-4 dbText__header">
                                <h1>Thumbnail Wisata</h1>
                                <p class="py-3 text-xs">Thumbnail wisata digunakan untuk memberikan informasi
                                    halaman
                                    awal
                                    foto gallery dari
                                    tempat wisata. Silahkan upload foto dengan menggunakan format
                                    <i>.Png, .Jpg, .Jpeg, </i>atau<i> Webp</i>
                                </p>
                            </span>
                            <div class="inputSection__thumbnail">
                                <div class="relative flex justify-between py-6 w-[75rem]">
                                    <input type="file" name="Thumbnail-images" id="wisataImages"
                                        accept="image/png, image/jpg, image/jpeg, image/webp" class="thumbnail__Btncta"
                                        multiple>
                                </div>
                            </div>
                            <div class="bannerContent__thumbnail">
                                <div class="flex flex-row gap-2 overflow-hidden tumbnail__content overflow-x-auto">
                                    {{-- preview images --}}
                                    {{-- <div class="thumbnail__items">
                                        <div class="thumbnailView__img">
                                            <figure class="relative block figureInner">
                                                <img src="https://images.unsplash.com/photo-1661956602926-db6b25f75947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=698&q=80"
                                                    class="relative rounded-2xl imgThumb" alt="">
                                                <div class="thumbnailSettings">
                                                    <span class="block thumbnailNumber">
                                                        <h2 class="rounded-full">01</h2>
                                                    </span>
                                                    <span class="block thumbnailDelete">
                                                        <button class="rounded-full btnThumb__delete" id="thumbDel"
                                                            type="">
                                                            <i class="ri-delete-bin-7-fill"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </figure>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Thumbnail Wisata --}}
                    <div class="mt-16 mb-16 buttonCta__container">
                        <span class="relative block button__Additems">
                            <button id="" type="submit" class="block p-3 px-4 rounded-lg addSection__cta">Simpan
                                Data Wisata</button>
                        </span>
                    </div>
                </div>
                <input type="text" name="listFasilitas" hidden>
                <input type="text" name="listExtFasilitas" hidden>
            </form>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $('.deleteCta__btn').on('click', function(){
        deleteInput(this);
    });

    $('.editBtn').on('click', function(){
        href = "{{ route('kategori.update', 'idKategori') }}";
        href = href.replace('idKategori', $(this).data('id'));
        $('#inputedNama').val($(this).data('nama'));
        $('#kategoriFieldUpdate').prop('action', href);
    });

    function deleteInput(e){
        $(e).closest('span').parent().closest('span').remove();
    }

    $('input[name="inputInformasi[]"]').on('change', function(){
        disableButton(this);
    });

    function disableButton(e){
        if($(e).val() != ""){
            $(e).closest('span').find('button').prop('disabled', false);
        }
        else{
            $(e).closest('span').find('button').prop('disabled', true);
        }
    };

    $('.inputCta__btn').on('click', function(){
        let html = "";
        html +=
        '<span class="flex flex-row items-center gap-4 pb-4">'
        + '<div class="flexInput flex flex-col w-full">'
        + '<input type="text" id="informaisInput" required '
        + 'autocomplete="off"'
        + 'class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5"'
        + 'placeholder="Informasi Wisata" name="inputInformasi[]" onchange="disableButton(this)">'
        + '</div>'
        + '<span class="relative">'
        + '<button type="button" onclick="deleteInput(this)" disabled class="deleteCta__btn p-2 mt-0 px-4 py-10 rounded-lg"><i '
        + 'class="ri-delete-bin-7-fill"></i></button>'
        + '</span>'
        + '</span>';
        $('section.infoWisata__Wrapper').append(html);
    });

</script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontsize | bold italic underline strikethrough | align lineheight | numlist bullist indent outdent | removeformat',
      width: 1201
    });
</script>
<script>
    const paragraph = document.querySelector('.textFacility');
    paragraph.addEventListener('dblclick', event => {
    console.log('double-click event triggered');

    if (document.selection && document.selection.empty) {
        document.selection.empty();
    } else if (window.getSelection) {
        const selection = window.getSelection();
        selection.removeAllRanges();
    }
    });
</script>
<script>
    let arrFasilitas = [];
    let extFasilitas = [];

    $('input[name="checkFasilitas"]').on('change', function(){
        setFasilitas($(this).val(), $(this).data('nama'));
    });

    $('#inputKota').on('change', function(){
        $.post("{{ route('data.kecamatan') }}", {
            kota:$(this).val()
        }, function(result){
            let data = "";
            result.kecamatan.forEach(element => {
                data += "<option value='" + element.id + "'>" + element.name + "</option>";
            });
            $('#inputKecamatan').html(data);
        });
    });

    function setFasilitas(id, name){
        if(arrFasilitas.indexOf(id) != -1){
            removeHistory(id);
        }
        else {
            arrFasilitas.push(id);
            let html = '<span class="block listHistory">' +
                    '<button type="button" onclick="removeHistory(\'' + id + '\')" name="btnHistory" id="btnHistory_' + id + '" class="p-1 px-3 font-normal text-left rounded-lg listHistory__cta">' +
                    name +
                    '</button>' +
                    '</span>';
            $('#fasilitasHistory').append(html);
            setInputFasilitas();
        }
    }

    function removeHistory(id){
        arrFasilitas.remove(id);
        $('#btnHistory_' + id).closest('span').remove();
        $('input[value="' + id + '"]').prop('checked', false);
        setInputFasilitas();
    }

    $('#tambahFasilitas').on('click', function(){
        let nameExt = $('#inputExtFasilitas').val();
        extFasilitas.push(nameExt);
        let html = '<span class="block listHistoryExt__content">' +
                    '<button type="button" onclick="removeExt(\'' + nameExt + '\')" name="btnExt" id="btnExt_' + nameExt + '" class="p-1 px-3 font-normal text-left rounded-lg listHistory__cta">' +
                    nameExt +
                    '</button>' +
                    '</span>';
        $('#fasilitasExt').append(html);
        $('#inputExtFasilitas').val('');
        setInputFasilitas();
    });

    function removeExt(nameExt){
        extFasilitas.remove(nameExt);
        $('#btnExt_' + nameExt).closest('span').remove();
        setInputFasilitas();
    }

    function setInputFasilitas(){
        $('input[name="listFasilitas"]').val(JSON.stringify(arrFasilitas));
        $('input[name="listExtFasilitas"]').val(JSON.stringify(extFasilitas));
    }
</script>

{{-- PREVIEW & DELETE UPLOADED IMAGE--}}
<script>
    // GLOBAL ARRAY DELETE BY VALUE
    Array.prototype.remove = function() {
        var what, a = arguments, L = a.length, ax;
        while (L && this.length) {
            what = a[--L];
            while ((ax = this.indexOf(what)) !== -1) {
                this.splice(ax, 1);
            }
        }
        return this;
    };

    var imgFile = new Array();
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#wisataImages").on("change", function(e) {
                var fileLoaded = 0;
                var allFiles = e.target.files;
                for (var i = 0; i < allFiles.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        imgFile.push(e.target.result);
                        fileLoaded++;
                        if(fileLoaded === allFiles.length){
                            previewThumb();
                        }
                    };
                    reader.readAsDataURL(allFiles[i]);
                };
            });

        } else {
            alert("Your browser doesn't support to File API")
        }
    });

    function previewThumb(){
        var html = "";
        for(var i = 0; i < imgFile.length; i++){
            html += '<div class="thumbnail__items">';
            html += '<div class="thumbnailView__img">';
            html += '<figure class="relative block figureInner">';
            html += '<img src="' + imgFile[i] + '" class="relative rounded-2xl imgThumb" alt="" title="">';
            html += '<div class="thumbnailSettings">';
            html += '<span class="block thumbnailNumber">';
            html += '<h2 class="rounded-full">' + (i+1) + '</h2>';
            html += '</span>';
            html += '<span class="block thumbnailDelete">';
            html += '<button class="rounded-full btnThumb__delete" type="button" onclick="thumbDelete(this)">';
            html += '<i class="ri-delete-bin-7-fill"></i>';
            html += '</button>';
            html += '</span>';
            html += '</div>';
            html += '</figure>';
            html += '</div>';
            html += '</div>';
        }
        $('.tumbnail__content').html(html);
    }

    function thumbDelete(e){
        var tns = $('.thumbnail__items').toArray();
        var selectedTns = $(e).closest('.thumbnail__items');
        var selectedImg = $(e).closest('.thumbnailSettings').parent().find('img').attr('src');

        imgFile.remove(selectedImg);

        previewThumb();
    }
</script>
@endpush
