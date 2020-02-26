<!-- 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/sty.css">
     <script ></script>
     <title>Document</title>
 </head>
 <body>
 <div class="post-container">
 
 <div class="post-head">
 
 <div class="img-circle">
 <img src='.$ROW2["doc_img"].'.jpg class = "prof-img">
 
 </div>
 <div class="name">
 
 <h4>'.$ROW2["doctorName"].'</h4>
 </div>
 </div>
 <hr class="hrx">
 <div class="body-post">
 
 <h6 class="h6x">'.$ROW2["post_body"].'</h6>
 
 </div>
 <hr class="hrx">
 <div class="statistic">
 
 <a href="#" class="likes">250 Likes</a>
 <a href="#" class="comments">169 comments</a>
 <a href="#" class="Dislikes">40 Dislikes</a>
 </div>
 <hr class="hrx">
 <div class="react-container">
 <a href="#" class="likes"><img src ="like.png" id="img-col'.$like_id.'" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 8px;height: 2rem;" onclick = "myfunc(this.id);">LIKE </a>
 <a href="#" class="comments"><img src ="chat.png"  style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 5px;height: 2rem;" onclick="toggle();" >comments</a>
 <a href="#" class="Dislikes"><img src ="dislike.png" id="img-col-dis'.$dislike_id.'" onclick="myfunc2(this.id);" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 0px;height: 2rem;">Dislikes</a>
 
 
 </div>
 
 <div id="com-sec" style ="  display:none;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;padding-top: 2rem;padding-left: 3rem;" >
<form action="#" method="post" style="display: flex;background:#ececec;">
<textarea name="comment_body" id="" cols="30" rows="10" style = "width: 438px;height: 50px;"></textarea>
<input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:purple;color:white; border-radius: 6px;">

</form>';
    }}
while($ROW3 = mysqli_fetch_Assoc($RESULT3)){

if(mysqli_num_rows($RESULT3)>0){
echo '<hr style="margin-left: -3rem;width: 58rem;border-top: 1px solid #bfbfbf;">
<div class="comment" style="float: right;padding: 8px 3px 3px 3px;color: #8a8a8a;">'.$ROW3["com_date"].'</div>
<div class="comment" style="padding: 8px 3px 3px 3px;margin-left: 2rem;text-transform: uppercase;color:#2C93FF;">'.$ROW3["studentName"].' </div>
<div class="comment" style="padding: 8px 3px 3px 3px;height: 7rem;"><img src = '.$ROW3["stu_profile_img"].'.jpg style="height: 4rem;width: 4rem;border-radius: 50%;margin-top: -8rem;margin-left: -3rem;"> </div>
<div class="comment" style= "margin-top: -5rem;font-weight: bold;">'.$ROW3["comment_body"].'</div>
</div>
<div class="post-container">
 
 <div class="post-head">
 
 <div class="img-circle">
 <img src='.$ROW2["doc_img"].'.jpg class = "prof-img">
 
 </div>
 <div class="name">
 
 <h4>'.$ROW2["doctorName"].'</h4>
 </div>
 </div>
 <hr class="hrx">
 <div class="body-post">
 
 <h6 class="h6x">'.$ROW2["post_body"].'</h6>
 
 </div>
 <hr class="hrx">
 <div class="statistic">
 
 <a href="#" class="likes">250 Likes</a>
 <a href="#" class="comments">169 comments</a>
 <a href="#" class="Dislikes">40 Dislikes</a>
 </div>
 <hr class="hrx">
 <div class="react-container">
 <a href="#" class="likes"><img src ="like.png" id="img-col'.$like_id.'" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 8px;height: 2rem;" onclick = "myfunc(this.id);">LIKE </a>
 <a href="#" class="comments"><img src ="chat.png"  style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 5px;height: 2rem;" onclick="toggle();" >comments</a>
 <a href="#" class="Dislikes"><img src ="dislike.png" id="img-col-dis'.$dislike_id.'" onclick="myfunc2(this.id);" style ="width: 2.5rem;margin-right: .5rem;margin-bottom: 0px;height: 2rem;">Dislikes</a>
 
 
 </div>
 
 <div id="com-sec" style ="  display:none;  background:#ececec;height:auto;font-size: 2rem;width: 58.2rem;padding-top: 2rem;padding-left: 3rem;" >
<form action="#" method="post" style="display: flex;background:#ececec;">
<textarea name="comment_body" id="" cols="30" rows="10" style = "width: 438px;height: 50px;"></textarea>
<input type="submit" value="POST" style = "width: 8rem;height: 5rem;margin-left: 1rem;border: none;background:purple;color:white; border-radius: 6px;">

</form>';
    }}
while($ROW3 = mysqli_fetch_Assoc($RESULT3)){

if(mysqli_num_rows($RESULT3)>0){
echo '<hr style="margin-left: -3rem;width: 58rem;border-top: 1px solid #bfbfbf;">
<div class="comment" style="float: right;padding: 8px 3px 3px 3px;color: #8a8a8a;">'.$ROW3["com_date"].'</div>
<div class="comment" style="padding: 8px 3px 3px 3px;margin-left: 2rem;text-transform: uppercase;color:#2C93FF;">'.$ROW3["studentName"].' </div>
<div class="comment" style="padding: 8px 3px 3px 3px;height: 7rem;"><img src = '.$ROW3["stu_profile_img"].'.jpg style="height: 4rem;width: 4rem;border-radius: 50%;margin-top: -8rem;margin-left: -3rem;"> </div>
<div class="comment" style= "margin-top: -5rem;font-weight: bold;">'.$ROW3["comment_body"].'</div>
 </body>
 </html> -->