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
                <th>參謀</th>
                <th>創建時間</th>
                <th>功能</th>
            </tr>
            <?php foreach ($records as $rec) :?>
                <?php date_default_timezone_set("Asia/Taipei"); ?>
                <tr>
                    <td><?= $rec->id; ?></td>
                    <td>
                        <a href="<?= base_url('events/show/'.$rec->id); ?>" class="btn btn-default"><?= $rec->name; ?></a>
                    </td>
                    <td><?= $rec->user_id; ?></td>
                    <td><?= $rec->created_at; ?></td>
                    <td>
                        <a href="<?= base_url('events/edit/'.$rec->id); ?>" class="btn btn-success">編輯</a>
                        <a href="<?= base_url('events/delete/'.$rec->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">刪除</a>
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