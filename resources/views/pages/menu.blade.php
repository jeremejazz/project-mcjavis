@extends('pages.index')

@section('title')
    {{ 'Menu Order' }}
@stop

@section('body-content')


        <!--  Menu Section -->
<section id="menuSection">
    <div class="container">
        <div class="row" id="name-senior-type">
            <div class="input-field col-md-6">
                <input placeholder="Costumer Name" id="name" type="text" class="validate">
                <label class="active" for="first_name2">Full Name</label>

            </div>
            <div class="col-md-6">
                <form action="#">
                    <p>
                        <input type="checkbox" id="senior"  />
                        <label for="test6">Senior Citizen</label>
                    </p>
                </form>
            </div>
        </div>
        <div class="row" id="dropdown-order-type">
            <div class="input-field col-md-6">
                <input placeholder="Enter Number" id="name" type="text" class="validate">
                <label class="active" for="first_name2"> Table Number</label>
            </div>
            <div class="input-field col-md-6">
                <label class="active" for="order-type"> Order Type</label>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown">Order Type
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dine-In</a></li>
                        <li><a href="#">Take-Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="foodTable">

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
                                    <span class="minus-btn">
                                        <a class="btn-floating btn-small waves-effect waves-light violet"><i class="material-icons glyphicon glyphicon-minus"></i>
                                        </a>
                                    </span>
                                    <span><input placeholder="0" id="burger-menu" type="number" class="quantity-input">
                                    </span>
                                    <span class="plus-btn">
                                        <a class="btn-floating btn-small waves-effect waves-light violet"><i class="material-icons">add</i>
                                        </a>
                                    </span>
                    </td>
                    <td><span class="price">100.00</span>
                        Php
                    </td>
                </tr>
                <tr>
                    <td class="food-menu">Coffe w/  Tinapay</td>
                    <td>
                                    <span class="minus-btn">
                                        <a class="btn-floating btn-small waves-effect waves-light violet"><i class="material-icons glyphicon glyphicon-minus"></i>
                                        </a>
                                    </span>
                                    <span><input placeholder="0" id="coffe-menu" type="number" class="quantity-input">
                                    </span>
                                    <span class="plus-btn">
                                        <a class="btn-floating btn-small waves-effect waves-light violet"><i class="material-icons">add</i>
                                        </a>
                                    </span>
                    </td>
                    <td><span class="price">100.00</span>
                        Php
                    </td>

                </tr>
                <tr >
                    <td class="food-menu">Frice w/ Burger </td>
                    <td>
                                    <span class="minus-btn">
                                        <a class="btn-floating btn-small waves-effect waves-light violet"><i class="material-icons glyphicon glyphicon-minus"></i>
                                        </a>
                                    </span>
                                    <span><input placeholder="0" id="frice-menu" type="number" class="quantity-input">
                                    </span>
                                    <span class="plus-btn">
                                        <a class="btn-floating btn-small waves-effect waves-light violet"><i class="material-icons">add</i>
                                        </a>
                                    </span>
                    </td>
                    <td><span class="price">100.00</span>
                        Php
                    </td>

                </tr>
                <tr >
                    <td></td>
                    <td></td>
                    <td>Total
                        <span class="total-price">200.00</span>
                        php
                        <a href="{{ url('cart') }}" class="btn btn-success waves-effect waves-light">Order Now</a>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>




@stop

