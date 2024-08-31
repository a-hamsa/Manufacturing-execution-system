<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
Operators List
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h2>Operators</h2>
<a href="/operators/create">Add New Operator</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Operator Name</th>
            <th>Shift</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($operators as $operator): ?>
            <tr>
                <td><?= $operator['id'] ?></td>
                <td><?= $operator['operator_name'] ?></td>
                <td><?= $operator['shift_name'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>