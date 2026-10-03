<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Display the booking creation form (this is the form you are already using)
    public function index()
    {
        return view('pages.index');  // Home page where the form is
    }

    // Handle the booking creation
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'pickup_datetime' => 'required|date|after_or_equal:today',
            'pickup_location' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'people' => 'required|integer|min:1|max:5',
            'payment_name' => 'required|in:5',  // Ensure payment_name is 5
        ]);

        // Create a new booking with the validated data
        $booking = new Booking();
        $booking->name = $validated['name'];
        $booking->email = $validated['email'];
        $booking->phone = $validated['phone'];
        $booking->pickup_datetime = $validated['pickup_datetime'];
        $booking->pickup_location = $validated['pickup_location'];
        $booking->destination = $validated['destination'];
        $booking->people = $validated['people'];
        $booking->payment_name = $request->input('payment_name');  // Access hidden payment_name value

        // Manually set the user_id here (e.g., from session, input, or another source)
        $booking->user_id = 1;  // For example, assuming the user_id is 1

        // Save the booking to the database
        $booking->save();

        // Redirect or return a response
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }
}
