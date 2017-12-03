<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Tour;
use App\TourCategory;

class TourController extends Controller
{
    public function createTour(Request $request)
    {
    	if ($request->ajax()) {
    		$tours = new Tour;
    		$tours->tour_name = $request->tour_name;
    		$tours->tour_date = $request->tour_date;
    		$tours->tour_pax = $request->tour_pax;
    		$tours->tour_cat = $request->tour_cat;
    	}
    }

    public function getTour()
    {
    	$tours = Tour::all();
    	return view('tour.tour', compact('tours'));
    }

    public function createTourDetails(Request $request)
    {
    	if ($request->ajax()) {
    		$tourdetails = new TourDetail;
    		$tourdetails->details_name = $request->details_name;
    		$tourdetails->tour_places = $request->tour_places;
    		$tourdetails->tour_duration = $request->tour_duration;
    		$tourdetails->tour_map = $request->tour_map;
    	}
    }

    public function getTourDetails()
    {
    	$tourdetails = TourDetail::all();
    	return view('tour.tourdetail', compact('tourdetails'));
    }

    public function createTourCategory(Request $request)
    {
    	if($request->ajax()) {
    		$tourcategories = new TourCategory;
    		$tourcategories->cat_name = $request->cat_name; 
    	}
    }

    public function getTourCategory()
    {
    	$tourcategories = TourCategory::all();
    	return view('tour.tourcategory', compact('tourcategories'));
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
