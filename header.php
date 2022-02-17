<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

    <header class="header">
        <div class="container">
            <div class="header__logo">
                <img src="<?php assets('images/logo.png')?>" alt="img-logo">
            </div>
            <div class="header__nav">
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
            </div>
        </div>

    </header>


