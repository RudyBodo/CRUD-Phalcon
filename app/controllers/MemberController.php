<?php

class MemberController extends ControllerBase
{

  public function indexAction()
  {

    $this->view->data = Member::find();
  }

  public function addAction()
  {

    $member = new Member();
    $member ->name = $this ->request ->getPost("Nama");
    $member ->address = $this ->request ->getPost("Address");
    $member ->email = $this ->request ->getPost("Email");
    $member ->phonenumber = $this ->request ->getPost("Phonenumber");
    if (!$member->save()) {
      echo "Data not save";
    }
    else {
      echo "Data Save";
    }
  }

  public function editAction()
  {

  }

  public function deleteAction()
  {

  }
}
