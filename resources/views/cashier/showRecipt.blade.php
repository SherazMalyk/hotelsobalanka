<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restuarant App - Recipt - SaleID : {{$sale->id}}</title>
    <link type="text/css" rel="stylesheet" href="{{asset('css/recipt.css')}}"
    media="all" >
    
    <link type="text/css" rel="stylesheet" href="{{asset('css/no-print.css')}}"
    media="print" >
    
</head>
<body>
    <div id="wrapper">
        <div id="recipt-header">
            <h3 id= "restaurant-name">Soba Lanka Holiday Resort</h3>
            <p>Adress: Balawattala Road, Melsiripura Kurunegala</p>
            <p>| Wedding Hall | Restaurant | Rooms |</p>
            <p>Tell: 037 22 50308</p>
        </div>
        <div id="recipt-body"></div>
        <table class="tb-sale-detail">
        <thead>
            <tr>
                <th>#</th>
                <th>Menu</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>


        </thead>
        <tbody>
            @foreach($saleDetails as $saleDetail)
            <tr>
                <td width="30">{{$saleDetail->menu_id}}</td>
                <td width="180">{{$saleDetail->menu_name}}</td>
                <td width="50">{{$saleDetail->quantity}}</td>
                <td width="55">{{$saleDetail->menu_price}}</td>
                <td width="65">{{$saleDetail->menu_price*$saleDetail->quantity}}</td>
                


            </tr>



            @endforeach



        </tbody>
        </table>
        <table class="tb-sale-total">
            <tbody>
                <tr>
                    <td>Total Quantity</td>
                    <td>{{$saleDetails->count()}}</td>
                    <td>Total </td>
                    <td>${{number_format($sale->total_price, 2)}}</td>
                </tr>
                <tr>
                    <td colspan="2">Payment Type</td>
                    <td colspan="2"> {{$sale->payment_type}}</td>
                </tr>
                <tr>
                    <td colspan="2">Paid Amount</td>
                    <td colspan="2">${{number_format($sale->total_recieved, 2)}}</td>
                </tr>
                <tr>
                    <td colspan="2">Change</td>
                    <td colspan="2">${{number_format($sale->change, 2)}}</td>
                </tr>
                
            </tbody>


        </table>
        <div id="recipt-footer">
            <p> Thank You</p>
        </div>
        <div id="buttons">
            <a href="/cashier">
            <button class="btn btn-back">
                Back to cashier
            </button>
            </a>
            
            <button class="btn btn-print" type="button" onclick="window.print(); return false;">
                Print
            </button>


        </div>
        
    </div>
</body>
</html>