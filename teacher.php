<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="css/teacherview.css" type="text/css" title="no title" charset="utf-8">

    <title>P Vidi</title>
  </head>
  <body>
    <header id="header">
      <img src="assets/images/teachify.png" alt="" id="co-logo"/>
      <img src="assets/images/gray_gradient.jpg" alt="" id="banner"/>
      <!-- <h1 id="headline" class="nav-content">P Vidi - Student View</h1> -->
      <nav id="navigation" class="navbar navbar-default">
        <ul id="nav">
          <a href="index.php"><li><button type="button" class="btn btn-success">Home</button></li></a>
          <li><button type="button" class="btn btn-success">About</button></li>
          <li><button type="button" class="btn btn-success">Resources</button></li>
          <li><a href="teacher.php"><button type="button" class="btn btn-success">Teacher View</button></a></li>
          <li><a href="classroom.php"><button type="button" class="btn btn-success">Classroom View</button></a></li>
        </ul>
      </nav>
      <img src="assets/images/background-gradient.jpg" id="main-image" alt=""/>
    </header>

    <div id="content-head">

    </div>
    <div id="wrapper" class="container-fluid">
      <div id="left-bar" class="col-md4">

        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span>
                                    </span>Editing Tools</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span></span><a><img src="assets/icons/cutvideo.png" alt="" class="teacher-icons"/>cut video</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span></span><a><img src="assets/icons/addannotation.png" alt="" class="teacher-icons"/>add annotation</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span></span><a><img src="assets/icons/playlist.png" alt="" class="teacher-icons"/>add to playlist</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span>
                                    </span>Question Tools</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a><img src="assets/icons/multiplechoice.png" alt="" class="teacher-icons"/>multiple choice</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a><img src="assets/icons/imageorgraph.png" alt="" class="teacher-icons"/>graph</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a><img src="assets/icons/shortanswer.png" alt="" class="teacher-icons"/>short answer</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a><img src="assets/icons/editquestions.png" alt="" class="teacher-icons" />edit questions</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="">
                                    </span>External Tools</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a><img src="assets/icons/addsource.png" alt="" class="teacher-icons"/>add source</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a><img src="assets/icons/addexternalreference.png" alt="" class="teacher-icons" />add external references</a> <span class="label label-info"></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>


    <div id="main-content" class="col-md8">
      <div id="video-title"><p class="vid-title">Video Title</p></div>
      <div id="player">
        <!--video plays here-->
      </div>
      <div id="video-controls">
        <ul id="controls">
          <li><span class="glyphicon glyphicon-play"></span></li>
          <li><span class="glyphicon glyphicon-pause"></span></li>
          <li><span class="glyphicon glyphicon-stop"></span></li>


          <!-- <li><button type="button" class="video-controls">Play</button></li>
          <li><button type="button" class="video-controls">Pause</button></li>
          <li><button type="button" class="video-controls">Stop</button></li> -->
          <li><button type="button" class="speed-controls">0.5x</button></li>
          <li><button type="button" class="speed-controls">1.0x</button></li>
          <li><button type="button" class="speed-controls">1.5x</button></li>
          <li><button type="button" class="speed-controls">2.0x</button></li>
        </ul>
      </div>
    </div>



      <div id="resources" class="container-fluid"></div>

      <div id="comments" class="container-fluid"></div>

    <div id="footer" class="col-md-8">
      <h3 id="footer-content">2016 Team P Vidi</h3>
    </div>
  </div>

  <script src="js/jquery-2.2.4.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script>
    var tempVideoIdenfitifer = ""
  </script>
  </body>
</html>
