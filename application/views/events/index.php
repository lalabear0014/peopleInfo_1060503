<!--session判斷-->
<?php
    if (is_null($_SESSION['user']) || ($_SESSION['user'] == "")) {
        redirect(base_url('users/index'));
    }
?>
<div class="container">
  <div id="main" class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>項次</th>
                <th>人員</th>
                <th>駐地</th>
                <th>參謀</th>
                <th>創建時間</th>
                <th>留言數</th>
                <th>功能</th>
            </tr>
            <?php foreach ($records as $rec) :?>
                <?php date_default_timezone_set("Asia/Taipei"); ?>
                <tr>
                    <td><?= $rec->event_id; ?></td>
                    <td>
                        <a href="<?= base_url('events/show/'.$rec->event_id); ?>" class="btn btn-default"><?= $rec->event_name; ?></a>
                    </td>
                    <td><?= $rec->station; ?></td>
                    <?php foreach ($users as $user) :?>
                        <?php if ($rec->user_name == $user->user_name) {
                           echo "<td>".($user->fullname)."</td>";
                        }?>
                    <?php endforeach; ?>
                    <td><?= $rec->created_at; ?></td>
                    <td>1</td>
                    <td>
                        <a href="<?= base_url('events/edit/'.$rec->event_id); ?>" class="btn btn-success">編輯</a>
                        <!--<a href="<?= base_url('events/delete/'.$rec->event_id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">刪除</a>-->
                    </td>
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
    </nav>
  </div>
</div>