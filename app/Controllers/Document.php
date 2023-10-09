<?php

namespace App\Controllers;

use App\Models\DocumentModel;

class Document extends BaseController
{
    public function index()
    {
        $document_model = new DocumentModel();

        $stringDocument = $this->request->getVar('document');
        $all_data_document = [];
        if ($stringDocument == "") {
            $all_data_document = $document_model->findAll(); //tanpa filter
        } else {
            $all_data_document = $document_model->where("document", $stringDocument)->findAll(); // pake filter
        }

        $data = [
            'title' => 'Document List',
            'all_data_document' => $all_data_document,
            'dataDocument' => $document_model->findAll()
        ];

        return view('MasterDataDocument/document', $data);

        // echo view('data_view', $all_data_agama);
    }

    public function add_data_document()
    {
        return view('MasterDataDocument/add_data_document');
    }


    public function proses_add_document()
    {

        $document_model = new DocumentModel();
        $data = [
            "document" => $this->request->getPost("document"),
        ];
        $document_model->insert($data);
        return redirect()->to('document');
    }

    public function edit_data_document($id = false)
    {
        $document_model = new DocumentModel();
        $data_document = $document_model->find($id);
        return view('MasterDataDocument/edit_data_document', ['data_document' => $data_document]);
    }

    public function proses_edit_document()
    {
        $document_model = new DocumentModel();
        $data = [
            "document" => $this->request->getPost("document"),
        ];
        $document_model->update($this->request->getPost('document'), $this->request->getPost());
        return redirect()->to('document');
    }

    public function delete_data_document($id = false)
    {
        $document_model = new DocumentModel();
        $document_model->delete($id);
        return redirect()->to(base_url('document'));
    }
}
