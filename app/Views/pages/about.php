<?= view('partials/header', ['title' => $title]) ?>

<section class="page-heading split-heading">
    <div><p class="eyebrow">About the project</p><h1>Simple tools.<br>Better store management.</h1></div>
    <p>SimplePOS is a lightweight point-of-sale workspace created with CodeIgniter 4 and MySQL. It keeps customer and staff records organized through a clear, database-powered interface.</p>
</section>

<section class="about-grid">
    <article class="about-card about-card-featured"><p class="card-label">Project purpose</p><h2>A practical CodeIgniter application</h2><p>The system demonstrates routes, controllers, models, reusable views, database configuration, and secure output escaping.</p></article>
    <article class="about-card"><span class="about-value">CI4</span><h3>Structured with MVC</h3><p>Responsibilities stay separated so the project is easier to understand and maintain.</p></article>
    <article class="about-card"><span class="about-value">SQL</span><h3>Powered by MySQL</h3><p>Customer and user records are retrieved through dedicated CodeIgniter models.</p></article>
</section>

<?= view('partials/footer') ?>
