<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>
<style>
.adminpage{width: 500px;color: #999;margin: 30px auto 0;padding: 50px;border: 1px solid #ddd;}	

</style>

<div class="main">
<h1 style="text-align:center";>Admin page</h1>

<div class="adminpage">
	<h2>Welcome To  Admin page</h2>
	<p>You can manage your user and online exam system from here....</p>

</div>
</div>
<?php include 'inc/footer.php'; ?>