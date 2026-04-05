@extends('layouts.front')
@section('content')
{{-- <!DOCTYPE html>
<html lang="en"> --}}
{{--   --}}
<body class="sub_page">
    {{-- <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                    <span>JOOD</span>
                </a>
                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                        <span class="s-1"></span>
                        <span class="s-2"></span>
                        <span class="s-3"></span>
                    </button>
                </div>
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <a href="index.html">Home</a>
                        <a href="about.html">About</a>
                        <a href="product.html">Products</a>
                        <a href="blog.html">Blog</a>
                        <a href="contact.html">Contact Us</a>
                        <a href="cart.html" class="active">Cart</a>
                    </div>
                </div>
            </nav>
        </div>
    </header> --}}

    <main class="cart-page layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>Your Shopping Cart</h2>
            </div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sample Product</td>
                        <td>$10.00</td>
                        <td><input type="number" value="1" min="1" class="form-control"></td>
                        <td>$10.00</td>
                        <td><button class="btn btn-danger">Remove</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="cart-summary text-right">
                <p><strong>Subtotal:</strong> $10.00</p>
                <p><strong>Tax:</strong> $1.00</p>
                <p><strong>Total:</strong> $11.00</p>
                <button class="btn btn-primary">Proceed to Checkout</button>
            </div>
        </div>
    </main>

    <footer class="footer_section">
        <div class="container">
            <p>&copy; <span id="displayYear"></span> JOOD Perfumes. All Rights Reserved.</p>
        </div>
    </footer>
@endsection
@section('js')
<script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
</script>
@endsection
</body>

