<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $pagetitle;?></title>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/header.css'; ?>" >

</head>
<body>
<?php
  $this->load->view('_parts/master_header_view');
?>
	<div class="indent">
  	<?php $this->load->view($module.'/'.$view_file);?>
  </div>
<?php
// $this->load->view('templates/_parts/master_sidebar_view');
$this->load->view('_parts/master_footer_view');
?>

</body>
</html>