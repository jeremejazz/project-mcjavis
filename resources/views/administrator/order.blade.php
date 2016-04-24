@extends('../template.header')

@section('app')


<div class="mytable-div">

</div>

<div class="data-container">
    <?php $counter = 1; ?>
    @foreach( $response as $test )
    <div id="{{$counter}}" class="col-lg-12" onclick=order_list($(this).attr('id'))>
        <div class="panel panel-primary">
            <div class="panel-heading">


                <div class="row">


                    <div class="col-md-4">
                        <p class="order-num">Order #: {{ "0000". $test['sales_info']->sale_information_id }}</p>
                    </div>

                    <div class="col-md-4">
                        <p>Name: {{ $test['sales_info']->first_name . " " . $test['sales_info']->last_name }} </p>
                        <p>Table #: {{$test['sales_info']->table_no}}</p>
                        <p>Senior Citizen: @if( $test['sales_info']->is_senior == 1 ) {{"Yes"}} @else {{"No"}}
                            @endif</p>
                    </div>
                    <div class="col-md-4">
                        <p>Order Type: @if( $test['sales_info']->is_take_out == 1 ) {{"Yes"}} @else {{"No"}} @endif</p>
                        <p>Date/Time: {{$test['sales_info']->transaction_timestamp }}</p>
                    </div>

                </div>


            </div>
            <div class="panel-body">
                <div id="table-{{$counter}}" class="hid-table-data">
                    <table class="table table-hover table-data">
                        <thead>
                        <th>ITEMS</th>
                        <th>QTY</th>
                        <th>VARIANT</th>
                        <th>PRICE</th>
                        </thead>
                        <tbody>
                        <!--<tr>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                        </tr>-->
                        <!-- LOOP THROUGH the order menu-->

                        <?php $total_price = 0; ?>

                        @foreach( $test['menu_list_info'] as $menu_info )

                        <?php

                        $total_price += $menu_info->price;

                        ?>
                        <tr>
                            <td> {{ $menu_info->description }}</td>
                            <td>{{ $menu_info->quantity }}</td>
                            <td>{{ $menu_info->variant }}</td>
                            <td>{{ $menu_info->price }}</td>
                        </tr>

                        @endforeach()

                        </tbody>
                    </table>

                    <hr>

                    <div class="row table-details">
                        <div class="col-md-4">
                            <p>Payment:</p>
                            <p>Change: {{ $test['sales_info']->change }}</p>
                            <p>Discount: @if( $test['sales_info']->is_senior == 1 ) {{"25%"}} @else {{"No"}} @endif </p>
                        </div>
                        <div class="col-md-4">
                            <p>Payment Type: {{ "PayMaya"}}</p>
                            <p>Payment Status: {{ $test['sales_info']->payment_status }}</p>
                        </div>
                        <div class="col-md-4">
                            <p>VAT:</p>
                            <p>Sub-total:</p>
                            <p>Total: {{ $total_price }}</p>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <?php $counter++; ?>
    @endforeach()
</div>

@endsection