<?php include '../header.php';
include("../dbcon.php");
?>
<style>
    

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  margin-top: 10px;
}

.panel {
    padding: 0 18px;
    background-color: #ffffff;
    display: none;
    overflow: hidden;
    box-shadow: 6px 3px 11px #0000004d;
    margin-top: 10px;
    padding: 9px 18px;
    border-radius: 2px;
}

.accordion:after {
  /* Unicode character for "plus" sign (+) */
  content: "\02795";
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}
</style>
<section class="page-title" style="background-image: url(../assets/images/breadcrum/investor-relation.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Investor Relations</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <!-- Modify 24/8/2022 start -->
                    <li><a href="<?php echo SITE_URL;?>index.php">Home</a></li>
                    <!-- Modify 24/8/2022 end -->
                    <li><a href="#">Investor Relations</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="faq-section-five" style="background:#fff;padding: 40px 0px 5px;">
    <div class="pattern"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <form method="post" action="#" class="contact-form">
                        <div class="row">
                           <div class="col-md-6 form-group">
                                <label>Our Companies</label>
                               <select class="form-control" onchange="addWidget()" id="company">
                                    <option value="">Select</option>
                                    <?php
                                                

                                                $sql = "SELECT * FROM bname_category";

                                                $result = mysqli_query($con, $sql) or die("Query failed:");
                                                if (mysqli_num_rows($result)>0)
                                                {
                                                    while ($row = mysqli_fetch_assoc($result))
                                                    {
                                                        echo "<option> {$row['bname']}</option>";
                                                    }
                                                }
                                   ?>
                                 </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>For Periods</label>
                                <select class="form-control" name="year" id="periods">
                                    <option>All</option>
                                    <!-- <option>2011-2012</option>
                                    <option>2013-2014</option>
                                    <option>2015-2016</option>
                                    <option>2016-2017</option> -->
                                </select>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>

        </div>
    </div>

</section>

<div class="auto-container pb-35" id="info">
    
                    <?php   
                        
                        $stm = "SELECT * FROM invest_category";
                        $res = $con->query($stm);
                        // print_r($res);
                        $arams = array();
                        while($row = mysqli_fetch_array($res))
                        {
                            echo '<div class="accordion-contianer"> <button class="accordion">'.$row['invester_category'].'</button> <div class="panel"> <div class="row">'; ?>
                                            <?php
                                            
                                                $stm = "SELECT * FROM invester_relation where invester_category like '%{$row['invester_category']}%'";
                                                $res2 = $con->query($stm);
                                                // print_r($res);
                                                $arams = array();
                                                while($row1 = mysqli_fetch_array($res2))
                                                {
                                                    echo '<div class="col-lg-8 col-md-8">
                                            
                                                <h6><i class="fa fa-file"></i> '.$row1['title'].'</h6>
                                                <small>'.$row1['created_at'].'</small>
                                            </div>
                                              <div class="col-lg-4 col-md-4 text-right">
                                                <small>'.number_format($row1['file_size'], 2, '.', '').' MB</small>
                                                  <a download type="button" href="<?php echo SITE_URL;?>admin/invester/upload/'.$row1['title'].'.'.$row1['file_type'].'" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
                            
                                            </div>';
                                                }
                                            ?>
                                        <?php 
                                        echo '</div>
                                    </div>
                                </div>';
                        }
                    ?>
    

    <!--<div class="accordion-contianer">-->
    <!--    <button class="accordion">Section 3</button>-->
    <!--    <div class="panel">-->
    <!--        <p>Lorem ipsum...</p>-->
    <!--    </div>-->
    <!--</div>-->

</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    
    function findinfo()
    {
        var input = $('#company').val();
        if(!input){
            $('#periods').append('<option value="">All</option>');
        }
        $.ajax({
            url:'<?php echo SITE_URL;?>load_categories.php'
        //   url:'<?php //echo SITE_URL;?>admin/invester/bname.php',
          data:{
              find:input
          },
          type:'post',
          success:function(data){
            //   console.log(data);
            //   $('#info').html(data);

             // alert(res);
                    //   $("#serv").html(res);
                    data = JSON.parse(res);
                    // console.log(data);
                    $('#periods').append('<option>All</option>');
                    var len = data.length;
                    for (var i = 0; i < len; i++) {
                        var id = data[i].id;
                        var service_title = data[i].service_title;
                        if (id == services) {
                            selected = true;
                        } else {
                            selected = false;
                        }
                        $('#periods')

                            .append($("<option></option>")
                                .attr("id", id)
                                .attr("value", id)
                                .attr("selected", selected)
                                .text(service_title));
                    }
          }
           
        });
        
        // ${Number(item['file_size']).toFixed(2)}
        
    }
    function addWidget()
    {
        var str=`<div class="accordion-contianer "> 
                    <button class="accordion">Announcements</button> 
                        <div class="panel">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                            
                                                <h6><i class="fa fa-file"></i> Schedule-Presentation of Analyst-Institutional Investor Meetings post Q3FY22 results</h6>
                                                <small></small>
                                            </div>
                                              <div class="col-lg-4 col-md-4 text-right">
                                                <small>0.10 MB</small>
                                                  <a download type="button" href="<?php echo SITE_URL;?>admin/invester/upload/Schedule-Presentation of Analyst-Institutional Investor Meetings post Q3FY22 results.pdf" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
                            
                                            </div></div>
                                    </div>
                                </div>`;
                                
                                $('#info').html(str);
                                
                                $(".panel").on("click", function(e){
                                      var $_target =  $(e.currentTarget);
                                      var $_panelBody = $_target.find(".panel-collapse");
                                      if($_panelBody){
                                        $_panelBody.collapse('toggle')
                                      }
                                });
    }
</script>
<?php include 'footer.php';?>