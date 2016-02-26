<?php

class MemberController extends ControllerBase {

    public function indexAction() {
    }

    public function createAction() {

        // we assume every post are there
        // otherwise it's error
        // or add validation later
        $post = $this->request->getPost();

        $member = new Member();

        if (!$member->create($post)) {
            $this->view->errors = [];
            foreach ($member->getMessages() as $err)
                array_push($this->view->errors, [
                    "field"     => $err->getField(),
                    "message"   => $err->getMessage()
                  ]);
        }

        $this->view->data = $member;
        $this->view->msg = "Success";
    }

    public function readAction() {

        // when query string "id" exist
        // means we read a single data
        // otherwise reading all data
        $id = $this->request->getQuery("id");
        if ($id) {
            $data = Member::findFirstById($id);
            $this->view->id = $id;
        } else {
            $data = Member::find();
        }

        // if no records found
        if (!$data) {
            $this->view->error = "Record Not Found";
            return;
        }

        $this->view->data = $data;
        $this->view->msg = "Success";

    }

    public function updateAction() {

        $id = $this->request->getQuery("id");
        if (!$id) {
            $this->view->error = "Id Required";
            return;
        }

        $member = Member::findFirstById($id);
        if (!$member) {
            $this->view->error = "Member Not Found";
            return;
        }

        $post = $this->request->getPost();
        if (!$member->update($post)) {
            $this->view->errors = [];
            foreach ($member->getMessage() as $err)
                array_push($this->view->errors, [
                    "field"     => $err->getField(),
                    "message"   => $err->getMessage(),
                    ]);
            return;
        }

        $this->view->data = $member;
        $this->view->msg = "Success";

    }

    public function deleteAction() {

        $id = $this->request->getQuery("id");
        if (!$id) {
            $this->view->error = "Id Required";
            return;
        }

        $member = Member::findFirstById($id);
        if (!$member) {
            $this->view->error = "Member Not Found";
            return;
        }

        $member->delete();

        $this->view->msg = "Success";
    }

}
