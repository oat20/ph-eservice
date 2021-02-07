<?php
session_start();

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
    	<div class="col-sm-6">
    		<img src="https://www.ph.mahidol.ac.th/img/logo.png" class="img-responsive">
    	</div>
        <div class="col-sm-6 text-right">
    		<h1>บริการออนไลน์ <small>Services Online</small></h1>
    	</div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
        	
            <?php
			$qCat = mysqli_query($result, "select distinct catid
				from jos_weblinks
				order by convert(catid using tis620)
			");
			while($rsCat = mysqli_fetch_assoc($qCat)){
			?>
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title text-uppercase"><i class="fa fa-link fa-fw"></i> <?php print $rsCat['catid'];?></h3></div>
                <!--<div class="panel-body">-->
                	<div class="list-group">
                	<?php
					$sql=mysqli_query($result, "select * from jos_weblinks
									where published='1'
									and catid = '$rsCat[catid]'
									order by convert(title using tis620)
					");
					while($ob=mysqli_fetch_assoc($sql)){
						print '<a href="'.$ob['url'].'" target="_blank" class="list-group-item">
															<h4 class="list-group-item-heading">'.$ob['title'].'</h4>';
															//print '<p class="list-group-item-text">'.$ob['catid'].'</p>';
													print '</a>';
					}
					?>
                    </div>
                <!--</div>-->
            </div><!--panel-->
            <?php
			}
			?>
            
        </div><!--col-->
        
    </div><!--row-->
            
</div><!--container-->

<?php 
mysqli_close($result);

include('js-inc.php');
?>
</body>
</html>