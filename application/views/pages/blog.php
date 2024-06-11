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
                    <div class="row box-post">
                            <?php 
                            foreach($content['posts'] as $pp) {
                                // echo '<br>id: '. print_r($pp['id'], true).'<br>'; 
                            ?>
                            <article class="col-md-12 blog-post">
                                
                                <img src="<?php echo 'http://localhost/gitorial/assets/images/'.$pp['image']; ?>" alt="<?php echo $pp['title']; ?>" />
                                <p><a href="<?php echo $content['current_url'].'index.php/pages/blogs?cid='. $pp['categoryId']; ?>"><?php echo $pp['ctitle']; ?></a></p>
                                <h2 class="blog-post-title"><?php echo $pp['title']; ?></h2>
                                <p class="blog-post-meta"><?php echo $pp['createdAt']; ?> by <a href="<?php echo $pp['authorId']; ?>#"><?php echo $pp['lastName']; ?></a></p>

                                <?php echo $pp['content']; ?>

                                <div class="tags">
                                    <?php 
                                    $tags_s = array();
                                    $tags = array();
                                    if(!empty($pp['tags'])) {
                                        $tags = explode(', ', trim($pp['tags']));
                                    }
                                    ?>
                                        <?php
                                        if(count($tags) > 0) {
                                        ?>
                                    <h3>Tags</h3>
                                    <div>
                                        <?php
                                            foreach ($tags as $tag) { 

                                            $tags_s[] = '<a href="'.$content['current_url'].'index.php/pages/blogs?tag='. $tag.'">'. $tag.'</a>';
                                            ?>

                                            <?php
                                            } 
                                            echo implode( ', ', $tags_s );
                                        ?>
                                    </div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </article>
                            <?php
                            }
                            ?>                        
                        </div>

                    </div> 

            </div>
    </div>
 
        
<?php echo $footer; ?>

  </body>
</html>
