<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hotelreservationform;
use App\Repositories\hotelreservationformRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $hotelreservationform = Hotelreservationform::all();

        if (count($hotelreservationform) > 0) {
            return response()->json($hotelreservationform, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no registrations in the database'], 404);
        }
    }
}
?>