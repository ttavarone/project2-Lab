<?php
  
  function make_page($page_name, $page_content = null, $style = null) {
    echo '
      <!DOCTYPE html>
      <html lang="en">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <title>Tucker Tavarone | '.page_name.'</title>
      <body>

      <!-- website header -->
      <header style="background-color: #05386b">
          <!-- website navbar -->
          <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #05386b">
            <a class="navbar-brand" href="index.html" style="color: #edf5e1">Tucker Tavarone</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" 
                          aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="background-color: #05386b"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainnav">
              <div class="navbar-nav" >
                <a class="nav-item nav-link active" href="index.html" style="color: #edf5e1">Home</a>
                <a class="nav-item nav-link active" href="resume.html" style="color: #edf5e1">Resume</a>
                <a class="nav-item nav-link active" href="courses.html" style="color: #edf5e1">Courses</a>
                <a class="nav-item nav-link active" href="projects.html" style="color: #edf5e1">Projects</a>
              </div>
            </div>
          </nav>
      </header>

      <!--  main content container   -->	
      <main class="container">
    '
  }
?>