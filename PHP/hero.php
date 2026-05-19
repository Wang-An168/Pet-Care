<?php
$heroImage = $heroImage ?? '';
$heroTitle = $heroTitle ?? '';
$heroText  = $heroText ?? '';

$showHeroContent = $showHeroContent ?? true;
$showHeroButton  = $showHeroButton ?? true;
?>

<section class="hero <?php echo $heroClass; ?>"
         style="background:
                 linear-gradient(
                 rgba(248,245,240,0.72),
                 rgba(248,245,240,0.72)
                 ),
                 url('images/<?php echo $heroImage; ?>') center/cover no-repeat;">

    <?php if ($showHeroContent): ?>
        <div class="hero-content">

            <h1><?php echo $heroTitle; ?></h1>

            <p><?php echo $heroText; ?></p>

            <?php if ($showHeroButton): ?>
                <a href="index.php?page=about_us" class="btn">
                    Learn More
                </a>
            <?php endif; ?>

        </div>
    <?php endif; ?>

</section>