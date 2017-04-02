<?php



function view_card_timeline($class_icon="", $user_name="", $action="", $time="", $content="", $type="",$format=""){
	$format_nomal = '<li><i class="%1$s"></i><div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> %5$s</span><h3 class="timeline-header"><a href="#">%2$s</a> %3$s</h3><div class="timeline-body">%4$s</div><div class="timeline-footer"><a class="btn btn-warning btn-flat btn-xs">View comment</a></div></div></li>';

	$format_noti = '<li><i class="%1$s"></i><div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> %5$s</span><h3 class="timeline-header no-border"><a href="#">%2$s</a> %3$s</h3></div></li>';

	if (!empty($format)) {
		echo sprintf($format, $class_icon, $user_name, $action, $content, $time);
	}else if($type == 'nomal'){
		echo sprintf($format_nomal, $class_icon, $user_name, $action, $content, $time);
	}else{
		echo sprintf($format_noti, $class_icon, $user_name, $action, $content, $time);
	}
}

function view_post_activity($format, $user_image_url, $user_profile_url, $user_name, $private, $post_time, $content, $comment_count){
	$format_post = '<div class="post"><div class="user-block">
                    <img class="img-circle img-bordered-sm" src="%1$s" alt="user image">
                        <span class="username">
                          <a href="%2$s">%3$s</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">%4$s - %5$s</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    %6$s
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (%7$s)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>';
	if (!empty($format)) {
		echo sprintf($format, $user_image_url, $user_profile_url, $user_name, $private, $post_time, $content, $comment_count);
	}else{
		echo sprintf($format_post, $user_image_url, $user_profile_url, $user_name, $private, $post_time, $content, $comment_count);
	}    
}
function view_post_activity_images($format, $user_image_url, $user_profile_url, $user_name, $private, $post_time, $content, $comment_count){
	$format_post_images = '<div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="images/default_login.png" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="images/default_login.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="images/default_login.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="images/default_login.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="images/default_login.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="images/default_login.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>';
}

//Xuất ra list danh sách: $arr_title: tên các cột, $arr_data: dữ liệu trong cột, $arr_attr: truyền attribute vào button edit và delete
function view_list_table($arr_title, $arr_data, $arr_attr=[]){
    $format =  '<table class="table table-striped table-bordered table-hover" id="contract-table"><thead><tr align="center">';
    if(!empty($arr_title)){
      $format_1 = "";
      $format_2 = "";
      foreach ($arr_title as $key => $value) {
        $format_1 .= "<th>$value</th>";
        $format_2 .= "<td>$arr_data[$key]</td>";
        if($arr_data[$key] == end($arr_data)){
          $format_2 .= '<td class="center"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" ';
          if(!empty($arr_attr)){
            foreach ($arr_attr as $key => $value) {
              $format_2 .= $value . " ";
            }
          }
          $format_2 .= 'data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>';
          $format_2 .= '<td class="center"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>';
          }
        }
    }   
    $format_1 .= '<th colspan="2">Action</th>';
    $format_1 .=   '</tr></thead><tbody><tr>';
    $format_2 .= '</tr></tbody></table>';                
    $format .= $format_1 . $format_2; 
    echo $format;           
  }