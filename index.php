<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
$mysqli = mysqli_connect("localhost", "root", "", "test");
$res = mysqli_query($mysqli, "SELECT * FROM person");
$i = 0;
?>

<div class="container">
    <table  class="table table-hover table-condensed">
        <?php while($row = mysqli_fetch_assoc($res)): ?>
            <?php if($i == 0):?>
                <thead>
                    <tr>
                        <?php foreach($row as $key => $val):?>
                            <th><?=$key?></th>
                            <?php $i = 1;?>
                        <?php endforeach;?>
                    </tr>
                </thead>
            <?php endif;?>
            <tr>
                <?php foreach($row as $key => $val):?>
                    <td><?=$val?></td>
                <?php endforeach;?>
            </tr>
        <?php endwhile;?>
    </table>
</div>


