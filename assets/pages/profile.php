<?php
global $profile;
global $profile_post;
global $user;

?>
    <div class="container col-9 rounded-0 ">
        <div class="image--cover">
            <div class="col-4 d-flex align-items-center"><img src="assets/images/profile/<?=$profile['profile_pic']?>" class="img-thumbnail rounded-circle-profile my-3" style="height:190px;" alt="...">
            </div>
            <div class="col-10">
                <div class="d-flex flex-column">
                    <div class="d-flex gap-5 align-items-center">
                        <span style="font-size: xx-large;"><?=$profile['first_name']?> <?=$profile['last_name']?></span>

                        <?php
                        if($user['id']!=$profile['id']){
                            ?>
                            <div class="dropdown">
                                <span class="" style="font-size:xx-large" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i> </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-chat-fill"></i> Message</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-x-circle-fill"></i> Block</a></li>
                                </ul>
                            </div>

                            <?php
                        }
                        ?>






                    </div>


                    <span style="font-size: larger;" class="text-secondary">@<?=$profile['username']?></span>
               
                    <div class="d-flex gap-2 align-items-center my-3">

                        <a class="btn btn-sm btn-primary"><i class="bi bi-file-post-fill"></i> <?=count($profile_post)?> Posts</a>
                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#follower_list"><i class="bi bi-people-fill"></i> <?=count($profile['followers'])?> Followers</a>
                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#following_list"><i class="bi bi-person-fill"></i> <?=count($profile['following'])?> Following</a>


                    </div>


                    <?php
if($user['id']!==$profile['id']){
?>
                        <div class="d-flex gap-2 align-items-center my-1">
                            <?php
if(checkFollowStatus($profile['id'])){
    ?>
                                <button class="btn btn-sm btn-danger unfollowbtn" data-user-id='<?=$profile[' id ']?>'>Unfollow</button>

                                <?php
}else{
    ?>
                                    <button class="btn btn-sm btn-primary followbtn" data-user-id='<?=$profile[' id ']?>'>Follow</button>

                                    <?php
}
?>



                        </div>
                        <?php
}

?>


                </div>
            </div>
            <br>


        </div>
        <h3 class="border-bottom">Posts</h3>
        <?php
                    if(count($profile_post)<1){
                        echo "<b><p class='p-2 bg-white border shadow rounded text-center my-3'>You havn't uploaded anything.</p></b>";
                    }
        ?>
            <div class="gallery-container d-flex flex-wrap justify-content-center  mb-4">
                <div class="gallery-row">
                    <div class="gallery-item">

                        <?php

        foreach($profile_post as $post){
            ?>

                            <img src="assets/images/post/<?=$post['post_img']?>" data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>" width="350px" class="rounded" />

                            <div class="modal fade" id="postview<?=$post['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex p-0">
                                            <div class="col-8">
                                                <img src="assets/images/post/<?=$post['post_img']?>" class="w-100 rounded-start">
                                            </div>
                                            <div class="col-4 d-flex flex-column">
                                                <div class="d-flex align-items-center p-2 border-bottom">
                                                    <div><img src="assets/images/profile/<?=$profile['profile_pic']?>" alt="" height="50" class="rounded-circle border"></div>
                                                    <div>&nbsp;&nbsp;&nbsp;</div>
                                                    <div class="d-flex flex-column justify-content-start align-items-center">
                                                        <h6 style="margin: 0px;"><?=$profile['first_name']?> <?=$profile['last_name']?></h6>
                                                        <p style="margin:0px;" class="text-muted">@<?=$profile['username']?></p>
                                                    </div>
                                                </div>


                                                <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?=$post['id']?>" style="height: 100px;">

                                                    <?php
                                                    $comments = getComments(($post['id']));
                                                    if(count($comments)<1){
                                                        ?>
                                                        <p class="p-3 text-center my-2 nce">no comments</p>
                                                        <?php
}
foreach($comments as $comment){
    $cuser = getUser(($comment['user_id']));
    ?>
                                                            <div class="d-flex align-items-center p-2">
                                                                <div><img src="assets/images/profile/<?=$cuser['profile_pic']?>" alt="" height="40" class="rounded-circle border">
                                                                </div>
                                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                                <div class="d-flex flex-column justify-content-start align-items-start">
                                                                    <h6 style="margin: 0px;"> <a href="?u=<?=$cuser['username']?>" class="text-decoration-none text-dark"> @<?=$cuser['username']?></a></h6>
                                                                    <p style="margin:0px;" class="text-muted">
                                                                        <?=$comment['comment']?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <?php
}
                            ?>






                                                </div>
                                                <div class="input-group p-2 border-top">
                                                    <input type="text" class="form-control rounded-0 border-0 comment-input" placeholder="say something.." aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-primary rounded-0 border-0 add-comment" data-cs="comment-section<?=$post['id']?>" data-post-id="<?=$post['id']?>" type="button" id="button-addon2">Post</button>
                                                </div>
                                            </div>






                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
        }
        
        ?>
                    </div>
                </div>
            </div>




    </div>



    <!-- Modal -->






    <!-- this is for follower list  -->

    <div class="modal fade" id="follower_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Followers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                
                foreach($profile['followers'] as $f){
                    $fuser = getUser($f['follower_id']);
                    $fbtn = '';
                    if(checkFollowStatus($f['follower_id'])){
                        $fbtn = '<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='.$fuser['id'].' >unfollow</button>';
                    }elseif($user['id']==$f['follower_id']){
                        $fbtn='';
                    }else{
                        $fbtn = '<button class="btn btn-sm btn-primary followbtn" data-user-id='.$fuser['id'].' >Follow</button>';
                    }
                    ?>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center p-2">
                                <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" class="rounded-circle border">
                                </div>
                                <div>&nbsp;&nbsp;</div>
                                <div class="d-flex flex-column justify-content-center">
                                    <a href='?u=<?=$fuser[' username ']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                                    <p style="margin:0px;font-size:small" class="text-muted">@
                                        <?=$fuser['username']?>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <?=$fbtn?>
                            </div>
                        </div>
                        <?php
                }
                ?>
                </div>

            </div>
        </div>
    </div>
    </div>



    <!-- this is for following list  -->

    <div class="modal fade" id="following_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Following</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                
                foreach($profile['following'] as $f){
                    $fuser = getUser($f['user_id']);
                    $fbtn = '';
                    if(checkFollowStatus($f['user_id'])){
                        $fbtn = '<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='.$fuser['id'].' >unfollow</button>';
                    }elseif($user['id']==$f['user_id']){
                        $fbtn='';
                    }else{
                        $fbtn = '<button class="btn btn-sm btn-primary followbtn" data-user-id='.$fuser['id'].' >Follow</button>';
                    }
                    ?>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center p-2">
                                <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" class="rounded-circle border">
                                </div>
                                <div>&nbsp;&nbsp;</div>
                                <div class="d-flex flex-column justify-content-center">
                                    <a href='?u=<?=$fuser[' username ']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                                    <p style="margin:0px;font-size:small" class="text-muted">@
                                        <?=$fuser['username']?>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <?=$fbtn?>
                            </div>
                        </div>
                        <?php
                }
                ?>
                </div>

            </div>
        </div>
    </div>
    </div>

    <style>
    /* Custom CSS for profile page */
    .image--cover {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        width: 100%;
    }

    .img-thumbnail-profile {
        border: 2px solid #fff; /* White border around profile image */
    }

    .profile-info {
        margin-left: 20px; /* Spacing between profile image and info */
    }

    .profile-info h6 {
        margin-bottom: 5px;
        font-size: 22px;
    }

    .profile-info p {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .follow-btns {
        display: flex;
        gap: 10px;
    }

    .post-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .post-gallery .gallery-item {
        position: relative;
        cursor: pointer;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .post-gallery .gallery-item:hover {
        transform: scale(1.05);
    }

    .modal-body .modal-content {
        display: flex;
        gap: 20px;
    }

    .modal-body .modal-content .post-details {
        flex: 1;
    }

    .modal-body .modal-content .comments-section {
        flex: 1;
        max-height: 300px;
        overflow-y: auto;
    }

    .comments-section .comment {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .comments-section .comment:last-child {
        margin-bottom: 0;
    }

    .comment-input {
        flex: 1;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 5px 10px;
    }

    .comment-input:focus {
        outline: none;
        border-color: #007bff;
    }

    .add-comment-btn {
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        cursor: pointer;
    }

    .add-comment-btn:hover {
        background-color: #0056b3;
    }
</style>
