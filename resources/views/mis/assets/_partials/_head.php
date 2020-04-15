<head>
        <meta charset="utf-8" />
        <title>Unisys - Fully integrated for ease of use and interaction</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/scottindex.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- To inject swal js -->
        <script src="assets/js/swal.js"></script>
       <?php if(isset($success)) {?>
       <!--This code for injecting success alert-->
               <script>
                           setTimeout(function () 
                           { 
                               swal("Success","<?php echo $success;?>","success");
                           },
                               100);
                          
               </script>

       <?php } ?>

       <?php if(isset($err)) {?>
       <!--This code for injecting error alert-->
               <script>
                           setTimeout(function () 
                           { 
                               swal("Failed","<?php echo $err;?>","error");
                           },
                               100);
               </script>

       <?php } ?>
       <?php if(isset($info)) {?>
       <!--This code for injecting info alert-->
               <script>
                           setTimeout(function () 
                           { 
                               swal("Success","<?php echo $info;?>","warning");
                           },
                               100);
               </script>

       <?php } ?>
    </head>
