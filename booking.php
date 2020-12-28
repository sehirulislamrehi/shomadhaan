<?php
include "include/header.php";
include "include/topbar.php";
include "include/navbar.php";
?>

<!-- booking filter banner start -->
<section class="car-booking-banner">
    <div class="container">
        <div class="row">

            <!-- item start -->
            <div class="col-md-4">
                <div class="item rent-a-car">
                    <img src="images/car.png" class="icon_image" alt="">
                    <img src="images/car-book-active.png" class="img-fluid b-img" alt="">
                    <img src="images/car-book-inactive.png" class="img-fluid b-img h-img" alt="">
                    <p>Rent A Car</p>
                </div>
            </div>
            <!-- item end -->

            <!-- item start -->
            <div class="col-md-4">
                <div class="item book-hotel">
                    <img src="images/hotel.png" class="icon_image" alt="">
                    <img src="images/car-book-inactive.png" class="img-fluid b-img" alt="">
                    <img src="images/car-book-active.png" class="img-fluid b-img h-img" alt="">
                    <p>Book Hotel</p>
                </div>
            </div>
            <!-- item end -->

            <!-- item start -->
            <div class="col-md-4">
                <div class="item custom-book">
                    <img src="images/custom.png" class="icon_image" alt="">
                    <img src="images/car-book-inactive.png" class="img-fluid b-img" alt="">
                    <img src="images/car-book-active.png" class="img-fluid b-img h-img" alt="">
                    <p>Custom Order</p>
                </div>
            </div>
            <!-- item end -->

        </div>
    </div>
</section>
<!-- booking filter banner end -->

<!-- car book section start -->
<div class="for-car-book">

    <!-- banner start -->
    <section class="book-banner" style="background-image: url(images/car-book.png);"></section>
    <!-- banner end -->

    <!-- select vechicle type start -->
    <section class="select-type">
        <div class="container">

            <div class="row m-b-30">
                <div class="col-md-12">
                    <h1 class="text-center">Select Vechicle Type</h1>
                </div>
            </div>

            <form action="">
                <div class="row">
                    <div class="vehicle-carousel owl-carousel owl-theme">

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="car-book-1">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image " data-id="1">
                                    <img src="images/car_1.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="car-book-2">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image" data-id="1">
                                    <img src="images/car_2.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="car-book-3">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image" data-id="1">
                                    <img src="images/car_3.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="car-book-4">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image" data-id="1">
                                    <img src="images/car_4.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                    </div>
                </div>

                <!-- form booking start -->
                <div class="form-booking car-book-1">


                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                            <div class="total_price">
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <h3>Total Price</h3>
                                    </div>
                                    <div class="col-md-6 right">
                                        <h3>14000</h3>
                                        <p>Tk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">

                        <!-- left item start -->
                        <div class="col-md-5 item-left">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="left">
                                                <img src="images/clock.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row time-choose-row">
                                                <div class="col-md-8">
                                                    <p>Pick Up Time</p>
                                                    <input type="date" class="form-date">
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Date</p>
                                                    <input type="time" class="form-time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Start Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- left item end -->

                        <!-- middle item start -->
                        <div class="col-md-4 item-left">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Return Time</p>
                                    <input type="date" class="form-date">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <p>Destination Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- middle item end -->

                        <!-- right item start -->
                        <div class="col-md-3 item-left item-right">
                            <div class="row">
                                <div class="col-md-6" style="position: relative;">
                                    <ul class="text-center">
                                        <li><img src="images/user.png" class="img-fluid" alt=""></li>
                                        <li>No of Person</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 number-increment">
                                    <div class="div">
                                        <button type="button" class="minus">-</button>
                                        <input type="text" style="width: 45px;" value="1" class="value" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right item end -->

                    </div>

                    <div class="row confirm-booking">
                        <div class="col-md-4 offset-md-4 ">
                            <button type="submit">
                                Confirm Order
                            </button>
                        </div>
                    </div>

                </div>
                <!-- form booking end -->

                <!-- form booking start -->
                <div class="form-booking car-book-2">
                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                            <div class="total_price">
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <h3>Total Price</h3>
                                    </div>
                                    <div class="col-md-6 right">
                                        <h3>15000</h3>
                                        <p>Tk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">

                        <!-- left item start -->
                        <div class="col-md-5 item-left">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="left">
                                                <img src="images/clock.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row time-choose-row">
                                                <div class="col-md-8">
                                                    <p>Pick Up Time</p>
                                                    <input type="date" class="form-date">
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Date</p>
                                                    <input type="time" class="form-time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Start Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- left item end -->

                        <!-- middle item start -->
                        <div class="col-md-4 item-left">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Return Time</p>
                                    <input type="date" class="form-date">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <p>Destination Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- middle item end -->

                        <!-- right item start -->
                        <div class="col-md-3 item-left item-right">
                            <div class="row">
                                <div class="col-md-6" style="position: relative;">
                                    <ul class="text-center">
                                        <li><img src="images/user.png" class="img-fluid" alt=""></li>
                                        <li>No of Person</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 number-increment">
                                    <div class="div">
                                        <button type="button" class="minus">-</button>
                                        <input type="text" style="width: 45px;" value="1" class="value" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right item end -->

                    </div>

                    <div class="row confirm-booking">
                        <div class="col-md-4 offset-md-4 ">
                            <button type="submit">
                                Confirm Order
                            </button>
                        </div>
                    </div>
                </div>
                <!-- form booking end -->

                <!-- form booking start -->
                <div class="form-booking car-book-3">
                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                            <div class="total_price">
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <h3>Total Price</h3>
                                    </div>
                                    <div class="col-md-6 right">
                                        <h3>20000</h3>
                                        <p>Tk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">

                        <!-- left item start -->
                        <div class="col-md-5 item-left">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="left">
                                                <img src="images/clock.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row time-choose-row">
                                                <div class="col-md-8">
                                                    <p>Pick Up Time</p>
                                                    <input type="date" class="form-date">
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Date</p>
                                                    <input type="time" class="form-time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Start Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- left item end -->

                        <!-- middle item start -->
                        <div class="col-md-4 item-left">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Return Time</p>
                                    <input type="date" class="form-date">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <p>Destination Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- middle item end -->

                        <!-- right item start -->
                        <div class="col-md-3 item-left item-right">
                            <div class="row">
                                <div class="col-md-6" style="position: relative;">
                                    <ul class="text-center">
                                        <li><img src="images/user.png" class="img-fluid" alt=""></li>
                                        <li>No of Person</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 number-increment">
                                    <div class="div">
                                        <button type="button" class="minus">-</button>
                                        <input type="text" style="width: 45px;" value="1" class="value" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right item end -->

                    </div>

                    <div class="row confirm-booking">
                        <div class="col-md-4 offset-md-4 ">
                            <button type="submit">
                                Confirm Order
                            </button>
                        </div>
                    </div>
                </div>
                <!-- form booking end -->

                <!-- form booking start -->
                <div class="form-booking car-book-4">
                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                            <div class="total_price">
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <h3>Total Price</h3>
                                    </div>
                                    <div class="col-md-6 right">
                                        <h3>11000</h3>
                                        <p>Tk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">

                        <!-- left item start -->
                        <div class="col-md-5 item-left">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="left">
                                                <img src="images/clock.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row time-choose-row">
                                                <div class="col-md-8">
                                                    <p>Pick Up Time</p>
                                                    <input type="date" class="form-date">
                                                </div>
                                                <div class="col-md-4">
                                                    <p>Date</p>
                                                    <input type="time" class="form-time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Start Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- left item end -->

                        <!-- middle item start -->
                        <div class="col-md-4 item-left">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>Return Time</p>
                                    <input type="date" class="form-date">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="left">
                                                <img src="images/map.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <p>Destination Location</p>
                                            <select class="chosen">
                                                <option>PHP</option>
                                                <option>PHP Array</option>
                                                <option>PHP Object</option>
                                                <option>PHP Wiki</option>
                                                <option>PHP Variable</option>
                                                <option>Java</option>
                                                <option>C</option>
                                                <option>C++</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- middle item end -->

                        <!-- right item start -->
                        <div class="col-md-3 item-left item-right">
                            <div class="row">
                                <div class="col-md-6" style="position: relative;">
                                    <ul class="text-center">
                                        <li><img src="images/user.png" class="img-fluid" alt=""></li>
                                        <li>No of Person</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 number-increment">
                                    <div class="div">
                                        <button type="button" class="minus">-</button>
                                        <input type="text" style="width: 45px;" value="1" class="value" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right item end -->

                    </div>

                    <div class="row confirm-booking">
                        <div class="col-md-4 offset-md-4 ">
                            <button type="submit">
                                Confirm Order
                            </button>
                        </div>
                    </div>
                </div>
                <!-- form booking end -->

            </form>


        </div>
    </section>
    <!-- select vechicle type end -->

</div>
<!-- car book section end -->

<!-- hotel book section start -->
<div class="for-hotel-book">
    <!-- banner start -->
    <section class="book-banner" style="background-image: url(images/hotel-booking.png);"></section>
    <!-- banner end -->

    <!-- select hotel type start -->
    <section class="select-type">
        <div class="container">

            <div class="row m-b-30">
                <div class="col-md-12">
                    <h1 class="text-center">Select Hotel</h1>
                </div>
            </div>

            <form action="">
                <div class="row">
                    <div class="hotel-carousel owl-carousel owl-theme">

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="hotel-book-1">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image " data-id="1">
                                    <a data-fancybox="gallery" href="images/hotel-1.png">
                                        View
                                    </a>
                                    <img src="images/hotel-1.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="hotel-book-2">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image" data-id="1">
                                    <a data-fancybox="gallery" href="images/hotel-2.png">
                                        View
                                    </a>
                                    <img src="images/hotel-2.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="hotel-book-3">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image" data-id="1">
                                    <a data-fancybox="gallery" href="images/hotel-3.png">
                                        View
                                    </a>
                                    <img src="images/hotel-3.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                        <!-- item start -->
                        <div class="item ">
                            <label class="check-car" id="hotel-book-4">
                                <input type="radio" class="d-none" name="radio">
                                <span class="checkmark d-none"></span>
                                <div class="item-image" data-id="1">
                                    <a data-fancybox="gallery" href="images/hotel-4.png">
                                        View
                                    </a>
                                    <img src="images/hotel-4.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-center m-t-15">Minivans</p>
                            </label>

                        </div>
                        <!-- item end -->

                    </div>
                </div>

                <!-- form booking start -->
                <div class="form-booking hotel-book-1">


                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                            <div class="total_price">
                                <div class="row">
                                    <div class="col-md-6 left">
                                        <h3>Total Price</h3>
                                    </div>
                                    <div class="col-md-6 right">
                                        <h3>14000</h3>
                                        <p>Tk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-item">

                        <!-- right item start -->
                        <div class="col-md-4 item-left item-right">
                            <div class="row">
                                <div class="col-md-4" style="position: relative;">
                                    <ul class="text-center">
                                        <li><img src="images/user.png" class="img-fluid" alt=""></li>
                                        <li>People</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 number-increment">
                                    <div class="div">
                                        <button type="button" class="minus">-</button>
                                        <input type="text" style="width: 45px;" value="1" class="value" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                    <p class="text-center m-t-15">Adult</p>
                                </div>
                                <div class="col-md-4 number-increment">
                                    <div class="div">
                                        <button type="button" class="minus">-</button>
                                        <input type="text" style="width: 45px;" value="1" class="value" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                    <p class="text-center m-t-15">Child (0-12 yr Old)</p>
                                </div>
                            </div>
                        </div>
                        <!-- right item end -->

                        <!-- left item start -->
                        <div class="col-md-2 item-left">
                            <div class="row">
                                <div class="col-md-5" style="position: relative;">
                                    <ul class="text-center">
                                        <li><img src="images/user.png" class="img-fluid" alt=""></li>
                                        <li>Room Type</li>
                                    </ul>
                                </div>
                                <div class="col-md-7 m-t-15">
                                    <select class="chosen">
                                        <option>PHP</option>
                                        <option>PHP Array</option>
                                        <option>PHP Object</option>
                                        <option>PHP Wiki</option>
                                        <option>PHP Variable</option>
                                        <option>Java</option>
                                        <option>C</option>
                                        <option>C++</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- left item end -->

                        <!-- middle item start -->
                        <div class="col-md-6 item-left">
                            <div class="row m-t-15">
                                <div class="col-md-2">
                                    <div class="left">
                                        <img src="images/clock.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row time-choose-row">
                                        <div class="col-md-8">
                                            <p>Check In</p>
                                            <input type="date" class="form-date">
                                        </div>
                                        <div class="col-md-4">
                                            <p>Date</p>
                                            <input type="time" class="form-time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row time-choose-row">
                                        <div class="col-md-8">
                                            <p>Check Out</p>
                                            <input type="date" class="form-date">
                                        </div>
                                        <div class="col-md-4">
                                            <p>Date</p>
                                            <input type="time" class="form-time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- middle item end -->

                    </div>

                    <div class="row form-item-two m-t-15">

                        <!-- left start -->
                        <div class="col-md-3 item-left">
                            <div class="row">
                                <div class="col-md-5" style="position: relative;">
                                    <ul class="text-center">
                                        <li>Preference</li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <select class="chosen">
                                        <option>PHP</option>
                                        <option>PHP Array</option>
                                        <option>PHP Object</option>
                                        <option>PHP Wiki</option>
                                        <option>PHP Variable</option>
                                        <option>Java</option>
                                        <option>C</option>
                                        <option>C++</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- left end -->

                        <!-- middle part start -->
                        <div class="col-md-3 ">
                            <div class="item-left round_trip">
                                <label class="custom_container">
                                    Round Trip
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!-- middle part end -->

                        <div class="col-md-5 show_round_trip" id="">
                            <div class="row item-left">
                                <div class="col-md-2">
                                    <div class="left">
                                        <img src="images/clock.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row time-choose-row">
                                        <div class="col-md-8">
                                            <p>Check In</p>
                                            <input type="date" class="form-date">
                                        </div>
                                        <div class="col-md-4">
                                            <p>Date</p>
                                            <input type="time" class="form-time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row form-item-three m-t-15">
                        <div class="col-md-3 ">
                            <div class="item-left show-vehicle">
                                <label class="custom_container">
                                    Take Vehicle Facility
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- take vehicle facility start -->
                    <div class="take-vehicle-facility">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <h1 class="text-center">Select Vechicle Type</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="vehicle-carousel owl-carousel owl-theme">

                                <!-- item start -->
                                <div class="item ">
                                    <label class="check-car-again">
                                        <input type="radio" class="d-none" name="radio">
                                        <span class="checkmark d-none"></span>
                                        <div class="item-image " data-id="1">
                                            <img src="images/car_1.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="text-center m-t-15">Minivans</p>
                                    </label>

                                </div>
                                <!-- item end -->

                                <!-- item start -->
                                <div class="item ">
                                    <label class="check-car-again">
                                        <input type="radio" class="d-none" name="radio">
                                        <span class="checkmark d-none"></span>
                                        <div class="item-image" data-id="1">
                                            <img src="images/car_2.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="text-center m-t-15">Minivans</p>
                                    </label>

                                </div>
                                <!-- item end -->

                                <!-- item start -->
                                <div class="item ">
                                    <label class="check-car-again">
                                        <input type="radio" class="d-none" name="radio">
                                        <span class="checkmark d-none"></span>
                                        <div class="item-image" data-id="1">
                                            <img src="images/car_3.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="text-center m-t-15">Minivans</p>
                                    </label>

                                </div>
                                <!-- item end -->

                                <!-- item start -->
                                <div class="item ">
                                    <label class="check-car-again">
                                        <input type="radio" class="d-none" name="radio">
                                        <span class="checkmark d-none"></span>
                                        <div class="item-image" data-id="1">
                                            <img src="images/car_4.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="text-center m-t-15">Minivans</p>
                                    </label>

                                </div>
                                <!-- item end -->

                            </div>
                        </div>
                    </div>
                    <!-- take vehicle facility start -->

                    <!-- confirm order start -->
                    <div class="row confirm-booking">
                        <div class="col-md-4 offset-md-4 ">
                            <button type="submit">
                                Confirm Order
                            </button>
                        </div>
                    </div>
                    <!-- confirm order end -->

                </div>
                <!-- form booking end -->

                <!-- form booking start -->
                <div class="form-booking car-book-2">

                </div>
                <!-- form booking end -->

                <!-- form booking start -->
                <div class="form-booking car-book-3">

                </div>
                <!-- form booking end -->

                <!-- form booking start -->
                <div class="form-booking car-book-4">

                </div>
                <!-- form booking end -->

            </form>


        </div>
    </section>
    <!-- select hotel type end -->
</div>
<!-- hotel book section end -->

<!-- custom book section start -->
<div class="for-custom-book">
    <h1 class="text-center m-t-15 m-b-15">Custom Booking. Comming Soon...</h1>
</div>
<!-- custom book section end -->


<?php
include "include/footer.php";
?>