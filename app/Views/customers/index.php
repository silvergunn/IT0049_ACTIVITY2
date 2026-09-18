<?= view('partials/header', ['title' => $title]) ?>

<section class="page-heading list-heading">
    <div><p class="eyebrow">Customer management</p><h1>Customer directory</h1><p>Contact information retrieved securely from the MySQL database.</p></div>
    <span class="record-count"><?= count($customers) ?> records</span>
</section>

<div class="table-wrapper">
    <div class="table-toolbar"><div><span class="toolbar-dot"></span><strong>All customers</strong></div><span>Live database records</span></div>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td data-label="Full Name"><strong class="person-name"><?= esc($customer['full_name']) ?></strong></td>
                    <td data-label="Email Address"><a class="data-link" href="mailto:<?= esc($customer['email'], 'attr') ?>"><?= esc($customer['email']) ?></a></td>
                    <td data-label="Phone Number"><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach ?>
            <?php if ($customers === []): ?><tr><td class="empty-state" colspan="3">No customer records are available.</td></tr><?php endif ?>
        </tbody>
    </table>
</div>

<?= view('partials/footer') ?>
