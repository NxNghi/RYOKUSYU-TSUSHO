<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage xDev-theme
 * @since xDev-theme 1.0.0
 */

get_header();
?>

<section class="banner">
    <div class="banner__container">
        <div class="banner__content">
            <h6>最新鋭の生産ラインによる「安心・安全」を皆様へ</h6>
            <h3>カット野菜の緑洲通商</h3>
        </div>
        <img src="<?php assets('images/onscroll.png')?>" alt="img-onscroll">
    </div>
</section>

<section class="service">
    <div class="container">
        <?php 
        get_template_part( 'template-parts/heading', '', [
            'sub_title' => 'service',
            'title' => '最新の設備と衛生環境から作り出される、「安心・安全」のカット野菜をお届けします。'
        ] );
        ?>

        <div class="service__content">
            <?php 
                $service = [
                    [
                        'images' => 'content-item.png',
                        'title' => '工場',
                        'description' => '中部と関東に拠点を設けています。衛生管理を徹底した工場から、安全な食材を提供しています。',
                        'url' => '#'
                    ],
                    [
                        'images' => 'content-item1.png',
                        'title' => '設備',
                        'description' => '様々な作業工程に対応する先進の設備ライン。皆様に安心と安全な高品質の野菜をお届けします。',
                        'url' => '#'
                    ],
                    [
                        'images' => 'content-item2.png',
                        'title' => '流通',
                        'description' => '様々な作業工程に対応する先進の設備ライン。皆様に安心と安全な高品質の野菜をお届けします。',
                        'url' => '#'
                    ],
                    [
                        'images' => 'content-item3.png',
                        'title' => '商品案内',
                        'description' => 'お客様のご要望や利用用途に合わせ、様々な形へ加工したカット野菜を提供しています。',
                        'url' => '#'
                    ]
                ];
            foreach($service as $items => $service):
            ?>
            <div class="service__item">
                <img src="<?php echo isset($service['images']) ? xdevtheme_image($service['images']) : ''; ?>" alt="img-service">
                <h5><?php echo isset($service['title']) ? $service['title'] : '';?></h5>
                <p><?php echo isset($service['description'])?$service['description']:'';?></p>
                <a href="<?php echo isset($service['url']) ? xdevtheme_image($service['url']) : ''; ?>" class="service__btn">Learn more</a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<section class="coprorate">
    <div class="container">
        <?php 
        get_template_part( 'template-parts/heading', '', [
            'sub_title' => 'CORPORATE',
            'title' => '"食"を通じ、皆様とともに発展できる、社会性のある企業として成長しています。'
        ] );
        ?>
        <div class="coprorate__content">
            <?php
            $coprorate = [
                [
                    'images' => 'coprorate.png',
                    'title' => '会社情報',
                    'description' => '所在地・沿革など、緑州通商について掲載しています。',
                    'url' => '#'
                ],
                [
                    'images' => 'coprorate1.png',
                    'title' => '安心・安全',
                    'description' => '緑州通商が取得している食品安全マネジメントについて掲載しています。',
                    'url' => '#'
                ],
                [
                    'images' => 'coprorate2.png',
                    'title' => '求人情報',
                    'description' => '様々な人材が活躍できる環境をご用意しています。',
                    'url' => '#'
                ]
            ];
            foreach($coprorate as $item => $copro):
            ?>
                <div class="coprorate__card">
                    <img src="<?php echo isset($copro['images']) ? xdevtheme_image($copro['images']) : ''; ?>" alt="img-coprorate">
                    <h5><?php echo isset($copro['title']) ? $copro['title'] : '';?></h5>
                    <p><?php echo isset($copro['description'])?$copro['description']:'';?></p>
                    <a href="<?php echo isset($copro['url']) ? xdevtheme_image($copro['url']) : ''; ?>" class="service__btn">Learn more</a>
                </div>
            <?php endforeach;?>
        </div>
        <div class="coprorate__scroll">
            <a href="#">page top</a>
        </div>
    </div>
</section>
<!-- /* Start the Loop */
while ( have_posts() ) :
    the_post();
    the_content();

    // If comments are open or there is at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
endwhile; // End of the loop. -->
<?php
get_footer();
