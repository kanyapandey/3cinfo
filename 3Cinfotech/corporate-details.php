<?php include_once("header.php"); ?>
    <!-- ======== @Region: #content ======== -->

    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                Corporate Governance
              </h1>
            </div>
            <div class="block block-border-bottom-grey block-pd-sm">
              <!-- <h3 class="block-title">
                A multi-channel outsourcing services offering that is at ease with your business and close to your customers.
              </h3> -->
              <div class="content">
               <!--  <img src="https://www.aegisglobal.com/public/uploads/Images/investor_relation_crop.png" alt="..." class="pull-left" style="    width: 50%;
    height: 290px;"> -->
                <!-- <div class="content1 col-md-6">
                    <h3>Corporate Governance</h3>

                    <h5 style="margin-top: 20px;margin-bottom: 20px;">We believe in serving the best interests of our shareholders. Find information related to our Board of Directors and Corporate Governance. </h5>

                    <a href="corporate-details.php"><button type="button" class="btn btn-danger">More</button></a>
                </div> -->
                <div class="clearfix"></div>
                <div class="block-highlight block-pd-h block-pd-sm" style="margin-top: 30px;">
                  <div class="gac_grid" style="width:92%;">
                      <!-- <h2>Board Of Directors</h2> -->
                     <p>We are committed to maintain the highest standards of Business Conduct and Corporate Governance in managing the affairs of the Company. Our Board of Directors believes in upholding the highest standards of business ethics and governance and complying with the same.<br></p>
                  </div>
                </div>
                <div class="block-highlight block-pd-h block-pd-sm" style="margin-top: 30px;">
                  <div class="gac_grid" style="width:92%;">
                      <h2>Board Of Directors</h2>
                      <img src="https://www.aegisglobal.com/public/uploads/Images/board-of_directors_small.jpg" alt="image" style="float: left;margin-right: 12px;"><p>The high standards adhered to by our employees, officers and directors stems from our Board of Directors. Get their details.<br><a href="board.php">More</a></p>
                  </div>
                </div>
                <div class="block-highlight block-pd-h block-pd-sm" style="margin-top: 30px;">
                    <div class="gac_grid" style="width:92%;">
                          <div class="box">
                              <div class="top1">
                                <a href="javascript:void"><i class="fa fa-plus-circle" aria-hidden="true" style="color:orange; float:right;"></i></a>
                              </div>
                              <div class="bottom">
                                <a href="javascript:void"><div class="wis" style="color: #484442;font-size: 13px;line-height: 18px;"><p>Reach out to our Board of Directors to provide comments, report concerns, or ask questions. </p><p><b>Registered Office</b><br></p><p> Level 29 , The offices at Centralworld 
999/9 Rama 1 Road , Pathumwan 
Bangkok    <br> <br>You may submit your concern anonymously or confidentially by postal mail. You may also indicate whether you are a shareholder, customer, supplier, or other interested party. <br><br>Communications are distributed to the Board, or to any individual directors as appropriate, depending on the facts and circumstances outlined in the communication. In that regard, our Board of Directors has requested that certain items which are unrelated to the duties and responsibilities of the board should be excluded, such as: </p><br><ul class="culture_list reset"><li>Product complaints </li><li>Product inquiries </li><li>New product suggestions </li><li>Resumes and other forms of job inquiries </li><li>Surveys </li><li>Business solicitations or advertisements </li></ul><p>In addition, material that is unduly hostile, threatening, illegal or similarly unsuitable will be excluded, with the provision that any communication that is filtered out must be made available to any non-management director upon request.</p> </div></a>
                              </div>
                          </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <style>
                .container .box {
                float: right;
              /*  width: 150px;*/
                margin: 20px;
              }

              .container .box .top {
                padding: 12px;
                background-color: blue;
                color: white;
                cursor: pointer;
              }
              .container .box .top1 {
                padding: 12px;
              /*  background-color: blue;*/
                color: white;
                cursor: pointer;
              }
              .container .box .bottom {
                padding: 12px;
               /* background-color: red;*/
                color: white;
                display: none;
              }
            </style>

          <!-- sidebar -->
          <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
            <ul class="nav nav-pills nav-stacked">
              <li class="active">
                <a href="corporate-details.php" class="first">
                  Corporate Governance Details        
                </a>
              </li>
              <li>
                <a href="board.php">
                  Board of Directors        
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


  <?php include_once("footer.php"); ?>
      <script>
              $('.top1').on('click', function() {
          $parent_box = $(this).closest('.box');
          $parent_box.siblings().find('.bottom').slideUp();
          $parent_box.find('.bottom').slideToggle(500, 'swing');
          $parent_box.find('i').toggleClass('fa-plus-circle fa-minus-circle')
        });
    </script>