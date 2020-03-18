<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use App\Option;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // $apartments = Apartment::where('visibilita',$request->query('visibilita',1))->get();
      // $apartments = Apartment::paginate(12);
      $lat = 45.46362;
      $lon = 9.18812;

      $apartments =  DB::table("apartments")
          ->select("*"
              ,DB::raw("6371 * acos(cos(radians(" . $lat . "))
              * cos(radians(apartments.lat))
              * cos(radians(apartments.lon) - radians(" . $lon . "))
              + sin(radians(" .$lat. "))
              * sin(radians(apartments.lat))) AS distance"))
              ->groupBy("apartments.id")
              ->get();


        dd($apartments);

      return view('apartments.index',compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $apartment = Apartment::find($id);
      // $apartment = Apartment::where('titolo')->get();
      return view('apartments.show', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //
    }
}


// --------------------------------------------
// --------------------------------------------
// --------------------------------------------
// --------------------------------------------
// $gr_circle_radius = 6371;
// $max_distance = 500;
//
// $distance_select = sprintf(
//                               "
//                               ( %d * acos( cos( radians(%s) ) " .
//                                       " * cos( radians( lat ) ) " .
//                                       " * cos( radians( long ) - radians(%s) ) " .
//                                       " + sin( radians(%s) ) * sin( radians( lat ) ) " .
//                                   " ) " .
//                               ")
//                                ",
//                               $gr_circle_radius,
//                               $lat,
//                               $long,
//                               $lat
//                              );
//
//   $properties =  Property::select('*')
//   ->having(DB::raw($distance_select), '<=', $max_distance)
//   ->groupBy('properties.id')->paginate(1);




//   public function index(){
//
//
//     return view('apartment.index');
//   }
// }




      //
      // DB::select('SELECT * FROM Apartments
      //                    (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(latitude)) *
      //                      cos(radians(longitude) - radians(' . $lng . ')) +
      //                      sin(radians(' . $lat . ')) * sin(radians(latitude))))
      //                      AS distance
      //
      //                  WHERE distance < ' . $max_distance . '
      //                  ORDER BY distance
      //                  OFFSET 0
      //                  LIMIT 20;
      //              ');

//
// $apartments =   DB::select('SELECT * FROM Apartments
//                       (SELECT id, name, address, phone, latitude, longitude, (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(latitude)) *
//                       cos(radians(longitude) - radians(' . $lng . ')) +
//                       sin(radians(' . $lat . ')) * sin(radians(latitude))))
//                       AS distance
//                       FROM users) AS distances
//                   WHERE distance < ' . $max_distance . '
//                   ORDER BY distance
//                   OFFSET 0
//                   LIMIT 20;
//               ');
