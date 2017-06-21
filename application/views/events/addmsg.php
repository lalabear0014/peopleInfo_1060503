<div class="container">
  <div id="main" class="row">
    <?php $username = $this->session->userdata('user'); ?>
    <form action="<?= base_url('events/submit_msg/'.$records->hash_event_name) ?>" method="post" class="form-horizontal">
        <input type="hidden" name="hidden_event_id" value="<?= $records->event_id; ?>">
        <input type="hidden" name="hidden_user_name" value="<?= $username; ?>">
        <input type="hidden" name="hidden_hash_event_name" value="<?= $records->hash_event_name; ?>">        
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
                <a href="<?= base_url('events/show/'.$records->hash_event_name) ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>   
  </div>
</div>