<?php include 'header.php';
 
?>

<link href="Mobilestyle.css" rel="stylesheet"/>
<style>
    label {
        display: inline-block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #000;
    }

    .contact-form .form-group input[type="text"] {
        font-weight: 300 !important;
    }

    .contact-form .form-group input[type="number"] {
        font-weight: 300 !important;
    }

    input[type=checkbox],
    input[type=radio] {
        box-sizing: border-box;
        padding: 0;
        height: 15px;
        width: 16px;
        margin-top: 0px;
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 17px;
    }

    .page-title {
        padding: 94px 1px 94px 0px;
    }



    /******* contact page success section *******/
    .success_msg {
        text-align: center;
        width: 100%;
        padding-bottom: 20px;
        padding-top: 20px;
        background: green;
        margin-bottom: 50px;
        border-radius: 6px;
        color: white;
    }

    .fail_msg {
        text-align: center;
        width: 100%;
        padding-bottom: 20px;
        padding-top: 20px;
        background: grey;
        margin-bottom: 50px;
        border-radius: 6px;
        color: white;
    }

    .iti {
        position: relative;
        display: -webkit-box !important;
    }

    .iti__flag-container {
        border-color: #f1f5f8;
        background-color: #f1f5f8;
        height: 56px !important;
    }

    #mobile {
        width: 315px !important;
        float: right !important;
        margin-left: 7px !important;
    }

    .iti__flag-container {
        position: unset;
        border-radius: 6px;
        top: 0;
        bottom: 0;
        right: 0;
        padding: 1px;
    }

    #mobile {
        width: 284px !important;
        float: right !important;
        margin-left: 7px !important;
        padding: 11px 20px !important;
    }

    /* .contact-form .form-group input[type="number"] {

        border-color: #f1f5f8 !important;
        background-color: #f1f5f8 !important;
        height: 56px !important;
    }

     */

    /* .country1 {
        width: 90px !important;
    }

    */

    /******* contact page success section *******/
</style>




<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
            </div>

            <div class="modal-body">

                <div class="thank-you-pop">
                    <div class="col-md-12" style="height: 80px;text-align: center;">
                        <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="" width="12%" style="float:left;text-align: center;">
                        <h1>Thanks!</h1>
                    </div>
                    <div class="col-md-12">
                        <p>Your details has been submitted to us. We are usually able to respond within a few days, but some issues may take longer.</p>
                        <br>
                        <p>Please check your email inbox for an email from "Raichand Support". If you don't see one, try checking your email's spam or trash folder.</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<section class="page-title" style="background-image: url(assets/images/breadcrum/contact-us.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Get in touch</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="heighlight-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4 heighlight-block">
                <div class="inner-box">
                    <div class="icon"><img src="assets/images/icons/icon-53.png" alt=""></div>
                    <h4>Head Office</h4>
                    <div class="text">Unit No. 611, Reliables Pride, Anand Nagar, Opp. Heera
                        Panna Mall, Jogeshwari, Mumbai, MH, IN - 400102</div>
                    <!--<div class="link-btn"><a href="#" class="theme-btn btn-style-two"><span class="btn-title">LIVE-->
                    <!--            CHAT</span></a></div>-->
                </div>
            </div>
            <div class="col-lg-4 heighlight-block">
                <div class="inner-box">
                    <img src="assets/images/icons/qr-code.png" style="height:200px">
                    <h5><i>Scan here to save our contact information.</i></h5>

                </div>
            </div>
            <div class="col-lg-4 heighlight-block">
                <div class="inner-box">
                    <div class="icon"><img src="assets/images/icons/icon-54.png" alt=""></div>
                    <h4>Contact</h4>
                    <div class="text">
                        
                        <a style="color:black" href="https://wa.me/+919170881708">
                            <img src="https://www.iconpacks.net/icons/1/free-whatsapp-icon-121-thumb.png" style="height:20px;width:20px"/>
                            +91 91708 81708</a><br>
                    
                    <a href="mailto:business@raichandgroup.com" style="color:black"><i class="fa fa-envelope" aria-hidden="true"></i> business@raichandgroup.com</a>
                    
                        <br>
                        <a href="https://raichandgroup.com" style="color:black"><i class="fa fa-globe"></i> www.raichandgroup.com</a>
                        
                        <br>
                        <a href="https://raichandgroup.com" style="color:transparent"><i class="fa fa-globe"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<?php

// Checking valid form is submitted or not


?>

<section class="contact-form-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h2>Send Your Message To Us</h2>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="live-contact">
                    <div class="image"><img src="assets/images/resource/image-40.jpg" alt=""></div>
                    <div class="content">
                        <div class="icon"><span class="flaticon-support-1"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <form method="post" action="<?php echo SITEURL; ?>api/contact_us.php" class="contact-form">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="anonymous" onclick="checkme()">
                        <label class="form-check-label" for="flexCheckDefault" style="font-size:18px;margin-left:15px;">
                            Submit as Anonymous
                        </label>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="remove" class="row">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>Name <span class="text-red">*</span></label>
                                    <input type="text" name="name" placeholder="Provide Your Full Name" id="name" required="" />
                                </div>
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>Email <span class="text-red">*</span></label>
                                    <!-- <input type="text" name="email" id="email" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*" required> -->
                                    <input type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" placeholder="Provide Your Work Email" />
                                    <!-- <input type="email" name="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,}" placeholder="Enter Email Address" id="email" required=""> -->
                                    <!-- <input class="form-control" placeholder="Enter Email Address" 
                                            type="email"  name="email" id="email" 
                                            title="Contact's email (format: xxx@xxx.xxx)" 
                                            pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"> -->
                                    <!-- <input type="email" /> <br /> -->
                                </div>
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>Mobile<span class="text-red">*</span></label>
                                    <!-- <div class="row"></div> -->
                                    <!-- <select name="country1" class="country1" required="">
                                        <option data-code="+91" value="+91">+91</option>
                                        <option data-code="+44" value="+44">+44</option>
                                        <option data-code="+30" value="+30">+30</option>
                                        <option data-code="+49" value="+49">+49</option>
                                        <option data-code="+33" value="+33">+33</option>
                                        <option data-code="+39" value="+39">+39</option>
                                    </select> -->

                                    <!-- <input  name="mobile" id="mobile" required=""
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                    oninput="javascript: if (this.value.length <= this.minLength) this.value = this.value.slice(10, this.minLength);"                                     
                                    type = "number" maxlength = "10" minlength="10" /> -->
                                    
                                    <input type="text" placeholder="Provide Your Calling Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="mobile" pattern="[1-9]{1}[0-9]{9}" id="mobile" required="" class="mobile" maxLength="10" minlength="10">
                                    <!-- <input type="number" placeholder="Enter number" name="mobile" id="mobile" required="" class="mobile" onKeyPress="if(this.value.length==10) return false;" > -->
                                </div>
                                <input type="hidden" name="hidden_mobile" id="hidden_mobile" class="mobile">

                                <!-- <div class="col-lg-6 col-md-6 form-group"> -->
                                <!-- </div> -->
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>Company <span class="text-red">*</span></label>
                                    <input type="text" name="company" placeholder="Enter Your Company Name" id="company" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>Designation <span class="text-red">*</span></label>
                                    <input type="text" name="deg" placeholder="Enter Your Designation" id="deg" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="exampleFormControlSelect1">Businesses Name <span class="text-red">*</span></label>
                            <select name="bname" class="form-control" id="exampleFormControlSelect1" onchange="bGroup()" required="">
                                <option value="">Select One of Our Business</option>
                                <?php
                                function cat($parent_id = 0, $sub_mark = '')
                                {
                                    // echo $parent_id;
                                    global $con;
                                    // $parent_id=0;                               
                                    $query =  $con->query("SELECT * FROM  cat WHERE parent_id = $parent_id ORDER BY bname_order ASC");
                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                            echo "<option id='" . $row['id'] . "' value='" . $row['id'] . "'>" . $sub_mark . $row['categories'] . "</option>";

                                            // if($sub_mark=="")
                                            // {
                                            //     echo $row['categories'];
                                            //     // echo '<input type="checkbox" id="' . $row['id'] . '" name="categories[]" value="' . $row['id'] . '">';
                                            //     echo "<option id='" . $row['id'] . "' value='" . $row['id'] . "'>".$row['categories']."</option>";
                                            //     // echo $sub_mark . $row['categories'] . '<br>';
                                            // }
                                            // else{
                                            //     // echo '<span style="padding-left:20px;"><input type="checkbox" id="' . $row['id'] . '" name="categories[]" value="' . $row['id'] . '"></span>';
                                            //     // echo $sub_mark . $row['categories'] . '<br>';
                                            //     echo "<span style='padding-left:20px;'><option id='" . $row['id'] . "' value='" . $row['id'] . "'>".$row['categories']."</option></span>";

                                            // }
                                            // cat($row['id'], $sub_mark . '&nbsp;&nbsp;&nbsp;');
                                        }
                                    }
                                }
                                ?>
                                <?php echo cat(); ?>
                                <!-- <option value="">Select One</option>
                                    <option>Raichand Management</option>
                                    <option>Raichand Trading</option>
                                    <option>Raichand Investments</option>
                                    <option>Raichand Merchandise</option>
                                    <option>Raichand Hospitality</option>
                                    <option>Raichand Entertainment</option>
                                    <option>Raichand Foundation</option>
                                    <option>Raichand Healthcare</option>
                                    <option>Raichand School of Arts</option>
                                    <option>Raichand Publishers</option> -->
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 form-group">
                            <label>Services <span class="text-red">*</span></label>
                            <select name="serv" class="form-control" id="exampleFormControlSelect2" required="">

                                <option value="">Select One of Our Service</option>
                                <!-- <option value="">Select One</option>
                                    <option>Digital Transformation</option>
                                    <option>Sustainable Business Model</option>
                                    <option>Engaging Content & Campaigns to drive Continuous Growth</option>
                                    <option>Operations Consultancy</option>
                                    <option>Financial Resources Consultancy</option>
                                    <option>Support Services</option>
                                    <option>Website Development</option>
                                    <option>Application Development</option>
                                    <option>Future Potential Discover</option>
                                    <option>Board Advisory</option>
                                    <option>Strategy Design & Implementation</option>
                                    <option>Gather & Analyze Reliable Market Data</option>
                                    <option>Market to Specific Segments</option>
                                    <option>Leverage Data-Targeted</option>
                                    <option>Trend Analysis</option>
                                    <option>Financial Forecasting</option>
                                    <option>Annual Strategy Scan</option>
                                    <option>Facility Expansion</option>
                                    <option>Economic Impact Analysis</option>
                                    <option>Agile Transformation</option>
                                    <option>Case Studies</option>
                                    <option>Time Tracking & Estimation</option>
                                    <option>Benchmark standards</option>
                                    <option>Seamless services</option>
                                    <option>Information Architecture</option>
                                    <option>Real-time Insights and Algorithms</option>
                                    <option>Customer Workflows</option>
                                    <option>Customer Service Management (CSM)</option>
                                    <option>Field Service Management</option>
                                    <option>Operational Technology Management</option>
                                    <option>User experience (UX) Design</option>
                                    <option>Customer Journey Analytics</option>
                                    <option>Digital Customer Experience</option>
                                    <option>Customer Experience Analysis</option>
                                    <option>Mapping & Re-Engineering</option>
                                    <option>Productive Organization Design</option>
                                    <option>Outsourcing Services</option>  -->
                            </select>
                        </div>

                        <div class="col-lg-12 col-md-6 form-group">
                            <label>Our Presence <span class="text-red">*</span></label>
                            <select name="cont" class="form-control" id="exampleFormControlSelect3" required="">
                                <option value="">Select Country</option>
                                <?php
                                include('country.php');
                                for ($i = 0; $i < count($cname); $i++) {
                                    echo "<option>" . $cname[$i] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-12 col-md-12 form-group">
                            <label class="col-lg-3"><input type="radio" name="type" value="Feedback" required="">&nbsp;&nbsp;Feedback</label>

                            <label class="col-lg-3"><input type="radio" name="type" value="Complaints" required="">&nbsp;&nbsp;Complaints</label>
                            <label class="col-lg-3"><input type="radio" name="type" value="Suggestions" required="">&nbsp;&nbsp;Suggestions</label>
                            <label class="col-lg-2"><input type="radio" name="type" value="Request" required="">&nbsp;&nbsp;Request</label>

                            <div showIfIdChecked="rdio1"><textarea id="message" name="message" placeholder="Enter Your Message" required="" rows="5" minlength="30"></textarea></div>
                            
                            
                            
                            
                            
                            <!--<div showIfIdChecked="rdio2"><textarea name="message"-->
                            <!--        placeholder="Your Suggestions"></textarea></div>-->
                            <!--<div showIfIdChecked="rdio3"><textarea name="message" placeholder="Your Request"></textarea>-->
                            <!--</div>-->
                            <!--<div showIfIdChecked="rdio4"><textarea name="message" placeholder="Feedback"></textarea>-->
                            <!--</div>-->

                        </div>
                        <!-- <label class="col-lg-2"><input type="radio" name="type" value="Request" required="">&nbsp;&nbsp;Request</label> -->
            <center>
                        <div class="g-recaptcha m-3 " id="cap" data-sitekey="6LcD6e0gAAAAAFGevd9MRpsebnoXAzndWwvV1Zsn">
                        </div>
</center>
                        <!-- <div class="field">
                            <textarea id="comment-content" name="content" placeholder="enter your comments here"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey=""></div> -->
                        <button class="theme-btn btn-style-one mb-30" type="submit" name="submit-form" style="width:100%;"><span class="btn-title">SUBMIT</span></button>
                        <!-- <button id="temp_click">Temp Click</button> -->
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<?php
if (isset($_GET['status'])) {
?>
    <!-- <section class="">
        <div class="auto-container">
            <div class="row"> -->
    <?php if ($_GET['status'] == 'success') {
        $response_class = 'success_msg';
        $response_msg = "Thank you. Our team will reach you shortly.";
        // $mobileerror ="";
        // echo "<script type='text/javascript'>alert('$response_msg')</script>";
        echo '<script>$("#thankyouModal").modal("show");</script>';
    } else {
        $response_class = 'fail_msg';
        $response_msg = "Oops! Something went wrong.";
        echo "<script type='text/javascript'>alert('$response_msg')</script>";

        // $mobileerror ="Number is wrong.";
    }
    ?>
    <!-- <h3 class="<?php echo $response_class; ?>"><?php echo $response_msg; ?></h3>
            </div>
        </div>
    </section> -->
<?php } ?>
<script>
    $('.hide-show input').change(function() {
        $(this).closest('.hide-show').next('.hide-show-yes').toggle(this.value == 'yes').next('.hide-show-no')
            .toggle(this.value == 'no');
    }).filter(':checked').change();


    function executeAutomaticVisibility(name) {
        $("[name=" + name + "]:checked").each(function() {
            $("[showIfIdChecked=" + this.id + "]").show();
        });
        $("[name=" + name + "]:not(:checked)").each(function() {
            $("[showIfIdChecked=" + this.id + "]").hide();
        });
    }

    function checkme() {
        var vk = $("#anonymous");
        if (vk.prop("checked")) {
            console.log('checked');
            $('#remove').css('display', 'none');
            $('#name').removeAttr('required');
            $('#email').removeAttr('required');
            $('#mobile').removeAttr('required');
            $('#company').removeAttr('required');
            $('#deg').removeAttr('required');

        } else {
            console.log('unchecked');
            $('#remove').css('display', 'block');
            $('#name').attr('required', '');
            $('#email').attr('required', '');
            $('#mobile').attr('required', '');
            $('#company').attr('required', '');
            $('#deg').attr('required', '');
        }
    }
    $(document).ready(function() {
        triggers = $("[showIfIdChecked]")
            .map(function() {
                return $("#" + $(this).attr("showIfIdChecked")).get()
            })
        $.unique(triggers);
        triggers.each(function() {
            executeAutomaticVisibility(this.name);
            $(this).change(function() {
                executeAutomaticVisibility(this.name);
            });
        });
    });

    function funk() {
        var data = $("#exampleFormControlSelect1");
        // alert();
        $.ajax({
            url: '/company.php?req=' + data.val(),
            type: "get",
            success: function(dat) {
                var sub = $('#exampleFormControlSelect2');
                var str = `<option>Select Services</option>`;
                console.log(dat);
                dat.map((item, index) => {
                    str += `<option>${item}</option>`;
                });
                sub.html(str);
            }

        })
    }
</script>
<script>
    // function bGroup(){
    // val1 = $("#exampleFormControlSelect1").val();
    // window.alert(val1);
    $(document).ready(function() {
        $("#exampleFormControlSelect1").change(function() {
            $("#exampleFormControlSelect2 option").remove(); // add this line
            // var cid = $(this).attr('id');
            var cid = $(this).val();
            // $cid = $('#exampleFormControlSelect1 option:selected').attr('id');
            //   alert(cid);
            $.ajax({
                url: 'load_categories.php',
                type: 'post',
                data: {
                    id: cid
                },
                success: function(res) {
                    // alert(res);
                    //   $("#serv").html(res);
                    data = JSON.parse(res);
                    // console.log(data);
                    $('#exampleFormControlSelect2').append('<option>Select Services</option>');
                    var len = data.length;
                    // alert(len);
                    if(len !== 0){

                    
                    for (var i = 0; i < len; i++) {
                        var id = data[i].id;
                        var service_title = data[i].service_title;

                        $('#exampleFormControlSelect2')
                            // .append($("<option>Select Services</option>"))
                            .append($("<option></option>")
                                .attr("id", id)
                                .attr("value", id)
                                .text(service_title));
                    }
                }else{
                    // $('#exampleFormControlSelect2')
                    //         // .append($("<option>Select Services</option>"))
                    //         .append($("<option></option>")
                    //             .attr(selected)
                    //             .text('N/A'));
                    $('#exampleFormControlSelect2')
                            // .append($("<option>Select Services</option>"))
                            .append($("<option></option>")
                                .attr("id", 0)
                                .attr("value", 0)
                                .attr("selected", 'selected')
                                .text('N/A'));
                }
                    // $.each(data, function (index, value) {
                    //     // console.log(index);
                    //     // alert(value);
                    //     $('#exampleFormControlSelect2')
                    //     // .append($("<option>Select Services</option>"))
                    //     .append($("<option></option>")
                    //     .attr("id",index)
                    //     .attr("value",index)
                    //     .text(value));                
                    // });
                    // $.each(data.response, function(key, value) {
                    //      $('#serv')
                    //         .append($("<option></option>")
                    //         .attr("value",key)
                    //         .text(value));
                    // });
                }
            });
        });

        var phone_number = window.intlTelInput(document.querySelector("#mobile"), {
            separateDialCode: true,
            preferredCountries: ["in"],
            hiddenInput: "full",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        console.log(phone_number);

        $(document).on('click', "form", function() {
            // console.log("hello");
            var code = phone_number.getSelectedCountryData().dialCode;
            var full_number = phone_number.getNumber();
            $('input[id=hidden_mobile]').val(code);
            // console.log($('#mobile').val());
            // $("input[name='phone_number[full]'").val(full_number);
            //   alert(full_number)

        });
    });
    // return val1;
    // }
</script>
<script>
    //     $(function () {
    //    $( "input" ).change(function() {
    //    var max = parseInt($(this).attr('max'));
    //    var min = parseInt($(this).attr('min'));
    //    if ($(this).val() > max)
    //    {
    //       $(this).val(max);
    //    }
    //    else if ($(this).val() < min)
    //    {
    //       $(this).val(min);
    //    }       
    //  }); 
    // });
    // Vanilla Javascript
    // var input = document.querySelector("#mobile");
    // window.intlTelInput(input,({
    //   // options here
    // }));

    // // jQuery 
    // $("#mobile").intlTelInput({
    //   // options here
    // });

    //CODE FOR SHOWING DROPDOWN COUNTRY CODE VALUES IN MOBILE FIELD 
    // $(document).ready(function() {
    //     $("[name='country1']").on("change", function() {

    //         $("[name='mobile']").val($(this).find("option:selected").data("code"));
    //     });
    // });
</script>
<script>
    // input.addEventListener("countrychange", function() {

    //   // do something with iti.getSelectedCountryData()
    // });
</script>