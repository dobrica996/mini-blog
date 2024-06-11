<?php defined('SYSPATH') or die('No direct script access.') ?>
<?php defined('SYSPATH') or die('No direct script access.') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $site_name.' '.$title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
     <?php echo $head; ?>

  </head>
  <body class="page-blog">
    <?php echo $header; ?>


    <div id="main-container" class="centering">
            <div id="content-blogs" class="container">

                    <h1><span>Mini</span> Blog</h1>
                    <div class="row box-blogs">
                            <?php 
                            foreach($content['posts'] as $pp) {
                                // echo '<br>id: '. print_r($pp['id'], true).'<br>'; 
                            ?>
                            <article class="col-md-6 col-lg-4 col-xl-3 blog-post">
                                
                                <img src="<?php echo 'http://localhost/gitorial/assets/images/'.$pp['image']; ?>" alt="<?php echo $pp['title']; ?>" />
                                <h2 class="blog-post-title"><?php echo '<a href="'.$content['current_url'].'index.php/pages/blog?id='.$pp['id'].'">'.$pp['title']; ?></a></h2>
                                <p class="blog-post-meta"><?php echo $pp['createdAt']; ?> by <a href="<?php echo $pp['authorId']; ?>#"><?php echo $pp['lastName']; ?></a></p>

                                <?php echo $pp['content']; ?>
                            </article>
                            <?php
                            }
                            ?>                        
                        </div>

                    </div> 

            </div>
 
        
<?php echo $footer; ?>

  </body>
</html>
