<?= view('partials/header', ['title' => $title]) ?>

<section class="hero-panel">
    <div class="hero-copy">
        <span class="status-pill"><i></i> System online</span>
        <p class="eyebrow">Point-of-sale workspace</p>
        <h1>Run your store from one clear dashboard.</h1>
        <p class="hero-description">Keep customer and staff information organized, accessible, and ready whenever your team needs it.</p>
        <div class="actions">
            <a class="button primary" href="<?= base_url('customers') ?>">Browse customers <span aria-hidden="true">&rarr;</span></a>
            <a class="button secondary" href="<?= base_url('users') ?>">Manage staff</a>
        </div>
    </div>
    <aside class="hero-summary" aria-label="Workspace summary">
        <p class="summary-label">Workspace overview</p>
        <div class="summary-row"><span class="summary-icon customer-icon">C</span><div><strong>Customers</strong><small>Contact directory</small></div><span class="summary-arrow">&rarr;</span></div>
        <div class="summary-row"><span class="summary-icon user-icon">U</span><div><strong>Staff accounts</strong><small>Roles and access</small></div><span class="summary-arrow">&rarr;</span></div>
        <div class="summary-note">Database connected and ready</div>
    </aside>
</section>

<section class="section-block">
    <div class="section-heading">
        <div><p class="eyebrow">Core tools</p><h2>Everything you need, without the clutter.</h2></div>
        <p>Simple workflows keep everyday account information easy to find.</p>
    </div>
    <div class="feature-grid">
        <article class="feature-card"><span class="feature-number">01</span><h3>Customer directory</h3><p>Find names, email addresses, and phone numbers in a clean, readable table.</p><a href="<?= base_url('customers') ?>">Open customers &rarr;</a></article>
        <article class="feature-card"><span class="feature-number">02</span><h3>Staff accounts</h3><p>Review usernames, staff members, and assigned roles at a glance.</p><a href="<?= base_url('users') ?>">Open staff accounts &rarr;</a></article>
        <article class="feature-card accent-card"><span class="feature-number">03</span><h3>Built to grow</h3><p>A practical foundation for products, transactions, inventory, and reports.</p><a href="<?= base_url('about') ?>">About the project &rarr;</a></article>
    </div>
</section>

<?= view('partials/footer') ?>
