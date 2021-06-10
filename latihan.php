<?php
$filename = 'caloriesprice.json';
$data = file_get_contents($filename);
$users = json_decode($data); //setiap array di user dianalogikan ke string user

?>
<html>
<table>
    <tbody>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>merk</th>
            <th>link pembelian</th>
            <th>harga</th>
            <th>kalori</th>
            <th>lemak</th>
            <th>kualitas servis</th>
            <th>jumlah unit</th>
        </tr>
        <?php //looping aray
        foreach ($users as $user) {
            //cara lain 
            //for ($i=0; $i<$users.length;i++) {
        ?>
        <tr>
            <td><?php echo $user->fields->item_id; ?></td>
            <td><?= $user->fields->item_name ?></td>
            <td><?= $user->fields->brand_name ?></td>
            <td><?php if (empty($user->fields->link)) {
                    echo "-";
                } else {
                    echo $user->fields->link;
                } ?></td>
            <td><?= $user->fields->price ?></td>
            <td><?= $user->fields->nf_calories ?></td>
            <td><?php if (empty($user->fields->nf_total_fat)) {
                    echo "-";
                } else {
                    echo $user->fields->nf_total_fat;
                } ?></td>
            <td><?= $user->fields->nf_serving_size_qty ?></td>
            <td><?= $user->fields->nf_serving_size_unit ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</html>