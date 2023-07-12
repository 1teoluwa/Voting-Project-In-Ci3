<body>
    <style>
              * {
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #fff;
        }
        .card1 {
            height: 100%;
            width: 100%;
            background-color: #0b4da2;
            border: none;
        }
        .card2 {
            height: 100%;
            width: 100%;
            background-color: #f6f5fa;
            border: none;
        }
        .image span {
            color: #fff;
            font-size: 28px;
        }
        .hline {
            color: #a2a5d8;
        }
        .btn {
            height: 40px;
            width: 100%;
            border: none;
            position: relative;
            border-radius: 5px;
        }
        .btn i {
            position: absolute;
            left: 10px;
            color: #fff;
            font-weight: 500;
            font-size: 18px;
            top: 10px;
        }
        .btn span {
            position: absolute;
            right: 8px;
            color: #fff;
            font-weight: 400;
            font-size: 16px;
            top: 10px;
        }
        .btn:hover {
            background-color: #3ddcd1;
        }
        .other {
            color: #575c93;
        }
        .hello span {
            font-size: 25px;
            font-weight: bold;
            color: #3c3f61;
            right: 40px;
        }
        .shape {
            background-color: #fff;
        }
        .cardchild {
            height: 100px;
            width: 200px;
            border: none;
            position: relative;
            border-radius: 10px;
        }
        .type {
            font-weight: 500;
        }
        .number {
            font-size: 25px;
            color: #4f5366;
        }
        .cardchild .logo1 {
            position: absolute;
            top: 15px;
            right: 20px;
        }
        .cardchild .percentage {
            position: absolute;
            bottom: 10px;
            right: 15px;
            color: #48ddd8;
            font-weight: 500;
        }
        .cardchild .logo2 {
            position: absolute;
            top: 15px;
            right: 20px;
        }
        .cardchild .percentage2 {
            position: absolute;
            bottom: 10px;
            right: 15px;
            color: #bb7484;
            font-weight: 500;
        }
        .cardchild .logo3 {
            position: absolute;
            top: 15px;
            color: #bb7484;
            right: 20px;
        }
        .cardchild .percentage3 {
            position: absolute;
            bottom: 10px;
            right: 15px;
            color: #48ddd8;
            font-weight: 500;
        }
        .cardchild .logo4 {
            position: absolute;
            top: 15px;
            right: 20px;
        }
        .cardchild .percentage4 {
            position: absolute;
            bottom: 10px;
            right: 15px;
            color: #bb7484;
            font-weight: 500;
        }
        .dashboardcardchildchild {
            width: 100%;
            position: relative;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }
        .cardchildchild {
            width: 335px;
            position: relative;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }
        .cardchildchild b {
        }
        .cardchildchild .profile1 {
            position: absolute;
            border-radius: 50%;
            top: -45px;
            display: flex;
            align-items: center;
            justify-content: center;
            right: 120px;
        }
        .name {
            font-size: 18px;
            font-weight: 500;
        }
        .braceletid {
            font-size: 13px;
            color: #bab9ba;
            font-family: 'Source Sans Pro', sans-serif;
        }
        .btn1 {
            height: 35px;
            width: 160px;
            border: none;
            background-color: #f8c01a;
            cursor: pointer;
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            border-radius: 20px;
        }
        .btn1:hover {
            background-color: #c72b2b;
        }
        .icons {
            font-size: 20px;
            font-weight: 500;
        }
        .dummytext {
            font-size: 14px;
            font-weight: normal;
            color: #b0aeb1;
        }
        .btn2 {
            height: 35px;
            width: 160px;
            border: none;
            background-color: #c72b2b;
            cursor: pointer;
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            border-radius: 20px;
        }
        .btn2:hover {
            background-color: #f8c01a;
        }

    </style>
<div>
    <div class="d-flex flex-row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card card1 p-3">
                <div class="image d-flex flex-row align-items-center mt-3">
                    <span class="offcanvas-title  ms-5" style="font-family: monoton, sans-serif; font-size: 100%">
                    SIMPLE  MAJORITY  SYSTEM
                    </span>
                </div>
                <hr class="hline">
                <div class="d-flex flex-column align-items-center">
                    <h3 class="col-6 text-light">Dashboard</h3>
                    <br>
                    <img src="<?php echo base_url('public/images/'.$data->image); ?>" height="90" width="90" class="rounded-circle" />
                    <br class="row">
                    <div class="card dashboardcardchildchild p-2">
                        <h6 class="col-6 text-primary">
                            Status:
                            <?php if($status->status == 0) : ?>
                                <span class="text-warning col-6"> Not Voted</span>
                            <?php else :?>
                                <span class="text-lg text-success col-6"> Voted </span>
                            <?php endif; ?>
                        </h6>
                        <div class="card cardchild alert alert-success mt-3 p-2 px-3 py-3" style="width: 100%">
                            <div class="d-flex mt-2 justify-content-between rounded">
                                <div class="d-flex flex-column">
                                    <h6>Total Votes: </h6>
                                    <h3> <?php echo $tvotes; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="card cardchild alert alert-warning mt-3 p-2 px-3 py-3" style="width: 100%">
                            <div class="d-flex mt-2 justify-content-between rounded">
                                <div class="d-flex flex-column">
                                    <h6>Total Registered Voters: </h6>
                                    <h3> <?php echo $tvoters; ?></h3>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a class="col-3 btn btn-danger" href="<?php echo base_url('Register/logout')?>">Log-Out</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-9">
            <div class="card card2 p-3">
                <div class="hello d-flex justify-content-end align-items-center mt-3">
                    <h5><em>Hi, <?php echo $data->name ?>!</em></h5>
                </div>
                <div class="row">
                    <?php foreach($getparty as $party) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card cardchild mt-3 p-2 px-3 py-3">
                            <div class="d-flex p-2 mt-2 justify-content-between rounded">
                                <div class="d-flex flex-column">
                                    <span class="type"><?php echo ucwords($party->name);?></span>
                                    <h6>Votes: </h6>
                                </div>
                                <div class="d-flex flex-column">
                                    <img src="<?php echo base_url('public/images/'.$party->image); ?>" class="logo1" height="40" width="40" />
                                    <span class="percentage"><?php echo countVotes($party->id); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php foreach ($getparty as $party): ?>
                <div class="d-flex p-5 mt-5 justify-content-center rounded">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-lg-4">
                            <div class="card cardchildchild p-2 px-3 py-3">
                                <div class="profile1 d-flex p-2 mt-2 justify-content-between rounded">
                                    <img src="<?php echo base_url('public/images/'.$party->image); ?>" height="90" width="90" class="rounded-circle">
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center mt-5">
                                    <span class="name"><?php echo ucwords($party->name); ?></span>
                                    <span class="mt-1 braceletid">Bracelet ID:SFG 38393</span>
                                    <span class="dummytext mt-3 p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Text elit more smtit. Kimto lee.</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-3">
                                    <?php if($status->status == '0') :?>
                                        <a class="col-6 btn1 text-center" href="<?php echo base_url('Register/vote/').$party->id;?>">Vote</a>
                                    <?php else: ?>
                                        <button class="btn" disabled>Voted</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>