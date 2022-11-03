<?php

namespace App\Http\Controllers;
use App\Models\Analisis;
use App\Models\Proyecto;
use App\Models\Diseño;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Connection;
use App\Http\Controllers\DiseñoController;
use Dompdf\Dompdf;
use Dompdf\Options;

use Tests\TestCase;

use Barryvdh\DomPDF\Facade\Pdf;
use Anam\PhantomMagick\Converter;
use Fpdf\Fpdf;
use App;
use Response;

use DB;
class AnalisisController extends Controller
{
	public function index ($id)
	{
		$proyecto = Proyecto::findorFail($id);

		$analisis = Analisis::where('proyecto_id', '=', $proyecto['id'])->first();

		if ($analisis == null)
		{
			return view('content.etapas.analisis',['proyecto' => Proyecto::findorFail($id)],['analisis' => $analisis] );
		}
		else
		{
			return('ya tenes un analisis');
		}
	}

	public function store($proyecto)
	{


		 // Analisis::create([

		// $proyecto->analises()->create([
		// 	'analisis_p1'=>request('analisis_p1'),
		// 	'analisis_p2'=>request('analisis_p2'),
		// 	'analisis_p3'=>request('analisis_p3'),
		// 	'analisis_p4'=>request('analisis_p4'),
		// 	'analisis_p5'=>request('analisis_p5'),
		// 	'analisis_p6'=>request('analisis_p6'),
		// ]);

		$proyecto= Proyecto::find($proyecto);
		
		$proyecto->analisis()->create([
			'analisis_p1'=>request('analisis_p1'),
			'analisis_p2'=>request('analisis_p2'),
			'analisis_p3'=>request('analisis_p3'),
			'analisis_p4'=>request('analisis_p4'),
			'analisis_p5'=>request('analisis_p5'),
			'analisis_p6'=>request('analisis_p6'),
		]);

		// app('App\Http\Controllers\DiseñoController')
		$diseño = new Diseño(['subetapa'=>1]);

		$proyecto->diseño()->save($diseño);

		$proyecto->update(['etapa'=> DB::raw('etapa+1') ]);

		 return redirect()-> route('principal', $proyecto
	);

	}

	public function edit( $id)
	{
		$proyecto = Proyecto::findorFail($id);
		$analisis= $proyecto->analisis()->first();
	// 	// $analisis = Analisis::where('proyecto_id', '=', $id)->first();
		
		return view('content.etapas.analisis_edit',['proyecto'=>$proyecto,'analisis'=>$analisis]);
		// return dd($proyecto) ;
	}

	public function update(Proyecto $proyecto, Request $request){
		$analisis=$proyecto->analisis;
		$analisis->update([
			'analisis_p1'=>request('analisis_p1'),
			'analisis_p2'=>request('analisis_p2'),
			'analisis_p3'=>request('analisis_p3'),
			'analisis_p4'=>request('analisis_p4'),
			'analisis_p5'=>request('analisis_p5'),
			'analisis_p6'=>request('analisis_p6'),
		]);
		return redirect()-> route('principal', $proyecto
	);
	}

	public function generar_pdf($id)
	{

		// $options = new Options();
		// $options->set('defaultFont', 'Railway');
		// $dompdf = new Dompdf($options);

		// $proyecto = Proyecto::findorFail($id);
		// $analisis= $proyecto->analisis()->first();


		// $dompdf->loadHtml(view('content.etapas.a41', ['proyecto' => $proyecto, 'analisis'=>$analisis]));

		// // $dompdf->set_base_path('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
		// // (Optional) Setup the paper size and orientation
		// // $dompdf->setPaper('A4', 'landscape');
		


		// // Render the HTML as PDF
		// $dompdf->render();

		// // Output the generated PDF to Browser
		// $dompdf->stream();

  //   return $dompdf->download('Etapa_Analisis.pdf');

        

        // $pdf = PDF::loadView('pdf/personalpdf', compact('user','result'))->setOptions(['defaultFont' => 'sans-serif']);



        // $pdf = PDF::loadView('content.etapas.a41');
        // $pdf->render();
        // $pdf->Output();
		// $html= view('content.etapas.a41');
		// $pdf = new FPDF();
		// $pdf->AddPage();
		// $pdf->$html;
		// $pdf->Output();

    //     $pdf = App::make('snappy.pdf.wrapper');
				// $pdf->loadHTML('<h1>Test</h1>');
				// return $pdf->inline();

$pdf = PDF::loadView('content.etapas.a41');
return $pdf->download('etapa.pdf');

	}
}

