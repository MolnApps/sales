<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\CustomField;

class ClientController extends Controller
{
    public function index()
    {
    	$clients = json_encode(Client::all()->map(function($client){
			return $client->toVue();
		}));

		$countries = json_encode([
			['code' => 'it', 'name' =>'Italy'], 
			['code' => 'ru', 'name' => 'Russia'], 
			['code' => 'sw', 'name' => 'Sweeden']
		]);

		$allCustomFields = json_encode(CustomField::all()->toArray());

		return view('clients.list', [
			'clients' => $clients,
			'countries' => $countries,
			'allCustomFields' => $allCustomFields,
		]);
    }
}
