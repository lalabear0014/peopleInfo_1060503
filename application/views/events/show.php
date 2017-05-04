<div class="container">
	<h1><b><?= $records->name; ?></b></h1>
	<ul class="nav nav-tabs">
		<li class="active"><a href="#info" data-toggle="tab">基本資料</a></li>
		<li><a href="#process" data-toggle="tab">接觸經過</a></li>
		<li><a href="#assess" data-toggle="tab">考核策進</a></li>
		<li><a href="#use" data-toggle="tab">運用規劃</a></li>
		<li><a href="#money" data-toggle="tab">匯補紀錄</a></li>
		<li><a href="#effect" data-toggle="tab">工作成效</a></li>
		<li><a href="#upload" data-toggle="tab">檔案上傳</a></li>
		<li><a href="#message" data-toggle="tab">留言訊息</a></li>
	</ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="info">
			<b>個人資料：</b>
			<dl class="dl-horizontal">
				<dt>證號：</dt>
				<dd><?= $records->idnumber; ?></dd>
				<dt>資審：</dt>
				<dd><?= $records->name; ?></dd>
				<dt>駐地：</dt>
				<dd><?= $records->station; ?></dd>
				<dt>生日：</dt>
				<dd><?= $records->birthday; ?></dd>
				<dt>性別：</dt>
				<dd>女</dd>
				<dt>學歷：</dt>
				<dd><?= $records->education; ?></dd>
				<dt>經歷：</dt>
				<dd><?= $records->experience; ?></dd>
			</dl>
			<b>聯繫方式：</b>
			<dl class="dl-horizontal">
				<dt>電話：</dt>
				<dd><?= $records->phone; ?></dd>
				<dt>即時通訊：</dt>
				<dd><?= $records->contact; ?></dd>
				<dt>電郵：</dt>
				<dd><?= $records->email; ?></dd>
				<dt>地址：</dt>
				<dd><?= $records->address; ?></dd>
			</dl>
		</div>

		<div role="tabpanel" class="tab-pane" id="process">
			<?= $records->process; ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="assess">
			<?= $records->assess; ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="use">
			<?= $records->use; ?>	
		</div>
		<div role="tabpanel" class="tab-pane" id="money">
			<?= $records->money; ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="effect">
			<?= $records->effect; ?>	
		</div>
		<div role="tabpanel" class="tab-pane" id="upload">
				
		</div>
		<div role="tabpanel" class="tab-pane" id="message">
				
		</div>
	</div>
</div>