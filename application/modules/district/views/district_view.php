<h1>District</h1>
<a href="<?=base_url().'district/add';?>"><img width="50px" src="<?=base_url().'assets/images/add.jpeg';?>"></a>

<div class="table-responsive"></div>
<table id="district" class="table table-hover">
    <thead>
        <tr>
            <th>District Name</th>
            <th>Province Name</th>
            <th>Population</th>
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
	    $('#district').DataTable( {
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
	        "ajax": {
                "url" : "<?=base_url().'district/data';?>",
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                { "data": "district" }, 
                { "data": "province" }, 
                { "data": "population" }, 
                { "data": "created_at" },  
                { "data": "created_by" }, 
                { "data": "updated_at" }, 
                { "data": "updated_by" }, 
            ],
	    } );
	} );
</script>