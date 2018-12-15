<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('assets/css/bootstrap.css') ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('assets/css/owl.carousel.css') ?>" />
    <script src="<?= base_url('assets/js/jquery.js')?>"></script>
    <style>
    .shape-title{
        height: 150px;
        background-size: 80%;
        background-position: center top;
        background-repeat: no-repeat;
        width: 100%;
        margin: 0 auto;  
     } 
     </style>
</head>
<body style="background-image:url(<?= base_url('assets/img/background.png') ?>);">
    <div class="container-fluid">
        <div class="shape-title text-center text-warning" style="background-image:url(<?= base_url('assets/img/shape-title.png')?>)">
            <h1 style="position:absolute;margin-top:42px;margin-left:540px">
            Jadwal Dokter
            </h1>
        </div>    
        <div class="">
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner active">
                    <div class="carousel-item active">
                        <img src="" alt="...">
                        <div class="carousel-caption d-none d-md-block" >
                            <strong>Jadwal Dokter</strong>
                        </div>
                    </div>
                    <?php
                    $page = $_SERVER['PHP_SELF'];
                    $sec = "3000";
                    header("Refresh: $sec; url=$page");
                    $start = 0;

                        ?>
                    <?php foreach($datalist as $data): ?>
                    <div class="carousel-item">
                        <!-- <img src="" alt="...">
                        <div class="carousel-caption d-none d-md-block"> -->
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <div class="text-center">
                                <?php
                                if(empty($data['photo'])){
                                    $data['photo'] ='uploads/doctor/default.png';
                                }
                                ?>
                                    <img src="https://rsiagrandfamily.com/public/<?=$data['photo'];?>" alt=".<?=$data['photo'];?>." class="text-center rounded-circle" style="width:300px;height:300px" />
                                        <h3 style="font-weight:bold;font-size:50px"><?= $data['name'];?></h3>
                                        <h4 class="text-danger" style="font-weight:bold;font-size:30px"><?=$data['specialist_id'];?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table width="100%" cellspacing="0" cellpadding="20" class="table table-striped">
                                    <tr valign="center" style="font-weight:bold;font-size:20px">
                                            <th>Senin</th>
                                            <th>Selasa</th>
                                            <th>Rabu</th>
                                            <th>Kamis</th>
                                            <th>Jumat</th>
                                            <th>Sabtu</th>
                                            <th>Minggu</th>
                                    </tr><tr style="font-weight:bold;font-size:20px">
                                            <td><?=$data['senin'];?></td>
                                            <td><?=$data['selasa'];?></td>
                                            <td><?=$data['rabu'];?></td>
                                            <td><?=$data['kamis'];?></td>
                                            <td><?=$data['jumat'];?></td>
                                            <td><?=$data['sabtu'];?></td>
                                            <td><?=$data['minggu'];?></td>
                                    </tr><tr>
                                        <td colspan="7" class="bg-danger" font-weight:bold;font-size:20px;color:red><?=$data['note']?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>

        </div>    
    </div>
    <script>
    $(document).ready(function(){
        $('.carousel').carousel({
        interval: 2000
        })
    });
    </script>
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.js') ?>"></script>
</body>
</html>