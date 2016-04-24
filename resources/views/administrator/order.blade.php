@extends('../template.header')

@section('app')


<div class="mytable-div">

</div>

<div class="data-container">
    <div id="1" class="col-lg-12" onclick=order_list($(this).attr('id'))>
        <div class="panel panel-primary">
            <div class="panel-heading">

                <div class="row">

                    <div class="col-md-4">
                        <p class="order-num">Order #: Dummy data</p>
                    </div>

                    <div class="col-md-4">
                        <p>Name: Dummy data</p>
                        <p>Table #: Dummy data</p>
                        <p>Senior Citizen:</p>
                    </div>
                    <div class="col-md-4">
                        <p>Order Type:</p>
                        <p>Date/Time: Dummy data</p>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div id="table-1" class="hid-table-data">
                    <table class="table table-hover table-data">
                        <thead>
                        <th>ITEMS</th>
                        <th>QTY</th>
                        <th>VARIANT</th>
                        <th>PRICE</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                        </tr>
                        </tbody>
                    </table>

                    <hr>

                    <div class="row table-details">
                        <div class="col-md-4">
                            <p>Payment:</p>
                            <p>Change:</p>
                            <p>Discount:</p>
                        </div>
                        <div class="col-md-4">
                            <p>Payment Type:</p>
                            <p>Payment Status:</p>
                        </div>
                        <div class="col-md-4">
                            <p>VAT:</p>
                            <p>Sub-total:</p>
                            <p>Total:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection