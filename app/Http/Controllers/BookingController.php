<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Product;
use App\Category;
use App\Location;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with(['category', 'product', 'location'])
            ->where('user_id', auth()->user()->id)
            ->orderBy('product_id')
            ->get();

        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::pluck('product_type', 'id','price');
        $categories = Category::pluck('category','id', 'description');
        $locations = Location::pluck('store_name', 'id'); // Added 'id' as the key

        return view('bookings.create', compact('products', 'categories', 'locations'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        // Load necessary data for dropdowns
        $products = Product::pluck('product_type', 'id');
        $categories = Category::pluck('category', 'id');
        $locations = Location::pluck('store_name', 'id');
        
        return view('bookings.edit', compact('booking', 'products', 'categories', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'category_id' => 'required',
            'location_id' => 'required',
            'quantity' => 'required|integer',
        ]);
        
        Booking::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'category_id' => $request->category_id,
            'location_id' => $request->location_id,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    /**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Booking  $booking
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Booking $booking)
{
    $request->validate([
        'product_id' => 'required',
        'category_id' => 'required',
        'location_id' => 'required',
        'quantity' => 'required',
    ]);

    $booking->update([
        'product_id' => $request->product_id,
        'category_id' => $request->category_id,
        'location_id' => $request->location_id,
        'quantity' => $request->quantity,
    ]);

    return redirect()->route('bookings.index')
                     ->with('success', 'Booking updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

       return redirect()->route('bookings.index')
       ->with('success','Booking deleted successfully');
    }
}
