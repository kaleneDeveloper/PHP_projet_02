<div class="row">
    <div class="col-sm-9">
        <h1>HOME PAGE</h1>
        <?php foreach (App\table\Article::all() as $post) : ?>
            <h2><a href="<?= $post->url; ?>"><?= $post->title; ?></a></h2>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extract; ?></p>
        <?php endforeach ?>
    </div>
    <div class="col-sm-3">
        <ul>
            <?php foreach (App\table\Category::all() as $category) : ?>
                <li><a href="<?= $category->url ?>"><?= $category->title ?></a></li>  
                       
            <?php endforeach ?>
        </ul>
    </div>
</div>