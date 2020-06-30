<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;

class RecordController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  allRecords () {

        $record = new Record;

        return view('home', ['data'=> $record->paginate(3)]);
    }

    public function  reductRecord ($id) {
        $record = new Record;

        return view('record', ['data'=> $record->find($id)]);
    }

    public function  reductRecordSubmit ($id, Request $req) {
        $record = Record::find($id);

        $record->record = $req->input('record');
        $record->save();

        session()->flash('message', 'Запись успешно изменена!');

        return redirect()->route('home', $id);
    }

    public function  deleteRecord ($id) {
        Record::find($id)->delete();

        session()->flash('message', 'Запись успешно удалена!');

        return redirect()->route('home');
    }
}
