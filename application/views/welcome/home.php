<?php defined('SYSPATH') or die('No direct script access.') ?>
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
  <body class="page-home">
    <?php echo $header; ?>




    <div class="centering page-container container">
        <div id="img-top" class="row centering">
          <div class="col-lg-12 text-box">
            <div class="title text">Welcome to our Blog</div>
          </div>
        </div>        
    </div>

    <div id="main-container" class="centering">
            <div id="content" class="container">

                    <h1><span>Mini</span> Blog</h1>
                     <div class="row box-text">
                        <?php foreach($content['posts'] as $pp) { ?>
                        <div class="col-xl-2 left">
                            <img src="<?php echo 'http://localhost/gitorial/assets/images/'.$pp['image']; ?>" alt="<?php echo $pp['title']; ?>" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-xl-4 left">
                            <h2 class="blog-post-title"><?php echo '<a href="'.$content['current_url'].'index.php/pages/blog?id='.$pp['id'].'">'.$pp['title']; ?></a></h2>
                            <p class="blog-post-meta"><?php echo $pp['createdAt']; ?> by <a href="#"><?php echo $pp['lastName']; ?></a></p>
                            <p><?php echo $pp['content']; ?></p>
                        </div>
                        <?php } ?>
                    </div> 

            </div>
    </div>
            <div class="columns-box centering">
                
                <div class="eimg1" id="img1" style="background: url('<?php echo 'http://localhost/gitorial/assets/images/'.$content['posts_box'][1]['image']; ?>'); background-size: cover;">
                  <div class="fadedbox1">
                    <div class="title text"><a href="<?php echo $content['current_url'].'index.php/pages/blog?id='.$content['posts_box'][1]['id']; ?>"><?php 
                        echo $content['posts_box'][1]['title']; ?></a></div>
                  </div>
                </div>
                <div class="eimg2" id="img2" style="background: url('<?php echo 'http://localhost/gitorial/assets/images/'.$content['posts_box'][2]['image']; ?>'); background-size: cover;">
                  <div class="fadedbox2">
                    <div class="title text"><a href="<?php echo $content['current_url'].'index.php/pages/blog?id='.$content['posts_box'][2]['id']; ?>"><?php 
                        echo $content['posts_box'][2]['title']; ?></a>
                        
                    </div>
                  </div>
                </div>
                <div id="table-box">
                    <form name="RegForm" onsubmit="return validateForm()">
                    <table class="round">
                        <tr>
                            <td colspan="2" class="ta-center">JOIN OUR NEWSLETTER</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>
                                <input type="text" id="name" name="Name" 
                placeholder="Enter your full name">
                                <span id="name-error" class="error-message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="text" id="email" name="EMail" placeholder="Enter your email">
                                <span id="email-error" class="error-message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="ta-center">
                                <input type="checkbox" id="agree" name="Agree"> I agree to receive emails from Mini Blog
                                <span id="agree-error" class="error-message"></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="ta-center">
                                <input type="submit" name="Submit" value="Subscribe" class="btn round2">
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>      
  <?php echo $footer; ?>
  <script src="http://localhost/gitorial/assets/js/script.js"></script>
  </body>
</html>
