<?php include 'header.php'; ?>
    <?php
    // Program to display URL of current page. 
    
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else
        $link = "http";

    // Here append the common URL characters. 
    $link .= "://www.";

    // Append the host(domain name, ip) to the URL. 
    $link .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL 
    $link .= $_SERVER['REQUEST_URI'];

    // Print the link 
    $link;
    ?> 
         <!-- ====== Page Header ====== -->
    <div class="page-header background nevy-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Pages Details</h2>       
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div>

    <!-- ======Block Single Block====== --> 
    <div class="blog-single-block bg-gray-color pd-btm-60" style="background-color: #f7f7f7;">
        <div class="container">
            <div class="row">
                <!-- Blog single Content -->
                <div class="col-md-8">
                    <div class="single-main-content">
                        <article class="post-content">
                            <div class="entry-header">
                                <h2 class="entry-title"><?php if (!empty($data['title'])):
                                    echo $data['title']; endif; ?></h2>
                            </div><!-- /.entry-header -->
 
    
                            <span class="post-thumb">
                                 <?php if (!empty($data['title'])): ?>
       <img src="<?= base_url(); ?>upload/pages/<?php echo $data['image']; ?>" alt="page" />
<?php endif; ?>
                            </sapn><!-- /.post-thumb -->

                            <div class="single-post">
                                 <?php if (!empty($data['modifydate'])): ?>
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <div class="meta-title">Date</div> 
                                            <a href="#"><?= $data['modifydate'] ?></a>
                                        </div> </div><!-- /.entry-meta -->
                                    <?php else:
                                     echo "<br>"; endif; ?>

                                    <?php if (!empty($data['description'])): ?>
                                    <div class="entry-content">
                                    <?= $data['description']; ?>
                                    </div><!-- /.entry-content -->
                                <?php else:
                                        echo "<br>"; endif; ?>
                            </div><!-- /.single-post -->
                            <div class="sharethis-inline-share-buttons"></div>
                          
                        </article><!-- /.post -->
                    </div><!-- /.single-main -->

                    <!-- ======Related Post BLock======= --> 
                    <?php if ($comm): ?>
                        <div id="comments" class="comments-area color-white">
                            <div class="comments-main-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="comments-title"><?= count($comm) + count($replay); ?> Comments</h3><!--/.comments-title-->
                                    </div><!--/.col-md-12-->
                                </div><!--/.row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <ol class="comment-list">



                                          <?php $i = 0;
                                          foreach ($comm as $value): ?>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="comment-meta">
                                                   
                                                            <div class="comment-metadata"><b class="author"><?= $value['name']; ?></b>
                                                                <span class="date"><?php echo date('h:i a, d-M-Y', strtotime($value['date'])); ?></span>
                                                            </div><!--/.comment-metadata-->
                                                        </div><!--/.comment-meta-->
                                                        <div class="comment-details">
                                                            <div class="comment-content">
                                                                <p><?= $value['comments']; ?> </p>
                                                            </div><!--/.comment-content-->
                                                            <div class="reply">
                                                                <button class="comment-reply-link" id="replybtn" onclick="formview(<?= $value['c_id']; ?>)" >Reply </button>






                                                  <div id="replyform<?= $value['c_id']; ?>" class="rf" style="    padding: 20px;">
                                                <form  method="post" id="replayc" name="commentForm">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 padding-right">
                                           
                                                        <p>
                                                            <input type="text" name="name" id="name<?= $value['c_id']; ?>" aria-required="true" placeholder="Name*" class="form-control"  >
                                                             <input type="hidden"   id="cid<?= $value['c_id']; ?>" value="<?= $value['c_id']; ?>" >
                                                             <input type="hidden"   id="postid<?= $value['c_id']; ?>" value="<?php if (!empty($data['id'])):
                                                                   echo $data['id']; endif; ?>" > </p>
                                                    </div><!--/.col-md-6-->
                                                    <div class="col-md-6 col-sm-6">
                                                        <p>
                                                            <input type="text" name="email"  id="email<?= $value['c_id']; ?>" aria-required="true" placeholder="Email*" class="form-control"  > </p>
                                                    </div><!--/.col-md-6-->
                                            
                                                    <div class="col-md-12">
                                                        <p>
                                                            <textarea name="comment" id="comment<?= $value['c_id']; ?>" aria-required="true" rows="3" cols="10" placeholder="Write a Comment...." class="form-control" rows="5" ></textarea>
                                                        </p>
                                                    </div><!--/.col-md-12-->
                                                    <div class="col-md-12">
                                                        <p class="form-submit ">
                                                            <button type="button" id="csubmit" onclick="replasub(<?= $value['c_id']; ?>);" class="comment-reply-link">Post a comments</button>
                                                        </p>
                                                    </div><!--/.col-md-12-->
                                                </div><!--/.row-->
                                            </form><!--/#comment_form--></div>
                                                          </div><!--/.reply-->
                                                        </div><!-- /.comment-details-->
                                                    </div><!--/.comment-body-->

                                      
                                                    <?php if ($replay): ?>
                                                        <ol class="children">
                                                           <?php foreach ($replay as $re):
                                                               if ($value['c_id'] == $re['replay']): ?>
                                                                    <li class="comment">
                                                                        <div class="comment-body">
                                                                            <div class="comment-meta">
                                                             
                                                                                <div class="comment-metadata"><b class="author"><?= $re['name']; ?></b>
                                                                                    <span class="date"><?php echo date('h:i a, d-M-Y', strtotime($re['date'])); ?></span>
                                                                                </div><!--/.comment-metadata-->
                                                                            </div><!--/.comment-meta-->
                                                                            <div class="comment-details">
                                                                                <div class="comment-content">
                                                                                    <p> <p><?= $re['comments']; ?> </p> </p>
                                                                                </div><!--/.comment-content-->
                                                                                <div class="reply">
                                                                                 <button class="comment-reply-link" id="replybtn" onclick="formview(<?= $re['c_id']; ?>)" >Reply </button>
                                                                                  <div id="replyform<?= $re['c_id']; ?>" class="rf" style="    padding: 20px;">
                                                            <form  method="post" id="replayc" name="commentForm">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6 padding-right">
                                           
                                                                    <p>
                                                                        <input type="text" name="name" id="name<?= $re['c_id']; ?>" aria-required="true" placeholder="Name*" class="form-control"  >
                                                                         <input type="hidden"   id="cid<?= $re['c_id']; ?>" value="<?= $value['c_id']; ?>" >
                                                                         <input type="hidden"   id="postid<?= $re['c_id']; ?>" value="<?php if (!empty($data['id'])):
                                                                               echo $data['id']; endif; ?>" > </p>
                                                                </div><!--/.col-md-6-->
                                                                <div class="col-md-6 col-sm-6">
                                                                    <p>
                                                                        <input type="text" name="email"  id="email<?= $re['c_id']; ?>" aria-required="true" placeholder="Email*" class="form-control"  > </p>
                                                                </div><!--/.col-md-6-->
                                            
                                                                <div class="col-md-12">
                                                                    <p>
                                                                        <textarea name="comment" id="comment<?= $re['c_id']; ?>" aria-required="true" rows="3" cols="10" placeholder="Write a Comment...." class="form-control" rows="5" ></textarea>
                                                                    </p>
                                                                </div><!--/.col-md-12-->
                                                                <div class="col-md-12">
                                                                    <p class="form-submit ">
                                                                        <button type="button" id="csubmit" onclick="replasub(<?= $re['c_id']; ?>);" class="comment-reply-link">Post a comments</button>
                                                                    </p>
                                                                </div><!--/.col-md-12-->
                                                            </div><!--/.row-->
                                                        </form><!--/#comment_form--></div>
                                                                                </div><!--/.reply-->
                                                                            </div><!-- /.comment-details-->
                                                                        </div><!--/.comment-body-->
                                                                    </li><!--/.comment-->
                                                              <?php endif; endforeach; ?>
                                                        </ol><!--/.children-->

                                                  <?php endif; ?>

                                                </li><!--/.comment-body-->
                                        <?php endforeach; ?>
                                        </ol><!--/.comment-list-->
                                    </div><!--/.col-md-12-->
                                </div><!--/.row-->
                            </div><!-- /.comments-main-content -->
                        </div><!-- /.comments-area -->
                  <?php endif; ?>

                    <div id="respond" class="comment-respond box-radius bg-gray-color">
                        <div class="comments-main-content bg-white-color">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="comment-reply-title">Leave your Reply</h3><!--/.comment-reply-title-->
                                </div><!--/.col-md-12-->
                            </div><!--/.row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <form  method="post" id="comment" name="commentForm">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 padding-right">
                                                <p>
                                                    <input type="text" name="name" id="name" aria-required="true" placeholder="Name*" class="form-controllar"  >
                                                     <input type="hidden"   id="postid" value="<?php if (!empty($data['id'])):
                                                         echo $data['id']; endif; ?>" > </p>
                                            </div><!--/.col-md-6-->
                                            <div class="col-md-6 col-sm-6">
                                                <p>
                                                    <input type="text" name="email"  id="email" aria-required="true" placeholder="Email*" class="form-controllar"  > </p>
                                            </div><!--/.col-md-6-->
                                            
                                            <div class="col-md-12">
                                                <p>
                                                    <textarea name="comment" id="comment" aria-required="true" rows="1" cols="10" placeholder="Write a Comment...." class="form-controllar" ></textarea>
                                                </p>
                                            </div><!--/.col-md-12-->
                                            <div class="col-md-12">
                                                <p class="form-submit ">
                                                    <button type="button" id="submit" class="button nevy-bg">Post a comments</button>
                                                </p>
                                            </div><!--/.col-md-12-->
                                        </div><!--/.row-->
                                    </form><!--/#comment_form-->
                                </div><!--/.col-md-12-->
                            </div><!--/.row-->
                        </div><!-- /.comments-main-content -->
                    </div><!-- /.comment-respond -->
                </div><!-- /.col-md-8 -->
                
                <!-- Blog Sidebar Content -->
                 <div class="col-md-4 blog-sidebar">
                     <div class="blog-content-right nevy-bg">
                         <div class="widget widget_popular_posts clearfix">
                             <h4 class="widget-title">  Latest Posts</h4><!-- /.widget-title -->
                             <div class="widget-content">

                                 <?php if ($pages):
                                     foreach ($pages as $value): ?>
                                         <div class="post-content clearfix">
                                             <div class="image-content">
                                                  <?php if (!empty($value['image'])): ?>
              <a href="<?= base_url() . 'pages/' . $value['slug']; ?>">  <img src="<?= base_url(); ?>upload/pages/<?php echo $value['image']; ?>" alt="page" />  </a>
        <?php endif; ?> </div><!-- /.image-content -->
                                             <div class="post-info">
                                                 <h5 class="widget-post-title"><a href="<?= base_url() . 'pages/' . $value['slug']; ?>"><?= substr($value['title'], 0, 40) ?></a></h5>
                                                 <span class="post-date"><?= date("d-M-Y", strtotime($value['modifydate'])) ?></span>
                                             </div><!-- /.post-info -->
                                         </div><!-- /.post-content -->
                                 <?php endforeach; endif; ?>

                                  
                     </div><!-- /.blog-content-right -->
                </div><!-- /.col-md-4 --></div></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.blog-main-content -->
 


   <?php include 'footer.php'; ?>
  <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c594eeefec5f10011f26201&product=social-ab' async='async'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <style type="text/css">
   #replayc{padding: 7px;
    border: 1px solid #d7d7d7;
    border-radius: 4px;}
    .rf { display: none; }
    .dblock { display: block !important; }
 </style>
  <script type="text/javascript">
      
      $(document).ready(function() {
  $('#submit').click(function() { 
   
   var base;        
  base = "<?= base_url(); ?>"

    var name = $('#name').val();
     var postid = $('#postid').val();
    //var last_name = $('#last_name').val();
    var email = $('#email').val();
    var comment = $('textarea#comment').val();
    var valid  = 0;
 //alert(comment);
    $(".error").remove();

    if (name.length < 1) {
      $('#name').after('<span class="error">This field is required</span>');
      var valid  = 0;
    }else{ var valid  = 1;}
    
    if (email.length < 1) {
      $('#email').after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email').after('<span class="error">Enter a valid email</span>');
        var valid  = 0;
    }else{ var valid  = 1;}
    }
    if (comment.length < 4) {
      $('#comment').after('<span class="error">Comment must be at least 4 characters long</span>');
     var valid  = 0;
    }else{ var valid  = 1;}

    if (valid==1) {
 
$.post(base+'Pages/addcomment',
  {
    n: name,
    e: email,
     c: comment,
     id:postid
  },
  function(data, status){
    // alert("Data: " + data + "\nStatus: " + status);
    location.reload();
  }); }

  });
 

});

  </script>
  <script type="text/javascript">
    
      function formview(id){
        var idd = 'replyform'+id;
      //  alert(idd);
        var element = document.getElementById(idd);
   element.classList.toggle("dblock");
      }
  </script>

  <script type="text/javascript">
      
  
  function  replasub(id) { 
     
   var base;        
  base = "<?= base_url(); ?>"

    var name = $('#name'+id).val();
    var cid = $('#cid'+id).val(); 
     var postid = $('#postid'+id).val();
    //var last_name = $('#last_name').val();
    var email = $('#email'+id).val();
    var comment = $('textarea#comment'+id).val();
    var valid  = 0;
 //alert(comment);
    $(".error").remove();

    if (name.length < 1) {
      $('#name'+id).after('<span class="error">This field is required</span>');
      var valid  = 0;
    }else{ var valid  = 1;}
    
    if (email.length < 1) {
      $('#email'+id).after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email'+id).after('<span class="error">Enter a valid email</span>');
        var valid  = 0;
    }else{ var valid  = 1;}
    }
    if (comment.length < 4) {
      $('#comment'+id).after('<span class="error">Comment must be at least 4 characters long</span>');
     var valid  = 0;
    }else{ var valid  = 1;}

    if (valid==1) {
 
$.post(base+'Pages/addreplaycomment',
  {
    n: name,
    e: email,
     c: comment,
     id:postid,
     cid:cid
  },
  function(data, status){
   //    alert("Data: " + data);
   location.reload();
  }); }

  };
 


  </script>