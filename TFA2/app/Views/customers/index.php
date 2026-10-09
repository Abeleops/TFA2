<?= view('partials/header', ['title' => 'Customer Accounts | NightPOS']) ?>

<section class="page-banner compact">
    <div class="container">
        <span class="eyebrow">Accounts</span>
        <h1>Customer Accounts</h1>
        <p class="lead">A list of customer contact records currently stored in a temporary PHP array.</p>
    </div>
</section>

<section class="container section table-section">
    <div class="table-card">

        <div class="table-header">
            <div>
                <h2>Customer List</h2>
                <p><?= count($customers) ?> records available</p>
            </div>

            <span class="badge">Live Database</span>
        </div>

        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>email</th>
                        <th>Phone</th>
                        <th>Created At</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($customers)): ?>

                        <?php foreach ($customers as $user): ?>
                            <tr>
                                <td><?= esc($user['id']) ?></td>

                                <td>
                                    <strong>
                                        <?= esc($user['full_name']) ?>
                                    </strong>
                                </td>

                                <td><?= esc($user['email']) ?></td>

                                <td><?= esc($user['phone']) ?></td>

                                <td><?= esc($user['created_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>
                        <tr>
                            <td colspan="5">
                                No customer records found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</section>

<?= view('partials/footer') ?>
