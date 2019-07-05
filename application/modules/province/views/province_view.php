<h1>Province</h1>
<a href="<?=base_url().'province/add';?>"><img width="50px" src="<?=base_url().'assets/images/add.jpeg';?>"></a>

<div class="table-responsive"></div>
<table id="prov" class="table table-hover">
    <thead>
        <tr>
            <th>Province Name</th>
            <th>Created At</th>
            <th>Created By</th>
            <th>Updated At</th>
            <th>Updated By</th>
        </tr>
    </thead>
    
</table>



<script src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
	    $('#prov').DataTable( {
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
	        "ajax": {
                "url" : "<?=base_url().'province/data';?>",
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                { "data": "name" }, // Tampilkan nis
                { "data": "created_at" },  // Tampilkan nama
                { "data": "created_by" }, // Tampilkan telepon
                { "data": "updated_at" }, // Tampilkan alamat
                { "data": "updated_by" }, // Tampilkan alamat
            ],
	    } );
	} );
</script>