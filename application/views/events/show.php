<div class="container">
	<h1><b><?= $records->event_name; ?></b></h1>
	<ul class="nav nav-tabs">
		<li><a href="#info" data-toggle="tab">基本資料</a></li>
		<li><a href="#process" data-toggle="tab">接觸經過</a></li>
		<li><a href="#assess" data-toggle="tab">考核策進</a></li>
		<li><a href="#use" data-toggle="tab">運用規劃</a></li>
		<li><a href="#money" data-toggle="tab">匯補紀錄</a></li>
		<li><a href="#effect" data-toggle="tab">工作成效</a></li>
		<li><a href="#upload" data-toggle="tab">檔案上傳</a></li>
		<li class="active"><a href="#message" data-toggle="tab">留言訊息</a></li>
	</ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane" id="info">
			<div class="form-group">
				<label class="col-md-2 text-right">個人資料：</label>
				<div class="col-md-10">
					<table class="table table-bordered">
						<tr>
							<th>證號：</th><td><?= $records->idnumber; ?></td>
						</tr>
						<tr>
							<th>資審：</th><td><?= $records->validate; ?></td>
						</tr>
						<tr>
							<th>駐地：</th><td><?= $records->station; ?></td>
						</tr>
						<tr>
							<th>生日：</th><td><?= $records->birthday; ?></td>
						</tr>
						<tr>
							<th>性別：</th><td><?= $records->gender; ?></td>
						</tr>
						<tr>
							<th>學歷：</th><td><?= $records->education; ?></td>
						</tr>
						<tr>
							<th>經歷：</th><td><?= $records->experience; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 text-right">聯繫方式：</label>
				<div class="col-md-10">
					<table class="table table-bordered">
						<tr>
							<th>電話：</th><td><?= $records->phone; ?></td>
						</tr>
						<tr>
							<th>即時通訊：</th><td><?= $records->contact; ?></td>
						</tr>
						<tr>
							<th>電郵：</th><td><?= $records->email; ?></td>
						</tr>
						<tr>
							<th>地址：</th><td><?= $records->address; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div role="tabpanel" class="tab-pane" id="process">
			<div class="form-group">
				<label class="col-md-1 text-right"></label>
				<div class="col-md-11">
					<?= $records->process; ?>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="assess">
			<div class="form-group">
				<label class="col-md-1 text-right"></label>
				<div class="col-md-11">
					<?= $records->assess; ?>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="use">
			<div class="form-group">
				<label class="col-md-1 text-right"></label>
				<div class="col-md-11">
					<?= $records->use; ?>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="money">
			<div class="form-group">
				<label class="col-md-1 text-right"></label>
				<div class="col-md-11">
					<?= $records->money; ?>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="effect">
			<div class="form-group">
				<label class="col-md-1 text-right"></label>
				<div class="col-md-11">
					<?= $records->effect; ?>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="upload">
			<div class="form-group">
				<label class="col-md-2 text-right">檔案上傳：</label>
				<div class="col-md-10">
					<form action="<?= base_url('events/upload/'.$records->event_id); ?>" method="post" class="dropzone" enctype="multipart/form-data" name="uploadData">
						<center>
							<img alt="Feature image" draggable="false" height="52" src="<?= base_url('uploads/img/files-lg.svg'); ?>" width="204">
						</center>
					</form>
				</div>
				<?php if (is_dir('uploads/'.$records->event_id)) { ?>
					<label class="col-md-2 text-right">現有檔案：</label>
					<div class="col-md-10">			
						<?php
							$targetDir = 'uploads/'.$records->event_id;
							$files = array_diff(scandir($targetDir), array('..', '.'));
							$targetPath = 'uploads/'.$records->event_id.'/';

							foreach ($files as $value) {
								$file = iconv('big5','utf-8', $value);
								echo "<a href='../../".$targetPath.$file."'>".$file."</a><br>";
							}
						?>
					</div>
				<?php } ?>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane active" id="message">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>項次</th>
						<th>內容</th>
						<th>作者</th>
						<th>創建時間</th>
					</tr>
					<?php foreach ($results as $res) : ?>
						<?php date_default_timezone_set("Asia/Taipei"); ?>
						<tr>
							<td><?= $res->id; ?></td>
							<td><?= $res->info; ?></td>
							<?php foreach ($users as $user) {
								if ($res->user_name == $user->user_name) {
									echo "<td>".$user->fullname."</td>";
								}
							}?>
							<td><?= $res->created_at; ?></td>	
						</tr>
					<?php endforeach; ?>
				</thead>
			</table>
			<!-- Show pagination links -->
			<?php
				foreach ($links as $link) {
					echo $link;
				}
			?>
		</div>
	</div>
</div>