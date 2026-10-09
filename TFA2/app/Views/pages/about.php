<?= view('partials/header', ['title' => 'About | NightPOS']) ?>

<section class="page-banner">
    <div class="container narrow">
        <span class="eyebrow">About NightPOS</span>
        <h1>A practical foundation for a modern POS system.</h1>
        <p class="lead">This first version focuses on a clean interface and organized account records before database features are added.</p>
    </div>
</section>

<section class="container section narrow">
    <div class="content-card">
        <h2>Project Purpose</h2>
        <p>NightPOS is a basic four-page CodeIgniter 4 website made to demonstrate routes, controllers, reusable view partials, and PHP arrays as temporary data sources.</p>

        <div class="detail-grid">
            <div>
                <span class="detail-number">01</span>
                <h3>Current Version</h3>
                <p>Displays sample customer and user records without connecting to a database.</p>
            </div>
            <div>
                <span class="detail-number">02</span>
                <h3>Reusable Layout</h3>
                <p>All four pages share the same header, navigation, footer, and stylesheet.</p>
            </div>
            <div>
                <span class="detail-number">03</span>
                <h3>Future Ready</h3>
                <p>The static arrays can later be replaced by models and database records.</p>
            </div>
             <div>
                <span class="detail-number">04</span>
                <h3>Created by AbeleOps</h3>
                <p>NightPOS was developed by AbeleOps as a demonstration of CodeIgniter 4's capabilities.</p>
            </div>
        </div>
    </div>
</section>

<?= view('partials/footer') ?>
