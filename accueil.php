<?php
$machines = getData();
?>

<div class="container">
    <h1>Inventory</h1>
    <table class="table table-striped table-hover table-bordered w-50">
        <thead>
            <th>Nom</th>
            <th>OS</th>
            <th>CPU</th>
        </thead>
        <tbody>
            <?php foreach ($machines as $machine) { ?>
                <tr>
                    <td><?= htmlspecialchars($machine['nom']) ?></td>
                    <td><?= htmlspecialchars($machine['os']) ?></td>
                    <td><?= htmlspecialchars($machine['cpu']) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>