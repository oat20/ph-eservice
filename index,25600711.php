<?php
include('config.php');
include('condb-inc.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include('css-inc.php');?>
</head>

<body>
<div class="container">
	<div class="space10"></div>
    
	<div class="row">
    	<div class="col-sm-12">
        
        	<img src="http://www.ph.mahidol.ac.th/img/logo.png" class="img-responsive">
            <h1>บริการออนไลน์ <small>Services Online</small></h1>
            <div class="row">
            	<?php
				$sql=mysql_query("select * from jos_weblinks
					where published='1'
					order by convert(catid using tis620) asc,
					ordering asc");
				while($ob=mysql_fetch_assoc($sql)){
					echo '<div class="col-sm-4">
								<a href="'.$ob['url'].'" target="_blank">
									<div class="well">
										<span class="font-18"><i class="glyphicon glyphicon-link"></i> '.$ob['title'].'</span>
										<br>'.$ob['catid'].'
									</div>
								</a>					
						</div>';
				}
				?>
            </div><!--row-->
        
        </div><!--col-->
    </div><!--row-->
</div><!--container-->

<?php include('js-inc.php');?>
</body>
</html>