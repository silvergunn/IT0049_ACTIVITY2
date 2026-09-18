<?= view('partials/header', ['title' => $title]) ?>

<section class="page-heading list-heading">
    <div><p class="eyebrow">Team management</p><h1>Staff accounts</h1><p>Team identities and roles retrieved securely from the MySQL database.</p></div>
    <span class="record-count"><?= count($users) ?> records</span>
</section>

<div class="table-wrapper">
    <div class="table-toolbar"><div><span class="toolbar-dot"></span><strong>Active team</strong></div><span>Live database records</span></div>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td data-label="Username"><span class="username">@<?= esc($user['username']) ?></span></td>
                    <td data-label="Full Name"><strong class="person-name"><?= esc($user['full_name']) ?></strong></td>
                    <td data-label="Role">
                        <span class="role role-<?= strtolower(esc($user['role'], 'attr')) ?>">
                            <?= esc($user['role']) ?>
                        </span>
                    </td>
                </tr>
            <?php endforeach ?>
            <?php if ($users === []): ?><tr><td class="empty-state" colspan="3">No staff records are available.</td></tr><?php endif ?>
        </tbody>
    </table>
</div>

<?= view('partials/footer') ?>
