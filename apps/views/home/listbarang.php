<table class="table">
<thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>QTY</th>
        <th></th> 
    </tr>
</thead>
<tbody>
<?php foreach($data as $item) : ?>
<tr scope="row">
    <td><?= $item['id'] ?></td>
    <td><?= $item['nama'] ?></td>
    <td><span class="badge text-bg-<?= $item['qty'] > 50 ? 'success' : 'danger' ?>"><?= $item['qty'] ?></span></td>
    <td>
        <a href="<?= BASE_URL.'index.php?r=home/updatebarang/'.$item['id']?>" class="badge" style="color: blue; text-decoration: none;">Update</a>
        <a href="<?= BASE_URL.'index.php?r=home/deletebarang/'.$item['id']?>" class="badge" onclick="return confirm('Apakah anda yakin untuk menghapus data?')" style="color: blue; text-decoration: none;">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
