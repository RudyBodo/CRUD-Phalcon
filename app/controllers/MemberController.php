<?php

class MemberController extends ControllerBase
{

  public function indexAction()
  {
    $member = Member::find();
    $this ->view ->data = $member;
  }

  public function addAction()
  {
    $member = new Member();
    $member ->name = $this ->request ->getPost("nama");
    $member ->address = $this ->request ->getPost("address");
    $member ->email = $this ->request ->getPost("email");
    $member ->phonenumber = $this ->request ->getPost("phonenumber");
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
