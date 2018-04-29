<?php

//database link files.
include 'admin/lib/Database2.php';
include 'admin/config/config.php';



$db = new Database2();


?>

<?php include('includes/header.php'); ?><!-- header part included -->




      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">

          <?php
      //   if(isset($_GET['delid'])){
      //   $deleteid =$_GET['delid'];
      //   $query = "DELETE FROM web_post WHERE id = '$deleteid'";
      //   $delete = $db->delete($query);
      //   if($delete){
      //     echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 110px;margin: 60px 0;top: 25px;'>Data delete successfully</span>";
      //   }else{
      //     echo "<span style = 'color: red;font-size: 20px;position: absolute;left: 110px;margin: 60px 0;top: 425px;'>Data not delete</span>";
      //   }
      // }
        
      ?>
      <?php
      $query = "SELECT * FROM web_post";
      $view = $db->select($query);
      if ($view) {
      while($result = $view->fetch_assoc()){
      
      ?>



          <h2><?php echo $result['title'];?></h2>



          <p class="infopost">Posted on <span class="date">11 sep 2018</span> by <a href="#">Admin</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="#" class="com">Comments <span>(11)</span></a></p>
          <div class="clr"></div>
          <div class="img"><img src="images/img1.jpg" width="156" height="221" alt="" class="fl" /></div>
          <div class="post_content">


            <p><?php echo $result['content'];?></p>

<?php }} ?>

            <p class="spec"><a href="#" class="rm">Read more</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <div class="article">
          <h2><span>We'll Make Sure Template</span> Works For You</h2>
          <p class="infopost">Posted on <span class="date">29 aug 2016</span> by <a href="#">Admin</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="#" class="com">Comments <span>(7)</span></a></p>
          <div class="clr"></div>
          <div class="img"><img src="images/img2.jpg" width="156" height="221" alt="" class="fl" /></div>
          <div class="post_content">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
            <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
            <p class="spec"><a href="#" class="rm">Read more</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
      


    <?php include('includes/sidebar.php'); ?><!-- sidebar part included -->
    <?php include('includes/footer.php'); ?><!-- footer part included -->