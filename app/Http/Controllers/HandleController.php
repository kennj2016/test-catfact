<?php

namespace App\Http\Controllers;


use App\PdfModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PDF;
use GuzzleHttp\Client as HttpClient;

use Illuminate\Http\Request;



class HandleController extends Controller
{
    public function generatePdf (Request $request,HttpClient $http){

        $validator = Validator::make($request->all(), [
            'number' => 'required|numeric|min:2|max:300',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }else{



            $endpoint = "https://catfact.ninja/facts?limit=";
            $number = $request->number;
            $response = $http->request('GET', $endpoint, ['query' => [
                'limit' => $number
            ]]);

            $statusCode = $response->getStatusCode();
            $content = $response->getBody();

            if($statusCode == 200){
                $dataResponse =  json_decode($content, true);
                $listFacts = $dataResponse['data'];

                $pdf = PDF::loadView('pdf', compact('listFacts'));
                $nameFile = Str::slug($number.'-facts-'.Str::random(6)).'.pdf';

                PdfModel::create([
                    "file_name"=>$nameFile,
                    "number"=>$number
                ]);

                $pdf->save(public_path('pdf/'.$nameFile))->stream('facts.pdf');

                return redirect()->route('list-file');
            }

        }





    }
}
