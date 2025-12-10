<?= $this->extend('template/penjual');; ?>

<?= $this->section('content'); ?>

<div
    class="table-responsive">
    <table
        class="table">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 + (6 * ($current_page -1)); ?>
            <?php foreach ($users as $user): ?>
                <tr class="">
                    <td><?= $i++; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['address']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links('users', 'users_pagination');?>
</div>


<?= $this->endSection();; ?>