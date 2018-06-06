<?php include_once("header.php"); ?>
        <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-1">
            <div class="page-header">
              <h1>
                Board Of Directors
              </h1>
            </div>
            <div class="block block-border-bottom-grey block-pd-sm">
                <p style="margin-bottom: 60px;">Our Board of Directors set high standards for the company’s employees, officers and directors. Implicit in this philosophy is the importance of sound corporate governance. It is the duty of the Board of Directors to serve as a prudent fiduciary for shareholders whilst overseeing our business management. To fulfil responsibilities and discharge duties, the Board of Directors follows the procedures and standards that are set forth in these guidelines. These guidelines are subject to periodic modification as deemed appropriate in the best interests of the company or as required by applicable laws and regulations.</p>
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

                    <div id="nav-arrows" class="nav-arrows">
                      <a href="#">Next</a>
                      <a href="#">Previous</a>
                    </div>

            </div><!-- /wrapper -->
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

          var $navArrows = $( '#nav-arrows' ).hide(),
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