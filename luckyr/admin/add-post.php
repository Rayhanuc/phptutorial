




<?php
require_once("function/functions.php");

get_header();
get_sidebar();

?>



<?php

//database link files.
include 'lib/Database2.php';
include 'config/config.php';

$db = new Database2();

?>







<?php
if(isset($_POST['submit'])){


$title           = $_POST['title'];
$content         = $_POST['content'];


$title_msg = '';
$content_msg = '';

if(empty($title)){
  $title_msg = "<h3 style='color:red;'>Title Field Empty</h3>";
}elseif(empty($content)){
  $content_msg = "<h3 style='color:red;'>Content Field Empty</h3>";
}

else {
  $query = "INSERT INTO web_post(title,content) VALUES('$title','$content')";
  $result = $db->insert($query);
  if($result){
    echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 378px;margin: 60px 0;top: 32px; z-index: 99;'>Data insert successfully</span>";
  }else {
    echo "<span style = 'color: green;font-size: 20px;position: absolute;left: 378px;margin: 60px 0;top: 32px; z-index: 99;'>Data not inserted</span>";
  }
}

}


?>








<div class="col-md-6">
    <div class="panel">
        <header class="panel-heading">
            Basic Forms
                <span class="tools pull-right">
                    <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                    <a class="close-box fa fa-times" href="javascript:;"></a>
                </span>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <h2><?php if(isset($title_msg)){
                                echo $title_msg;
                              }?></h2>
                            <label for="exampleInputEmail1">Title</label>
                            <input class="form-control" id="exampleInputEmail1" name="title" placeholder="text" type="text">
                        </div>
                        <div class="form-group">
                            <h2><?php if(isset($content_msg)){
                                echo $content_msg;
                              }?></h2>
                            <label for="exampleInputPassword1">Content</label>

                            <textarea class="form-control" id="exampleInputPassword1"  name="content"  placeholder="write your text here..." type="text" cols="30" rows="10"></textarea>

                            <!-- <input class="form-control" id="exampleInputPassword1" placeholder="write your text here..." type="text"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input id="exampleInputFile" type="file">
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button id="submit" value="Submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();?>