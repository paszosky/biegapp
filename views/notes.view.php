<?php require('partials/head.php'); ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h2>Hello to BiegApp. Notes page</h2>
        <p>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/biegapp/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $note['body'] ?></li>
                </a>
        <?php endforeach; ?>
        </p>
    </div>
</main>

<?php require('partials/footer.php'); ?>