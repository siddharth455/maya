<?php require "common/header.php" ?>

</head>

<body>

<div class="container-fluid">
   <div class="container">
   <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-center mb-4 fw-bold text-success" style="font-size: 50px;">Refund Policy As per UGC Guideline</h1>
                <br>
                <?php
                // Define the refund policy data
                $refund_policy = array(
                    array("Category" => "1", "Percentage" => "100%", "Time" => "15 days or more before the formally notified last date of admission"),
                    array("Category" => "2", "Percentage" => "90%", "Time" => "Less than 15 days before the formally notified last date of admission"),
                    array("Category" => "3", "Percentage" => "80%", "Time" => "15 days or less after the formally notified last date of admission"),
                    array("Category" => "4", "Percentage" => "50%", "Time" => "30 days or less, but more than 15 days after the formally notified last date of admission"),
                    array("Category" => "5", "Percentage" => "00%", "Time" => "More than 30 days after the formally notified last date of admission")
                );
                ?>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">Category</th>
                                <th class="text-center">Percentage of Refund of fees</th>
                                <th class="text-center">Point of time when notice of withdrawal of admission is received in the HEI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($refund_policy as $policy): ?>
                            <tr>
                                <td class="text-center fw-bold"><?php echo $policy['Category']; ?></td>
                                <td class="text-center"><?php echo $policy['Percentage']; ?></td>
                                <td><?php echo $policy['Time']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
</body>

</html>
<?php require "common/footer.php" ?>