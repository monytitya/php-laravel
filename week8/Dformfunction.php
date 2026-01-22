<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label" for="txtPrice">Price: </label>
                    <input type="text" name="txtPrice" id="txtPrice" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label" for="txtDiscount"> Discount %: </label>
                    <input type="number" name="txtDiscount" id="txtDiscount" class="form-control" value="15">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label" for="txtLoop">Price after Discount: </label>
                    <input type="number" class="form-control" value="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label" for="">. </label>
                    <input type="submit" value="CALCULATE" name="btnCal" class="btn btn-success">
                </div>
            </div>
        </div>



    </form>
</body>

</html>