<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    // conhecido como action
    public function index(){

        // pega todos os eventos da tabela events 
        $events = Event::all();

        return view('welcome', ["events" => $events]);

        // $nome = "Helberte";
        // $idade = 24;
        // $profissao = "Programador";
        // $estadoCivil = "Solteiro";

        // return view('welcome', ["nome" => $nome,
        //                     "idade" => $idade,
        //                     "profissao" => $profissao,
        //                     "estadoCivil" => $estadoCivil]);

        // passando dados para o template engine
        // para o html através da rota, usa-se um array nomeado

        // para imprimir esta variável lá no html usamos dois parenteses e o nome da variável

        // {{ $nome }}
    }

    public function create(){
        return view('events.create');
    }

    public function contatos(){
        $contacts = ["Helberte",
                        "Nicareli",
                        "Gabriela",
                        "Everdin",
                        "Fulano",
                        "Beltrano",
                        "Sicrano",
                        "Dizimano",
                        "Noventano",
                        "Almerano"];

        return view('contact', ["contatos" => $contacts]);
    }

    public function produtos(){
        return view('products');
    }

    public function store(Request $request){
         $event = new Event;

         $event->title = $request->title;
         $event->city = $request->city;
         $event->private = $request->private;
         $event->description = $request->description;

        // image Upload

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
       
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }


         $event->save();

         return redirect('/')->with('msg', "Evento criado com sucesso!");
    }
}
