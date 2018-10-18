<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Menu;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use JD\Cloudder\Facades\Cloudder;
class MenuController extends Controller
{
	public function carga()
	{
		return view('pruebadecarga');
	}
	public function cargafin(Request $request)

	{
		$filename = $request->imagen;
		$id = $request->id;
		$publicId = null;
		$options = [];
		$tags = ['Menus', 'subida'];

		// Cloudder::upload($request->input('imagen'), null, array ("public_id" => "my_dog",), ['comidas', 'servicios']);
		// return Cloudder::getResult();
		// \Cloudinary::config(array( 
		// 	"cloud_name" => "menusfacil", 
		// 	"api_key" => "182214799745955", 
		// 	"api_secret" => "DTgYok4Pkb1eI7fmHKBmw4pOmyk" 
		// ));
		// $result = \Cloudinary\Uploader::upload($filename, 
		// 	array("folder" => "menusfacil/", "public_id" => "menusfacil".Auth::id(), "overwrite" => TRUE, "width" => 400, "height" => 300, 'tags' => $tags));

		// $result = \Cloudinary\Uploader::add_tag($tags, $result['public_id'], $options = array());
		

		return($id);

		// \Cloudinary::upload($filename, $publicId, $options, $tags);
		
	}

    //
	public function index(){
		$menus = Menu::all()->where('activo', 1)->where('user_id', Auth::id());
    	return [
    		'menus' => $menus,
    	 	'total'=> count($menus),
    	];
    }

    public function create(Request $request){
		// subir Imagen a Cloudinary
		if(Auth::id()){
			if(!$request->imagen){
				$menu = menu::create([
					'user_id' => Auth::id(),
					'nombre' => $request->input('nombre'),
					'descripcion' => $request->input('descripcion'),
					'precio' => $request->input('precio'),
					'adicional' => $request->input('adicional'),
					'estado'=>$request->input('estado'),
					// 'imagen' => $url,
				]);
				return $menu;
			}else{

				$filename = $request->imagen;
				$publicId = null;
				$options = [];
				$tags = ['Menus', 'subida', 'clientes', 'MenúsFácil'];
				// return $request->all();
				\Cloudinary::config(array( 
					"cloud_name" => "menusfacil", 
					"api_key" => "182214799745955", 
					"api_secret" => "DTgYok4Pkb1eI7fmHKBmw4pOmyk" 
				));
				$result = \Cloudinary\Uploader::upload($filename, 
					array("folder" => "menusfacil/", "overwrite" => TRUE, "width" => 800, "height" => 248, 'tags' => $tags));
	
			if(isset($result['url'])){
				$url = $result['url'];
				$user = $request->user();
					$menu = menu::create([
						'user_id' => Auth::id(),
						'nombre' => $request->input('nombre'),
						'descripcion' => $request->input('descripcion'),
						'precio' => $request->input('precio'),
						'adicional' => $request->input('adicional'),
						'estado'=>$request->input('estado'),
						'imagen' => $url,
					]);
					return $menu;
				}
			}
			
		}else{
			return 'No tienes acceso';
		}
	}
	

    public function update(Request $request){
    	// if ($request->input('estado') == true) {
    	// 	$estado = true;
    	// }else{
    	// 	$estado = false;
		// }
		// $filename = $request->imagen;
		// $publicId = null;
		// $options = [];
		// $tags = ['Menus', 'subida', 'clientes', 'MenúsFácil', 'actualización'];
		// return $request;
		// 	\Cloudinary::config(array( 
		// 		"cloud_name" => "menusfacil", 
		// 		"api_key" => "182214799745955", 
		// 		"api_secret" => "DTgYok4Pkb1eI7fmHKBmw4pOmyk" 
		// 	));
		// 	$result = \Cloudinary\Uploader::upload($filename, 
		// 		array("folder" => "menusfacil/", "overwrite" => TRUE, "width" => 800, "height" => 248, 'tags' => $tags));
		// 	$url = $result['url'];
			$menu = Menu::where('id', $request->input('id'))->update([
				'nombre' => $request->input('nombre'),
				'descripcion' => $request->input('descripcion'),
				'precio' => $request->input('precio'),
				'estado' => $request->input('estado'),
				'adicional' => $request->input('adicional'),
				'activo' => true,
				// 'imagen' => $url,
			]);
		return ['resp' => $menu];
    }

    public function delete($id){
    	$menu = Menu::find($id);
		// dd($producto);
		if($menu->delete()){
			return 'Producto Eliminado';
			// return $id;
		}

    }

    public function updateEstado(Request $request){
    	Menu::where('id', $request->input('id'))->update([
			'nombre' => $request->input('nombre'),
			'descripcion' => $request->input('descripcion'),
			'precio' => $request->input('precio'),
			'activo' => false,
			'estado' => false,
		]);
		return 'Se ha eliminado el Menu.';
    }


    public function pdf(){
    	$menus = Menu::all()->where('activo', 1)->where('user_id', \Auth::id());

    		$view =  \View::make('pdf.menuscreados', compact('menus'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Nombre_Personalizado_PDF');
    }

		public function historicomenus($url){
			$empresa = User::all()->where('url', $url);
	   	if(count($empresa)){
	   		$menus;
	   		foreach ($empresa as  $value) {
	   			$menus = User::find($value->id)->menus;
	   		}
			$pdf = PDF::loadView('pdf.historicomenus', compact('menus', 'empresa'));
			return $pdf->stream('Nombre_Personalizado_PDF.pdf');

	    }else{
	    	dd('Enviar una vista de publicidad si la empresa no existe..');
	    }
		}
}
