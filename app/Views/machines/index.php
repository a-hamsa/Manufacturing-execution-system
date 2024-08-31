<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Machines List
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h2>Machines</h2>
    <a href="/machines/create">Add New Machine</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Machine Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($machines as $machine): ?>
            <tr>
                <td><?= $machine['id'] ?></td>
                <td><?= $machine['machine_name'] ?></td>
                <td><?= $machine['status'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
