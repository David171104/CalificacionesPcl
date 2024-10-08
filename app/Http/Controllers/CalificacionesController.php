<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification;

class CalificacionesController extends Controller
{

    public function handleRedirect(Request $request)
    {
        try {
            $connection_name = $request->get('connection_name');
            $request_code = $request->get('request_code');
             
            
            // DB::beginTransaction();
            // dd(env('DB_HOST_PROJECT_A'));
           // $result = DB::connection($connection_name)->table('patients')->get();
           // dd($result);
            // DB::connection($connection_name)->table('patients')->insert(['name' => 'juanito',]);


            // DB::commit();
            

            Notification::make()
                ->title('Datos guardados ')
                ->body('Datos correctamente.')
                ->success()
                ->send();
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['message' => 'Hubo un error interno', 'data' => []], 500);
        }
    }
}
