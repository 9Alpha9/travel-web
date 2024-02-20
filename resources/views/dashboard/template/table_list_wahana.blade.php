@if (count($wahana) > 0)
@foreach($wahana as $key => $value)
<tr class="font-normal bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap">
        {{ $key + 1 }}
    </th>
    <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap">
        <input type="hidden" name="id_wahana_wisatas[]" value="{{ $value->id_wahana_wisatas }}">
        <input type="text" class="w-full font-normal border border-gray-300 rounded-lg bg-gray-50 text-md"
            autocomplete="off" placeholder="Masukkan Nama Wahana ..." name="nama_wahana[]"
            value="{{ $value->nama_wahana }}">
    </th>
    <td class="px-2 py-4 whitespace-nowrap">
        <select name="id_tipe_wahana[]" class="w-full font-normal border border-gray-300 rounded-lg bg-gray-50 text-md"
            id="activity">
            <option value hidden disabled selected>
                Pilih tipe wahana
            </option>
            @foreach ($tipe as $key2 => $value2)
            <option value="{{ $value2->id_tipe_wahana }}" @if($value2->id_tipe_wahana == $value->id_tipe_wahana)
                selected @endif>{{
                $value2->nama_tipe_wahana }}</option>
            @endforeach
    </td>
    <td class="px-2 py-4">
        <input type="text" name="deskripsi_wahana[]" placeholder="Keterangan Wahana ..."
            class="w-full border border-gray-300 rounded-lg bg-gray-50" value="{{ $value->deskripsi_wahana }}">
    </td>
    <td class="px-2 py-4">
        <div class="relative actionWahana">
            <span class="inline-block">
                <ul class="flex gap-2">
                    <li>
                        <button type="button" onclick="edit" disabled
                            class="p-2.5 px-4 py-10 mt-0 rounded-lg cursor-pointer editWahana__btn"><i
                                class="ri-pencil-fill"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="p-2.5 px-4 py-10 mt-0 rounded-lg cursor-pointer deleteWahana__btn"><i
                                class="ri-delete-bin-7-fill"></i>
                        </button>
                    </li>
                </ul>
            </span>
        </div>
    </td>
</tr>
@endforeach
@else
<tr class="font-normal bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap">
        1.
    </th>
    <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap">
        <input type="hidden" name="id_wahana_wisatas[]" value="">
        <input type="text" class="w-full font-normal border border-gray-300 rounded-lg bg-gray-50 text-md"
            autocomplete="off" placeholder="Masukkan Nama Wahana ..." name="nama_wahana[]">
    </th>
    <td class="px-2 py-4 whitespace-nowrap">
        <select name="id_tipe_wahana[]" class="w-full font-normal border border-gray-300 rounded-lg bg-gray-50 text-md"
            id="activity">
            <option value hidden disabled selected>
                Pilih tipe wahana
            </option>
            @foreach ($tipe as $key => $value)
            <option value="{{ $value->id_tipe_wahana }}">{{ $value->nama_tipe_wahana }}</option>
            @endforeach
    </td>
    <td class="px-2 py-4">
        <input type="text" name="deskripsi_wahana[]" placeholder="Keterangan Wahana ..."
            class="w-full border border-gray-300 rounded-lg bg-gray-50">
    </td>
    <td class="px-2 py-4">
        <div class="relative actionWahana">
            <span class="inline-block">
                <ul class="flex gap-2">
                    <li>
                        <button type="button" onclick="edit" disabled
                            class="p-2.5 px-4 py-10 mt-0 rounded-lg cursor-pointer editWahana__btn"><i
                                class="ri-pencil-fill"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="p-2.5 px-4 py-10 mt-0 rounded-lg cursor-pointer deleteWahana__btn"><i
                                class="ri-delete-bin-7-fill"></i>
                        </button>
                    </li>
                </ul>
            </span>
        </div>
    </td>
</tr>
@endif