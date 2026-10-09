<?= view('partials/header', ['title' => 'Home | NightPOS']) ?>

<section class="hero">
    <div class="container hero-grid">
        <div>
            <span class="eyebrow">Simple. Fast. Organized.</span>
            <h1>Manage your store from one clear workspace.</h1>
            <p class="lead">NightPOS gives your team a simple starting point for managing customer and staff accounts.</p>
            <div class="actions">
                <a class="button button-primary" href="<?= base_url('customers') ?>">View Customers</a>
                <a class="button button-secondary" href="<?= base_url('users') ?>">View Users</a>
            </div>
        </div>

        <div class="summary-card">
            <p class="card-label">System Overview</p>
            <div class="metric">
                <span>Customer records</span>
                <strong>5+</strong>
            </div>
            <div class="metric">
                <span>Staff accounts</span>
                <strong>5+</strong>
            </div>
            <div class="metric">
                <span>System status</span>
                <strong class="status">Online</strong>
            </div>
        </div>
    </div>
</section>

<section class="container section">
    <div class="section-heading">
        <span class="eyebrow">Quick Access</span>
        <h2>Everything you need to get started</h2>
    </div>
    <div class="card-grid">
        <article class="feature-card">
            <span class="icon">01</span>
            <h3>Customer Accounts</h3>
            <p>View customer names, email addresses, and phone numbers in one organized table.</p>
            <a class="text-link" href="<?= base_url('customers') ?>">Open customer list →</a>
        </article>
        <article class="feature-card">
            <span class="icon">02</span>
            <h3>User Accounts</h3>
            <p>Review staff usernames, full names, and assigned roles.</p>
            <a class="text-link" href="<?= base_url('users') ?>">Open user list →</a>
        </article>
        <article class="feature-card">
            <span class="icon">03</span>
            <h3>About the System</h3>
            <p>Learn about the purpose and current scope of this first POS version.</p>
            <a class="text-link" href="<?= base_url('about') ?>">Learn more →</a>
        </article>
    </div>
</section>

<?= view('partials/footer') ?>
