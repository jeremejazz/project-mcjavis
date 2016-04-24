@extends('pages.index')

@section('title')
    {{ 'Cart' }}
@stop

@section('body-content')


<!--  Menu Section -->
<section id="menuSection">
    <div class="container">
        <div class="row" id="cart-detail">
            <div class="col-md-6">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4>Order Details</h4></li>
                    <li class="collection-item">
                        Name:
                        <span class="cart-detail cart-detail-name">Juan Dela Cruz</span>
                    </li>
                    <li class="collection-item">
                        Senior Citizen:
                        <span class="cart-detail cart-detail-seniors">Yes</span>
                    </li>
                    <li class="collection-item">
                        Table Number:
                        <span class="cart-detail cart-detail-table-number">23045</span>
                    </li>
                    <li class="collection-item">
                        Order Type:
                        <span class="cart-detail cart-detail-order-type">Dine-In</span>
                    </li>
                    <li class="collection-item">
                        Total Amount:
                        <span class="cart-detail cart-detail-total">200.00</span>
                        <span class="cart-detail">Php</span>
                    </li>
                    <li class="collection-item">
                        Pay Via Pay Maya:
                        <a href="{{ url('payment') }}" class="btn btn-success waves-effect waves-light">Click Here</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6" id="foodTable">
                <h5>Order Food Summary</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Food</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="food-menu">Burger</td>
                        <td>

                                    <span><input placeholder="1" id="burger-menu" type="number" class="quantity-input" disabled>
                                    </span>

                        </td>
                        <td><span class="price">100.00</span>
                            Php
                        </td>
                    </tr>
                    <tr>
                        <td class="food-menu">Coffe w/  Tinapay</td>
                        <td>
                                    <span><input placeholder="1" id="burger-menu" type="number" class="quantity-input" disabled>
                                    </span>
                        </td>
                        <td><span class="price">100.00</span>
                            Php
                        </td>

                    </tr>
                    <tr >
                        <td class="food-menu">Frice w/ Burger </td>
                        <td>
                                    <span><input placeholder="1" id="burger-menu" type="number" class="quantity-input" disabled>
                                    </span>
                        </td>
                        <td><span class="price">100.00</span>
                            Php
                        </td>

                    </tr>
                    <tr >
                        <td></td>
                        <td></td>
                        <td>Total <span class="total-price">200.00</span>
                            php
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--  Menu Section -->



@stop

