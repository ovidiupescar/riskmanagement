<h2><?php echo $title; ?></h2>

<?php foreach ($risks as $risk_item): ?>

        <h3 class="text-primary"><?php echo $risk_item['title']; ?></h3>
        <div class="main">
                <?php echo $risk_item['newstext']; ?>
        </div>
        <p><a href="<?php echo site_url('risks/'.$risk_item['slug']); ?>">Citeste mai mult daca nu ti lene</a></p>

<?php endforeach; ?>