<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ShowPage extends Component
{
    public $pageId = null;

    public function mount($id){
        $this->pageId = $id;    


    }
    public function render()
    {
    // //    $page =  Page::where('id',$this->pageId)->first();
    // if($page == null){
    //     abort(404);

    //    }
     $page =  Page::findOrFail( $this->pageId );
       // dd($page);

       
        return view('livewire.show-page',[
            'page'=> $page
        ]);
    }
}
