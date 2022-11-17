<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    // conhecido como action
    public function index(){

        $search = request('search');

        if($search)
        {
            $events = Event::where([
                ['title', 'like', '%'. $search.'%']
            ])->get();

        }else{
            // pega todos os eventos da tabela events 
            $events = Event::all();
        }
        

        return view('welcome', ["events" => $events,
                                "search" => $search]);

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
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        $mensagem_imagem_inexistente = "";
        // image Upload

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
       
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }else{
            $mensagem_imagem_inexistente = "Não foi possível carregar a imagem.";
        }


         $event->save();

         return redirect('/')->with('msg', "Evento criado com sucesso! ${mensagem_imagem_inexistente}");
    }

    public function show($id){
        $event = Event::findOrFail($id);
        // busca um registro no banco de dados apenas, o do id
        // caso não encontre, será retornado um error

        return view('events.show',["event" => $event]);
    }
}
