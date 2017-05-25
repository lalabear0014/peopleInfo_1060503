<div class="container">
  <div id="main" class="row">
    <?php $author = $this->session->userdata('user'); ?>
    <form action="<?= base_url('events/submit_msg') ?>" method="post" class="form-horizontal">
        <input type="hidden" name="txt_hidden" value="<?= 77889; ?>">
        <div class="form-group">
            <label for="info" class="col-md-2 text-right">留言：</label>
            <div class="col-md-10">
                <textarea name="txt_info" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 text-right"></label>
            <div class="col-md-10">
                <input type="submit" name="btnSave" class="btn btn-primary" value="Save">
                <a href="<?= base_url('messages/index') ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>   
  </div>
</div>