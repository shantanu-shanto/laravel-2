<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Home page
    public function index() {
        return view('store.index');
    }

    // Shop page (Product Listings)
    public function shop() {
        return view('store.shop');
    }

    // Product Detail page
    public function productDetail($id) {
        // Fetch product details using $id from the database
        return view('store.product_detail', compact('id'));
    }

    // About Us page
    public function about() {
        return view('store.about');
    }

    // Contact Us page
    public function contact() {
        return view('store.contact');
    }

    // Handle Contact Form Submission
    public function submitContact(Request $request) {
        // Handle form submission and send an email or store the inquiry
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // Cart page
    public function cart() {
        return view('store.cart');
    }

    // Checkout Process
    public function checkout(Request $request) {
        // Handle checkout logic here
        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
    public function men()
    {
        return view('shop.men');
    }

    public function women()
    {
        return view('shop.women');
    }

    public function accessories()
    {
        return view('shop.kids');
    }
}