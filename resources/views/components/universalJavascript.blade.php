<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script type=" text/javascript">
    let namaHari = [
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jum'at",
        "Sabtu"
    ];
    let hariSingkat = [
        "Min",
        "Sen",
        "Sel",
        "Rab",
        "Kam",
        "Jum",
        "Sab"
    ];
    let namaBulan = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];
    let bulanSingkat = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "Mei",
        "Jun",
        "Jul",
        "Ags",
        "Sep",
        "Okt",
        "Nov",
        "Des"
    ];
    function customFormatDate(date){
        let tempDate = namaHari[date.getDay()] + ", " + date.getDate() + " " + bulanSingkat[date.getMonth()] + " " + date.getFullYear();
        return tempDate;
    }
</script>

<script>
    $('.numberOnly').on("change", function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>