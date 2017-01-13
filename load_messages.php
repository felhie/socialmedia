<?php

    foreach($updatesarray as $data)
     {
     $msg_id=$data['msg_id'];
     $orimessage=$data['message'];
     $message=tolink(htmlentities($data['message']));
     $time=         $data['created'];
     $username=     $data['username'];
     $uid=          $data['uid_fk'];
     $tanggal_buat= $data['tanggal_buat'];
     $face=$Wall->Gravatar($uid);
     $commentsarray=$Wall->Comments($msg_id);
    ?>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#stexpand<?php echo $msg_id;?>").oembed("<?php echo  $orimessage; ?>", {
            maxWidth: 400,
            maxHeight: 300
        });
    });
    </script>
    <!-- start postingan -->
    <div class="panel panel-default panel-google-plus" id="stbody<?php echo $msg_id;?>">
        <div class="panel-google-plus-tags">
            <ul>
                <li>#Atmajaya</li>
                <li>#FakultasTeknologiInformasiUAJM</li>
            </ul>
        </div>
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo $face;?>" class="img-circle pull-right img-responsive">
                </div>
                <div class="col-md-10">
                    <div class="dropdown">
                        <a class="pull-right stdelete" href="#" id="<?php echo $msg_id;?>" title="Hapus Update">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </div>
                    <h4><?php echo $username;?></h4>
                    <div class="timestamp">
                        <?php time_stamp($time);?>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body" id="stbody<?php echo $msg_id;?>">
            <p>
                <?php echo $message;?>
            </p>
            <hr>
            <a href='#' class='commentopen' id='<?php echo $msg_id;?>' title='Comment'>Tambah Komentar </a>
            <div class="row">
                <div class="commentcontainer" id="commentload<?php echo $msg_id;?>">
                    <?php include('load_comments.php') ?>
                </div>
                <div class="commentupdate" style='display:none' id='commentbox<?php echo $msg_id;?>'>
                    <div class="stcommentbody">
                        <div class="stcommentimg">
                            <img src="<?php echo $face;?>" class='small_face' />
                        </div>
                        <div class="stcommenttext">
                            <form method="post" action="">
                                <textarea name="comment" class="comment form-control" maxlength="200" id="ctextarea<?php echo $msg_id;?>"></textarea>
                                <br />
                                <input type="submit" value=" Comment " id="<?php echo $msg_id;?>" class="comment_button" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                                      }//end while
                                    ?>
        <!-- end postingan -->
