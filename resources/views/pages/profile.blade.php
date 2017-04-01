@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="images/default_login.png" alt="User profile picture">
              <h3 class="profile-username text-center">{{ $user->first_name }} {{ $user->last_name }}</h3>
              <p class="text-muted text-center">
                @if($user->departments['name'] == null)
                --Not added yet--
                @else
                {{ $user->departments['name'] }} 
              </p>
                @endif
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Days off / month</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Days off / Year</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>
              @if(Auth::user()->id === $user->id )
              <a href="#" class="btn btn-info btn-block"><b>Static</b></a>
              @else
              <a href="#" class="btn btn-primary btn-block"><b>Message</b></a>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                {{ $user->education }}
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted">{{$user->present_address}}</p>
              <hr>
              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
              <p>
              <div id="aboutme">
                
              </div>
              </p>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
              <p>{{$user->noted}}</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#user_info" data-toggle="tab">User info</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="images/default_login.png" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
                <?php 
                  view_post_activity('','','','Anh Duc','cong khai','30 phut truoc','xin nghi a nha','699');
                ?>
                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="images/default_login.png" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
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
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="/images/-text.png" alt="..." class="margin">
                        <img src="/images/-text.png" alt="..." class="margin">
                        <img src="/images/-text.png" alt="..." class="margin">
                        <img src="/images/-text.png" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form  class="form-horizontal" method="POST">
                  <div class="form-group">
                    <label for="SettingInputName" class="col-sm-2 control-label">Display Name</label>
                    <div class="col-sm-10">
                      <input type="hidden" id="SettingInputId" value="{{ Auth::user()->id }}">
                      <input type="text" class="form-control" id="SettingInputName" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="SettingInputEducation" class="col-sm-2 control-label">Education</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{ $user->education }}" id="SettingInputEducation" placeholder="Enter your Education">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="searchTextField" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="searchTextField" value="{{ $user->present_address }}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="SettingInputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="SettingInputEmail" value="{{ $user->email }}" placeholder="Enter your email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="SettingInputPhonenumber" class="col-sm-2 control-label">Phone number</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="SettingInputPhonenumber" value="{{ $user->phone_number }}" placeholder="Enter your phone number" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="SettingInputDateofbirth" class="col-sm-2 control-label">Date of birth</label>
                    <div class="col-sm-10">
                    <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right datepicker" id="SettingInputDateofbirth" value="{{ $user->date_of_birth }}" readonly>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="SettingInputNotes" class="col-sm-2 control-label">Notes</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" id="SettingInputNotes" placeholder="Enter Notes">{{ $user->noted }}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="SettingInputSkill" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                        <div id="tags">
                        <input data-skill="{{ $user->skill }}" class="input form-control" id="SettingInputSkill" type="text" value="" placeholder="Add a skill" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" id="SettingInputRule" name="terms"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group update">
                    <div class="col-sm-offset-2 col-sm-1">
                      <a type="submit" class="btn btn-danger button-setting-update">Update<div class="col-sm-1" id="floatingCirclesG" style="display: none;">
                      <div class="f_circleG" id="frotateG_01"></div>
                      <div class="f_circleG" id="frotateG_02"></div>
                      <div class="f_circleG" id="frotateG_03"></div>
                      <div class="f_circleG" id="frotateG_04"></div>
                      <div class="f_circleG" id="frotateG_05"></div>
                      <div class="f_circleG" id="frotateG_06"></div>
                      <div class="f_circleG" id="frotateG_07"></div>
                      <div class="f_circleG" id="frotateG_08"></div>
                    </div></a>
                    </div>
                   <div class="col-sm-5" id="successAlert" style="display: none">  
                    <div class="alert alert-success alert-dismissable" style="background-color: #dff0d8!important;border-color: #d6e9c6;color: #3c763d!important;padding-bottom: 6px;padding-top: 6px;margin-bottom: 0px;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
                      <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
                    </div>
                   </div>
                   
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="user_info">
                <h3 class="color_h3">User Infomation</h3>
                <table class="font_table table">
                  <tr>
                    <th>User Name</th>
                    <th class="table_info">{{$user->name}}</th>
                  </tr>
                  <tr class="active">
                    <th>Email Adress</th>
                    <th class="table_info">{{$user->email}}</th>
                  </tr>
                  <tr>
                    <th>Employee Type</th>
                    <th class="table_info">{{$user->job_type}}</th>
                  </tr>
                  <tr class="active">
                    <th>Employee Category</th>
                    <th class="table_info">{{$user->job_position}}</th>
                  </tr>
                  <tr>
                    <th>Department</th>
                    <th class="table_info">{{$user->departments['name']}}</th>
                  </tr>
                </table>
                <h3 class="color_h3">Personal Information</h3>
                  <table class="font_table table">
                    <tr>
                      <th>First Name</th>
                      <th class="table_info">{{$user->first_name}}</th>
                    </tr>
                    <tr class="active">
                      <th>Last Name</th>
                      <th class="table_info">{{$user->last_name}}</th>
                    </tr>
                    <tr>
                      <th>Gender</th>
                      <th class="table_info">
                        @if($user->gender == 1)
                          Male
                        @else
                          Female
                        @endif
                      </th>
                    </tr>
                    <tr class="active">
                      <th>Date of Birth</th>
                      <th class="table_info">{{$user->date_of_birth}}</th>
                    </tr>
                    <tr>
                      <th>Nationality</th>
                      <th class="table_info">{{$user->nationality}}</th>
                    </tr>
                    <tr class="active">
                      <th>Permanent address</th>
                      <th class="table_info">{{$user->permanent_address}}</th>
                    </tr>
                    <tr>
                      <th>Present address</th>
                      <th class="table_info">{{$user->present_address}}</th>
                    </tr>
                    <tr class="active">
                      <th>Maritial status</th>
                      <th class="table_info">{{$user->maritial_status}}</th>
                    </tr>
                    <tr>
                      <th>Joining date</th>
                      <th class="table_info">{{$user->joining_date}}</th>
                    </tr>
                    <tr class="active">
                      <th>Bank name</th>
                      <th class="table_info">{{$user->bank_name}}</th>
                    </tr>
                    <tr>
                      <th>Bank account name</th>
                      <th class="table_info">{{$user->bank_account_name}}</th>
                    </tr>
                    <tr class="active">
                      <th>Insurance code</th>
                      <th class="table_info">{{$user->insurance_code}}</th>
                    </tr>
                    <tr>
                      <th>Tax code</th>
                      <th class="table_info">{{$user->tax_code}}</th>
                    </tr>
                    <tr class="active">
                      <th>Noted</th>
                      <th class="table_info">{{$user->noted}}</th>
                    </tr>
                    <tr>
                      <th>Leave/month</th>
                      <th class="table_info">{{$user->leave_per_month}}</th>
                    </tr>
                    <tr class="active">
                      <th>Leave/year</th>
                      <th class="table_info">{{$user->leave_per_year}}</th>
                    </tr>
                  </table>
                <h3 class="color_h3">Contact Numbers</h3>
                <table class="font_table table">
                  <tr class="active">
                    <th>Mobile Number:</th>
                    <th class="table_info">{{$user->phone_number}}</th>
                  </tr>
                </table>
                <h3 class="color_h3">Emergency Contact</h3>

                <table class="font_table table">
                  <tr class="active">
                    <th class="table_info">Name</th>
                    <th class="table_info">Address</th>
                    <th class="table_info">Relationship</th>                   
                    <th class="table_info">Phone number</th>                   
                  </tr>
                  <?php $i = 0 ?>
                  @if(is_array($employee_relatives) || is_object($employee_relatives))
                  @foreach($employee_relatives as $er)
                    @if($i % 2 != 0)
                      <tr class="active">
                    @else
                      <tr>
                    @endif
                        <th class="table_info">{{$er->full_name}}</th>
                        <th class="table_info">{{$er->address}}</th>
                        <th class="table_info">{{$er->relation}}</th>
                        <th class="table_info">{{$er->phone_number}}</th>
                      </tr>
                    <?php $i++; ?>
                    @endforeach
                    @endif
                </table>
              
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

@endsection