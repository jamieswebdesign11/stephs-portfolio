<!--/**
* Template Name: Home Page
*/-->
<?php get_header(); if(have_posts()): while(have_posts()): the_post(); 
$bannerGroup = get_field('banner_group');
$bannerImage = $bannerGroup['banner_image']; 
$caption = $bannerGroup['caption'];
?>
<div id="banner">
    <div class="banner-inner">
        <?php echo $bannerImage ? '<img class="banner-img img-responsive parallax-file-item" src="'. $bannerImage['url'] .'" title="'. $bannerImage['title'] .'" alt="'. $bannerImage['alt'] .'">' : ''; ?>
        <?php echo $caption ? '<div class="caption">'. $caption .'</div>' : ''; ?>
    </div>
</div>
<div class="page-content">
    <?php $mainGroup = get_field('main_group'); 
    $mainHeading = $mainGroup['main_heading']; 
    $mainImage = $mainGroup['main_image']; 
    $mainContent = $mainGroup['main_content']; ?>
    <div id="main">
        <div class="main-inner flex-container">
            <?php echo $mainHeading ? '<h1>'. $mainHeading .'</h1>' : ''; ?>
            <div class="main-content-box flex-display-align">
                <?php echo $mainImage ? '<div class="main-content-image flex-40"><img class="img-responsive center-block" src="'. $mainImage['url'] .'" title="'. $mainImage['title'] .'" alt="'. $mainImage['alt'] .'"></div>' : ''; ?>
                <?php echo $mainContent ? '<div class="main-content-text flex-60">'. $mainContent .'</div>' : ''; ?>
            </div>    
        </div>
    </div>
    <?php if(have_rows('writing_samples')): $writingSamplesHeading = get_field('writing_samples_heading'); ?>
    <div id="writing-samples">
        <?php echo $writingSamplesHeading ? '<h2>'. $writingSamplesHeading .'</h2>' : ''; ?>
        <div class="writing-samples-inner flex-display">
            <?php while(have_rows('writing_samples')): the_row(); 
            $image = get_sub_field('image'); $title = get_sub_field('title'); $link = get_sub_field('link');
            ?>
            <div class="writing-samples-box flex-4-col-shrink flex-2-col-shrink-sm">
                <div class="writing-samples-box-content">
                    <?php echo $link ? '<a href="'. $link['url'] .'" title="'. $link['title'] .'" alt="'. $link['alt'] .'"'. ($link['target'] ? ' target="_blank"' : '') .'>' : ''; ?>
                    <?php echo $image ? '<img class="img-responsive center-block" src="'. $image['url'] .'" title="'. $image['title'] .'" alt="'. $image['alt'] .'">' : ''; ?>
                    <?php echo $title ? '<div class="writing-sample-title">'. $title .'</div>' : ''; ?>
                    <?php echo $link ? '</a>' : ''; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php endwhile; endif; get_footer(); ?>
