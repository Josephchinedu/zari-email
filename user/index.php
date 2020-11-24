<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>User</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <p style="visibility: hidden;">Developed By Joseph</p>

            <ul class="list-unstyled components">
                <p style="visibility: hidden;">Dummy Heading</p>
                <li class="active">
                    <a href="./">Send SMS</a>
                </li>
                <li >
                    <a href="send.php">Sent Messages</a>
                </li>
                <li >
                    <a href="draft.php">Draft</a>
                </li>
                <li>
                    <a href="phone.php">Phonebook</a>
                </li>
                <li>
                    <a href="sms.php">Buy SMS Unit</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        
                    </button>

                    <a href="#" class="ml-auto" style="position: relative; right: 55px;">Contact <img src="tee.png"></a>

                     
                    
                    
                
                    <img src="Capture.PNG">
                </div>
            </nav>

            <div class="lorfsjd" style="background-image: linear-gradient(to bottom, rgba(255,255,25 0.52), rgba(117, 19, 93, 0.73)), url(hero-img.png);">
               <div>
                   <div>
                       <form style="padding-top: 120px;" action="contact.php" method="post">
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="input-group">
                                        <span class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="errrrrrt">
                                                <img src="us.png">
                                            </button>
                                        </span>
                                        <input class="form-control py-2" type="name" name="name" placeholder="Senders Name" id="errrrrrt">
                                        
                                    </div>
                                 <br /><br /> 

                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="errrrrrt">
                                                <img src="admin.png">
                                            </button>
                                        </span>
                                        <input class="form-control py-2" type="email" name="mail" placeholder="Destination Email" id="errrrrrt">
        
                                        <span class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="errrrrrt">
                                                <img src="add.png">
                                            </button>
                                        </span>
                                        
                                    </div>
                               </div>
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               <div class="col-md-6">
                                    <span style="color: #2E97F2; float: right; padding: 10px;">0 / 160</span>
                                       <div class="lorfsjd">
                                           <div style="padding: 10px;">
                                               <textarea class="form-control" name="message">Type your message</textarea>
                                           </div>
                                       </div>
                                </div>
                           </div>
                           
                           
                           
                           <div class="row" style="padding-top: 60px;">
                    <div class="col-md-8 offset-md-2">
                        <div style="display: block;">
                           <center> <p><img src="danger.png"> Aviod <u style="list-style: ">Spam Words</u> to ensure Delivery</p></center>

                           <center>
                               <div class="form-check" style="display: inline-flex;">
                                    <div>
                                         <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                          <label class="form-check-label" for="exampleRadios1">
                                            Deliver to DND Members
                                          </label>
                                        
                                    </div>

                                    <div>
                                        <div style="position: relative; left: 70px;">
                                            
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Schedule Message</label>
                                        </div>
                                    </div>

                                    
                                </div>
                           </center>
                        </div>
                    </div>

                    <br /><br />

                    
                </div>
                <br /><br />

                <center>
                    <button class="lorfsjd" name="submit" type="submit">
                        Send Now
                    </button>
                </center>
                           

                           
                       </form>
                   </div>


                   
               </div>




                
            </div>

            <br /><br />




           
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>