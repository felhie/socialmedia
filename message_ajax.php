<?php
error_reporting(0);
include_once 'includes/db.php';
include_once 'includes/functions.php';
include_once 'includes/tolink.php';
include_once 'includes/time_stamp.php';
include_once 'session.php';
$Wall = new Wall_Updates();
if(isSet($_POST['update']))
{
$update=$_POST['update'];
$data=$Wall->Insert_Update($uid,$update);

if($data)
{
$msg_id=$data['msg_id'];
$message=tolink(htmlentities($data['message']));
$time=$data['created'];
$uid=$data['uid_fk'];
$username=$data['username'];
$face=$Wall->Gravatar($uid);

?>
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
}
}
?>
