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
                        <h1 class="laundry-header-h1">AC Wash Price List</h1>
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
                                    <td>Split Wall Type Cassette type, Ceiling type Air Conditioner(1 ton to 2 ton)</td>
                                    <td>৳ 1250.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>2</td>
                                    <td>Split Wall Type,Cassette type,Ceiling type, Air Conditioner(2.5 ton to 5 ton)</td>
                                    <td>৳ 1230.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>3</td>
                                    <td>Window Type Air Conditioner (1 ton to 2.5 ton)</td>
                                    <td>৳ 2050.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>4</td>
                                    <td>Split Wall Type Cassette type, Ceiling type Air Conditioner(1 ton to 2 ton)</td>
                                    <td>৳ 3050.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>5</td>
                                    <td>Split Wall Type, Cassette type, Ceiling type, Air Conditioner(2.5 ton to 5 ton)</td>
                                    <td>৳ 4050.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>6</td>
                                    <td>Window Type Air Conditioner (1 ton to 2.5 ton)</td>
                                    <td>৳ 2560.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>7</td>
                                    <td>Servicing per Indoor Unit (1 ton to 5 ton)</td>
                                    <td>৳ 1550.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>8</td>
                                    <td>Servicing per Outdoor Unit</td>
                                    <td>৳ 4580.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>9</td>
                                    <td>Overhauling Servicing per Indoor Unit (1 ton to 5 ton)</td>
                                    <td>৳ 1250.00</td>
                                </tr>
                                <tr class="laundry-table-body-tr">
                                    <td>10</td>
                                    <td>Servicing per Indoor Unit (1 ton to 5 ton)</td>
                                    <td>৳ 5120.00</td>    
                                </tr>
                                
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <!-- footer -->
        <?php include('./frontend-component/footer.php')?>
    <!-- footer end -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>