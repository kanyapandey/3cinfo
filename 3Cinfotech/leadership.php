<?php include_once("header.php"); ?>
        <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-1">
            <div class="page-header">
              <h1>
                Meet the rainmakers of customer lifetime management.
              </h1>
            </div>
            <div class="block block-border-bottom-grey block-pd-sm">
                <p>We believe every company is as good as its leaders. That’s why we have some of the most inspiring, experienced and diverse industry professionals at the helm. As forward thinkers deeply committed to 3Cinfotech’s core values and goals, they continually direct the growth journey of our company and its people. Hover your mouse on the picture and get to know our top team.</p>
                <div class="wrapper">

                    <ul id="sb-slider" class="sb-slider">
                      <li>
                        <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="img/andrew.jpg" alt="image1"/></a>
                        <div class="sb-description">
                          <h3 style="float: left;">Andrew Marshall</h3>
                          <h3 style="float: right;">CEO & MD</h3>
                        </div>
                      </li>
                      <li>
                        <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="img/6.jpg" alt="image1"/></a>
                        <div class="sb-description">
                          <h3 style="float:left;">Pravit Thonsiri</h3>
                          <h3 style="float:right;">Director Operations</h3>
                        </div>
                      </li>
                      <li>
                        <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="img/5.jpg" alt="image1"/></a>
                        <div class="sb-description">
                           <h3 style="float:left;">Samuel Nai</h3>
                          <h3 style="float:right;">CTO</h3>
                        </div>
                      </li>
                      <li>
                        <a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="img/sri.jpg" alt="image2"/></a>
                        <div class="sb-description">
                           <h3 style="float:left;">Srinuan Wonchai Nai</h3>
                          <h3 style="float:right;ht;">CFO</h3>
                        </div>
                      </li>
                      <li>
                        <a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="img/derek.jpg" alt="image1"/></a>
                        <div class="sb-description">
                           <h3 style="float:left;">Derek Randell</h3>
                          <h3 style="float:right;">HR HEAD</h3>
                        </div>
                      </li>
                      <li>
                        <a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="img/graeme.jpg" alt="image1"/></a>
                        <div class="sb-description">
                           <h3 style="float:left;">Graeme Swan</h3>
                          <h3 style="float:right;">ADMIN HEAD</h3>                       
                         </div>
                      </li>
                    </ul>

                    <div id="shadow" class="shadow"></div>

                    <div id="nav-arrowss" class="nav-arrowss">
                      <a href="#">Next</a>
                      <a href="#">Previous</a>
                    </div>

            </div><!-- /wrapper -->
               <!--  <h3 class="block-title">
                    Unique People Proposition
                </h3> -->
                
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include_once("footer.php"); ?>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.slicebox.js"></script>
    <script type="text/javascript">
      $(function() {
        
        var Page = (function() {

          var $navArrows = $( '#nav-arrowss' ).hide(),
            $shadow = $( '#shadow' ).hide(),
            slicebox = $( '#sb-slider' ).slicebox( {
              onReady : function() {

                $navArrows.show();
                $shadow.show();

              },
              orientation : 'r',
              cuboidsRandom : true,
              disperseFactor : 30
            } ),
            
            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              // add navigation events
              $navArrows.children( ':first' ).on( 'click', function() {

                slicebox.next();
                return false;

              } );

              $navArrows.children( ':last' ).on( 'click', function() {
                
                slicebox.previous();
                return false;

              } );

            };

            return { init : init };

        })();

        Page.init();

      });
    </script>