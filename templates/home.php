<?php

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY id ASC LIMIT 4');
$stmt->execute();
$products= $stmt->fetchall(PDO::FETCH_ASSOC);
$pdo=NULL;
?>

<?=template_header('Home');?>

    <div class="featured">
        <div>
            <h2>Gadgets</h2>
            <p>Essential gadgets for everyday use</p>
        </div>
        <img src="" alt="" class="centerpic">
        
        
    </div>
    <div class="recentlyadded content-wrapper">
        <h2>Recently Added Products</h2>
        <div class="products">
            <?php foreach ($products as $product): ?>
            <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
                <img src="../assets/imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
                <span class="name"><?=$product['name']?></span>
                <span class="price">&dollar;<?=$product['price']?></span>
                <!-- <span class="price">
                    &dollar;<?=$product['price']?>
                    <?php if ($product['rrp'] > 0): ?>
                    <span class="rrp">&dollar;<?=$product['rrp']?></span>
                    <?php endif; ?>
                </span> -->
            </a>
            <?php endforeach; ?>
        </div>
    </div>


<?=template_footer();?>