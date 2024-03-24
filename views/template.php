<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="https://upscwiki.blr1.cdn.digitaloceanspaces.com/buttoncss/button.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <style>
        .text-center {
            text-align: center;
        }
        .my-5 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <h1 class="text-3xl font-bold">
            <?= $title ?>
        </h1>

        <p class="lead">
            <?= $description ?>
        </p>


        <article class="prose prose-lg prose-green">
            <?= $content ?>
        </article>

        <div class="mt-3">
            <?php if (isset ($previous)): ?>
                <a href="<?= $previous ?>" class="btn btn-dark btn-sm">&larr; Previous</a>
            <?php endif; ?>

            <?php if (isset ($next)): ?>
                <a href="<?= $next ?>" class="ml-5 btn btn-secondary btn-sm">Next &rarr;</a>
            <?php endif; ?>
        </div>
    </div>

    <footer class="text-center mt-5 p-4">
        <p>
            <?= date('Y') ?> &copy; Button CSS. All rights reserved.
        </p>
    </footer>
</body>

</html>