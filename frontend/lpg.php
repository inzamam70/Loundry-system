<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/laundry.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
</head>

<body>
    <!-- nav -->
    <div class="laundry-body">
        <div class="laundry-body-container">
        <?php include_once('./frontend-component/nav.php')?>
            <!-- nav end -->

            <div class="laundry-container">
                <div class="laundry-header">
                    <div class="laundry-header-item">
                        <h1 class="laundry-header-h1">LPG Price List</h1>
                        <div class="laundry-divider"> </div>
                    </div>
                </div>

                <div class="laundry-table">
                    <div class="laundry-table-container">
                        <table class="laundry-table-table">
                            <thead class="laundry-table-head">
                                <tr class="laundry-table-tr">
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody class="laundry-table-body">
                                <tr class="laundry-table-body-tr">
                                    <td>1</td>
                                    <td>Jumuna LPG</td>
                                    <td>৳ 250.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>2</td>
                                    <td>Bosundhora LPG</td>
                                    <td>৳ 230.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>3</td>
                                    <td>Omera LPG</td>
                                    <td>৳ 50.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>4</td>
                                    <td>Orion LPG</td>
                                    <td>৳ 50.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>5</td>
                                    <td>Navana LPG</td>
                                    <td>৳ 50.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>6</td>
                                    <td>JMI LPG</td>
                                    <td>৳ 60.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>7</td>
                                    <td> Totalgaz LPG</td>
                                    <td>৳ 50.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>8</td>
                                    <td> LAUGFS Gas</td>
                                    <td>৳ 80.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>9</td>
                                    <td> INDEX LP GAS</td>
                                    <td>৳ 50.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>10</td>
                                    <td>Aygaz United LPG</td>
                                    <td>৳ 120.00</td>    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <!-- footer -->
        <?php include('./frontend-component/footer.php')?>
    </div>
    <!-- footer end -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>