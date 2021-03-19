$(document).ready(function(){
	// ========= Jobs DataTables =========
	$('#employersTable').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
		"ajax": "../model/new_employers_datatables.php",
    });
});
$(document).ready(function(){
	// ========= Jobs DataTables =========
	$('#newapplicantsTable').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
		"ajax": "../model/new_applicants_datatables.php",
    });
});