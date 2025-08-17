<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ControllerPageController extends Controller
{
    /**
     * Display the controller view.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        return view('controller');
    }

    /**
     * Get all clients.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $clients = DB::select('CALL GetAllClients()');
            return response()->json($clients, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch clients'], 500);
        }
    }

    /**
     * Store a new client.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $client = DB::select('CALL StoreClient(?, ?, ?)', [
                $request->name,
                $request->email,
                $request->phone
            ]);
            return response()->json($client[0], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create client'], 500);
        }
    }

    /**
     * Show a specific client.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $client = DB::select('CALL GetClientById(?)', [$id]);
            if (empty($client)) {
                return response()->json(['error' => 'Client not found'], 404);
            }
            return response()->json($client[0], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Client not found'], 404);
        }
    }

    /**
     * Update an existing client.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:clients,email,' . $id,
            'phone' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $client = DB::select('CALL UpdateClient(?, ?, ?, ?)', [
                $id,
                $request->name,
                $request->email,
                $request->phone
            ]);
            if (empty($client)) {
                return response()->json(['error' => 'Client not found'], 404);
            }
            return response()->json($client[0], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update client'], 500);
        }
    }

    /**
     * Delete a client.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            DB::statement('CALL DeleteClient(?)', [$id]);
            return response()->json(['message' => 'Client deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete client'], 500);
        }
    }
}
