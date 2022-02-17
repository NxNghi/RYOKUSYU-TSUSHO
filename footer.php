<section class="footer">
    <div class="container">
        <img src="<?php assets('images/logo.png')?>" alt="">
        <ul>
            <?php 
                $options = [
                    [
                        'title' => '会社情報',
                        'url' => '#'
                    ],
                    [
                        'title' => '安心・安全',
                        'url' => '#'
                    ],
                    [
                        'title' => '工場・設備・物流',
                        'url' => '#'
                    ],
                    [
                        'title' => '商品案内',
                        'url' => '#'
                    ],
                    [
                        'title' => '採用情報',
                        'url' => '#'
                    ],
                    [
                        'title' => 'お問合せ',
                        'url' => '#'
                    ],
                ];
            foreach($options as $items => $options__item):
            ?>
                <li><a href="<?php echo $options__item['url'] ?>"><?php echo $options__item['title']?></a></li>
            <?php endforeach; ?>
        </ul>
        <p>copyright(C) 2022 RYOKUSYU-TSUSHO Co.,Ltd Allright reserved.</p>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>
