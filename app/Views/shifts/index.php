<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Shifts List
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h2>Shifts</h2>
    <a href="/shifts/create">Add New Shift</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Shift Name</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shifts as $shift): ?>
            <tr>
                <td><?= $shift['id'] ?></td>
                <td><?= $shift['shift_name'] ?></td>
                <td><?= $shift['start_time'] ?></td>
                <td><?= $shift['end_time'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
