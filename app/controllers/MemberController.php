<?php

class MemberController extends ControllerBase
{

  public function indexAction()
  {
    $member = Member::find();
    $this ->index ->data = $member;
  }

  public function addAction()
  {

  }

  public function editAction()
  {

  }

  public function deleteAction()
  {

  }
}
