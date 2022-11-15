<?php   
                        include("../../dbcon.php");
                        $bname = $_POST['find'];
                        $stm = "SELECT a.invester_category FROM invester_relation  a join bname_category b on a.bname = b.bname where b.bname like '%$bname%' group by a.invester_category";
                        $res = $con->query($stm);
                        // print_r($res);
                        $str="";
                        while($row = mysqli_fetch_array($res))
                        {
                            $str.= '<div class="accordion-contianer"> <button class="accordion">'.$row['invester_category'].'</button> <div class="panel"> <div class="row">'; ?>
                                            <?php
                                            
                                                $stm = "SELECT * FROM invester_relation where invester_category like '%{$row['invester_category']}%'";
                                                $res = $con->query($stm);
                                                $rq="";
                                                // print_r($res);
                                                while($row1 = mysqli_fetch_array($res))
                                                {
                                                    $rq.= '<div class="col-lg-8 col-md-8">
                                            
                                                <h6><i class="fa fa-file"></i> '.$row1['title'].'</h6>
                                                <small>'.$row1['create_at'].'</small>
                                            </div>
                                              <div class="col-lg-4 col-md-4 text-right">
                                                <small>'.number_format($row1['file_size'], 2, '.', '').' MB</small>
                                                  <a download type="button" href="<?php echo SITE_URL;?>admin/invester/upload/'.$row1['title'].'.'.$row1['file_type'].'" class="btn btn-dark"><i class="fa fa-download" aria-hidden="true"></i></a>
                            
                                            </div>';
                                                }
                                                $str.=$rq;
                                        $str.= '</div>
                                    </div>
                                </div>';
                        }
                        print_r($str);
                    ?>