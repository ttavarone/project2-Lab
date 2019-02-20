<?php
/*
 1. the name of the function is "make_page"
 2. it takes 4 parameters
 3. The one PHP command that I see is the echo command
 4. echo prints out what is contained within the single quotes when the 
    PHP script is run
 5. We are printing an entire website because it is quick and easy with
    PHP and we can make multiple pages with this same content, but 
    we only have to change the content in one central location
 6. Page name is being printed in the titel, after the CSIS-390 part
 7. The ".file_get_contents" reads the entire contents of the file into
    a string, probably making it suitable for output
 8. Footer.html and navbar.html sections
 9. The side_menu, page_content, aside_content sections
*/
function make_page($page_name, $side_menu, $page_content, $aside_content, $style = null) {
	
  $main_content = '
  <article>
    '.file_get_contents($page_content).'
  </article>';
  
  if ($side_menu != null && $aside_content != null) {
    $main_content = '
      <div class="row">
        <nav class="col-sm-3 col-lg-3">
          '.file_get_contents($side_menu).'
        </nav>
        
        <article class="col-sm-9 col-lg-6">
          '.file_get_contents($page_content).'
        </article>
        
        <aside class="col-sm-12 col-lg-3">
          '.file_get_contents($aside_content).'
        </aside>
      </div>';
  }
	echo '
		<!DOCTYPE html>
		<html lang="en">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CSIS-390 - '.$page_name.'</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
        '.$style.'
		<body>
        <header class="col-12">
		    '.file_get_contents('navbar.html').'
        </header>
			<main class="container">
                '.$main_content.'
				<div class="row">
							
					<nav class="col-sm-12 col-lg-3">
						'.file_get_contents($side_menu).'
					</nav>
					
					<article class="col-sm-8 col-lg-6">
						'.file_get_contents($page_content).'
					</article>
					
					<aside class="col-sm-4 col-lg-3">
						'.file_get_contents($aside_content).'
					</aside>		
				
				</div>		
			
			</main>
            
            <footer class="col-12">
				'.file_get_contents('footer.html').'
		    </footer>
			
			<!-- javascript -->
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		
		</body>
		</html>
	';
}

?>