<div class="row">
    <h2>Biographie</h2>
    <p><?= $data['biography']['biography'] ?></p>
</div>

<figure class="row">
    <img src=<?= $data['picturedirector']['path'] ?> alt="person" >
    <figcaption><?= $data['picturedirector']['legend'] ?></figcaption>
</figure>