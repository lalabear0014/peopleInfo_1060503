<div class="container">
  <div id="main" class="row">
    <form action="<?= base_url('events/update') ?>" method="post" class="form-horizontal">
        <!--傳送隱藏訊息(id)-->
        <input type="hidden" name="txt_hidden" value="<?= $records->id; ?>">
        <div class="form-group">
            <label for="name" class="col-md-2 text-right">姓名：</label>
            <div class="col-md-4">
                <input type="text" name="txt_name" class="form-control" value="<?= $records->name; ?>" required>
            </div>
            <label for="idnumber" class="col-md-2 text-right">證號：</label>
            <div class="col-md-4">
                <input type="text" name="txt_idnumber" class="form-control" value="<?= $records->idnumber; ?>">
            </div>
        </div>
        
        <div class="form-group">
            <label for="validate" class="col-md-2 text-right">資審：</label>
            <div class="col-md-2">
                <input type="text" name="txt_validate" class="form-control" value="<?= $records->validate; ?>">
            </div>
            <label for="station" class="col-md-1 text-right">駐地：</label>
            <div class="col-md-2">
                <input type="text" name="txt_station" class="form-control" value="<?= $records->station; ?>">
            </div>
            <label for="birthday" class="col-md-1 text-right">生日：</label>
            <div class="col-md-2">
                <div class='input-group date' id='datetimepicker'> 	
                    <input type="text" name="txt_birthday" class="form-control" value="<?= $records->birthday; ?>">
                    <span class="input-group-addon">	
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>       
                </div>                
            </div>
        </div>
        <script type="text/javascript">
            $('#datetimepicker').datetimepicker({
                format: 'YYYY/MM/DD'
            });
        </script>

        <div class="form-group">
            <label for="gender" class="col-md-2 text-right">性別：</label>
            <div class="col-md-4">
                <input type="text" name="txt_gender" class="form-control" value="<?= $records->gender; ?>">
            </div>
            <label for="education" class="col-md-2 text-right">學歷：</label>
            <div class="col-md-4">
                <textarea name="txt_education" class="form-control"><?= $records->education; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="experience" class="col-md-2 text-right">經歷：</label>
            <div class="col-md-10">
                <textarea name="txt_experience" class="form-control"><?= $records->experience; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="phone" class="col-md-2 text-right">電話：</label>
            <div class="col-md-4">
                <input type="text" name="txt_phone" class="form-control" value="<?= $records->phone; ?>">
            </div>
            <label for="contact" class="col-md-2 text-right">即時通訊：</label>
            <div class="col-md-4">
                <textarea name="txt_contact" class="form-control"><?= $records->contact; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-2 text-right">電郵：</label>
            <div class="col-md-4">
                <input type="text" name="txt_email" class="form-control" value="<?= $records->email; ?>">
            </div>
            <label for="address" class="col-md-2 text-right">地址：</label>
            <div class="col-md-4">
                <textarea name="txt_address" class="form-control"><?= $records->address; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="process" class="col-md-2 text-right">接觸經過：</label>
            <div class="col-md-10">
                <textarea name="txt_process" class="form-control"><?= $records->process; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="assess" class="col-md-2 text-right">考核策進：</label>
            <div class="col-md-10">
                <textarea name="txt_assess" class="form-control"><?= $records->assess; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="use" class="col-md-2 text-right">運用規劃：</label>
            <div class="col-md-10">
                <textarea name="txt_use" class="form-control"><?= $records->use; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="money" class="col-md-2 text-right">匯補紀錄：</label>
            <div class="col-md-10">
                <textarea name="txt_money" class="form-control"><?= $records->money; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="effect" class="col-md-2 text-right">工作成效：</label>
            <div class="col-md-10">
                <textarea name="txt_effect" class="form-control"><?= $records->effect; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-md-2 text-right"></label>
            <div class="col-md-10">
                <input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
                <a href="<?= base_url('events/index') ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
  </div>
</div>