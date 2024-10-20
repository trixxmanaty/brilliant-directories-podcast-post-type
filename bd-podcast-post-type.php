```php
<?php
echo widget("Bootstrap Theme - Display - Posted By Snippet");
?>

<div id="post-content">
    <div class="row">
        <div class="col-md-12 tmargin">
            <h1 class="bold h2"><?php echo $group['group_name']; ?></h1>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- Display podcast episode embed below the image -->
    <?php if ($group['episode_embed'] != "") { ?>
        <div class="podcast-embed tmargin">
            <h3>Listen to the Episode</h3>
            <?php echo $group['episode_embed']; ?>
        </div>
    <?php } ?>

    <!-- Display podcast description -->
    <?php if ($group['group_desc_clean'] != "") { ?>
        <div class="well tmargin">
            <div class="the-post-description">
                <?php echo $group['group_desc_clean']; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php } ?>

    <!-- Display icons and links for Spotify, Podbean, and Apple Podcasts -->
    <div class="tmargin">
        <h3>Listen on Your Favorite Podcast Player</h3>
        <div class="podcast-platform-links">
            <?php if ($group['spotify'] != "") { ?>
                <a href="<?php echo $group['spotify']; ?>" target="_blank">
                    <img src="/path-to-icons/spotify-icon.png" alt="Listen on Spotify">
                </a>
            <?php } ?>
            <?php if ($group['podbean'] != "") { ?>
                <a href="<?php echo $group['podbean']; ?>" target="_blank">
                    <img src="/path-to-icons/podbean-icon.png" alt="Listen on Podbean">
                </a>
            <?php } ?>
            <?php if ($group['apple_podcasts'] != "") { ?>
                <a href="<?php echo $group['apple_podcasts']; ?>" target="_blank">
                    <img src="/path-to-icons/apple-podcasts-icon.png" alt="Listen on Apple Podcasts">
                </a>
            <?php } ?>
        </div>
    </div>

    <!-- Tags and other content -->
    <?php if ($group['post_tags'] != "" || $group['group_desc_clean'] != "") { ?>
        <div class="well tmargin">
            <div class="tags">
                <?php foreach (explode(",", $group['post_tags']) as $_ENV['tag']) {
                    echo widget("Bootstrap Theme - Tag Link") . " ";
                } ?>
            </div>
        </div>
    <?php } ?>
</div>
