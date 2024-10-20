# Brilliant Directories Podcast Post Type Customization

This guide helps you clone and customize a post type in **Brilliant Directories** to create a Podcast Post Type. It includes adding embed links, customizing the form, and updating the detail page code.

## Step 1: Clone an Existing Post Type

1. Log in to your Brilliant Directories admin dashboard.
2. Navigate to **My Content >> Edit Post Settings**.
3. Choose the post type you want to clone (e.g., "Photo Albums") by clicking the **Actions** button.
4. Click **Clone Post Type**.
5. Name the new post type something like "Podcast" and update the icon to a podcast-related icon.

For detailed instructions on cloning a post type, refer to the official guide: [How to Clone a Post Type](https://bootstrap.brilliantdirectories.com/support/solutions/articles/12000036510-how-to-clone-a-post-type).

## Step 2: Customize the Podcast Post Type Form

Next, you'll want to add new fields to the podcast form, such as the embed link and player links (Spotify, Podbean, Apple Podcasts).

1. Go to **My Content >> Edit Post Settings**, and click **Edit** on the Podcast post type you just created.
2. Go to the **Form Manager** and click **Edit** to customize the form.
3. Add the following fields:
   - **Embed Code Field** (for podcast embeds like YouTube, Spotify, etc.)
   - **Spotify Link**
   - **Podbean Link**
   - **Apple Podcasts Link**

For more detailed instructions on how to customize a form, refer to: [How to Customize a Form](https://bootstrap.brilliantdirectories.com/support/solutions/articles/12000078290-how-to-customize-a-form).

## Step 3: Customize the Detail Page Code

Once you've customized the form, you'll want to display the new fields on the post's detail page. Here's how to do it:

1. Go to **My Content >> Edit Post Settings**.
2. Click **Edit** on the Podcast post type created in step 1.
3. Navigate to the **Detail Page Design** tab.
4. Under the **Detail Page Code** section, click **Click To View/Edit Code**.
5. Replace the current code or paste the new code below to display the podcast embed, description, and player links.

### Example Code for Podcast Post Type Detail Page:

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
```
## Step 4: Save Changes
After updating the code:

Update the icons' image paths for Spotify, Podbean, and Apple Podcasts.
Click **Save Changes**.

Now your podcast post type is ready with embed functionality, podcast description, and player links.
