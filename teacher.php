<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="css/teacherview.css" type="text/css" title="no title" charset="utf-8">
    <title>P Vidi</title>
  </head>
  <body>


    <div id="wrapper" class="container-fluid">
      <header id="header">
        <div id="top-bar" class="container-fluid">
            <h1 id="headline" class="nav-content">P Vidi - Teacher View</h1>
            <img src="assets/images/trinitycollegelib.jpg" id="main-image" alt=""/>
          <nav id="navigation">
            <ul id="nav">
              <a href="index.php"><li><button type="button" class="btn btn-success">Home</button></li></a>
              <li><button type="button" class="btn btn-success">About</button></li>
              <li><button type="button" class="btn btn-success">Resources</button></li>
              <li><a href="teacher.php"><button type="button" class="btn btn-success">Teacher View</button></a></li>
              <li><a href="classroom.php"><button type="button" class="btn btn-success">Classroom View</button></a></li>
            </ul>
          </nav>
        </div>
      </header>

      <div id="left-bar" class="col-md4">

      <div class="container">
          <div class="row">
              <div class="col-sm-3 col-md-3">
                  <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                  </span>Editing Tools</a>
                              </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <table class="table">
                                      <tr>
                                          <td>
                                              <span class="glyphicon glyphicon-pencil text-primary"></span><a >cut video</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <span class="glyphicon glyphicon-flash text-success"></span><a >add annotation</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <span class="glyphicon glyphicon-file text-info"></span><a >add to playlist</a>
                                          </td>
                                      </tr>
                                  </table>
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                                  </span>Question Tools</a>
                              </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <table class="table">
                                      <tr>
                                          <td>
                                              <a>multiple choice</a> <span class="label label-success"></span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a>graph</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a>short answer</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a>edit questions</a>
                                          </td>
                                      </tr>
                                  </table>
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                  </span>External Tools</a>
                              </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <table class="table">
                                      <tr>
                                          <td>
                                              <a>add source</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a>add external references</a> <span class="label label-info"></span>
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



      <div id="main-content" class="col-md-8">
        <div id="player">

        </div>
      </div>

      <div id="resources" class="container-fluid"></div>

      <div id="comments" class="container-fluid"></div>

    </div>
  <div id="footer" class="col-md-8">Footer content</div>

  <script src="js/jquery-2.2.4.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script>
    var tempVideoIdenfitifer = ""
  </script>
  </body>
</html>
