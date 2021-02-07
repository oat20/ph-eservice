<?php
include('config.php');
include('condb-inc.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include('css-inc.php');?>
</head>

<body>
<div class="container">
	<div class="space10"></div>
    
    <img src="http://www.ph.mahidol.ac.th/img/logo.png" class="img-responsive">
    <h1>บริการออนไลน์ <small>Services Online</small></h1>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title text-uppercase"><i class="fa fa-link fa-fw"></i> intranet</h3></div>
                <!--<div class="panel-body">-->
                	<div class="list-group">
                	<?php
					$sql=mysql_query("select * from jos_weblinks
									where published='1'
									and section = 'intranet'
									order by convert(catid using tis620) asc,
										ordering asc");
					while($ob=mysql_fetch_assoc($sql)){
						print '<a href="'.$ob['url'].'" target="_blank" class="list-group-item">
															<h4 class="list-group-item-heading">'.$ob['title'].'</h4>
															<p class="list-group-item-text">'.$ob['catid'].'</p>
													</a>';
					}
					?>
                    </div>
                <!--</div>-->
            </div><!--panel-->
        </div><!--col-->
        
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title text-uppercase"><i class="fa fa-link fa-fw"></i> internet</h3></div>
                <!--<div class="panel-body">-->
                	<div class="list-group">
                	<?php
					$sql=mysql_query("select * from jos_weblinks
									where published='1'
									and section = 'internet'
									order by convert(catid using tis620) asc,
										ordering asc");
					while($ob=mysql_fetch_assoc($sql)){
						print '<a href="'.$ob['url'].'" target="_blank" class="list-group-item">
															<h4 class="list-group-item-heading">'.$ob['title'].'</h4>
															<p class="list-group-item-text">'.$ob['catid'].'</p>
													</a>';
					}
					?>
                    </div>
                <!--</div>-->
            </div><!--panel-->
        </div><!--col-->
    </div><!--row-->
            
</div><!--container-->

<?php include('js-inc.php');?>
</body>
</html>