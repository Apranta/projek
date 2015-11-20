$(document).ready(function() {

    /* Tabel Sub-menu Catatan Harian */
    $("#table_bukuharian").dataTable({ 
        aaSorting: [[0, 'desc'], [2, 'desc'], [9, 'asc']], bStateSave: true
    });
    $("#table_logbook").dataTable({ 
        aaSorting: [[0, 'desc'], [9, 'desc']], bStateSave: true
    });
    $("#table_painservice").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });
    $("#table_laporanilmiah").dataTable({ 
        aaSorting: [[0, 'desc'], [8, 'asc']], bStateSave: true
    });
    $("#table_laporananestesi").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });
    $("#table_staseluar").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });
    $("#table_criticalcare").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });
    $("#table_pre_anestesi").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });
    $("#table_kartu_anestesi").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });
    $("#table_intra").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });
    $("#table_pasca_anestesi").dataTable({ 
        aaSorting: [[0, 'desc']], bStateSave: true
    });

    /* Tabel Sub-menu Jadwal */
    $("#table_jadwaloperasi").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });
    $("#table_jadwalchief").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });
    $("#table_jadwalstase").dataTable({ 
        aaSorting: [[0, 'asc'], [1, 'desc']], bStateSave: true
    });

    /* Tabel Sub-menu Komponen */
    $("#table_pasien").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });
    $("#table_operator").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });
    $("#table_ruangan").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });

    /* Tabel Sub-menu Pengguna */
    $("#table_residen").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });
    $("#table_konsulen").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });
    $("#table_admin").dataTable({ 
        aaSorting: [[0, 'asc']], bStateSave: true
    });


    $(".chosen-select").chosen();

    var addLeadingZero = function(x) {
        return (x<10)?('0'+x):x;
    };
    var currentDate = new Date();

    $("#tgl_mulai").datepicker();
    $("#tgl_selesai").datepicker();
    $("#tanggal_maju").datepicker();
    $("#tgl_masuk").datepicker();
    $("#tanggal").datepicker();

    $("#tanggal_mens").datepicker();
    $("#ro_thoraks_tgl").datepicker();
    $("#ekg_tgl").datepicker();
    $("#echo_tgl").datepicker();
    $("#stress_test_tgl").datepicker();
    $("#tanggal_verifikasi").datepicker();

    $("#tanggal-kartu-anestesi").datepicker();
    $("#tanggal-jadwal-operasi").datepicker();
    $("#tanggal-jadwal-stase").datepicker({
       format: "mm-yyyy",
       viewMode: "months", 
       minViewMode: "months" 
    });
    $("#tanggal-jadwal-chief").datepicker({
        format: "mm-yyyy",
        viewMode: "months", 
        minViewMode: "months"
    });
    
    var jam_mulai = document.getElementById('jam_mulai');
    if(jam_mulai != null) {
        if(!$('#jam_mulai').val()) {
            document.getElementById('jam_mulai').value = addLeadingZero(currentDate.getHours()) + ":" + addLeadingZero(currentDate.getMinutes());
        }
    }

    var monitoring_obat_jam = document.getElementById('monitoring_obat_jam');
    if(monitoring_obat_jam != null) {
        if(!$('#monitoring_obat_jam').val()) {
            document.getElementById('monitoring_obat_jam').value = addLeadingZero(currentDate.getHours()) + ":" + addLeadingZero(currentDate.getMinutes());
        }
    }
    var monitoring_cairan_jam = document.getElementById('monitoring_cairan_jam');
    if(monitoring_cairan_jam != null) {
        if(!$('#monitoring_cairan_jam').val()) {
            document.getElementById('monitoring_cairan_jam').value = addLeadingZero(currentDate.getHours()) + ":" + addLeadingZero(currentDate.getMinutes());
        }
    }
    var monitoring_pasien_jam = document.getElementById('monitoring_pasien_jam');
    if(monitoring_pasien_jam != null) {
        if(!$('#monitoring_pasien_jam').val()) {
            document.getElementById('monitoring_pasien_jam').value = addLeadingZero(currentDate.getHours()) + ":" + addLeadingZero(currentDate.getMinutes());
        }
    }
});

function toTambahPasien()
{
    $('#tambah_pasien').popover('show');
}

function refreshObatJam()
{
    if(document.getElementById('monitoring_obat_jam') != null) {
        var addLeadingZero = function(x) {
            return (x<10)?('0'+x):x;
        };
        var currentDate = new Date();
        document.getElementById('monitoring_obat_jam').value = addLeadingZero(currentDate.getHours()) + ":" + addLeadingZero(currentDate.getMinutes());

        setTimeout("refreshObatJam()", 180000);
    }
}
refreshObatJam();

function refreshCairanJam()
{
    if(document.getElementById('monitoring_cairan_jam') != null) {
        var addLeadingZero = function(x) {
            return (x<10)?('0'+x):x;
        };
        var currentDate = new Date();
        document.getElementById('monitoring_cairan_jam').value = addLeadingZero(currentDate.getHours()) + ":" + addLeadingZero(currentDate.getMinutes());

        setTimeout("refreshCairanJam()", 180000);
    }
}
refreshCairanJam();

function refreshPasienJam()
{
    if(document.getElementById('monitoring_pasien_jam') != null) {
        var addLeadingZero = function(x) {
            return (x<10)?('0'+x):x;
        };
        var currentDate = new Date();
        document.getElementById('monitoring_pasien_jam').value = addLeadingZero(currentDate.getHours()) + ":" + addLeadingZero(currentDate.getMinutes());

        setTimeout("refreshPasienJam()", 180000);
    }
}
refreshPasienJam();

function showClock()
{
	var addLeadingZero = function(x) {
        return (x<10)?('0'+x):x;
    };

    var getMonthName = function(m) {
    	if (m == 0) return "Januari";
    	else if (m == 1) return "Februari";
    	else if (m == 2) return "Maret";
    	else if (m == 3) return "April";
    	else if (m == 4) return "Mei";
    	else if (m == 5) return "Juni";
    	else if (m == 6) return "Juli";
    	else if (m == 7) return "Agustus";
    	else if (m == 8) return "September";
    	else if (m == 9) return "Oktober";
    	else if (m == 10) return "November";
    	else if (m == 11) return "Desmber";
    }

	var Digital = new Date();

	var date = Digital.getDate();
	var month = Digital.getMonth();
	var year = Digital.getFullYear();

	var hours = Digital.getHours();
	var minutes = Digital.getMinutes();
	var seconds = Digital.getSeconds();

	document.getElementById("datetime").innerHTML = addLeadingZero(date) + " " + getMonthName(month) + " " + year + ", " + addLeadingZero(hours) + ":" + addLeadingZero(minutes) + ":" + addLeadingZero(seconds);

	setTimeout("showClock()", 1000);
}
showClock();