<?php
use yii\helpers\Url;
?>

<table>
    <?php foreach ($users as $i=>$userlist):?>
        <tr>
            <td><?= $userlist->id ?></td>
            <td><?= $userlist->username ?></td>
            <td><?= $userlist->email ?></td>
        </tr>
    <?php endforeach;?>
</table>
<?= '<a class="btn btn-primary" href="' . Url::to('/site/signup') . '">Создать пользователя</a>'?>