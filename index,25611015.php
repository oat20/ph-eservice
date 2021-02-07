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
                        
            <!--<div class="row">-->
            	<?php
				foreach($cf_section as $k=>$v){
				echo '<div class="panel panel-'.$v['color'].'">
							<div class="panel-heading">
								<h3 class="panel-title text-uppercase">'.$v['name'].'</h3>
							</div>
							<div class="panel-body">';
							
								$sql=mysql_query("select * from jos_weblinks
									where published='1'
									and section = '$k'");
								$pagelen=3; $row=ceil(mysql_num_rows($sql)/$pagelen); $goto=0;
								for($r=0;$r<$row;$r++){
									echo '<div class="row">';
									$sql02=mysql_query("select * from jos_weblinks
										where published='1'
										and section = '$k'
										order by convert(catid using tis620) asc,
										ordering asc limit $goto,$pagelen");
									while($ob=mysql_fetch_assoc($sql02)){
										echo '<div class="col-sm-4">
													<a href="'.$ob['url'].'" target="_blank">
														<div class="well">
															<span class="font-16">'.$ob['title'].'</span>
															<br>'.$ob['catid'].'
														</div>
													</a>					
											</div><!--col-->';
									}
									echo '</div><!--row-->';
									$goto+=$pagelen;
								}
				
				echo '</div>
					</div>';
			}
				?>
            <!--</div>--><!--row-->
        
        </div><!--col-->
    </div><!--row-->
</div><!--container-->

<?php include('js-inc.php');?>
</body>
</html>