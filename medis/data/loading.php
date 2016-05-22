<h2 class="sub-header"><?php echo $message; ?> Memproses ...</h2>
<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>

<a title="Lewati" href="./?ur=tampil" class="btn btn-lg btn-default">
	<i class="glyphicon glyphicon-forward"></i>
</a>

<meta http-equiv="refresh" content="1; url='?ur=<?php echo $hal; ?>'" />